<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterForm extends Component
{
    use WithFileUploads;
    public $firstname;
    public $midname;
    public $surname;
    public $email;
    public $voteNumber;
    public $profilePic;
    public $course;
    public $regNo;
    public $phoneNumber;
    public $yearOfStudy;
    public $password;
    public $confirmPassword;
    public $path;

    public function register(){
        $validated = $this->validate([
            'firstname'=>'required|max:30',
            'midname'=>'required|max:30',
            'surname'=>'required|max:30',
            'phoneNumber'=>'required|min:10|max:10',
            'regNo'=>'required|min:13|max:13',
            'password'=>'required:min:8',
            'email'=>'required|email|unique:users|max:109',
            'voteNumber'=>'required|min:8|max:8',
            'profilePic'=>'nullable|file|mimes:png,jpeg,jpg|max:2048',
            'course'=>'required',
            'yearOfStudy'=>'required',
            'confirmPassword'=>'required|same:password'
        ]);

        if($this->profilePic){
            $this->path = $this->profilePic->store('userProfilePics');
        }else{
            $this->path = '';
        }


        User::create([
            'firstname'=>$this->firstname,
            'midname'=>$this->midname,
            'surname'=>$this->surname,
            'password'=>Hash::make($this->password),
            'email'=>$this->email,
            'regNo'=>$this->regNo,
            'phoneNumber'=>$this->phoneNumber,
            'voteNumber'=>$this->voteNumber,
            'photoUrl'=>$this->path,
            'course'=>$this->course,
            'yearOfStudy'=>$this->yearOfStudy,
        ]);


        $this->reset('firstname','midname','phoneNumber','regNo','surname','profilePic','password','confirmPassword','email','voteNumber','course','yearOfStudy');
        session()->flash('success','Successfully registered');

    }
    public function render()
    {
        return view('livewire.register-form');
    }
}
