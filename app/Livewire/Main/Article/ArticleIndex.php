<?php

namespace App\Livewire\Main\Article;

use Livewire\Component;

class ArticleIndex extends Component
{
    public function render()
    {
        $data = [];
        
        return view('livewire.main.article.article-index', $data)
        ->extends('layouts.main.app')->section('content');
    }
}
