<?php

namespace App\Http\Livewire\Predefense;

use Livewire\Component;
use App\Models\Predefense\Event_Type;

class View extends Component
{
    public $tipe;
    public function mount()
    {
        $this->tipe=Event_Type::all();
    }
    public function render()
    {
      
        return view('livewire.predefense.view');
    }
}
