@section('title', 'Carousel Management')

<section>

    @include('sections.modal.simulindo.content.home.carousel-edit')
    @include('sections.modal.simulindo.content.home.carousel-create')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('simulindo.dashboard.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Carousel</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Carousel Management</h6>
                    <div class="block-content block-content-full">
                        @include('sections.table.simulindo.content.home.carousel')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>