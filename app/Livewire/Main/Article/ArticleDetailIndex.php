<?php

namespace App\Livewire\Main\Article;

use Livewire\Component;

class ArticleDetailIndex extends Component
{
    public function render()
    {
        $data = [];
        
        return view('livewire.main.article.article-detail-index', $data)
        ->extends('layouts.main.app')->section('content');
    }
}
