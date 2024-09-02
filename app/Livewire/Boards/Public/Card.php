<?php

namespace App\Livewire\Boards\Public;

use App\Models\Card as CardModel;
use Livewire\Component;

class Card extends Component
{
    public CardModel $card;   
    public function render()
    {
        return view('livewire.boards.public.card');
    }
}
