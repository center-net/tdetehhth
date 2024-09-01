<?php

namespace App\Http\Admin\Invoices\BillingCategories;

use App\Models\BillingCategorie;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Edit extends Component
{

    public $BillingCategorie, $name, $active;

    protected $listeners = ['EditModel'];

    public function EditModel($id)
    {
        $this->BillingCategorie            = BillingCategorie::find($id);
        $this->name                 = $this->BillingCategorie->name;
        $this->active               = $this->BillingCategorie->active;
        $this->dispatch('EditModelToggle');
    }

    public function rules()
    {
        return[
                'name'                => 'required|string|unique:billing_categories,name,' . $this->BillingCategorie->id,
                'active'              => 'required|boolean',
        ];
    }

    public function validationAttributes() 
    {
        return [
                    'active'            => 'حالة التفعيل',
        ];
    }

    public function submit()
    {

        $data = $this->validate();
        $this->BillingCategorie->update($data);
        $this->dispatch('EditModelToggle');
        $this->dispatch('refreshData')->to(Data::class);
    }
    
    public function render()
    {
        return view('admin.invoices.billing-categories.edit');
    }
}
