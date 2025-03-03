<?php

namespace App\Livewire;

use App\Models\Articles;
use Livewire\Component;

class ShowBlog extends Component
{
    public function render()
    {

        $articles = Articles::orderBy('created_at','DESC')->get();
        return view('livewire.show-blog',[
            'articles'=>$articles
        ]);
    }
}
