<?php

namespace App\Http\Livewire\Atj\News;

use Livewire\Component;

class Idx extends Component
{
    public function render()
    {
        return view('livewire.atj.news.idx');
    }
    public function addNews(){
        dd('here');
    }
}
