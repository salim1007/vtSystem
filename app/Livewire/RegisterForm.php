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
    public $username;
    public $college;
    public $email;
    public $voteNumber;
    public $profilePic;
    public $programme;
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
            'regNo'=>'required|string|min:13|max:13',
            'password'=>'required:min:8',
            'username'=>'required|max:20',
            'email'=>'required|email|unique:users|max:109',
            'voteNumber'=>'required|min:8|max:8',
            'profilePic'=>'nullable|file|mimes:png,jpeg,jpg|max:2048',
            'programme'=>'required',
            'college'=>'required',
            'yearOfStudy'=>'required',
            'confirmPassword'=>'required|same:password'
        ]);

        if($this->profilePic){
            $this->path = $this->profilePic->store('userImages','public');
        }else{
            $this->path = '';
        }


        User::create([
            'firstname'=>$this->firstname,
            'midname'=>$this->midname,
            'surname'=>$this->surname,
            'username'=>$this->username,
            'college'=>$this->college,
            'password'=>Hash::make($this->password),
            'email'=>$this->email,
            'regNo'=>$this->regNo,
            'phoneNumber'=>$this->phoneNumber,
            'voteNumber'=>$this->voteNumber,
            'photoUrl'=>$this->path,
            'programme'=>$this->programme,
            'yearOfStudy'=>$this->yearOfStudy,
        ]);


        $this->reset('firstname','midname','phoneNumber','username','college','regNo','surname','profilePic','password','confirmPassword','email','voteNumber','programme','yearOfStudy');
        session()->flash('success','Successfully registered');

    }
    public function render()
    {
        return view('livewire.register-form');
    }
}
