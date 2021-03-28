@extends('layout.layout_user')

@section('title', 'Pendataan')

@include('layout.flash_alert')

@section('page')

<!-- Banner Section -->
<div class="ms-spacer-60"></div>
<div class="ms-spacer-60"></div>
<section class="inner-bnr extra-space">
    <div class="container">
        <div class="row">
            <div class="col-12 text-white">
                <h2 class="hero-text">Waspada Covid-19</h2>
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
<section id="form" class="pad-50">
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
                            <input type="text" name="nik" id="nik" class="@error('nik') is-invalid @enderror" value="{{old('nik')}}">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>No. NIK/KTP</label>
                            @error('nik')
                            <small id="emailHelp" class="form-text text-muted text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror" value="{{old('name')}}">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Nama Lengkap (Sesuai KTP)</label>
                            @error('name')
                            <small id="emailHelp" class="form-text text-muted text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <select name="sex" id="sex" class="@error('sex') is-invalid @enderror">
                                <option value="">--Pilih Jenis Kelamin--</option>
                                <option value="0" @if(old('sex')=='0' ) selected @endif>Laki-Laki</option>
                                <option value="1" @if(old('sex')=='1' ) selected @endif>Perempuan</option>
                            </select>
                            @error('sex')
                            <small id="emailHelp" class="form-text text-muted text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <input type="text" name="birth_place" id="birth_place" class="@error('birth_place') is-invalid @enderror">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Tempat Lahir</label>
                            @error('birth_place')
                            <small id="emailHelp" class="form-text text-muted text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <input type="date" name="birth_date" id="birth_date" class="@error('birth_date') is-invalid @enderror">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Tanggal Lahir</label>
                            @error('birth_date')
                            <small id="emailHelp" class="form-text text-muted text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <input type="text" name="address" id="address" class="@error('address') is-invalid @enderror">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Alamat</label>
                            @error('address')
                            <small id="emailHelp" class="form-text text-muted text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <input type="text" name="rt" id="rt" class="@error('rt') is-invalid @enderror">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>RT</label>
                            @error('rt')
                            <small id="emailHelp" class="form-text text-muted text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <input type="text" name="rw" id="rw" class="@error('rw') is-invalid @enderror">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>RW</label>
                            @error('rw')
                            <small id="emailHelp" class="form-text text-muted text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <input type="text" name="phone" id="phone" class="@error('phone') is-invalid @enderror">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>No Telephone</label>
                            @error('phone')
                            <small id="emailHelp" class="form-text text-muted text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <input type="text" name="job" id="job" class="@error('job') is-invalid @enderror">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Pekerjaan</label>
                            @error('job')
                            <small id="emailHelp" class="form-text text-muted text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <select name="province" id="province" class="@error('province') is-invalid @enderror">
                                <option value="">--Datang Dari Provinsi--</option>
                                @foreach($provinces as $data)
                                <option value="{{$data->id}}" @if(old('province')==$data->id ) selected @endif>{{$data->name}}</option>
                                @endforeach
                            </select>
                            @error('province')
                            <small id="emailHelp" class="form-text text-muted text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <select name="regency" id="regency" class="@error('regency') is-invalid @enderror">
                                <option value="">--Datang Dari Kabupaten/Kota--</option>
                                @foreach($regencies as $data)
                                <option value="{{$data->id}}" @if(old('regency')==$data->id ) selected @endif>{{$data->name}}</option>
                                @endforeach
                            </select>
                            @error('regency')
                            <small id="emailHelp" class="form-text text-muted text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <input type=" text" name="duration" id="duration" class="@error('duration') is-invalid @enderror">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Lama Di Luar Kota</label>
                            @error('duration')
                            <small id="emailHelp" class="form-text text-muted text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <input type=" text" name="purpose" id="purpose" class="@error('purpose') is-invalid @enderror">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Tujuan Di Luar Kota</label>
                            @error('purpose')
                            <small id="emailHelp" class="form-text text-muted text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <select name="health_status" id="health_status" class="@error('health_status') is-invalid @enderror">
                                <option value="">--Kondisi Saat Ini--</option>
                                <option value="sehat" @if(old('health_status')=='sehat' ) selected @endif>Sehat</option>
                                <option value="sakit" @if(old('health_status')=='sakit' ) selected @endif>Sakit</option>
                            </select>
                            @error('health_status')
                            <small id="emailHelp" class="form-text text-muted text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 
                      
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

<!-- Select2 -->
<script src="{{URL::asset('assets/admin/js/select2/js/select2.full.min.js')}}"></script>

<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()
    });
</script>

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