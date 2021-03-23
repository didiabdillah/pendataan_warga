@extends('layout.layout_user')

@section('title', 'Pendataan')

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
                    <h2 class="font-weight-bold mb-5">Live Update</h2>
                </div>
                <div class="col-md-4 text-center mb-5 mb-md-0">
                    <img src="{{URL::asset('assets/user/images/icon-01.png')}}" class="img-fluid" alt="Icon">
                    <p class="font-weight-bold mt-3 mb-0">Confirmed Cases</p>
                    <span class="font-weight-bold blue-text">245,850</span>
                </div>
                <div class="col-md-4 text-center mb-5 mb-md-0">
                    <img src="{{URL::asset('assets/user/images/icon-02.png')}}" class="img-fluid" alt="Icon">
                    <p class="font-weight-bold mt-3 mb-0">Confirmed Cases</p>
                    <span class="font-weight-bold green-text">88,441</span>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{URL::asset('assets/user/images/icon-03.png')}}" class="img-fluid" alt="Icon">
                    <p class="font-weight-bold mt-3 mb-0">Confirmed Cases</p>
                    <span class="font-weight-bold red-text">10,047</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Symptoms Section -->
<section id="home-two-corona-symptom" class="pad-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="hero-text">Formulir Laporan</h1>
                <h4 class="font-weight-bold">Silahkan Isi Formulir Dibawah Ini</h4>
                <div class="ms-spacer-40"></div>
                <form method="POST">
                    <div class="row">
                        <div class="form-group col-12">
                            <input type="text" required="">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>No. NIK/KTP</label>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" required="">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Nama Lengkap (Sesuai KTP)</label>
                        </div>
                        <div class="form-group col-12">
                            <select id="inputState">
                                <option selected>--Jenis Kelamin--</option>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
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
                        </div>
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
                <p class="seperator-line mb-2">VIRUS SPREAD</p>
                <h2 class="font-weight-bold mb-3">Transmission of COVID - 19</h2>
            </div>
            <div class="row">
                <div class="col-lg-7 mx-2 mx-md-auto">
                    <img src="{{URL::asset('assets/user/images/home2-man-with-icon.png')}}" class="img-fluid" alt="Image">
                </div>
                <div class="col-lg-5 mt-4 mt-lg-0">
                    <div class="text-one">
                        <h5 class="font-weight-bold mb-0">Air Transmission</h5>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="ms-spacer-30"></div>
                    <div class="text-two">
                        <h5 class="font-weight-bold mb-0">Human Contact</h5>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="ms-spacer-30"></div>
                    <div class="text-three">
                        <h5 class="font-weight-bold mb-0">Contaminated Objects</h5>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="ms-spacer-30"></div>
                    <div class="text-four">
                        <h5 class="font-weight-bold mb-0">Eating Non-Veg</h5>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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
                    <p class="seperator-line mb-2">PREVENTION</p>
                    <h2 class="font-weight-bold mb-3 text-white">Protect Yourself</h2>
                </div>
            </div>
            <div class="ms-spacer-30"></div>
            <div class="row home2-special-pad">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="{{URL::asset('assets/user/images/home2-protect-01.png')}}" class="img-fluid" alt="Image">
                    <h5 class="font-weight-bold text-white mt-3">Stay at home</h5>
                </div>
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="{{URL::asset('assets/user/images/home2-protect-02.png')}}" class="img-fluid" alt="Image">
                    <h5 class="font-weight-bold text-white mt-3">Avoid close contact</h5>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{URL::asset('assets/user/images/home2-protect-03.png')}}" class="img-fluid" alt="Image">
                    <h5 class="font-weight-bold text-white mt-3">Clean and disinfect</h5>
                </div>
            </div>
            <div class="ms-spacer-30"></div>
            <div class="row home2-special-pad">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="{{URL::asset('assets/user/images/home2-protect-04.png')}}" class="img-fluid" alt="Image">
                    <h5 class="font-weight-bold text-white mt-3">Cover cough</h5>
                </div>
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="{{URL::asset('assets/user/images/home2-protect-05.png')}}" class="img-fluid" alt="Image">
                    <h5 class="font-weight-bold text-white mt-3">Wear a mask</h5>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{URL::asset('assets/user/images/home2-protect-06.png')}}" class="img-fluid" alt="Image">
                    <h5 class="font-weight-bold text-white mt-3">Clean you hands often</h5>
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