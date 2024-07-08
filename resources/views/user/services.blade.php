{{-- <!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>iNext</title> --}}
@include('user.layouts.header')

 <!-- services top banner starts -->
    <section class="services-banner">
        <div class="container-lg">
            <div class="home-top-heading d-flex justify-content-center flex-sm-row flex-column-reverse">
                <div class="home-top-sc-icon d-flex flex-sm-column justify-content-sm-center 
                    justify-content-between col-sm-2 col-4">
                    <a href="https://www.facebook.com/people/Pilare-Trading-Company/61559142998770/?mibextid=ZbWKwL" target="_blank" ><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/pilaretradingcompany/" target="_blank" ><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/pilaretradingcompany/" target="_blank" ><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <div class="d-flex flex-column justify-content-center">
                    <h1>Grow <br> Beyond <br> Borders...</h1>
                    <br>
                    <p class="text-white col-lg-8 col-md-6 col-9">To make the world your new marketplace. get in touch
                        with us
                        today. Click on the get started button.
                    </p>
                    <a href="{{route('products')}}" class="w-active">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Section starts -->
    <section>
        <div class="container-lg py-5">
            <div class="d-md-flex py-md-5 py-4">
                <div class="col-md-6 my-2">
                    <div class="head d-flex flex-column justify-content-between h-100">
                        <div>
                            <span
                                class="bg-secondary-color main-color text-capitalize px-2 rounded-5 py-1 fw-medium">What
                                we do</span>
                            <h2 class="text-uppercase fw-bold mt-3">Driving <span class="main-color">Global Trade
                                    Excellence</span></h2>
                        </div>
                        <!-- <div class="mt-3"><a href="" class="g-active">Learn More</a></div> -->
                    </div>
                </div>
                <div class="col-md-6 my-2">
                    <p class="mt-4">At PTC, we orchestrate seamless merchant import, export, and
                        import-export services tailored to your business needs. With a keen focus on efficiency and
                        expertise in navigating international trade regulations, we propel your cross-border
                        transactions towards success. Explore the world of limitless possibilities with our
                        comprehensive solutions, designed to elevate your global commerce journey.</p>
                </div>
            </div>

            <div class="d-md-flex py-md-5 py-4">
                <div class="col-md-6 px-md-3 text-center text-start my-2">
                    <img src="{{asset('assets/images/service-1.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 my-md-auto px-md-3 my-2 position-relative">
                <span class="text-bg">00</span>

                    <h2 class="mb-3 fw-semibold">Our Comprehensive <br> <span class="main-color">Global Services</span>
                    </h2>
                    <p>Welcome to PTC, your trusted partner for comprehensive international trading services in India.
                        With a commitment to excellence and a focus on delivering solutions to meet your unique business
                        needs, we offer a range of services designed to streamline your international trade operations.
                    </p>
                    <br>
                    <a href="{{route('contact_us')}}" class="g-active">Contact us</a>
                </div>
            </div>

            <div class="d-md-flex flex-md-row-reverse py-md-5 py-4">

                <div class="col-md-6 px-md-3 text-center text-md-end my-2">
                    <img src="{{asset('assets/images/service-2.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 my-md-auto px-md-3 my-2 position-relative">
                <span class="text-bg">01</span>
                    <h2 class="mb-3 fw-semibold">Merchant <span class="main-color">Exports</span></h2>
                    <p>Welcome to PTC, your trusted partner for comprehensive international trading services in India.
                        With a commitment to excellence and a focus on delivering solutions to meet your unique business
                        needs, we offer a range of services designed to streamline your international trade operations.
                    </p>
                    <br>
                    <a href="{{route('contact_us')}}" class="g-active">Contact us</a>
                </div>
            </div>

            <div class="d-md-flex py-md-5 py-4">

                <div class="col-md-6 px-md-3 text-center text-start my-2">
                    <img src="{{asset('assets/images/service-3.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 my-md-auto px-md-3 my-2 position-relative">
                <span class="text-bg">02</span>
                    <h2 class="mb-3 fw-semibold">Merchant <span class="main-color"> Imports</span>
                    </h2>
                    <p>Welcome to PTC, your trusted partner for comprehensive international trading services in India.
                        With a commitment to excellence and a focus on delivering solutions to meet your unique business
                        needs, we offer a range of services designed to streamline your international trade operations.
                    </p>
                    <br>
                    <a href="{{route('contact_us')}}" class="g-active">Contact us</a>
                </div>
            </div>

            <div class="d-md-flex flex-md-row-reverse py-md-5 py-4">

                <div class="col-md-6 px-md-3 text-center text-md-end my-2">
                    <img src="{{asset('assets/images/service-4.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 my-md-auto px-md-3 my-2 position-relative">
                <span class="text-bg">03</span>
                    <h2 class="mb-3 fw-semibold">Import-Export - <span class="main-color"> As a Service</span></h2>
                    <p>Welcome to PTC, your trusted partner for comprehensive international trading services in India.
                        With a commitment to excellence and a focus on delivering solutions to meet your unique business
                        needs, we offer a range of services designed to streamline your international trade operations.
                    </p>
                    <br>
                    <a href="{{route('contact_us')}}" class="g-active">Contact us</a>
                </div>
            </div>

        </div>
    </section>
    <!-- Main Section starts -->

@include('user.layouts.footer')