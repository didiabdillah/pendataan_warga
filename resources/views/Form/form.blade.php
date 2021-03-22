@extends('Templates.layout_user')

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
<section id="ms-update-sec" class="pad-100">
    <div class="container">
        <div class="live-update bg-white">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="font-weight-bold mb-5">Live Update</h2>
                </div>
                <div class="col-md-4 text-center mb-5 mb-md-0">
                    <img src="{{URL::asset('assets/images/icon-01.png')}}" class="img-fluid" alt="Icon">
                    <p class="font-weight-bold mt-3 mb-0">Confirmed Cases</p>
                    <span class="font-weight-bold blue-text">245,850</span>
                </div>
                <div class="col-md-4 text-center mb-5 mb-md-0">
                    <img src="{{URL::asset('assets/images/icon-02.png')}}" class="img-fluid" alt="Icon">
                    <p class="font-weight-bold mt-3 mb-0">Confirmed Cases</p>
                    <span class="font-weight-bold green-text">88,441</span>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{URL::asset('assets/images/icon-03.png')}}" class="img-fluid" alt="Icon">
                    <p class="font-weight-bold mt-3 mb-0">Confirmed Cases</p>
                    <span class="font-weight-bold red-text">10,047</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="seperator-line mb-2">COVID-19</p>
                <h2 class="font-weight-bold text-white mb-3">What is Coronavirus?</h2>
                <p class="update-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum dummy text. ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="ms-spacer-30"></div>

            </div>
        </div>
    </div>
</section>

<!-- Symptoms Section -->
<section id="home-two-corona-symptom" class="pad-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <p class="seperator-line mb-2">SYMPTOMS</p>
                <h2 class="font-weight-bold mb-3">Corona Virus Symptoms</h2>
                <p class="home-two-main-color mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled.</p>
                <img src="{{URL::asset('assets/images/corona-img-01.png')}}" class="img-fluid first-img" alt="Image">
                <img src="{{URL::asset('assets/images/corona-img-02.png')}}" class="img-fluid" alt="Image">
            </div>
            <div class="col-lg-9 pl-lg-5">
                <div class="row">
                    <div class="col-md-6 pr-md-1 pb-md-1">
                        <div class="ms-symptom-box box-1">
                            <div class="ms-content-overlay">
                                <div class="ms-content-details text-white">
                                    <h4 class="font-weight-bold mb-3">High Temp</h4>
                                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                                    <!-- <a href="contact.html" class="btn ms-red-btn ms-icon-btn ms-white-btn mt-2">Learn More<span class="fs1 hover-icon ml-2" aria-hidden="true" data-icon="$"></span></a> -->
                                    <a href="contact.html" class="btn ms-red-btn  ms-white-btn mt-2">Learn More<img class="pl-2" src="{{URL::asset('assets/images/arrow_right.svg')}}" width="32px" alt="Icon"></a>

                                </div>
                            </div>
                            <img class="img-fluid" src="{{URL::asset('assets/images/home_2_symptoms_01.jpg')}}" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-6 pl-md-1 pb-md-1">
                        <div class="ms-symptom-box box-2">
                            <div class="ms-content-overlay">
                                <div class="ms-content-details text-white">
                                    <h4 class="font-weight-bold mb-3">Sore Throat</h4>
                                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                                    <a href="contact.html" class="btn ms-red-btn  ms-white-btn mt-2">Learn More<img class="pl-2" src="{{URL::asset('assets/images/arrow_right.svg')}}" width="32px" alt="Icon"></a>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{URL::asset('assets/images/home_2_symptoms_02.jpg')}}" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-6 pr-md-1 pt-md-1">
                        <div class="ms-symptom-box box-3">
                            <div class="ms-content-overlay">
                                <div class="ms-content-details text-white">
                                    <h4 class="font-weight-bold mb-3">Heavy Breathe</h4>
                                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                                    <a href="contact.html" class="btn ms-red-btn  ms-white-btn mt-2">Learn More<img class="pl-2" src="{{URL::asset('assets/images/arrow_right.svg')}}" width="32px" alt="Icon"></a>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{URL::asset('assets/images/home_2_symptoms_03.jpg')}}" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-6 pl-md-1 pt-md-1">
                        <div class="ms-symptom-box box-4">
                            <div class="ms-content-overlay">
                                <div class="ms-content-details text-white">
                                    <h4 class="font-weight-bold mb-3">Cough</h4>
                                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                                    <a href="contact.html" class="btn ms-red-btn  ms-white-btn mt-2">Learn More<img class="pl-2" src="{{URL::asset('assets/images/arrow_right.svg')}}" width="32px" alt="Icon"></a>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{URL::asset('assets/images/home_2_symptoms_04.jpg')}}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Clients Section -->
