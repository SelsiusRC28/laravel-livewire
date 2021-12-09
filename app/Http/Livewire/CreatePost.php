<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $show = false;

    public function render()
    {

        return view('livewire.create-post', compact($this->show));
    }
}
