<?php

namespace App\Http\Livewire\Predefense;

use Livewire\Component;
use App\Models\Upcoming\Event;

class Data extends Component
{
    public $events,$event;  
    public function mount()
    {
        $this->events=Event::all();
    }
    public function render()
    {
        return view('livewire.predefense.data');
    }
}
