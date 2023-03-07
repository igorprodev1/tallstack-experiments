<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public string $email;
    public string $password;

    public $rules = [
        'email' => ['required', 'string', 'email'],
        'password' => ['required', 'string', 'min:8', 'max:20'],
    ];

    public function submit() {
        $creds = $this->validate();

        if (Auth::attempt($creds)){
            session()->regenerate();
            return redirect()->intended('/settings');
        }
        
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
