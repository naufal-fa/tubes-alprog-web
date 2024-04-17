<?php

namespace App\Livewire\Main\Destination;

use Livewire\Component;

class DestinationDetailIndex extends Component
{
    public function render()
    {
        $data = [];
        
        return view('livewire.main.destination.destination-detail-index', $data)
        ->extends('layouts.main.app')->section('content');
    }
}
