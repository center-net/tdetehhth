<?php

namespace App\Http\Admin\Invoices\BillingCategories;

use App\Models\BillingCategorie;
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
        return view('admin.invoices.billing-categories.data',[
            'data'=> BillingCategorie::where('name','like','%'.$this->search.'%')->paginate(10),
        ]);
    }
}
