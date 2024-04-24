<?php

namespace App\Livewire\Simulindo\User;

use Livewire\Component;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class UserIndex extends Component
{
    use LivewireAlert;

    public $filterUser;
    public $perPage = 10;
    public $user;

    protected $listeners = [
        'confirmDelete',
    ];

    public function resetFilterUser(){
        $this->filterUser  = [];
    }

    public function create() {
        // 
    }

    public function store() {
        // 
    }

    public function edit($id){
        $this->user = User::find($id);
        // $this->dispatchBrowserEvent('showModalAccountAdmin');
        return $this->user;
    }

    public function delete($id){
        $this->confirm('Are you sure to delete this user?', [
            'onConfirmed' => 'confirmDelete',
        ]);
        $this->user = User::find($id);
    }

    public function confirmDelete(){
        try {
            $this->user->delete();
            return $this->alert('success', 'User successfully deleted');

        }catch (\Exception $exception){
            insert_errorlog('Delete User Account', $exception->getMessage());
            return $this->alert('error', 'Something wrong');
        }
    }

    public function render()
    {
        $users = User::query();

        if ($this->filterUser){

            if (array_key_exists("query", $this->filterUser)){
                $users->orWhere('name','like', '%' . $this->filterUser['query'] . '%')
                    ->orWhere('email','like', '%' . $this->filterUser['query'] . '%');
            }

            if (array_key_exists("role", $this->filterUser) && $this->filterUser['role']){
                $users->where('role','like', '%' . $this->filterUser['role'] . '%');
            }

        }else{
            $users->orderBy('id', 'ASC');
        }

        $data['users'] = $users->paginate($this->perPage);
        
        return view('livewire.simulindo.user.user-index', $data)
        ->extends('layouts.simulindo.app')->section('content');
    }
}
