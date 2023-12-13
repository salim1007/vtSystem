<?php

namespace App\Livewire\UserPages;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserProfile extends Component
{
    use WithFileUploads;
    public $profilePicture;
    public $showModal = false;
    public $showDropdown = false;
    public $showMenu=false;

    public $email;
    public $phoneNumber;
    public $profilePhoto;

    public $description;


    public function openNotification(){
        $this->showDropdown = !$this->showDropdown;
    }
    public function toggleMenu(){
        $this->showMenu = !$this->showMenu;
    }
    public function closeNotification(){
        $this->showDropdown = !$this->showDropdown;
    }
    public function openModal(){
        $this->showModal = !$this->showModal;
    }
    public function closeModal(){
        $this->showModal = !$this->showModal;
        $this->reset('email','phoneNumber','profilePhoto','description');
    }
    public function logout(){
        Auth::logout();

        session()->forget('jwt_token');

        return redirect()->to('/login');


    }

    public function editProfile(){
        $validated = $this->validate([
            'email'=>'nullable|email|max:109|unique:users',
            'phoneNumber'=>'nullable|min:10|max:10',
            'profilePhoto'=>'nullable|file|mimes:png,jpeg,jpg|max:2048',
            'description'=>'nullable|max:109'
        ]);
        if($this->phoneNumber){
            $phone = $this->phoneNumber;
        }else{
            $phone = auth()->user()->phoneNumber;
        }
        if($this->email){
            $emailAddress = $this->email;
        }else{
            $emailAddress = auth()->user()->email;
        }
        if($this->profilePhoto){
            $path = $this->profilePhoto->store('userImages','public');
        }else{
            $path = auth()->user()->photoUrl;
        }

        if($this->description){
            $descrptn = $this->description;
        }else{
            $descrptn = auth()->user()->description;
        }

        $user = Auth::user();

        $user->update([
            'email'=>$emailAddress,
            'phoneNumber'=>$phone,
            'photoUrl'=>$path,
            'description'=>$descrptn
        ]);

        $this->reset('email','phoneNumber','profilePhoto','description');

        session()->flash('success', 'Information updated Successfully');
    }

    public function render()
    {
        $this->profilePicture = auth()->user()->photoUrl;
        return view('livewire.user-pages.user-profile');
    }
}
