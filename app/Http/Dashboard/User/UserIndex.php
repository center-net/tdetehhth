<?php

namespace App\Http\Dashboard\User;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    
    public function render()
    {
        return view('dashboard.user.user-index',[
            'users'=> User::get(),
        ]);
    }
}
