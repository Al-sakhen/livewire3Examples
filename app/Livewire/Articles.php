<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Articles extends Component
{
    use WithPagination;

    public $perPage = 2;

    public function loadMore(){
        $this->perPage += 2;
    }
    public function render()
    {
        $articles = Article::paginate($this->perPage);
        return view('livewire.articles' , compact('articles'));
    }
}
