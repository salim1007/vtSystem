<?php

namespace App\Livewire\AdminPages;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class AdminPostCreator extends Component
{
    use WithPagination;
    public $post_title;
    public $search;
    public $post_description;
    public $editingPostID;
    public $showEditTab = false;
    public function createPost(){
        $validated = $this->validate([
            'post_title'=>'required|string',
            'post_description'=>'required'
        ]);

        $post = Post::latest()->first();

        if ($post){
            $code = $post->post_code + 3;
            $post_code = str_pad($code, 4,0,STR_PAD_LEFT);

        }else{
            $code = 0;
            $code = $code + 3;
            $post_code = str_pad($code, 4,0,STR_PAD_LEFT);

        }

        Post::create([
            'post_title'=>$this->post_title,
            'description'=>$this->post_description,
            'post_code'=>$post_code,
        ]);

        $this->reset('post_title','post_description');
        session()->flash('success_post','Post created Successfully!');

    }
    public function closeMessage()
    {
        session()->flash('success_post', null);

    }
    public function editPost($postId){
        $post = Post::where('id', $postId)->first();
        $this->post_title = $post->post_title;
        $this->post_description = $post->description;

        $this->editingPostID = $postId;

        $this->showEditTab = true;

    }

    public function updatePost($id){
        $validated = $this->validate([
            'post_title'=>'required|string',
            'post_description'=>'required'
        ]);

        $post = Post::find($id);
        $post->update([
            'post_title'=>$this->post_title,
            'description'=>$this->post_description,
            'post_code'=>$post->post_code
        ]);

        $this->reset('post_title','post_description');
        session()->flash('success_post','Post Updated Successfully');

        $this->showEditTab = false;



    }

    public function logout(){
        Auth::logout();

        session()->forget('jwt_token');

        return redirect()->to('/login');


    }
    public function render()
    {
        $posts = Post::latest()->where('post_title','like',"%{$this->search}%")->paginate(10);
        return view('livewire.admin-pages.admin-post-creator',[
            'posts'=>$posts
        ]);
    }
}
