<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{

    public $search;

    public $open = false;

    public function updatedSearch($value){
        if ($value) {
            $this->open = true;
        }else{
            $this->open = false;
        }
    }

    public function render()
    {

        //Tv de 32" Full HD

        if ($this->search) {
            $products = Product::where('name', 'LIKE' ,'%' . $this->search . '%')
                                ->where('status', 2)
                                ->take(8)
                                ->get();
        } else {
            $products = [];
        }
        
        return view('livewire.search', compact('products'));
    }
}
