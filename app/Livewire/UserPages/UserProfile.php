<?php

namespace App\Livewire\UserPages;

use App\Models\User;
use Carbon\Carbon;
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

    public $date_is_in_btn = false;

    public function mount()
    {
        if(DB::table('election_dates')->exists()){
            $election = DB::table('election_dates')->first();
            $start_date = Carbon::parse($election->start_date);
            $end_date = Carbon::parse($election->end_date);
            $now = Carbon::now();

            $date_is_in_btn = $now->between($start_date, $end_date);


            if($date_is_in_btn){
                $this->date_is_in_btn = true;
                $remainingTime = $end_date->diffInSeconds($now);
                echo "
            <script>
            var countDownDate = new Date().getTime() + {$remainingTime} * 1000;

            var x = setInterval(function() {
                var now = new Date().getTime();
                var distance = countDownDate - now;

                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById('countdown').innerHTML = days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's ';

                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById('countdown').innerHTML = 'Voting Process is Closed';
                }
            }, 1000);
            </script>
            ";
            } else {
                $this->date_is_in_btn = false;
            }
        } else {
            dd('No dates have been submitted yet!');
        }
    }


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
