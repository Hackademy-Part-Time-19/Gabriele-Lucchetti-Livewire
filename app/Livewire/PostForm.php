<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Component;

class PostForm extends Component
{
    #[Validate('required', as:'Titolo', message:"Questo campo e' richiesto")]
    #[Validate('max:50', as:'Titolo', message:"Questo campo non puo' essere piu' lungo di 50 caratteri")]
    public $title;
    
    #[Validate('required', as:'Corpo', message:"Questo campo e' richiesto")]
    #[Validate('min:30', as:'Corpo', message:"Questo campo non puo' essere piu' corto di 30 caratteri")]
    public $body;

    #[Validate('required', as:'Autore', message:"Questo campo e' richiesto")]
    #[Validate('max:50', as:'Autore', message:"Questo campo non puo' essere piu' lungo di 50 caratteri")]

    public $author;

    
    public function store(){
        $this->validate();
        $data=["title"=>$this->title,"body"=>$this->body,"author"=>$this->author];
       
        Post::create($data);

        session()->flash('success', 'Post creato correttamente');

        $this->resetPost();
        $this->dispatch('store');
    }

    public function resetPost(){
        $this->reset();

        
    }

   
    
    public function render()
    {
        return view('livewire.post-form');
    }
}
