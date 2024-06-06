<div wire:ignore.self class="modal" id="modalEditCarousel" tabindex="-1" role="dialog" aria-labelledby="modalEditCarousel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Carousel</h5>
        </div>
        <div class="modal-body">
            <div class="block-content fs-sm">
                @include('sections.form.simulindo.content.home.carousel-edit')
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button wire:click="update" type="button" class="btn btn-primary">
            Submit
          </button>
        </div>
      </div>
    </div>
  </div>