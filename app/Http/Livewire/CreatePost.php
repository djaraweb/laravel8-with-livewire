<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
    public $open = false;
    public $title, $content;

    public function render()
    {
        return view('livewire.create-post');
    }

    public function savePost(){
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'course_id'=> 1
        ]);

        $this->reset(['open','title','content']);
        $this->emitTo('show-posts','loadPostGrid');
        //$this->emit('loadPostGrid'); // emite el evento de forma globlal
        $this->emit('showAlert','El Post se creo satisfactoriamente.');
    }
}
