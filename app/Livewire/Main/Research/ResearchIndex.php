<?php

namespace App\Livewire\Main\Research;

use Livewire\Component;

class ResearchIndex extends Component
{
    public function render()
    {
        $data = [];
        
        return view('livewire.main.research.research-index', $data)
        ->extends('layouts.main.app')->section('content');
    }
}
