<?php

namespace App\Livewire\Boards\Public;

use App\Models\Column;
use Livewire\Component;

class BoardColumn extends Component
{
    public Column $column;
    public function render()
    {
        return view('livewire.boards.public.board-column');
    }
}
