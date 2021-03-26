@extends('layout.layout_user')

@section('title', 'Pendataan')

@include('layout.flash_alert')

@section('page')

<!-- Banner Section -->
<section id="home-two-bnr" class="position-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p class="seperator-line mb-2">WE PROVIDE</p>
                <h1 class="hero-text home-two-main-color">Better Service to Protect Virus</h1>
                <p class="font-weight-bold home-two-main-color">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since galley of type a type specimen book</p>
                <div class="ms-spacer-40"></div>
            </div>
        </div>
    </div>
</section>

<!-- Live Update Section -->
<section id="" class="pad-100">
    <div class="container">
        <div class="live-update bg-white">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="font-weight-bold mb-5">Perkembangan Kasus Covid-19 Di Indonesia</h2>
                </div>
                <div class="col-md-4 text-center mb-5 mb-md-0">
                    <img src="{{URL::asset('assets/user/images/icon-01.png')}}" class="img-fluid" alt="Icon">
                    <p class="font-weight-bold mt-3 mb-0">Positif</p>
                    <span class="font-weight-bold blue-text" id="positif">-</span>
                </div>
                <div class="col-md-4 text-center mb-5 mb-md-0">
                    <img src="{{URL::asset('assets/user/images/icon-02.png')}}" class="img-fluid" alt="Icon">
                    <p class="font-weight-bold mt-3 mb-0">Sembuh</p>
                    <span class="font-weight-bold green-text" id="sembuh">-</span>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{URL::asset('assets/user/images/icon-03.png')}}" class="img-fluid" alt="Icon">
                    <p class="font-weight-bold mt-3 mb-0">Meninggal</p>
                    <span class="font-weight-bold red-text" id="meninggal">-</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Symptoms Section -->
<section id="form" class="pad-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="hero-text">Formulir Laporan</h1>
                <h4 class="font-weight-bold">Silahkan Isi Formulir Dibawah Ini</h4>
                <div class="ms-spacer-40"></div>
                <form method="POST" action="{{route('landing_form_process')}}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12">
                            <input type="text" name="nik" id="nik">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>No. NIK/KTP</label>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" name="name" id="name">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Nama Lengkap (Sesuai KTP)</label>
                        </div>
                        <div class="form-group col-12">
                            <select name="sex" id="sex">
                                <option value="">--Jenis Kelamin--</option>
                                <option value="0">Laki-Laki</option>
                                <option value="1">Perempuan</option>
                            </select>
                        </div>
                        <!-- <div class="form-group col-12">
                            <input type="text" required="">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Tempat Lahir</label>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" required="">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Tanggal Lahir</label>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" required="">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>No. Telp/HP</label>
                        </div>
                        <div class="mt-2 form-group col-md-12 ">
                            <textarea rows="3" required=""></textarea>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Alamat Lengkap</label>
                        </div>
                        <div class="form-group col-12 mb-4">
                            <input type="text" required="">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Pekerjaan</label>
                        </div> -->
                        <div class="mt-2 form-group col-md-12">
                            <button type="submit" class="btn ms-primary-btn">KIRIM LAPORAN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Virus Spread Section -->
<section id="home-two-spread-sec" class="pad-100">
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <p class="seperator-line mb-2">PENYEBARAN VIRUS</p>
                <h2 class="font-weight-bold mb-3">Penularan COVID - 19</h2>
            </div>
            <div class="row">
                <div class="col-lg-7 mx-2 mx-md-auto">
                    <img src="{{URL::asset('assets/user/images/home2-man-with-icon.png')}}" class="img-fluid" alt="Image">
                </div>
                <div class="col-lg-5 mt-4 mt-lg-0">
                    <div class="text-one">
                        <h5 class="font-weight-bold mb-0">Melalui udara</h5>
                        <p class="mb-0">WHO mengakui adanya bukti bahwa virus Corona bisa menyebar melalui partikel kecil yang melayang di udara.</p>
                    </div>
                    <div class="ms-spacer-30"></div>
                    <div class="text-two">
                        <h5 class="font-weight-bold mb-0">Kontak dekat dengan pasien</h5>
                        <p class="mb-0">Keluarga, petugas medis, atau bahkan orang yang sempat berada dekat dengan pasien rentan untuk tertular.</p>
                    </div>
                    <div class="ms-spacer-30"></div>
                    <div class="text-three">
                        <h5 class="font-weight-bold mb-0">Benda terkontaminasi</h5>
                        <p class="mb-0">Penularan terjadi saat seseorang menyentuh permukaan telah terkontaminasi virus dari orang yang batuk atau bersin.</p>
                    </div>
                    <div class="ms-spacer-30"></div>
                    <div class="text-four">
                        <h5 class="font-weight-bold mb-0">Cairan dan droplet</h5>
                        <p class="mb-0">Penularan terjadi melalui droplet saat seseorang batuk, bersin, bernyanyi, berbicara, hingga bernapas. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Prevention Section -->
<section id="ms-prevention-sec" class="position-relative">
    <div class="ms-blue-bg pad-100"></div>
    <div class="container">
        <div class="protect-container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-weight-bold mb-3 text-white">Lindungi Diri Anda</h2>
                </div>
            </div>
            <div class="ms-spacer-30"></div>
            <div class="row home2-special-pad">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="{{URL::asset('assets/user/images/home2-protect-01.png')}}" class="img-fluid" alt="Image">
                    <h5 class="font-weight-bold text-white mt-3">Tinggal di rumah</h5>
                </div>
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="{{URL::asset('assets/user/images/home2-protect-02.png')}}" class="img-fluid" alt="Image">
                    <h5 class="font-weight-bold text-white mt-3">Hindari kontak dekat</h5>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{URL::asset('assets/user/images/home2-protect-03.png')}}" class="img-fluid" alt="Image">
                    <h5 class="font-weight-bold text-white mt-3">Jaga kebersihan</h5>
                </div>
            </div>
            <div class="ms-spacer-30"></div>
            <div class="row home2-special-pad">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="{{URL::asset('assets/user/images/home2-protect-04.png')}}" class="img-fluid" alt="Image">
                    <h5 class="font-weight-bold text-white mt-3">Jangan batuk sembarangan</h5>
                </div>
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="{{URL::asset('assets/user/images/home2-protect-05.png')}}" class="img-fluid" alt="Image">
                    <h5 class="font-weight-bold text-white mt-3">Gunakan masker</h5>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{URL::asset('assets/user/images/home2-protect-06.png')}}" class="img-fluid" alt="Image">
                    <h5 class="font-weight-bold text-white mt-3">Rajin cuci tangan</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="side-image">
        <img src="{{URL::asset('assets/user/images/home2-protect-img.png')}}" class="img-fluid" alt="Image">
    </div>
</section>

<!-- Footer Section -->
<div class="ms-spacer-60"></div>


@endsection

@push('script')
{{--
<script>
    $(function() {
        $('#form').animate({
            scrollTop: $('#form').get(0).scrollHeight
        }, 50);
    });
</script>
--}}

<script>
    // Ajax setup from csrf token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(function() {
        var id = 0;

        //generate Content Chart
        $.ajax({
            url: "{{route('landing_covid')}}",
            method: "POST",
            data: {
                id: id
            },

            dataType: 'json',
            success: function(data) {
                $('#positif').empty();
                $('#positif').append(data[0].positif);

                $('#sembuh').empty();
                $('#sembuh').append(data[0].sembuh);

                $('#meninggal').empty();
                $('#meninggal').append(data[0].meninggal);
            }
        });

        return false;
    });
</script>
@endpush