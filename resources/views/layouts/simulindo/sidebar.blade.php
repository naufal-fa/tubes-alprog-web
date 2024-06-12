<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        Noble<span>UI</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item {{ request()->is('simulindo/dashboard') ? 'active' : '' }}">
          <a href="{{ route('simulindo.dashboard.index') }}" class="nav-link">
            <i class="link-icon" data-feather="monitor"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">Content Management</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#home" role="button" aria-expanded="{{ request()->is('simulindo/content/home/*') ? 'true' : 'false' }}" aria-controls="home">
            <i class="link-icon" data-feather="layout"></i>
            <span class="link-title">Home page</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse {{ request()->is('simulindo/content/home/*') ? 'show' : '' }}" id="home">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route('simulindo.content.home.carousel') }}" class="nav-link">Carousel</a>
              </li>
            </ul>
          </div>
          <div class="collapse {{ request()->is('simulindo/content/home/*') ? 'show' : '' }}" id="home">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route('simulindo.content.home.testimonial') }}" class="nav-link">Testimonial</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#merchandise" role="button" aria-expanded="{{ request()->is('simulindo/content/merchandise/*') ? 'show' : '' }}" aria-controls="merchandise">
            <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Merchandise page</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse {{ request()->is('simulindo/content/merchandise/*') ? 'show' : '' }}" id="merchandise">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route('simulindo.content.merchandise.merchandise') }}" class="nav-link">Merchandise</a>
              </li>
            </ul>
          </div>
          <div class="collapse {{ request()->is('simulindo/content/merchandise/*') ? 'show' : '' }}" id="merchandise">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route('simulindo.content.merchandise.category') }}" class="nav-link"> Merchandise Category</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#article" role="button" aria-expanded="{{ request()->is('simulindo/content/article/*') ? 'show' : '' }}" aria-controls="article">
            <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Article page</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse {{ request()->is('simulindo/content/article/*') ? 'show' : '' }}" id="article">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route('simulindo.content.article.article') }}" class="nav-link">Article</a>
              </li>
            </ul>
          </div>
          <div class="collapse {{ request()->is('simulindo/content/article/*') ? 'show' : '' }}" id="article">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route('simulindo.content.article.category') }}" class="nav-link"> Article Category</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">User Setting</li>
        {{-- <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#user" role="button" aria-expanded="{{ (request()->is('simulindo/user') || request()->is('simulindo/user/*')) ? 'true' : 'false' }}" aria-controls="user">
            <i class="link-icon" data-feather="layout"></i>
            <span class="link-title">User Management</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse {{ request()->is('simulindo/user/list') ? 'show' : '' }}" id="user">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="" class="nav-link">User List</a>
              </li>
            </ul>
          </div>
        </li> --}}
        <div class="nav-item {{ request()->is('simulindo/user') ? 'active' : '' }}">
          <a href="{{ route('simulindo.user.index') }}" class="nav-link">
            <i class="link-icon" data-feather="users"></i>
            <span class="link-title">Users</span>
          </a>
        </div>
        <div class="nav-item">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="eye"></i>
            <span class="link-title">Role</span>
          </a>
        </div>
      </ul>
    </div>
  </nav>