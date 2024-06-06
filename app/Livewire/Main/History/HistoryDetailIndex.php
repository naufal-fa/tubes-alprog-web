<?php

namespace App\Livewire\Main\History;

use Livewire\Component;

class HistoryDetailIndex extends Component
{
    public function render()
    {
        $data = [];
        
        return view('livewire.main.history.history-detail-index', $data)
        ->extends('layouts.main.app')->section('content');
    }
}
