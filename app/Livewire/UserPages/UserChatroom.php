<?php

namespace App\Livewire\UserPages;

use App\Models\Chat;
use App\Models\User;
use Livewire\Component;

class UserChatroom extends Component
{
    public $user_chat;
    public $openDetails = false;

    public function viewDetails($chatId){
        if (isset($this->openDetails[$chatId])) {
            $this->openDetails[$chatId] = !$this->openDetails[$chatId];
        } else {
            $this->openDetails[$chatId] = true;
        }
    }
    public function closeDetails(){
        $this->openDetails = false;
    }
    public function deleteChat($chat_id){
        $chat = Chat::find($chat_id);
        $chat->delete();
    }
    public function sendMessage(){
        $validated = $this->validate([
            'user_chat' => 'required'
        ]);

        $user = User::where('regNo', auth()->user()->regNo)->first();

        Chat::create([
            'user_chat' => $this->user_chat,
            'user_reg_no' => auth()->user()->regNo,
            'user_photo_url' =>$user->photoUrl,
        ]);

        $this->reset('user_chat');

    }
    public function render()
    {

        $chats = Chat::orderBy('created_at', 'ASC')->get();
        return view('livewire.user-pages.user-chatroom',[
            'chats' => $chats
        ]);
    }
}
