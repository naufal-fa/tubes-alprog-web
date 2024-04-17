<?php

namespace App\Livewire\Main\Event;

use Livewire\Component;

class EventFestivalIndex extends Component
{
    public function render()
    {
        $data = [];
        
        return view('livewire.main.event.event-festival-index', $data)
        ->extends('layouts.main.app')->section('content');
    }
}
