<div wire:ignore.self class="modal" id="modalCreateUser" tabindex="-1" role="dialog" aria-labelledby="modalCreateUser" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Create User</h5>
        </div>
        <div class="modal-body">
            <div class="block-content fs-sm">
                @include('sections.form.simulindo.user.create')
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button wire:click="store" type="button" class="btn btn-primary">
            Submit
          </button>
        </div>
      </div>
    </div>
  </div>