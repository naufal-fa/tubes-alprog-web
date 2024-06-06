@livewireScripts
<script src="{{ asset('assets/vendors/core/core.js') }}"></script>
<script src="{{ asset('assets/vendors/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery.flot/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery.flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
<script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/template.js') }}"></script>
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
<script src="{{ asset('assets/js/datepicker.js') }}"></script>
<script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.js') }}"></script>
@include('packages.js.livewire-alert')

<script type="text/javascript">
    Livewire.on('showModalEditUser', () => {
        $('#modalEditUser').modal('show');
    });
    Livewire.on('hideModalEditUser', () => {
        $('#modalEditUser').modal('hide');
    });
    Livewire.on('showModalCreateUser', () => {
        $('#modalCreateUser').modal('show');
    });
    Livewire.on('hideModalCreateUser', () => {
        $('#modalCreateUser').modal('hide');
    });

    Livewire.on('showModalEditCarousel', () => {
        $('#modalEditCarousel').modal('show');
    })
    Livewire.on('hideModalEditCarousel', () => {
        $('#modalEditCarousel').modal('hide');
    })
    Livewire.on('showModalCreateCarousel', () => {
        $('#modalCreateCarousel').modal('show');
    })
    Livewire.on('hideModalCreateCarousel', () => {
        $('#modalCreateCarousel').modal('hide');
    })

    Livewire.on('showModalEditTestimonial', () => {
        $('#modalEditTestimonial').modal('show');
    })
    Livewire.on('hideModalEditTestimonial', () => {
        $('#modalEditTestimonial').modal('hide');
    })
    Livewire.on('showModalCreateTestimonial', () => {
        $('#modalCreateTestimonial').modal('show');
    })
    Livewire.on('hideModalCreateTestimonial', () => {
        $('#modalCreateTestimonial').modal('hide');
    })

    Livewire.on('showModalCreateMerchandise', () => {
        $('#modalCreateMerchandise').modal('show');
    })
    Livewire.on('hideModalCreateMerchandise', () => {
        $('#modalCreateMerchandise').modal('hide');
    })
    Livewire.on('showModalEditMerchandise', () => {
        $('#modalEditMerchandise').modal('show');
    })
    Livewire.on('hideModalEditMerchandise', () => {
        $('#modalEditMerchandise').modal('hide');
    })

    Livewire.on('showModalCreateMerchandiseCategory', () => {
        $('#modalCreateMerchandiseCategory').modal('show');
    })
    Livewire.on('hideModalCreateMerchandiseCategory', () => {
        $('#modalCreateMerchandiseCategory').modal('hide');
    })
    Livewire.on('showModalEditMerchandiseCategory', () => {
        $('#modalEditMerchandiseCategory').modal('show');
    })
    Livewire.on('hideModalEditMerchandiseCategory', () => {
        $('#modalEditMerchandiseCategory').modal('hide');
    })

    Livewire.on('showModalAddMerchandiseCategory', () => {
        $('#modalAddMerchandiseCategory').modal('show');
    })
    Livewire.on('hideModalAddMerchandiseCategory', () => {
        $('#modalAddMerchandiseCategory').modal('hide');
    })
</script>