<?php

namespace App\Livewire;

use Livewire\Component;

class DynamicView extends Component
{
    public $showModal = false;
    public $showDropdown = false;
    public $showMenu=false;
    public $showProfile=true;
    public $showCandidates =false;
    public $showHowTo =false;
    public $showVote =false;
    public $showChatRoom =false;
    public $showResults =false;
    public $showSuggestions =false;
    public $showAbout =false;

    public function gotoProfile(){
        $this->showProfile = true;
        $this->showCandidates = false;
        $this->showChatRoom = false;
        $this->showResults = false;
        $this->showAbout = false;
        $this->showSuggestions = false;
        $this->showVote = false;
        $this->showHowTo = false;
    }
    public function gotoCandidates(){
        $this->showCandidates = true;
        $this->showProfile = false;
        $this->showChatRoom = false;
        $this->showResults = false;
        $this->showAbout = false;
        $this->showSuggestions = false;
        $this->showVote = false;
        $this->showHowTo = false;
    }
    public function gotoHowTo(){
        $this->showCandidates = false;
        $this->showProfile = false;
        $this->showChatRoom = false;
        $this->showResults = false;
        $this->showAbout = false;
        $this->showSuggestions = false;
        $this->showVote = false;
        $this->showHowTo = true;
    }
    public function gotoVote(){
        $this->showCandidates = false;
        $this->showProfile = false;
        $this->showChatRoom = false;
        $this->showResults = false;
        $this->showAbout = false;
        $this->showSuggestions = false;
        $this->showVote = true;
        $this->showHowTo = false;
    }
    public function gotoChatRoom(){
        $this->showCandidates = false;
        $this->showProfile = false;
        $this->showChatRoom = true;
        $this->showResults = false;
        $this->showAbout = false;
        $this->showSuggestions = false;
        $this->showVote = false;
        $this->showHowTo = false;
    }
    public function gotoResults(){
        $this->showCandidates = false;
        $this->showProfile = false;
        $this->showChatRoom = false;
        $this->showResults = true;
        $this->showAbout = false;
        $this->showSuggestions = false;
        $this->showVote = false;
        $this->showHowTo = false;
    }
    public function gotoSuggestions(){
        $this->showCandidates = false;
        $this->showProfile = false;
        $this->showChatRoom = false;
        $this->showResults = false;
        $this->showAbout = false;
        $this->showSuggestions = true;
        $this->showVote = false;
        $this->showHowTo = false;
    }
    public function gotoAbout(){
        $this->showCandidates = false;
        $this->showProfile = false;
        $this->showChatRoom = false;
        $this->showResults = false;
        $this->showAbout = true;
        $this->showSuggestions = false;
        $this->showVote = false;
        $this->showHowTo = false;
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
    }

    public function render()
    {

        return view('livewire.dynamic-view');
    }
}
