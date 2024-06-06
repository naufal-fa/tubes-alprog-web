<div wire:ignore.self class="modal" id="modalAddMerchandiseCategory" tabindex="-1" role="dialog" aria-labelledby="modalAddMerchandiseCategory" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add a Catagory</h5>
        </div>
        <div class="modal-body">
            <div class="block-content fs-sm">
                @include('sections.form.simulindo.content.merchandise.add-category')
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button wire:click="saveCategory" type="button" class="btn btn-primary">
            Submit
          </button>
        </div>
      </div>
    </div>
  </div>