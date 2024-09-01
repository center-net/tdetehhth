<?php

namespace App\Http\Admin\Treasurie;

use App\Models\Treasurie;
use Livewire\Component;

class SubTreasuries extends Component
{

    public $treasuries;

    protected $listeners = ['AddTreasurieModel'];

    public function AddTreasurieModel()
    {
        $this->dispatch('AddTreasurieModelToggle');
    }

    public function mount()
    {

        $this->treasuries = Treasurie::where('is_master', '0')
                                       ->where('active', '1')
                                       ->get();
    }



    public function render()
    {
        return view('admin.treasurie.sub-treasuries');
    }
}
