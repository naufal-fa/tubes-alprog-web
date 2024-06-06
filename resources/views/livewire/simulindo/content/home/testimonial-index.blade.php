@section('title', 'Testimonial Management')

<section>

    @include('sections.modal.simulindo.content.home.testimonial-edit')
    @include('sections.modal.simulindo.content.home.testimonial-create')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('simulindo.dashboard.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Testimonial Management</h6>
                    <div class="block-content block-content-full">
                        @include('sections.table.simulindo.content.home.testimonial')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>