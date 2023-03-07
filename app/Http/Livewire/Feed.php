<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Feed extends Component
{
    public $postText;
    public $posts;

    public function mount() {
        $this->posts = Post::all();
    }

    public function addPost() {
        $this->validate(['postText' => ['required', 'max:20']]);
        $post = Post::create(['user_id'=> 1, 'text'=> $this->postText]);
        $this->posts->push($post);
        $this->postText = '';
    }

    public function render()
    {
        return view('livewire.feed');
    }
}
