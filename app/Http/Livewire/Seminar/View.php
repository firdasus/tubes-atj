<?php

namespace App\Http\Livewire\Seminar;

use Livewire\Component;
use App\Models\seminar\Event_Type;

class View extends Component
{
    public $tipe, $selectedType;
    public $selectorEnable = false;

    public function mount()
    {
        $this->tipe = Event_Type::all();
    }

    public function render()
    {
        return view('livewire.seminar.view');
    }

    public function type()
    {
        if ($this->selectedType == 3) {
            $this->selectorEnable = true;
        } else {
            $this->selectorEnable = false;
        }
    }
}
