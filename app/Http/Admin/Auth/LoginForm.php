<?php

namespace App\Http\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LoginForm extends Component
{
    #[Validate('required|string|min:5')]
    public $username;
    #[Validate('required|string|min:6')]
    public $password;
    #[Validate('nullable')]
    public $remember;

    public function login()
    {
        $this->validate();
        if(!Auth::attempt(['username'=>$this->username,
        'password'=>$this->password],$this->remember)){
            throw ValidationException::withMessages([
                'username' => trans('auth.failed'),
            ]);
        }
        return to_route('admin.index');
    }
    public function render()
    {
        return view('admin.auth.login-form');
    }
}
