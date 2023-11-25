<?php

namespace App\Livewire\UserPages;

use Livewire\Component;

class UserProfile extends Component
{
    public $showModal = false;
    public $showDropdown = false;
    public $showMenu=false;

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
        return view('livewire.user-pages.user-profile');
    }
}
