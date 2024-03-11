<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Navigation extends Component
{
public $name= 'Code with Adérito';

    public function render()
    {
        return view('livewire.auth.navigation');
    }
}
