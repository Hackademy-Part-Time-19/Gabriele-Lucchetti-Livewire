<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class SearchPosts extends Component
{
    public $posts;

    public $search="";
    public function render()
    {
        $this->posts= Post::where('title','like', '%'. $this->search .'%' )->get();
        return view('livewire.search-posts', ['posts' => $this->posts]);
    }
}
