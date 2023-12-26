<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginForm extends Component
{
    #[Rule('required')]
    public $email;
    #[Rule('required')]
    public $password;
    public $auth_user_token;



    public function login()
    {
        $validated = $this->validate();

        if (Auth::attempt($validated)) {
            // Authentication passed...
            $user = Auth::user(); // Get the authenticated user
            $token = JWTAuth::fromUser($user); // Generate JWT token for the user

            if(auth()->user()->role == 'admin'){
                session()->put('jwt_token', $token);
                return redirect()->to('/dashboard');

            }elseif (auth()->user()->role == 'voter'){
                session()->put('jwt_token', $token);
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
