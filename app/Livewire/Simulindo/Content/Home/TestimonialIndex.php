<?php

namespace App\Livewire\Simulindo\Content\Home;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\Simulindo\Home\Testimonial;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TestimonialIndex extends Component
{
    
    use LivewireAlert;
    use WithFileUploads;

    public $rules = [
        'name' => 'nullable',
        'image' => 'nullable',
        'description' => 'nullable',
    ];

    protected $listeners = [
        'confirmDelete',
    ];

    public $filterData;
    public $perPage = 10;

    public $testimonial, $name, $image, $description;

    public function resetFilterData(){
        $this->filterData = [];
    }

    public function showImageTab($id) {
        $data = Testimonial::find($id);
        $fileName = $data->image;
        $directoryPath = 'assets/images/content/home/testimonial';
        return redirect()->to(asset($directoryPath .'/'. $fileName));
    }

    public function create() {
        $this->dispatch('showModalCreateTestimonial');
    }

    public function store() {
        $this->validate([
            'name' => 'required',
            'image' => 'required|image|max:5120', // 5mb max
            'description' => 'required',
        ]);

        try {

            if ($this->image) {
                $destinationPath = 'content/home/testimonial';
                $dateTime   = date('dmY_his');
                $fileExt    = $this->image->extension();
                $fileName   = "TESTIMONIAL_{$dateTime}.{$fileExt}";
    
                $this->image->storeAs($destinationPath, $fileName, 'custom_public_path');
            }

            $data = Testimonial::create([
                'name' => $this->name,
                'image' => $fileName,
                'description' => $this->description,
            ]);

            $this->dispatch('hideModalCreateTestimonial');
            // return $this->alert('success', 'Akun berhasil dibuat');
            return null;

        }catch (\Exception $exception){
            // insert_errorlog('Store Admin Account', $exception->getMessage());
            // return $this->alert('error', 'Terjadi Kesalahan');
            return $exception->getMessage();
        }
    }

    public function delete($id){
        // $this->confirm('Are you sure to delete this testimonial?', [
        //     'onConfirmed' => 'confirmDelete',
        // ]);
        $this->testimonial = Testimonial::find($id);
        $image_path = public_path('assets/images/content/home/testimonial').'/'.$this->testimonial->image;
        File::delete($image_path);
        $this->testimonial->delete();
    }

    // public function confirmDelete(){
    //     try {
    //         $this->testimonial->delete();
    //         return $this->alert('success', 'User successfully deleted');

    //     }catch (\Exception $exception){
    //         insert_errorlog('Delete User Account', $exception->getMessage());
    //         return $this->alert('error', 'Something wrong');
    //     }
    // }

    public function render()
    {
        $testimonials = Testimonial::query();

        if ($this->filterData){

            // if (array_key_exists("query", $this->filterData)){
            //     $testimonials->orWhere('name','like', '%' . $this->filterData['query'] . '%')
            //         ->orWhere('email','like', '%' . $this->filterData['query'] . '%');
            // }

            // if (array_key_exists("role", $this->filterUser) && $this->filterUser['role']){
            //     $users->where('role','like', '%' . $this->filterUser['role'] . '%');
            // }

        }else{
            $testimonials->orderBy('id', 'ASC');
        }

        $data['testimonials'] = $testimonials->paginate($this->perPage);
        
        return view('livewire.simulindo.content.home.testimonial-index', $data)
        ->extends('layouts.simulindo.app')->section('content');
    }
}
