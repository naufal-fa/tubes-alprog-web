@section('title', 'Category Management')

<section>

    @include('sections.modal.simulindo.content.merchandise.merchandise-edit')
    @include('sections.modal.simulindo.content.merchandise.merchandise-create')
    @include('sections.modal.simulindo.content.merchandise.add-category')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('simulindo.dashboard.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Merchandise</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Merchandise Management</h6>
                    <div class="block-content block-content-full">
                        @include('sections.table.simulindo.content.merchandise.merchandise')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>