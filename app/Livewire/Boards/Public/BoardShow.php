<?php

namespace App\Livewire\Boards\Public;

use App\Models\Board;
use Livewire\Component;

class BoardShow extends Component
{
    public Board $board;

    public function mount()
    {
        $this->board = Board::query()->first();
    }
    public function render()
    {
        return view('livewire.boards.public.board-show');
    }
}
