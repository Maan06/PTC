{{-- <!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>iNext</title> --}}
@include('user.layouts.header')
<!-- header ends -->
    <!-- product-top banner starts -->
    <section class="product-top-banner">
        <div class="container-lg">
            <div class="home-top-heading d-flex justify-content-center flex-sm-row flex-column-reverse">
                <div
                    class="home-top-sc-icon d-flex flex-sm-column justify-content-sm-center justify-content-between col-sm-2 col-4">
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
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
    <!-- products -->
    <section>
        <div class="container-lg">
            <div class="d-md-flex flex-md-row-reverse py-4">

                <div class="col-md-6 px-2 text-center text-md-end my-2">
                    <img src="{{asset('assets/images/product-1.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 my-auto px-2 my-2">
                    <h2 class="main-color mb-3">Elevating Global Trade Across Diverse Industries</h2>
                    <p>Welcome to PTC, your premier partner for seamless import-export services. With a steadfast
                        commitment to excellence, we specialize in facilitating trade across a spectrum of industries,
                        ensuring efficiency, reliability, and unparalleled value. Explore the industries we serve:</p>
                </div>
            </div>

            <div class="d-md-flex py-4">

                <div class="col-md-6 px-2 text-center text-start my-2" id="packaging">
                    <img src="{{asset('assets/images/product-2.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 my-auto px-2 my-2">
                    <h2 class="mb-3">Packaging</h2>
                    <p>Discover unparalleled packaging solutions with PTC. From corrugated boxes to custom packaging, we
                        offer comprehensive import-export services tailored to your packaging needs. Trust us to
                        optimize your supply chain, ensuring timely deliveries and cost-effective solutions that enhance
                        your brand image and protect your products.</p>
                    <br>
                    <a href="" class="g-active btn" data-bs-toggle="modal"
                    data-bs-target="#quoteform">Quote</a>
                </div>
            </div>

            <div class="d-md-flex flex-md-row-reverse py-4"  id="paper">

                <div class="col-md-6 px-2 text-center text-md-end my-2">
                    <img src="{{asset('assets/images/product-3.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 my-auto px-2 my-2">
                    <h2 class="mb-3">Paper Industry</h2>
                    <p>Experience the aromatic world of incense sticks with PTC. Our services cater to manufacturers,
                        distributors, and retailers, facilitating seamless trade-in premium-quality incense sticks. With
                        our strategic partnerships and logistical prowess, we ensure consistent supply chains and global
                        market access for your aromatic products.</p>
                    <br>
                    <a href="" class="g-active btn" data-bs-toggle="modal"
                    data-bs-target="#quoteform">Quote</a>
                </div>
            </div>

            <div class="d-md-flex py-4"  id="aromatic">

                <div class="col-md-6 px-2 my-2">
                    <img src="{{asset('assets/images/product-4.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 my-aut2 px-2 my-3">
                    <h2 class="mb-3">Aromatic Products</h2>
                    <p>Discover unparalleled packaging solutions with PTC. From corrugated boxes to custom packaging, we
                        offer comprehensive import-export services tailored to your packaging needs. Trust us to
                        optimize your supply chain, ensuring timely deliveries and cost-effective solutions that enhance
                        your brand image and protect your products.</p>
                    <br>
                    <a href="" class="g-active btn" data-bs-toggle="modal"
                    data-bs-target="#quoteform">Quote</a>
                </div>
            </div>

            <div class="d-md-flex flex-md-row-reverse py-4">

                <div class="col-md-6 px-2 text-center text-md-end my-2">
                    <img src="{{asset('assets/images/product-5.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 my-auto px-2 my-2">
                    <h2 class="mb-3">Automotive</h2>
                    <p>Drive success in the automotive industry with PTC's for tyres. Whether you're a tyre manufacturer
                        or distributor, we offer tailored services to meet your procurement and distribution needs.
                        Count on us for reliable sourcing, efficient logistics, and competitive pricing that keep your
                        business rolling ahead.

                    </p>
                    <br>
                    <a href="" class="g-active btn" data-bs-toggle="modal"
                    data-bs-target="#quoteform">Quote</a>
                </div>
            </div>

            <div class="d-md-flex py-4">

                <div class="col-md-6 px-2 my-2">
                    <img src="{{asset('assets/images/product-6.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 my-aut2 px-2 my-3">
                    <h2 class="mb-3">Footwear</h2>
                    <p>Step into the world of footwear with PTC's expertise. From trendy designs to premium
                        craftsmanship, we facilitate seamless trade in footwear products for manufacturers, retailers,
                        and distributors. Trust us to expand your market reach, optimize your supply chain, and stay
                        ahead in this competitive industry.

                    </p>
                    <br>
                    <a href="" class="g-active btn" data-bs-toggle="modal"
                    data-bs-target="#quoteform">Quote</a>
                </div>
            </div>

            <div class="d-md-flex flex-md-row-reverse py-4">

                <div class="col-md-6 px-2 text-center text-md-end my-2">
                    <img src="{{asset('assets/images/product-7.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 my-auto px-2 my-2">
                    <h2 class="mb-3">Millets</h2>
                    <p>Embrace the nutritional benefits of Indian millets with PTC. Our services cater to farmers, food
                        manufacturers, and distributors, facilitating trade in high-quality millets for global markets.
                        With our sustainable sourcing practices and logistical efficiency, we empower you to meet the
                        growing demand for healthy food alternatives.
                    </p>
                    <br>
                    <a href="" class="g-active btn" data-bs-toggle="modal"
                    data-bs-target="#quoteform">Quote</a>
                </div>
            </div>
        </div>
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
    </section>

    <!-- ptc banner -->
    <section>
        <div class="ptc-product-banner d-md-flex align-items-center mt-4">    
           <div>
            <div class="col-md-11 offset-md-2 py-4 my-auto h-100 col-12 px-3">
                <h2 class="text-white">At PTC, we're more than just <br> a service provider</h2>
                <p class="text-white fw-light my-4">
                    We're your strategic partner in global trade. Whether you operate in packaging, paper, incense sticks,
                    tyres, footwear, millets, or any other industry, trust us to make international trade easy for you and
                    unlock new opportunities for your business. Contact us today to embark on a journey to success in the
                    global marketplace.
                </p>
                <a href="{{route('contact_us')}}" class="w-active">contact us</a>
            </div>  
           </div>
    
            <div class="d-none d-md-block"><img src="{{asset('assets/images/product-container.png')}}" alt="" style="width: 45vw;"></div>   
    
        </div>
    </section>

@include('user.layouts.footer')