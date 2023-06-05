<?php

namespace App\Http\Livewire\Wardana;

use Livewire\Component;
use App\Models\User;
use App\Models\Arsys\Student;

class Index extends Component
{
    // public $user;
    
    public function mount()
    {
        $this->user = user::find(6); // ganti 1 dengan id user yang ingin ditampilkan
    }
    public function render()
    {
        return view('livewire.wardana.index')->layout('adminlte::page');
    }
}
