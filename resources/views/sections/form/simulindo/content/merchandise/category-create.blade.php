<div class="row">
    <div class="col-lg-12 mb-2">
        <span>Bidang wajib diisi (<span class="text-danger">*</span>)</span>
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-name-carousel">Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="field-name-carousel" wire:model="name" placeholder="Insert name here..." required>
        @error('name')
            <span class="invalid-feedback">
                {{ $message }}
             </span>
        @enderror
    </div>
</div>
