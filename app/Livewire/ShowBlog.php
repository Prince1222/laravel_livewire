<?php

namespace App\Livewire;

use App\Models\Articles;
use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Livewire\abort;

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
                      ->paginate(2);

        }else{
            $articles = Articles::orderBy('created_at','DESC')->paginate(2);
        }

        $latestArticles = Articles::orderBy('created_at','DESC')
                         ->get()
                        ->take(3);

                        
    
       
        return view('livewire.show-blog',[
            'articles'=>$articles,
            'categories'=> $categories,
            'latestArticles'=> $latestArticles,
        ]);
    }
}
