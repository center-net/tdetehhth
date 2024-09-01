<?php

namespace App\Http\Admin\Invoices\ItemCategories;

use App\Models\BillingCategorie;
use App\Models\ItemCategorie;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Add extends Component
{
    public $ItemCategorie, $is_master = 0, $name, $active, $IsMaster, $billing_categories_id;

    #[Validate([
        'name'                => 'required|string|unique:item_categories,name',
        'active'              => 'required|boolean',
        'is_master'           =>  '',
        'billing_categories_id'           =>  'required',
        ], attribute: [
            'active'            => 'حالة التفعيل',
    ])]

    public function mount()
    {
        $this->ItemCategorie = new ItemCategorie();
    }

    public function submit()
    {

        $data = $this->validate();
        
        // dd($data);
        $this->ItemCategorie::create($data);

        $this->reset([
            'name',
            'is_master',
            'active',
            'IsMaster',
            'billing_categories_id',
        ]);
        $this->dispatch('AddModelToggle');
        $this->dispatch('refreshData')->to(Data::class);
    }


    public function render()
    {
        return view('admin.invoices.item-categories.add',[
            'mains'=> BillingCategorie::where('active','1')->get(),
        ]);
    }
}
