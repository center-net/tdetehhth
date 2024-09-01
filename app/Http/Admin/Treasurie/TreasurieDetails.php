<?php

namespace App\Http\Admin\Treasurie;

use App\Models\Treasurie;
use Livewire\Component;

class TreasurieDetails extends Component
{

    
    public $id;
    public $data;

    public function mount($id)
    {
        $this->id = $id;
        $this->data = Treasurie::find($id);
    }

    public function render()
    {
        return view('admin.treasurie.treasurie-details');
    }
}
