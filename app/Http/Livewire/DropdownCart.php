<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DropdownCart extends Component
{

    protected $listeners = ['render'];

    public function render()
    {
        return view('livewire.dropdown-cart');
    }
}
