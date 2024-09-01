<?php

namespace App\Http\Admin\Invoices\BillingCategories;
use App\Models\BillingCategorie;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Add extends Component
{
    public $BillingCategorie, $name, $active;

    #[Validate([
        'name'                => 'required|string|unique:billing_categories,name',
        'active'              => 'required|boolean',
        ], attribute: [
            'active'            => 'حالة التفعيل',
    ])]

    public function mount()
    {
        $this->BillingCategorie = new BillingCategorie();
    }

    public function submit()
    {
        $data = $this->validate();

        $this->BillingCategorie::create($data);

        $this->reset([
            'name',
            'active',
        ]);
        $this->dispatch('AddModelToggle');
        $this->dispatch('refreshData')->to(Data::class);
    }
    
    public function render()
    {
        return view('admin.invoices.billing-categories.add');
    }
}
