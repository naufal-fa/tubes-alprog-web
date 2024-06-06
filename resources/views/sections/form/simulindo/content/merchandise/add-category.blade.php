<div class="row">
    <div class="col-lg-12 mb-2">
        <span>Bidang wajib diisi (<span class="text-danger">*</span>)</span>
    </div>
    <div class="col-lg-12 mb-3">
        
        <select class="js-example-basic-multiple w-100" multiple="multiple" data-width="100%" wire:model="category">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        {{-- @foreach ($categories as $category)
            <label class="form-label" for="field-name-carousel"><input type="checkbox" id="field-name-carousel">{{ $category->name }}</label>
        @endforeach --}}
                {{-- Checked --}}
    </div>
</div>
