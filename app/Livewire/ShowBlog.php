<?php

namespace App\Livewire;

use App\Models\Articles;
use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class ShowBlog extends Component
{
    #[Url]
    public $categorySlug = null;

    public function render()
    {
        $categories = Category::all();
        if(!empty($this->categorySlug)){
          $category = Category::where('slug',$this->categorySlug)->first();

          if(!empty($category)){
            abort(404);
          }
         
          $articles = Articles::orderBy('created_at','DESC')
                      ->where('category_id',$category->id)
                      ->paginate(10);

        }else{
            $articles = Articles::orderBy('created_at','DESC')->paginate(2);
        }
    
       
        return view('livewire.show-blog',[
            'articles'=>$articles,
            'categories'=> $categories
        ]);
    }
}
