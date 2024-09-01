<?php

namespace App\Http\Admin\Invoices\ItemCategories;

use App\Models\ItemCategorie;
use Livewire\Component;

class Data extends Component
{
    public $search;

    protected $listeners = ['refreshData' => '$refresh'];
    
    public function render()
    {
        return view('admin.invoices.item-categories.data',[
            'data'=> ItemCategorie::where('name','like','%'.$this->search.'%')->paginate(10),
            'mains'=> ItemCategorie::where('is_master','1')->get(),
        ]);
    }
}
