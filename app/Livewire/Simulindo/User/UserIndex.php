<?php

namespace App\Livewire\Simulindo\User;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class UserIndex extends Component
{
    use LivewireAlert;

    public $rules = [
        'name' => 'nullable',
        'email' => 'nullable',
        'role' => 'nullable',
        'password' => 'nullable',
        'password_confirmation' => 'nullable'
    ];

    protected $listeners = [
        'confirmDelete',
    ];

    public $filterUser;
    public $perPage = 10;

    public $user;
    public $name, $email, $role, $password, $password_confirmation;

    public function resetFilterUser(){
        $this->filterUser  = [];
    }

    public function create() {
        $this->dispatch('showModalCreateUser');
    }

    public function store() {
        $this->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'role' => 'required',
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8|required_with:password|same:password'
        ]);

        try {

            if ($this->password === $this->password_confirmation){
                $this->password = $this->password;
            }else{
                // return $this->alert('error', 'Konfirmasi password dan password tidak sama');
            }

            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);

            $user->assignRole($this->role);

            $this->dispatch('hideModalCreateUser');
            // return $this->alert('success', 'Akun berhasil dibuat');
            return null;

        }catch (\Exception $exception){
            // insert_errorlog('Store Admin Account', $exception->getMessage());
            // return $this->alert('error', 'Terjadi Kesalahan');
            return $exception->getMessage();
        }
    }

    public function edit($id){
        $this->user = User::find($id);
        // $this->name = $this->user->name;
        // $this->email = $this->user->email;
        // $this->role = $this->user->getRoleNames();
        $this->dispatch('showModalEditUser');
    }

    public function update() {
        $this->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'. $this->user->id,
            'role' => 'required',
            'password' => 'nullable|min:8|same:password_confirmation',
            'password_confirmation' => 'nullable|min:8|same:password'
        ]);

        try {

            if ($this->password){
                if ($this->password === $this->password_confirmation){
                    $this->password = $this->password;
                }else{
                    return "error";
                    // return $this->alert('error', 'Konfirmasi password dan password tidak sama');
                }
            }

            $this->user->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);

            $this->user->syncRoles($this->role);

            $this->dispatch('hideModalEditUser');
            // return $this->alert('success', 'Perubahan berhasil tersimpan');
            return null;

        }catch (\Exception $exception){
            // insert_errorlog('Update Admin Account', $exception->getMessage());
            // return $this->alert('error', 'Terjadi Kesalahan');
            return "error";
        }
    }

    public function delete($id){
        // $this->confirm('Are you sure to delete this user?', [
        //     'onConfirmed' => 'confirmDelete',
        // ]);
        $this->user = User::find($id);
        $this->user->delete();
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

            // if (array_key_exists("role", $this->filterUser) && $this->filterUser['role']){
            //     $users->where('role','like', '%' . $this->filterUser['role'] . '%');
            // }

        }else{
            $users->orderBy('id', 'ASC');
        }

        $data['users'] = $users->paginate($this->perPage);
        
        return view('livewire.simulindo.user.user-index', $data)
        ->extends('layouts.simulindo.app')->section('content');
    }
}
