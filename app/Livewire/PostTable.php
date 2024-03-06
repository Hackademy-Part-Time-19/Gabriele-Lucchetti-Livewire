<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;

class PostTable extends Component
{
    public $posts;

    public function mount(){
        $this->posts = Post::all();
    }
    public function render()
    {
        return view('livewire.post-table');
    }

    #[On('store')]
    public function updatePosts(){
        $this->posts=Post::all();
    }

    public function delete(){
        Post::destroy($this->post->id);
        session()->flash('success', 'Post eliminato correttamente');
    }
}
