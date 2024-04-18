<?php

namespace App\Livewire\Auth\Login;

use Livewire\Component;

class LoginIndex extends Component
{
    public function render()
    {
        $data = [];
        
        return view('livewire.auth.login.login-index', $data)
        ->extends('layouts.auth.app')->section('content');
    }
}
