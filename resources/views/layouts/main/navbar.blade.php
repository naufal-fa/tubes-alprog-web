<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('logo/Lap-X_logo.png') }}" alt="" width="30" height="30" class="d-inline-block align-text-top">
            <!-- {{ config('app.name', 'Laravel') }} -->
            <p class="d-inline fw-bolder" style="color: #fa971e;">LAP<span style="color: #404040;">-X</span></p>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('location-review') ? 'active' : '' }}"  aria-current="page" href="{{ route('location-review') }}">Location Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('umkm-ekraf') ? 'active' : '' }}" href="{{ route('umkm-ekraf') }}">UMKM & Ekraf</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('research') ? 'active' : '' }}" href="{{ route('research') }}">Penelitian Terdahulu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('guide') ? 'active' : '' }}" href="{{ route('guide') }}">Guidelines & Rules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('article') || request()->is('article-details')) ? 'active' : '' }}" href="{{ route('article') }}">Article & Information</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                {{-- @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest --}}
            </ul>
        </div>
    </div>
</nav>