<div class="row">
    <div class="col-lg-4 mb-3">
        <a wire:click="create" href="javascript:void(0)" class="btn btn-success w-50">Add new Testimonial</a>
    </div>
</div>
<div class="row">
    {{-- <div class="col-lg-8 mb-3">
        wire:model="filterData.query"
        <input type="search" class="form-control w-100"
        placeholder="Search data..." required>
    </div>
    <div class="col-lg-4 mb-3">
        wire:model="filterData.role"
        <select class="form-select w-100" >
            <option value="">Semua Tipe Akun</option>
            <option value="ADMIN">Admin</option>
            <option value="STAFF">Staff</option>
        </select>
    </div> --}}
    @if($this->filterData)
        <div class="col-lg-12 mb-3">
            <button type="button" class="btn btn-primary w-100" wire:click="resetFilterData"><i class="bx bx-refresh"></i> Reset Filter</button>
        </div>
    @endif
</div>
<div class="overflow-auto table-responsive">
    <table class="table table-bordered table-hover table-striped table-vcenter" wire:loading.class="table-mode-loading">
        <thead>
        <tr>
            <th class="text-center">No.</th>
            <th>Name</th>
            <th class="text-center w-auto">Image</th>
            <th>Description</th>
            <th class="text-center">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @if($testimonials->count() == 0)
            <tr>
                <td class="text-center" colspan="5">Data Tidak Ditemukan :(</td>
            </tr>
        @endif
        @foreach($testimonials as $key => $testimonial)
            <tr>
                <td class="text-center fw-semibold">
                    <span>{{ $key + 1 }}</span>
                </td>
                <td>
                    <span>{{ $testimonial->name }}</span>
                </td>
                <td class="text-center">
                    <img class="rounded w-auto" src="{{ asset('assets/images/content/home/testimonial') .'/'. $testimonial->image }}" alt="..." wire:click="showImageTab({{ $testimonial->id }})">
                </td>
                <td>
                    <span>{{ $testimonial->description }}</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button type="button" wire:click="edit({{ $testimonial->id }})" wire:loading.attr="disabled"
                        class="btn btn-sm btn-primary" data-bs-toggle="tooltip" title="Sunting Akun">
                            <i class="link-icon" data-feather="edit-2"></i>
                        </button>
                        <button type="button" wire:click="delete({{ $testimonial->id }})"
                        class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Hapus Akun">
                                <i class="link-icon" data-feather="trash-2"></i>
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{-- {{ $users->links('components.pagination') }} --}}
</div>
