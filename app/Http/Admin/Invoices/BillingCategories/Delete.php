<?php

namespace App\Http\Admin\Invoices\BillingCategories;

use App\Models\BillingCategorie;
use Livewire\Component;

class Delete extends Component
{

    public $BillingCategorie, $name;
    protected $listeners = ['DeleteModel'];

    public function DeleteModel($id)
    {
        $this->BillingCategorie = BillingCategorie::find($id);
        $this->name = $this->BillingCategorie->name;
        $this->dispatch('DeleteModelToggle');
    }

    public function submit()
    {

        $this->BillingCategorie->delete();
        $this->reset('BillingCategorie');
        $this->dispatch('DeleteModelToggle');
        $this->dispatch('refreshData')->to(Data::class);
    }


    public function render()
    {
        return view('admin.invoices.billing-categories.delete');
    }
}
