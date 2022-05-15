<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Container extends Component
{
    protected $listeners = ['changeDisplayEmit'];

    public $display;

    public function mount() {
        $this->display = 'overview';
    }

    public function changeDisplayEmit($display) {
        $this->display = $display;
    }
    
    public function render()
    {
        return view('livewire.dashboard.container');
    }
}
