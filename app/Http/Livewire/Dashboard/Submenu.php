<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Submenu extends Component
{
    public $currentDisplay;

    public function mount() {
        $this->currentDisplay = 'overview';
    }

    public function changeDisplay($display) {
        $this->currentDisplay = $display;
        return $this->emit('changeDisplayEmit', $display);
    }

    public function render()
    {
        return view('livewire.dashboard.submenu');
    }
}
