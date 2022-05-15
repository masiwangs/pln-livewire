<?php

namespace App\Http\Livewire\Project\Form;

use App\Models\Prk;
use Illuminate\Http\Request;
use Livewire\Component;

class PrkCreate extends Component
{
    public $name, $prk_number, $lot, $priority, $basket, $prk;

    public function mount(Request $request, Prk $prk = null) {
        $this->priority = 0;
        
        if(isset($request->basket)) {
            $this->basket = $request->basket;
        }

        if($prk) {
            $this->name = $prk->name;
            $this->prk_number = $prk->prk_number;
            $this->lot = $prk->lot;
            $this->priority = $prk->priority;
            $this->basket = $prk->basket;
        }
    }

    public function updated() {
        $this->save();
    }

    public function save() {
        $data = [
            'name' => $this->name,
            'prk_number' => $this->prk_number,
            'lot' => $this->lot,
            'priority' => $this->priority,
            'basket' => $this->basket
        ];
        
        if(!$prk) {
            $this->prk = Prk::create($data);
        } else {
            $this->prk->update($data);
        }
    }
    
    public function render()
    {
        return view('livewire.project.form.prk-create');
    }
}
