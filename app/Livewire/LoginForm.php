<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class LoginForm extends Component
{
    #[Rule('required')]
    public $email;
    #[Rule('required')]
    public $password;

    public function login()
    {
        $validated = $this->validate();

        if (Auth::attempt($validated)) {
            // Authentication passed...
            return redirect()->to('/register'); // Replace with your intended post-login route
        } else {
            session()->flash('error', 'Invalid credentials. Please try again.');
        }
    }

    public function render()
    {
        return view('livewire.login-form');
    }
}
