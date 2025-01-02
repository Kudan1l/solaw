<nav class="sidebar d-flex flex-column justify-content-between p-3">
    <div class="box">
        <div class="header text-center mb-3">
            <h1 class="navbar-brand text-center">SoLAW</h1>
            <span class="text-center">Consultant Account</span>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item mb-2">
                <a href="{{ route('dashboard.consultant.index') }}" class="nav-link {{ request()->is('dashboard/consultant*') ? 'active' : '' }}"><i class="bi bi-house-door-fill me-2"></i>Profile</a>
            </li>
        </ul>
    </div>
    <div class="btn-nav">
        <a href="{{ route('home') }}" class="btn btn-secondary mb-3 w-100">Beranda</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger w-100">Logout</button>
        </form>
    </div>
</nav>