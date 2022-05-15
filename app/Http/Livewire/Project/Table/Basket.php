<?php

namespace App\Http\Livewire\Project\Table;

use Livewire\Component;

class Basket extends Component
{
    public $head, $body, $tahap, $basket, $can_create;

    public function mount($tahap, $basket) {
        $this->tahap = $tahap;
        $this->basket = $basket;
        
        $this->head = [
            'dummy',
            'header',
            'asw'
        ];

        $this->body = [
            [
                'Lol',
                'Lil',
                'Lul'
            ]
        ];

    }

    public function render()
    {
        return view('livewire.project.table.basket');
    }
}
