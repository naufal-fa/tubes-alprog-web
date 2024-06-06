<div class="row">
    <div class="col-lg-12 mb-2">
        <span>Bidang wajib diisi (<span class="text-danger">*</span>)</span>
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-name-user">Nama <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="field-name-user" wire:model="name" placeholder="Andrew Rhodes" required>
        @error('name')
            <span class="invalid-feedback">
                {{ $message }}
             </span>
        @enderror
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-email-user">Email <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="field-email-user"
               wire:model="email" placeholder="andrew@mail.com" required>
        @error('email')
            <span class="invalid-feedback">
                {{ $message }}
             </span>
        @enderror
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-role-user">Tipe Role <span class="text-danger">*</span></label>
        <select wire:model="role" class="form-select @error('role') is-invalid @enderror"
                id="field-role-user">
            <option value="">- Pilih Role -</option>
            <option value="ADMIN">Admin</option>
            <option value="STAFF">Staff</option>
        </select>
        @error('role')
        <span class="invalid-feedback">
                {{ $message }}
             </span>
        @enderror
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-password-user">Password <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('password') is-invalid @enderror" id="field-password-user"
               wire:model="password" placeholder="********" required>
        <span class="text-muted"><i class="fa fa-info-circle"></i> Minimum 8 karakter</span>
        @error('password')
        <span class="invalid-feedback">
                {{ $message }}
             </span>
        @enderror
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-confirmation_password-user">Konfirmasi Password <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('password_confirmation') is-invalid @enderror" id="field-confirmation_password-user"
               wire:model="password_confirmation" placeholder="********" required>
        @error('password_confirmation')
        <span class="invalid-feedback">
                {{ $message }}
             </span>
        @enderror
    </div>
</div>
