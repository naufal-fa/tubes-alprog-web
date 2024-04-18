<?php

namespace App\Livewire\Simulindo\Dashboard;

use Livewire\Component;

class DashboardIndex extends Component
{
    public function render()
    {
        $data = [];
        
        return view('livewire.simulindo.dashboard.dashboard-index', $data)
        ->extends('layouts.simulindo.app')->section('content');
    }
}
