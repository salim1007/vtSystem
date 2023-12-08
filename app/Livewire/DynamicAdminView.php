<?php

namespace App\Livewire;

use Livewire\Component;

class DynamicAdminView extends Component
{
    public $showDashboard = true;
    public $showPosts = false;
    public $showAddCand = false;
    public $showCandList = false;
    public $showProgress = false;
    public $showMailbox = false;

    public function gotoDashboard(){
        $this->showCandList = false;
        $this->showDashboard = true;
        $this->showMailbox = false;
        $this->showPosts = false;
        $this->showAddCand = false;
        $this->showProgress = false;
    }

    public function gotoPosts(){
        $this->showCandList = false;
        $this->showDashboard = false;
        $this->showMailbox = false;
        $this->showPosts = true;
        $this->showAddCand = false;
        $this->showProgress = false;


    }

    public function gotoAddCand(){
        $this->showCandList = false;
        $this->showDashboard = false;
        $this->showMailbox = false;
        $this->showPosts = false;
        $this->showAddCand = true;
        $this->showProgress = false;

    }

    public function gotoCandList(){
        $this->showCandList = true;
        $this->showDashboard = false;
        $this->showMailbox = false;
        $this->showPosts = false;
        $this->showAddCand = false;
        $this->showProgress = false;

    }

    public function gotoProgress(){
        $this->showCandList = false;
        $this->showDashboard = false;
        $this->showMailbox = false;
        $this->showPosts = false;
        $this->showAddCand = false;
        $this->showProgress = true;


    }

    public function gotoMailbox(){
        $this->showCandList = false;
        $this->showDashboard = false;
        $this->showMailbox = true;
        $this->showPosts = false;
        $this->showAddCand = false;
        $this->showProgress = false;

    }

    public function render()
    {
        return view('livewire.dynamic-admin-view');
    }
}
