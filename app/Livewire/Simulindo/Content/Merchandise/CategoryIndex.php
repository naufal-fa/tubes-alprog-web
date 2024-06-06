<?php

namespace App\Livewire\Simulindo\Content\Merchandise;

use Livewire\Component;
use App\Models\Simulindo\Merchandise\MerchandiseCategory;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CategoryIndex extends Component
{
    use LivewireAlert;

    public $rules = [
        'name' => 'nullable',
    ];

    protected $listeners = [
        'confirmDelete',
    ];

    public $filterData;
    public $perPage = 10;

    public $category, $name;

    public function resetFilterData(){
        $this->filterData = [];
    }

    public function create() {
        $this->dispatch('showModalCreateMerchandiseCategory');
    }

    public function store() {
        $this->validate([
            'name' => 'required',
        ]);

        try {

            $data = MerchandiseCategory::create([
                'name' => $this->name,
            ]);

            $this->dispatch('hideModalCreateMerchandiseCategory');
            // return $this->alert('success', 'Akun berhasil dibuat');
            return null;

        }catch (\Exception $exception){
            // insert_errorlog('Store Admin Account', $exception->getMessage());
            // return $this->alert('error', 'Terjadi Kesalahan');
            return $exception->getMessage();
        }
    }

    public function delete($id){
        // $this->confirm('Are you sure to delete this carousel?', [
        //     'onConfirmed' => 'confirmDelete',
        // ]);
        $this->category = MerchandiseCategory::find($id);
        $this->category->delete();
    }

    // public function confirmDelete(){
    //     try {
    //         $this->carousel->delete();
    //         return $this->alert('success', 'User successfully deleted');

    //     }catch (\Exception $exception){
    //         insert_errorlog('Delete User Account', $exception->getMessage());
    //         return $this->alert('error', 'Something wrong');
    //     }
    // }

    public function render()
    {
        $categories = MerchandiseCategory::query();

        if ($this->filterData){

            if (array_key_exists("query", $this->filterData)){
                $categories->orWhere('name','like', '%' . $this->filterData['query'] . '%')
                    ->orWhere('email','like', '%' . $this->filterData['query'] . '%');
            }

            // if (array_key_exists("role", $this->filterUser) && $this->filterUser['role']){
            //     $users->where('role','like', '%' . $this->filterUser['role'] . '%');
            // }

        }else{
            $categories->orderBy('id', 'ASC');
        }

        $data['categories'] = $categories->paginate($this->perPage);
        
        return view('livewire.simulindo.content.merchandise.category-index', $data)
        ->extends('layouts.simulindo.app')->section('content');
    }
}
