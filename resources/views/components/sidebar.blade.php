<nav class="sidebar d-flex flex-column p-3">
  <h1 class="navbar-brand text-center">SoLAW</h1>
  <span class="text-center mb-3">Admin Panel</span>
  <ul class="navbar-nav">
    <li class="nav-item mb-2">
        <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}"><i class="bi bi-house-door-fill me-2"></i>Dashboard</a>
    </li>
    <li class="nav-item mb-2">
        <a href="{{ route('dashboard.admin.index') }}" class="nav-link" {{ request()->is('dashboard/admin*') ? 'active' : '' }}><i class="bi bi-person-badge me-2"></i>Kelola Admin</a>
    </li>
    <li class="nav-item mb-2">
        <a href="{{ route('dashboard.consultant.index') }}" class="nav-link" {{ request()->is('dashboard/consultants*') ? 'active' : '' }}><i class="bi bi-person-fill me-2"></i>Kelola Konsultan</a>
    </li>
    <li class="nav-item mb-2">
        <a href="{{ route('dashboard.user.index') }}" class="nav-link" {{ request()->is('dashboard/users*') ? 'active' : '' }}><i class="bi bi-people-fill me-2"></i>Kelola Pengguna</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('dashboard.article.index') }}" class="nav-link {{ request()->is('dashboard/articles*') ? 'active' : '' }}"><i class="bi bi-file-text-fill me-2"></i>Kelola Artikel</a>
    </li>
  </ul>
</nav>