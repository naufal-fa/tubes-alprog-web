<?php

namespace App\Livewire\Simulindo\Content\Article;

use Livewire\Component;

class ArticleIndex extends Component
{
    public function render()
    {
        // $merchandises = Merchandise::query();

        // if ($this->filterData){

        //     if (array_key_exists("query", $this->filterData)){
        //         $merchandises->orWhere('name','like', '%' . $this->filterData['query'] . '%')
        //             ->orWhere('email','like', '%' . $this->filterData['query'] . '%');
        //     }

            // if (array_key_exists("role", $this->filterUser) && $this->filterUser['role']){
            //     $users->where('role','like', '%' . $this->filterUser['role'] . '%');
            // }

        // }else{
        //     $merchandises->orderBy('id', 'ASC');
        // }

        $data = [
            // 'merchandises' => $merchandises->paginate($this->perPage),
            // 'categories' => MerchandiseCategory::get(),
        ];
        
        return view('livewire.simulindo.content.article.article-index', $data)
        ->extends('layouts.simulindo.app')->section('content');
    }
}
