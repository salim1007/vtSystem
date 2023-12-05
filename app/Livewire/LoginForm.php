<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Tymon\JWTAuth\Facades\JWTAuth;

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
            $user = Auth::user(); // Get the authenticated user
            $token = JWTAuth::fromUser($user); // Generate JWT token for the user

            // You can then store this token in the session or return it to the client as needed
            // For example, to store it in the session:
            session()->put('jwt_token', $token);

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
