<?php

namespace App\Http\Livewire\Dashboard\Subdisplay;

use App\Helpers\FormattingHelper;
use Livewire\Component;

class Statistic extends Component
{
    protected $listeners = ['changeDisplayEmit'];

    public $display;
    public $data; 

    public function mount() {
        $this->display = 'overview';

        $fhelper = new FormattingHelper;
        $fhelper->set_comma(1);
        $this->data = [
            'prk' => [
                'number' => $fhelper->humanizeNumber(12100),
                'percent' => $fhelper->humanizePercent(19.25)
            ],
        ];
    }

    public function changeDisplayEmit($display) {
        $this->display = $display;
    }

    public function render()
    {
        return view('livewire.dashboard.subdisplay.statistic');
    }
}
