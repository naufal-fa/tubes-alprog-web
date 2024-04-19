<!DOCTYPE html>
<html lang="en">
@include('layouts.main.header')
<body data-fade-in="true">

    <div class="pre-loader"><div></div></div>

    <!-- Navbar -->
    @include('layouts.main.navbar')
    
    <!-- Main Content -->
    @yield('content')
    
    <!-- Footer -->
    @include('layouts.main.footer')

    <!-- Script -->
    @include('layouts.main.script')
</body>
</html>