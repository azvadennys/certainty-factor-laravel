@extends('index')
@section('content')
    <div class='row'>
        <div class='col-lg-3 col-xs-6'>
            <!-- small box -->
            <div class='small-box bg-aqua'>
                <div class='inner'>
                    <h3>{{ $total_gejala }}</h3>
                    <p>Total Gejala</p>
                </div>
                <div class='icon'>
                    <i class='ion ion-thermometer'></i>
                </div>
            </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ $total_serum }}</h3>

                    <p>Total Serum</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bug"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{ $total_pengetahuan }}</h3>
                    <p>Total Pengetahuan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-erlenmeyer-flask"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{ $total_pengguna }}</h3>
                    <p>Total Admin Pakar</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <br>
    <div class="row">
        <div class="col-sm-4 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="300ms"
            style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeIn;">
            <div class="single-service">

                {{-- <img src="aset/banner/icon3.png" alt=""> --}}

                <h2>Aplikasi Responsif</h2>
                <p>Aplikasi sistem pakar ini dapat menyesuaikan ukuran perangkat anda, jadi walupun di akses melalui
                    perangkat mobile tetap nyaman juga.</p>
            </div>
        </div>
        <div class="col-sm-4 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="600ms"
            style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeIn;">
            <div class="single-service">

                {{-- <img src="aset/banner/icon2.png" alt=""> --}}

                <h2>Sahabat Kecantikan</h2>
                <p>Sistem Pakar ini terus di sesuaikan perhitungan diagnosanya, supaya akurasi terhadap penyakit yang
                    diderita lebih sesuai dan menjadi acuan peternak.</p>
            </div>
        </div>
        <div class="col-sm-4 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="900ms"
            style="visibility: visible; animation-duration: 1000ms; animation-delay: 900ms; animation-name: fadeIn;">
            <div class="single-service">
                {{-- <img src="aset/banner/icon1.png" alt=""> --}}
                <h2>Admin Pakar</h2>
                <p>Terdapat fitur admin pakar, untuk mengatur pengetahuan dan CF pakar, telah di sesuaikan tampilannya
                    sehingga pakar bisa lebih mengeksplore aplikasi.</p>
            </div>
        </div>
    </div>
@endsection
