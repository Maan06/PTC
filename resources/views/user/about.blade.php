{{-- <!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>iNext</title> --}}
@include('user.layouts.header')

 <section class="about-us-banner">
        <div class="container-lg">
            <div class="home-top-heading d-flex justify-content-center flex-sm-row flex-column-reverse">
                <div
                    class="home-top-sc-icon d-flex flex-sm-column justify-content-sm-center justify-content-between col-sm-2 col-4">
                    <a href="https://www.facebook.com/people/Pilare-Trading-Company/61559142998770/?mibextid=ZbWKwL" target="_blank" ><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/pilaretradingcompany/" target="_blank" ><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/pilaretradingcompany/" target="_blank" ><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <div class="d-flex flex-column justify-content-center">
                    <h1>Grow <br> Beyond <br> Borders...</h1>
                    <br>
                    <p class="text-white col-lg-8 col-md-6 col-9">To make the world your new marketplace. get in touch with us
                        today. Click on the get started button.
                    </p>
                    <a href="{{route('services')}}" class="w-active">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- marquee text -->
    <div class="marquee_container-180">
        <div class="marquee-180">
            <div class="marquee_group">
                <span><img src="{{asset('assets/images/icons/star.png')}}" alt=""></span>
                <span>Merchant Exports</span>
            </div>
            <div class="marquee_group">
                <span><img src="{{asset('assets/images/icons/star.png')}}" alt=""></span>
                <span class="stroke-marque">Merchant Exports</span>
            </div>
            <div class="marquee_group">
                <span><img src="{{asset('assets/images/icons/star.png')}}" alt=""></span>
                <span>Merchant Exports</span>
            </div>
            <div class="marquee_group">
                <span><img src="{{asset('assets/images/icons/star.png')}}" alt=""></span>
                <span class="stroke-marque">Merchant Exports</span>
            </div>
            <div class="marquee_group">
                <span><img src="{{asset('assets/images/icons/star.png')}}" alt=""></span>
                <span>Merchant Exports</span>
            </div>
            <div class="marquee_group">
                <span><img src="{{asset('assets/images/icons/star.png')}}" alt=""></span>
                <span class="stroke-marque">Merchant Exports</span>
            </div>
        </div>
    </div>
    <!-- marquee text -->
    <!-- about us top banner starts -->
    <!-- About Company starts -->
    <section class="bg-primary-color py-5">
        <div class="container-lg">
            <div class="d-md-flex">
                <div class="col-md-6 text-center text-md-start mt-3"><img src="{{asset('assets/images/about-1.png')}}"
                        class="img-fluid" alt=""></div>
                <div class="col-md-6 mt-3">
                    <div>
                        <h2 class="text-uppercase fw-bold mt-3 main-color">About company</h2>
                        <p>From the bustling streets of Mumbai to the cultural town of Raipur, there exists a nexus of
                            international trade expertise - Pilare Trading Company. Born from the entrepreneurial spirit
                            of the Pilare family, this company isn't just a business; it's a legacy of excellence in
                            merchant import, export, and import-export services that will span generations.
                            <br> <br>
                            From the vibrant markets of Mumbai to the bustling ports of Chennai, PTC's reach extended
                            far and wide, connecting Indian merchants with customers across the globe. Each shipment
                            that left the shores of India carried not just goods but a piece of PTC's values - a
                            commitment to reliability, integrity, and customer satisfaction.
                            <br> <br>
                            So, whether you're a small-scale entrepreneur or a multinational corporation, Pilare
                            Trading Company is your gateway to success in the world of international trade. Join us on a
                            journey of growth, prosperity, and endless possibilities. With PTC by your side, the world
                            is yours to explore, and the opportunities are boundless.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Company starts -->
    <!-- director's Insights -->
    <section class="py-5">
        <div class="container-lg">
            <div class="d-md-flex flex-row-reverse">
                <div class="col-lg-5 offset-lg-1 col-md-6 text-center mt-3"><img src="{{asset('assets/images/d-insights.jpg')}}"
                        class="img-fluid" alt=""></div>
                <div class="col-md-6 mt-3 pe-md-2">
                    <div>
                        <h2 class="text-uppercase fw-bold mt-3 main-color">Director's Insights</h2>
                        <p>PTC's story began with the patriot, Mr. Piyush Pilare, a visionary merchant whose dream was
                            to revive the ancient Silk Road in the modern era. Armed with determination and an
                            unwavering commitment to quality, Piyush laid the cornerstone of Pilare Trading Company.
                            With a keen eye for opportunity and a heart set on bridging cultures through commerce,
                            Piyush embarked on a journey that would redefine India's role in the global marketplace.
                            <br><br>
                            But PTC's success wasn't built on dreams alone; it was forged in the crucible of hard work,
                            innovation, and strategic foresight. Leveraging the latest advancements in technology,
                            Piyush streamlined its operations, optimizing supply chains and minimizing costs to deliver
                            unparalleled value to its clients. From digital documentation to real-time tracking, PTC
                            embraced innovation as a means to empower merchants to navigate the complexities of
                            international trade with ease.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- director's Insights -->
    <!-- mission & Vision starts -->
    <section class="mission-vision-banner position-relative pt-3">
        <div class="container-lg ">
            <div>
                <h2 class="text-white display-2 fw-semibold">Mission <br> & Vision</h2>

                <div class="d-md-flex position-relative z-1 ">
                    <div class="col-md-4 py-4">
                        <div class="mission-card bg-white rounded-4 h-100 mx-2 px-3 py-2">
                            <div><img src="{{asset('assets/images/icons/target.png')}}" alt=""></div>
                            <h3 class="main-color my-3">Mission Statement</h3>
                            <p>"At PIlare Trading Company, our mission is to revolutionize global commerce by providing
                                unmatched import, export, and trade services. We are dedicated to simplifying
                                cross-border
                                transactions, fostering business growth, and creating value for our clients worldwide."
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 py-4">
                        <div class="mission-card bg-white rounded-4 h-100 mx-2 px-3 py-2">
                            <div><img src="{{asset('assets/images/icons/eye-visible.png')}}" alt=""></div>
                            <h3 class="main-color my-3">Vision Statement</h3>
                            <p>"Our vision at Pilare Trading Company is to be the premier destination for importers,
                                exporters, and traders, driving innovation, efficiency, and sustainability in global
                                trade. We aspire to redefine industry standards, empower businesses to thrive in the
                                international marketplace, and shape the future of global commerce."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="boat-img col-6 d-none d-md-block">
            <img src="{{asset('assets/images/image 5')}}.jpg" alt="" class="img-fluid">
        </div>
    </section>
    <!-- mission & Vision ends -->
    <!-- Global Partners starts -->
    <section>
        <div class="container-lg py-5" style="margin-top: 10%;">
            <div class="mb-5">
                <span
                    class="bg-secondary-color main-color text-capitalize px-2 rounded-5 py-1 fw-medium">Membership</span>
                <h2 class="text-uppercase fw-bold mt-3 main-color">Global Partners</h2>
            </div>

            <div class="d-flex flex-wrap justify-content-between global-logos">
                <div class="cus-logo"><img src="{{asset('assets/images/logos/indiamart.png')}}" alt=""
                        class="img-fluid"></div>
                <div class="cus-logo"><img src="{{asset('assets/images/logos/go.png')}}" alt=""
                        class="img-fluid"></div>
                <div class="cus-logo"><img src="{{asset('assets/images/logos/alibaba.png')}}" alt=""
                        class="img-fluid"></div>
                <div class="cus-logo"><img src="{{asset('assets/images/logos/go.png')}}" alt=""
                        class="img-fluid"></div>
                <div class="cus-logo"><img src="{{asset('assets/images/logos/capexil.png')}}" alt=""
                        class="img-fluid"></div>
                <div class="cus-logo"><img src="{{asset('assets/images/logos/fifo.png')}}" alt=""
                        class="img-fluid"></div>
                <div class="cus-logo"><img src="{{asset('assets/images/logos/ec21.png')}}" alt=""
                        class="img-fluid"></div>
                <div class="cus-logo"><img src="{{asset('assets/images/logos/exporters.png')}}" alt=""
                        class="img-fluid"></div>
                <div class="cus-logo"><img src="{{asset('assets/images/logos/india.png')}}" alt=""
                        class="img-fluid"></div>
                <div class="cus-logo"><img src="{{asset('assets/images/logos/makeinindia.png')}}" alt=""
                        class="img-fluid"></div>
            </div>
            <!-- certificates -->

            <div class="d-flex flex-wrap justify-content-center justify-content-md-between">
                <div class="col-md-5 pt-5">
                    <img src="{{asset('assets/images/certify.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-5 pt-5">
                    <img src="{{asset('assets/images/certify.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>


        </div>
    </section>

@include('user.layouts.footer')