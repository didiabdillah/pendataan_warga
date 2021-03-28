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
                <h5 class="font-weight-bold">Laporan Tanggal</h5>
            </div>
            <div class="col-1 col-md-1 col-lg-1">
                <h5 class="font-weight-bold"> : </h5>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <h5 class="font-weight-bold">{{Carbon\Carbon::parse($data->created_at)->isoFormat('D MMMM Y')}}</h5>
            </div>
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
        </div>
        <div class="row align-items-center">
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
        <div class="row align-items-center">
            <div class="col-4 col-md-4 col-lg-4">
                <h5 class="font-weight-bold">Tempat Lahir</h5>
            </div>
            <div class="col-1 col-md-1 col-lg-1">
                <h5 class="font-weight-bold"> : </h5>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <h5 class="font-weight-bold">{{$data->report_birth_place}}</h5>
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
                <h5 class="font-weight-bold">{{Carbon\Carbon::parse($data->report_birth_date)->isoFormat('D MMMM Y')}}</h5>
            </div>
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4 col-md-4 col-lg-4">
                <h5 class="font-weight-bold">Alamat</h5>
            </div>
            <div class="col-1 col-md-1 col-lg-1">
                <h5 class="font-weight-bold"> : </h5>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <h5 class="font-weight-bold">{{$data->report_address}}</h5>
            </div>
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4 col-md-4 col-lg-4">
                <h5 class="font-weight-bold">RT</h5>
            </div>
            <div class="col-1 col-md-1 col-lg-1">
                <h5 class="font-weight-bold"> : </h5>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <h5 class="font-weight-bold">{{$data->report_rt}}</h5>
            </div>
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4 col-md-4 col-lg-4">
                <h5 class="font-weight-bold">RW</h5>
            </div>
            <div class="col-1 col-md-1 col-lg-1">
                <h5 class="font-weight-bold"> : </h5>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <h5 class="font-weight-bold">{{$data->report_rw}}</h5>
            </div>
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4 col-md-4 col-lg-4">
                <h5 class="font-weight-bold">No Telp/HP</h5>
            </div>
            <div class="col-1 col-md-1 col-lg-1">
                <h5 class="font-weight-bold"> : </h5>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <h5 class="font-weight-bold">{{$data->report_phone}}</h5>
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
                <h5 class="font-weight-bold">{{$data->report_job}}</h5>
            </div>
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4 col-md-4 col-lg-4">
                <h5 class="font-weight-bold">Datang Dari</h5>
            </div>
            <div class="col-1 col-md-1 col-lg-1">
                <h5 class="font-weight-bold"> : </h5>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <h5 class="font-weight-bold">{{$data->regency . ', ' . $data->province}}</h5>
            </div>
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4 col-md-4 col-lg-4">
                <h5 class="font-weight-bold">Lama Di Luar Kota</h5>
            </div>
            <div class="col-1 col-md-1 col-lg-1">
                <h5 class="font-weight-bold"> : </h5>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <h5 class="font-weight-bold">{{$data->report_duration}}</h5>
            </div>
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4 col-md-4 col-lg-4">
                <h5 class="font-weight-bold">Tujuan Di Luar Kota</h5>
            </div>
            <div class="col-1 col-md-1 col-lg-1">
                <h5 class="font-weight-bold"> : </h5>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <h5 class="font-weight-bold">{{$data->report_purpose}}</h5>
            </div>
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4 col-md-4 col-lg-4">
                <h5 class="font-weight-bold">Kondisi Saat Ini</h5>
            </div>
            <div class="col-1 col-md-1 col-lg-1">
                <h5 class="font-weight-bold"> : </h5>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <h5 class="font-weight-bold">{{$data->report_health_status}}</h5>
            </div>
            <div class="col-md-12">
                <div class="ms-seperator"></div>
            </div>
        </div>
    </div>
    @endforeach
</section>
@endif

<!-- Footer Section -->
<div class="ms-spacer-60"></div>
<div class="ms-spacer-60"></div>


@endsection