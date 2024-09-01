<?php

namespace App\Http\Admin\Treasurie;

use App\Models\Treasurie;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TreasurieAdd extends Component
{
    
    #[Validate([
        'treasurie.name'                => 'required|string|unique:treasuries,name',
        'treasurie.is_master'           => 'required|boolean',
        'treasurie.last_isal_exhcange'  => 'required|digits:6',
        'treasurie.last_isal_collect'   => 'required|digits:6',
        'treasurie.active'              => 'required|boolean',
        ], attribute: [
            'last_isal_exhcange'=> 'اخر ايصال صرف',
            'last_isal_collect' => 'اخر ايصال تحصيل',
            'is_master'         => 'هل رئيسية',
            'active'            => 'حالة التفعيل',
    ])]
    public $treasurie;

    public function mount()
    {
        $this->treasurie = new Treasurie();
    }

    public function submit()
    {
        // dd($this->treasurie);
        $this->validate();

        $this->treasurie->save();
        // $this->reset('treasurie');
        $this->reset([
            'treasurie.name',
            'treasurie.is_master',
            'treasurie.last_isal_exhcange',
            'treasurie.last_isal_collect',
            'treasurie.active',
        ]);
        $this->dispatch('AddModelToggle');
        $this->dispatch('refreshData')->to(TreasurieData::class);
    }
    
    public function render()
    {
        return view('admin.treasurie.treasurie-add');
    }
}
