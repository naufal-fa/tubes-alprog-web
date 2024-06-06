<?php

namespace App\Livewire\Main\History;

use Livewire\Component;

class HistoryIndex extends Component
{
    public function render()
    {
        $data = [];
        
        return view('livewire.main.history.history-index', $data)
        ->extends('layouts.main.app')->section('content');
    }
}
