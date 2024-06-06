<?php

namespace App\Livewire\Simulindo\Content\Home;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\Simulindo\Home\Carousel;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CarouselIndex extends Component
{

    use LivewireAlert;
    use WithFileUploads;

    public $rules = [
        'title' => 'nullable',
        'subtitle' => 'nullable',
        'image' => 'nullable',
        'description' => 'nullable',
        'link' => 'nullable',
    ];

    protected $listeners = [
        'confirmDelete',
    ];

    public $filterData;
    public $perPage = 10;

    public $carousel, $title, $subtitle, $image, $description, $link;

    public function resetFilterData(){
        $this->filterData = [];
    }

    public function showImageTab($id) {
        $data = Carousel::find($id);
        $fileName = $data->image;
        $directoryPath = 'assets/images/content/home/carousel';
        return redirect()->to(asset($directoryPath .'/'. $fileName));
    }

    public function create() {
        $this->dispatch('showModalCreateCarousel');
    }

    public function store() {
        $this->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'image' => 'required|image|max:5120', // 5mb max
            'description' => 'required',
        ]);

        try {

            if ($this->image) {
                $destinationPath = 'content/home/carousel';
                $dateTime   = date('dmY_his');
                $fileExt    = $this->image->extension();
                $fileName   = "CAROUSEL_{$dateTime}.{$fileExt}";
    
                $this->image->storeAs($destinationPath, $fileName, 'custom_public_path');
            }

            $data = Carousel::create([
                'title' => $this->title,
                'subtitle' => $this->subtitle,
                'image' => $fileName,
                'description' => $this->description,
                'link' => $this->link,
            ]);

            $this->dispatch('hideModalCreateCarousel');
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
        $this->carousel = Carousel::find($id);
        $image_path = public_path('assets/images/content/home/carousel').'/'.$this->carousel->image;
        File::delete($image_path);
        $this->carousel->delete();
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
        $carousels = Carousel::query();

        if ($this->filterData){

            if (array_key_exists("query", $this->filterData)){
                $carousels->orWhere('name','like', '%' . $this->filterData['query'] . '%')
                    ->orWhere('email','like', '%' . $this->filterData['query'] . '%');
            }

            // if (array_key_exists("role", $this->filterUser) && $this->filterUser['role']){
            //     $users->where('role','like', '%' . $this->filterUser['role'] . '%');
            // }

        }else{
            $carousels->orderBy('id', 'ASC');
        }

        $data['carousels'] = $carousels->paginate($this->perPage);
        
        return view('livewire.simulindo.content.home.carousel-index', $data)
        ->extends('layouts.simulindo.app')->section('content');
    }
}