<section id="home-two-clients-sec" class="pad-100">
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <p class="seperator-line mb-2">WHO WE WORK WITH</p>
                <h2 class="font-weight-bold mb-3 text-white">Our Clients</h2>
                <div class="ms-spacer-30"></div>
                <div class="row">
                    <div class="col-6 col-md-3 text-center">
                        <div class="ms-client-img mb-4 mb-md-0">
                            <img src="{{URL::asset('assets/images/home2_client_1.png')}}" class="img-fluid" alt="Image">
                        </div>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <div class="ms-client-img mb-4 mb-md-0">
                            <img src="{{URL::asset('assets/images/home2_client_2.png')}}" class="img-fluid" alt="Image">
                        </div>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <div class="ms-client-img mb-4 mb-md-0">
                            <img src="{{URL::asset('assets/images/home2_client_3.png')}}" class="img-fluid" alt="Image">
                        </div>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <div class="ms-client-img mb-4 mb-md-0">
                            <img src="{{URL::asset('assets/images/home2_client_4.png')}}" class="img-fluid" alt="Image">
                        </div>
                    </div>
                </div>
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
                    <img src="{{URL::asset('assets/images/home2-man-with-icon.png')}}" class="img-fluid" alt="Image">
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
                    <img src="{{URL::asset('assets/images/home2-protect-01.png')}}" class="img-fluid" alt="Image">
                    <h5 class="font-weight-bold text-white mt-3">Stay at home</h5>
                </div>
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="{{URL::asset('assets/images/home2-protect-02.png')}}" class="img-fluid" alt="Image">
                    <h5 class="font-weight-bold text-white mt-3">Avoid close contact</h5>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{URL::asset('assets/images/home2-protect-03.png')}}" class="img-fluid" alt="Image">
                    <h5 class="font-weight-bold text-white mt-3">Clean and disinfect</h5>
                </div>
            </div>
            <div class="ms-spacer-30"></div>
            <div class="row home2-special-pad">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="{{URL::asset('assets/images/home2-protect-04.png')}}" class="img-fluid" alt="Image">
                    <h5 class="font-weight-bold text-white mt-3">Cover cough</h5>
                </div>
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="{{URL::asset('assets/images/home2-protect-05.png')}}" class="img-fluid" alt="Image">
                    <h5 class="font-weight-bold text-white mt-3">Wear a mask</h5>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{URL::asset('assets/images/home2-protect-06.png')}}" class="img-fluid" alt="Image">
                    <h5 class="font-weight-bold text-white mt-3">Clean you hands often</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="side-image">
        <img src="{{URL::asset('assets/images/home2-protect-img.png')}}" class="img-fluid" alt="Image">
    </div>
</section>

<!-- Footer Section -->
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
        <div class="bg-white footer-main">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0 text-md-center text-lg-left">
                    <a href="index-2.html"><img src="{{URL::asset('assets/images/footer-red-logo.png')}}" class="img-fluid" alt="Logo"></a>
                    <div class="ms-spacer-30"></div>
                    <p class="contact-text">1525 Saint Marys, Jackson Blvd,<br>
                        Chicago, New York, USA</p>
                    <p class="mb-0 contact-text">hello@coroso.com</p>
                    <p class="contact-text">+1 234 567 890</p>
                    <a href="contact.html" class="btn ms-red-btn mt-3">Emergency Help</a>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <p class="footer-title">NAVIGATION</p>
                            <div class="links">
                                <p><a href="index-2.html">Home V1</a></p>
                                <p><a href="home_two.html">Home V2</a></p>
                                <p><a href="team.html">Doctors</a></p>
                                <p><a href="contact.html">Contact Us</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <p class="footer-title">SUPPORT</p>
                            <div class="links">
                                <p><a href="404_error.html">404 Error</a></p>
                                <p><a href="cart.html">Cart</a></p>
                                <p><a href="faq.html">FAQs</a></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <p class="footer-title">FIND US HERE</p>
                            <div class="links">
                                <p><a href="https://www.facebook.com/daatcreations" target="_blank">Facebook</a></p>
                                <p><a href="https://twitter.com/Tasfi12" target="_blank">Twitter</a></p>
                                <p><a href="https://www.instagram.com/daat.creations" target="_blank">Instagram</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="ms-spacer-30"></div>
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="mb-0 font-weight-bold mb-3 mb-md-0">Subscribe to the Coroso newsletter</h4>
                        </div>
                        <div class="col-md-8 align-self-center">
                            <form class="form-group mb-0">
                                <div class="form-group position-relative mb-0">
                                    <input type="email" placeholder="Enter your email...">
                                </div>
                                <button type="submit" class="btn ms-red-btn position-absolute"><svg class="svg-inline--fa fa-envelope-open fa-w-16 mr-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="envelope-open" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M494.586 164.516c-4.697-3.883-111.723-89.95-135.251-108.657C337.231 38.191 299.437 0 256 0c-43.205 0-80.636 37.717-103.335 55.859-24.463 19.45-131.07 105.195-135.15 108.549A48.004 48.004 0 0 0 0 201.485V464c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V201.509a48 48 0 0 0-17.414-36.993zM464 458a6 6 0 0 1-6 6H54a6 6 0 0 1-6-6V204.347c0-1.813.816-3.526 2.226-4.665 15.87-12.814 108.793-87.554 132.364-106.293C200.755 78.88 232.398 48 256 48c23.693 0 55.857 31.369 73.41 45.389 23.573 18.741 116.503 93.493 132.366 106.316a5.99 5.99 0 0 1 2.224 4.663V458zm-31.991-187.704c4.249 5.159 3.465 12.795-1.745 16.981-28.975 23.283-59.274 47.597-70.929 56.863C336.636 362.283 299.205 400 256 400c-43.452 0-81.287-38.237-103.335-55.86-11.279-8.967-41.744-33.413-70.927-56.865-5.21-4.187-5.993-11.822-1.745-16.981l15.258-18.528c4.178-5.073 11.657-5.843 16.779-1.726 28.618 23.001 58.566 47.035 70.56 56.571C200.143 320.631 232.307 352 256 352c23.602 0 55.246-30.88 73.41-45.389 11.994-9.535 41.944-33.57 70.563-56.568 5.122-4.116 12.601-3.346 16.778 1.727l15.258 18.526z"></path>
                                    </svg><!-- <i class="far fa-envelope-open mr-2"></i> -->Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ms-spacer-30"></div>
        <div class="row footer-bottom text-center">
            <div class="col-md-12">
                <p class="text-white">@ Copyright 2020 Coroso. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

</div> <!-- Body Wrapper Ends -->

@endsection