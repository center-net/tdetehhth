<?php

namespace App\Http\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{

    public function logout()
    {
        Auth::guard('web')->logout();

        session()->invalidate();

        session()->regenerateToken();

        return to_route('login');
    }

    public function render()
    {
        return view('admin.auth.logout');
    }
}
