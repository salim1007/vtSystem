<?php

namespace App\Livewire\UserPages;

use App\Models\Mail;
use Livewire\Component;

class UserMailbox extends Component
{
    public $mail_body;
    public function sendResponse(){
        $validated = $this->validate([
            'mail_body' => 'required'
        ]);

        Mail::create([
            'mail_body' => $this->mail_body,
            'sender_reg_no' => auth()->user()->regNo
        ]);

        session()->flash('success','Message sent successfully!');
        sleep(2);

        $this->reset('mail_body');

    }
    public function render()
    {
        return view('livewire.user-pages.user-mailbox');
    }
}
