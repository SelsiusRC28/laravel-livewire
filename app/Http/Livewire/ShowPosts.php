<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public $search;
    public $sort = 'id';
    public $direction = 'desc';

    public function render()
    {

        $posts = Post::where('title', 'like', '%'.$this->search.'%')->orderBy($this->sort, $this->direction)->get();

        return view('livewire.show-posts',['posts' => $posts]);
    }

    public function order($sort){
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
            
        } else {
            $this->sort == $sort;
            $this->direction = 'asc';
        }
        
    }
}
