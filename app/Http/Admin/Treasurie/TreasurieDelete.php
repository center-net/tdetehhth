<?php

namespace App\Http\Admin\Treasurie;

use App\Models\Treasurie;
use Livewire\Component;

class TreasurieDelete extends Component
{

    public $treasurie, $name;
    protected $listeners = ['DeleteModel'];

    public function DeleteModel($id)
    {
        $this->treasurie = Treasurie::find($id);
        $this->name = $this->treasurie->name;
        $this->dispatch('DeleteModelToggle');
    }

    public function submit()
    {

        $this->treasurie->delete();
        $this->reset('treasurie');
        $this->dispatch('DeleteModelToggle');
        $this->dispatch('refreshData')->to(TreasurieData::class);
    }
    
    public function render()
    {
        return view('admin.treasurie.treasurie-delete');
    }
}
