<?php

namespace App\Livewire\Boards\Public;

use App\Livewire\Forms\CreateColumn;
use App\Models\Card;
use App\Models\Board;
use App\Models\Column;
use Livewire\Component;
use Livewire\Attributes\Locked;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Renderless;
use Illuminate\Database\Eloquent\Builder;

class BoardShow extends Component
{
    #[Locked]
    #[Renderless]
    public Board $board;
    public CreateColumn $createColumnForm;
    
    /**
     * It sets the board property to the first board in the database.
     */
    public function mount()
    {
        $this->board = Board::query()->first();
    }
    /**
     * Called when the order of the columns changes.
     *
     * @param array $items An array of objects with a 'value' key, representing the order of the columns.
     */
    public function sorted(array $items)
    {
        $order = collect($items)->pluck('value')->toArray();
        Column::setNewOrder($order, 1, 'id', function (Builder $query) {
            $query->whereBelongsTo(auth()->user());
        });
    }
    public function moved(array $items): void
    {
        collect($items)->recursive()->each(function ($column) {
            $columnId = $column->get('value');
            $order = $column->get('items')->pluck('value')->toArray();
            $cards = Card::query()->where('user_id', auth()->id())
            ->find($order)
            ->where('column_id','!=', $columnId)
            ->each->update([
                'column_id' => $columnId
            ]);
            Log::info($cards);
            Card::setNewOrder($order, 1, 'id', function (Builder $query) {
                $query->where('user_id' , auth()->id());     
            });
        });
    }
    public function createColumn(): void 
    {
        $this->createColumnForm->validate();    
        $column = $this->board->columns()->make($this->createColumnForm->only('title')); 
        $column->user()->associate(auth()->user());
        $column->save();
        
        $this->createColumnForm->reset();
        $this->dispatch('column-created');
    }
    public function render()
    {
        return view('livewire.boards.public.board-show',[
            'columns' => $this->board->columns()->ordered()->get(),
        ]);
    }
}
