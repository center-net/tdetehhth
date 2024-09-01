<?php

namespace App\Http\Admin\Treasurie;

use App\Models\Treasurie;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TreasurieEdit extends Component
{

    public $treasurie, $name, $is_master, $last_isal_exhcange, $last_isal_collect, $active;
    protected $listeners = ['EditModel'];

    public function EditModel($id)
    {
        $this->treasurie            = Treasurie::find($id);
        $this->name                 = $this->treasurie->name;
        $this->is_master            = $this->treasurie->is_master;
        $this->last_isal_exhcange   = $this->treasurie->last_isal_exhcange;
        $this->last_isal_collect    = $this->treasurie->last_isal_collect;
        $this->active               = $this->treasurie->active;
        $this->dispatch('EditModelToggle');
    }

    public function rules()
    {
        return[
                'name'                => 'required|string|unique:treasuries,name,' . $this->treasurie->id,
                'is_master'           => 'required|boolean',
                'last_isal_exhcange'  => 'required|digits:6',
                'last_isal_collect'   => 'required|digits:6',
                'active'              => 'required|boolean',
        ];
    }

    public function validationAttributes() 
    {
        return [
                    'last_isal_exhcange'=> 'اخر ايصال صرف',
                    'last_isal_collect' => 'اخر ايصال تحصيل',
                    'is_master'         => 'هل رئيسية',
                    'active'            => 'حالة التفعيل',
        ];
    }

    public function submit()
    {

        $data = $this->validate();
        $this->treasurie->update($data);
        $this->dispatch('EditModelToggle');
        $this->dispatch('refreshData')->to(TreasurieData::class);
    }
    
    public function render()
    {
        return view('admin.treasurie.treasurie-edit');
    }
}
