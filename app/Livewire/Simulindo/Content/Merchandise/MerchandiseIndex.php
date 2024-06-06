<?php

namespace App\Livewire\Simulindo\Content\Merchandise;

use Livewire\Component;
use Illuminate\Support\Facades\File;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Simulindo\Merchandise\Merchandise;
use App\Models\Simulindo\Merchandise\MerchandiseCategory;
use App\Models\Simulindo\Merchandise\MerchandiseHasCategory;
use Livewire\WithFileUploads;

class MerchandiseIndex extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $rules = [
        'name' => 'nullable',
    ];

    protected $listeners = [
        'confirmDelete',
    ];

    public $filterData;
    public $perPage = 10;

    public $merchandise, $name, $image, $location, $price, $description, $category;

    public function resetFilterData(){
        $this->filterData = [];
    }

    public function showImageTab($id) {
        $data = Merchandise::find($id);
        $fileName = $data->image;
        $directoryPath = 'assets/images/content/merchandise/merchandise';
        return redirect()->to(asset($directoryPath .'/'. $fileName));
    }

    public function configure($id) {
        // $this->category = '';
        $this->merchandise = Merchandise::find($id);
        $this->dispatch('showModalAddMerchandiseCategory');
    }

    public function saveCategory() {
        MerchandiseHasCategory::where('merchandise_id', $this->merchandise->id)->delete();
        if($this->category) {
            foreach($this->category as $category) {
                MerchandiseHasCategory::create([
                    "category_id" => $category,
                    "merchandise_id" => $this->merchandise->id,
                ]);
            }
        }
        $this->dispatch('hideModalAddMerchandiseCategory');
        return $this->category;
    }

    public function create() {
        $this->dispatch('showModalCreateMerchandise');
    }

    public function store() {
        $this->validate([
            'name' => 'required',
        ]);

        try {

            if ($this->image) {
                $destinationPath = 'content/merchandise/merchandise';
                $dateTime   = date('dmY_his');
                $fileExt    = $this->image->extension();
                $fileName   = "MERCHANDISE_{$dateTime}.{$fileExt}";
    
                $this->image->storeAs($destinationPath, $fileName, 'custom_public_path');
            }

            $data = Merchandise::create([
                'name' => $this->name,
                'description' => $this->description,
                'location' => $this->location,
                'price' => $this->price,
                'image' => $fileName,
            ]);

            $this->dispatch('hideModalCreateMerchandise');
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
        $this->merchandise = Merchandise::find($id);
        $image_path = public_path('assets/images/content/merchandise/merchandise').'/'.$this->merchandise->image;
        File::delete($image_path);
        $this->merchandise->delete();
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
        $merchandises = Merchandise::query();

        if ($this->filterData){

            if (array_key_exists("query", $this->filterData)){
                $merchandises->orWhere('name','like', '%' . $this->filterData['query'] . '%')
                    ->orWhere('email','like', '%' . $this->filterData['query'] . '%');
            }

            // if (array_key_exists("role", $this->filterUser) && $this->filterUser['role']){
            //     $users->where('role','like', '%' . $this->filterUser['role'] . '%');
            // }

        }else{
            $merchandises->orderBy('id', 'ASC');
        }

        $data = [
            'merchandises' => $merchandises->paginate($this->perPage),
            'categories' => MerchandiseCategory::get(),
        ];
        
        return view('livewire.simulindo.content.merchandise.merchandise-index', $data)
        ->extends('layouts.simulindo.app')->section('content');
    }
}
