<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">
            {{-- <img src="assets/img/logo.png" alt=""> --}}
            <h1 class="sitename">Certainty Factor</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}"><i
                            class="fa fa-home"></i> Beranda</a></li>
                <li><a class="{{ Request::is('konsultasi*') ? 'active' : '' }}" href="{{ url('konsultasi') }}"><i
                            class="fa fa-search-plus"></i> Konsultasi</a></li>

                @auth
                    @if (auth()->user()->role == 'admin')
                        <li><a class="{{ Request::is('users*') ? 'active' : '' }}" href="{{ url('users') }}"><i
                                    class="fa fa-user"></i> Pengguna</a></li>
                        <li><a class="{{ Request::is('serums*') ? 'active' : '' }}" href="{{ url('serums') }}"><i
                                    class="fa fa-bug"></i> Serum</a></li>
                        <li><a class="{{ Request::is('gejalas*') ? 'active' : '' }}" href="{{ url('gejalas') }}"><i
                                    class="fa fa-eyedropper"></i> Gejala</a></li>
                        <li><a class="{{ Request::is('pengetahuan*') ? 'active' : '' }}"
                                href="{{ url('pengetahuan') }}"><i class="fa fa-flask"></i> Pengetahuan</a></li>
                        <li><a class="{{ Request::is('animasi*') ? 'active' : '' }}" href="{{ url('animasi') }}"><i
                                    class="fa fa-eyedropper"></i> Animasi</a></li>
                    @endif
                @endauth

                <li><a class="{{ Request::is('riwayat*') ? 'active' : '' }}" href="{{ url('riwayat') }}"><i
                            class="fa fa-clock-o"></i> Riwayat</a></li>
                @guest
                    <li>
                        <a class=" {{ Request::is('register*') ? 'active' : '' }}" href="{{ route('register') }}">
                            <i class="fa fa-sign-up"></i> <span>Registrasi</span>
                        </a>
                    </li>
                @endguest
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        @guest
            <a class="btn-getstarted" href="{{ route('login') }}">Login</a>
        @endguest
        @auth
            <a class="btn-getstarted" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i> <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endauth
    </div>
</header>
