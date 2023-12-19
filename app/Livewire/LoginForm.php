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

            session()->put('jwt_token', $token);


            if(auth()->user()->role == 'admin'){
                return redirect()->to('/dashboard');

            }elseif (auth()->user()->role == 'voter'){
                return redirect()->to('/profile');
            }


        } else {
            session()->flash('error', 'Invalid credentials. Please try again.');
        }
    }


    public function render()
    {
        return view('livewire.login-form');
    }
}
