<div class="row">
    <div class="col-lg-12 mb-2">
        <span>Bidang wajib diisi (<span class="text-danger">*</span>)</span>
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-title-carousel">Title <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="field-title-carousel" wire:model="title" placeholder="Insert title here..." required>
        @error('title')
            <span class="invalid-feedback">
                {{ $message }}
             </span>
        @enderror
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-subtitle-carousel">Subtitle <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="field-subtitle-carousel"
               wire:model="subtitle" placeholder="Insert subtitle here..." required>
        @error('subtitle')
            <span class="invalid-feedback">
                {{ $message }}
             </span>
        @enderror
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-description-carousel">Description <span class="text-danger">*</span></label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="field-description-carousel" cols="30" rows="10" wire:model="description" required  placeholder="Insert description here..."></textarea>
        @error('description')
            <span class="invalid-feedback">
                {{ $message }}
             </span>
        @enderror
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-link-carousel">Link</label>
        <input type="text" class="form-control @error('link') is-invalid @enderror" id="field-link-carousel" wire:model="link" placeholder="Insert link here...">
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-image-carousel">Image <span class="text-danger">*</span></label>
        <div
            x-data="{ isUploading: false, progress: 0 }"
            x-on:livewire-upload-start="isUploading = true"
            x-on:livewire-upload-finish="isUploading = false"
            x-on:livewire-upload-error="isUploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress" 
        >
            <input type="file" class="form-control" id="field-image-carousel" wire:model="image">
    
            <!-- Progress Bar -->
            <div x-show="isUploading">
                <progress max="100" x-bind:value="progress"></progress>
            </div>
        </div>
        <small class="text-muted"> File size 5MB (.jpeg/.jpg/.png) |16:9|</small>
        @error('image')
            <span class="invalid-feedback">
                {{ $message }}
             </span>
        @enderror
    </div>
    @if ($image)
        <div class="col-lg-12 mb-3">
            <label class="form-label" for="field-image-preview">Image preview:</label>
            <br>
            <img src="{{ $image->temporaryUrl() }}"  class="img-fluid" id="field-image-preview">
        </div>
    @endif
</div>
