<li><a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}"><i class="fa fa-home"></i>
        <span>Beranda</span></a></li>
<div class="container"></div>

@auth
    <li><a class="{{ Request::is('admin') ? 'active' : '' }}" href="{{ url('admin') }}"><i class="fa fa-user"></i>
            <span>Admin</span></a></li>
    <div class="container"></div>
    <li><a class="{{ Request::is('serums') ? 'active' : '' }}" href="{{ url('serums') }}"><i class="fa fa-bug"></i>
            <span>Serum</span></a></li>
    <div class="container"></div>
    <li><a class="{{ Request::is('gejala') ? 'active' : '' }}" href="{{ url('gejala') }}"><i class="fa fa-eyedropper"></i>
            <span>Gejala</span></a></li>
    <div class="container"></div>
    <li><a class="{{ Request::is('pengetahuan') ? 'active' : '' }}" href="{{ url('pengetahuan') }}"><i
                class="fa fa-flask"></i> <span>Pengetahuan</span></a></li>
    <div class="container"></div>
@endauth

@guest
    <li><a class="{{ Request::is('diagnosa') ? 'active' : '' }}" href="{{ url('diagnosa') }}"><i
                class="fa fa-search-plus"></i> <span>Diagnosa</span></a></li>
    <div class="container"></div>
    <li><a class="{{ Request::is('riwayat') ? 'active' : '' }}" href="{{ url('riwayat') }}"><i class="fa fa-clock-o"></i>
            <span>Riwayat</span></a></li>
    <div class="container"></div>
@endguest
