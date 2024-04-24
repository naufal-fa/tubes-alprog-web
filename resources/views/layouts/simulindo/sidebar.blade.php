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