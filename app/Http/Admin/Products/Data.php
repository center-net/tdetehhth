<?php

namespace App\Http\Admin\Products;

use App\Models\Product;
use Livewire\Component;

class Data extends Component
{
    public $search;

    protected $listeners = ['refreshData' => '$refresh'];
    
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('admin.products.data',[
            'data'=> Product::where('name','like','%'.$this->search.'%')->paginate(10),
        ]);
    }
}
