@section('title', 'User Management')

<section>
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('simulindo.dashboard.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">User Management</h6>
                    <div class="block-content block-content-full">
                        @include('sections.table.simulindo.user.index')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>