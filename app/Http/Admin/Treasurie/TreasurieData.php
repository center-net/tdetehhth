<?php

namespace App\Http\Admin\Treasurie;

use App\Models\Treasurie;
use Livewire\Component;
use Livewire\WithPagination;

class TreasurieData extends Component
{
    use WithPagination;
    public $search;

    protected $listeners = ['refreshData' => '$refresh'];
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        return view('admin.treasurie.treasurie-data',[
            'data'=> Treasurie::where('name','like','%'.$this->search.'%')->paginate(10),
        ]);
    }
}
