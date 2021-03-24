@extends('layout.layout_user')

@section('title', 'Cek')

@include('layout.flash_alert')

@section('page')

<!-- Banner Section -->
<div class="ms-spacer-60"></div>
<div class="ms-spacer-60"></div>
<section class="inner-bnr extra-space">
    <div class="container">
        <div class="row">
            <div class="col-12 text-white">
                <h1 class="hero-text">Cek Laporan</h1>
            </div>
        </div>
    </div>
</section>

<!-- Symptoms Section -->
<div class="ms-spacer-60"></div>
<section id="home-two-corona-symptom" class="pad-100">
    <div class="container">
        <form class="form-group mb-0" method="GET" action="">
            @csrf
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group position-relative mb-0">
                        <input type="text" placeholder="Masukan No NIK atau No KTP..." name="nik" id="nik">
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn ms-red-btn position-absolute">
                        <i class="fas fa-search mr-2"></i>Cek Laporan</button>
                </div>
            </div>
        </form>
    </div>
</section>

@if($result)
<!-- Content Area -->
<section id="ms-cart-sec" class="">
    @foreach($result as $data)
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
            <div class="col-4 col-md-4 col-lg-4">
                <h5 class="font-weight-bold">No. NIK/KTP</h5>
            </div>
            <div class="col-1 col-md-1 col-lg-1">
                <h5 class="font-weight-bold"> : </h5>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <h5 class="font-weight-bold">{{$data->report_nik}}</h5>
            </div>
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4 col-md-4 col-lg-4">
                <h5 class="font-weight-bold">Nama Lengkap</h5>
            </div>
            <div class="col-1 col-md-1 col-lg-1">
                <h5 class="font-weight-bold"> : </h5>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <h5 class="font-weight-bold">{{$data->report_name}}</h5>
            </div>
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4 col-md-4 col-lg-4">
                <h5 class="font-weight-bold">Jenis Kelamin</h5>
            </div>
            <div class="col-1 col-md-1 col-lg-1">
                <h5 class="font-weight-bold"> : </h5>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <h5 class="font-weight-bold">
                    @if($data->report_sex == 0)
                    {{'Laki-Laki'}}
                    @else
                    {{'Perempuan'}}
                    @endif
                </h5>
            </div>
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
        </div>

        {{--
        <div class="row align-items-center">
            <div class="col-4 col-md-4 col-lg-4">
                <h5 class="font-weight-bold">Tempat Lahir</h5>
            </div>
            <div class="col-1 col-md-1 col-lg-1">
                <h5 class="font-weight-bold"> : </h5>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <h5 class="font-weight-bold">Indramayu</h5>
            </div>
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4 col-md-4 col-lg-4">
                <h5 class="font-weight-bold">Tanggal Lahir</h5>
            </div>
            <div class="col-1 col-md-1 col-lg-1">
                <h5 class="font-weight-bold"> : </h5>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <h5 class="font-weight-bold">25 Juli 2001</h5>
            </div>
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4 col-md-4 col-lg-4">
                <h5 class="font-weight-bold">No. Telp/HP</h5>
            </div>
            <div class="col-1 col-md-1 col-lg-1">
                <h5 class="font-weight-bold"> : </h5>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <h5 class="font-weight-bold">081234567890</h5>
            </div>
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4 col-md-4 col-lg-4">
                <h5 class="font-weight-bold">Alamat Lengkap</h5>
            </div>
            <div class="col-1 col-md-1 col-lg-1">
                <h5 class="font-weight-bold"> : </h5>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <h5 class="font-weight-bold">Jl. Soekarno Hatta komplek LIK B14 Gedebage, Jawa Barat</h5>
            </div>
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4 col-md-4 col-lg-4">
                <h5 class="font-weight-bold">Pekerjaan</h5>
            </div>
            <div class="col-1 col-md-1 col-lg-1">
                <h5 class="font-weight-bold"> : </h5>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <h5 class="font-weight-bold">Wiraswasta</h5>
            </div>
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
        </div>
        --}}
    </div>
    @endforeach
</section>
@endif

<!-- Footer Section -->
<div class="ms-spacer-60"></div>
<div class="ms-spacer-60"></div>
<footer id="footer-home-two">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-lg-6 text-white align-self-center">
                <p class="seperator-line mb-2">EMERGENCY DETAILS</p>
                <h2 class="font-weight-bold mb-4 mb-md-0">How Can We Help?</h2>
            </div>
            <div class="col-md-7 col-lg-6">
                <div class="contact-info">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-2 ms-title-15">Emergency Contact</p>
                            <h5 class="font-weight-bold mb-0"><a href="tel:+1234567890">+1 234 567 890</a></h5>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-2 ms-title-15">Email us</p>
                            <h5 class="font-weight-bold mb-0"><a href="mailto:help@coroso.com">help@coroso.com</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ms-spacer-60"></div>

        <div class="row footer-bottom text-center">
            <div class="col-md-12">
                <p class="text-white">@ Copyright 2020 Coroso. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

</div> <!-- Body Wrapper Ends -->

@endsection