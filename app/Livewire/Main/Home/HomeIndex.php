<?php

namespace App\Livewire\Main\Home;

use Livewire\Component;

class HomeIndex extends Component
{
    public function render()
    {
        $data = [];
        
        return view('livewire.main.home.home-index', $data)
        ->extends('layouts.main.app')->section('content');
    }
}
