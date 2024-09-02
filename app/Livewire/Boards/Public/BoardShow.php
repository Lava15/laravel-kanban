<?php

namespace App\Livewire\Boards\Public;

use App\Models\Board;
use App\Models\Column;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Renderless;

class BoardShow extends Component
{
    #[Locked]
    #[Renderless]
    public Board $board;

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
            $query->where('user_id' , auth()->id());
        });
    }
    public function render()
    {
        return view('livewire.boards.public.board-show',[
            'columns' => $this->board->columns()->ordered()->get(),
        ]);
    }
}
