<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">SoLAW</a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

          <!-- MENU -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('threads') }}">Forum</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href=""> Solusi </a>
                    <div class="mega-menu-wrapper">
                    <div class="row">
                        <div class="col item-dropdown">
                        <a href="">
                            <h4>Prosedur Hukum</h4>
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Mauris et dapibus orci, at tincidunt ipsum.
                            Aliquam id sem a enim.
                            </p>
                        </a>
                        </div>
                        <div class="col item-dropdown">
                            <a href="{{ route('PEMBUATANDOKUM') }}">
                            <h4>Pembuatan Dokumen</h4>
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Mauris et dapibus orci, at tincidunt ipsum.
                                Aliquam id sem a enim.
                                </p>
                            </a>
                        </div>
                        <div class="col item-dropdown">
                            <a href="">
                                <h4>Izin Usaha</h4>
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Mauris et dapibus orci, at tincidunt ipsum.
                                Aliquam id sem a enim.
                                </p>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article') }}">Artikel</a>
                </li>
            </ul>

            <div class="d-flex login align-items-center">
            @auth
                <!-- Jika pengguna adalah admin, tampilkan link ke dashboard -->
                @if(Auth::user()->role === 'admin')
                    <a id="signupLink" class="nav-link" href="{{ route('dashboard.admin') }}">{{ Auth::user()->name }}</a>
                @else
                    <!-- Jika pengguna bukan admin, tampilkan link ke home atau halaman lain -->
                    <a id="signupLink" class="nav-link" href="{{ route('home') }}">{{ Auth::user()->name }}</a>
                @endif
                
                <!-- Form logout -->
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            @else
                <!-- Jika belum login, tampilkan link untuk signup dan login -->
                <a id="signupLink" class="nav-link" href="{{ route('signupview') }}">Sign up</a>
                <a id="loginLink" type="button" class="btn btn-login" href="{{ route('login') }}">Login</a>
            @endauth
              <!-- <a id="signupLink" class="nav-link" href=" {{ route('signupview') }} ">Sign up</a>
              <a id="loginLink" type="button" class="btn btn-login" href="{{ route('login') }}">Login</a> -->
              <!-- <a id="profileIcon" href="#" class="nav-link">
                <i class="bi bi-person-circle"></i>
              </a> -->
            </div>
        </div>
    </div>
</nav>