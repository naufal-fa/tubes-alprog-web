<?php

namespace App\Livewire\Main\Destination;

use Livewire\Component;

class DestinationIndex extends Component
{
    public function render()
    {
        $data = [];
        
        return view('livewire.main.destination.destination-index', $data)
        ->extends('layouts.main.app')->section('content');
    }
}
