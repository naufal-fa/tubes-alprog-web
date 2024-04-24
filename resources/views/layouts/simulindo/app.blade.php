<!doctype html>
<html lang="en">
    <head>

        @include('layouts.simulindo.meta')

        @include('layouts.simulindo.style')

    </head>
<body>

    @yield('modal')

    <main class="main-wrapper">
        @include('layouts.simulindo.sidebar')

        <div class="page-wrapper">
            @include('layouts.simulindo.navbar')
            <div class="page-content">
                @yield('content')
            </div>

            @include('layouts.simulindo.footer')
        </div>
    </main>
    
    @include('layouts.simulindo.script')
</body>
</html>
