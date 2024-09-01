<?php

namespace App\Http\Admin\GeneralSetting;

use App\Models\GeneralSetting;
use Livewire\Component;

class Show extends Component
{

    public $generalsetting;

    protected $listeners = ['refreshData' => '$refresh'];
    
    public function mount()
    {
        $this->generalsetting = GeneralSetting::find(1);
    }

    public function render()
    {
        return view('admin.general-setting.show');
    }
}
