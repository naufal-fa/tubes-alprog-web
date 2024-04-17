<?php

namespace App\Livewire\Main\Guide;

use Livewire\Component;

class GuideIndex extends Component
{
    public function render()
    {
        $data = [];
        
        return view('livewire.main.guide.guide-index', $data)
        ->extends('layouts.main.app')->section('content');
    }
}
