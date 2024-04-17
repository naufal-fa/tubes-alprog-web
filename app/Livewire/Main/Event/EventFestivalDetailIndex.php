<?php

namespace App\Livewire\Main\Event;

use Livewire\Component;

class EventFestivalDetailIndex extends Component
{
    public function render()
    {
        $data = [];
        
        return view('livewire.main.event.event-festival-detail-index', $data)
        ->extends('layouts.main.app')->section('content');
    }
}
