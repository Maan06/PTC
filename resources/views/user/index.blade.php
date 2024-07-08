
@include('user.layouts.header')

    <div class="flex-slider">
        <div class="container-lg">
            <div class="home-top-heading d-flex justify-content-center flex-sm-row flex-column-reverse">
                <div
                    class="home-top-sc-icon d-flex flex-sm-column justify-content-sm-center justify-content-between col-sm-2 col-4">
                    <a href="https://www.facebook.com/people/Pilare-Trading-Company/61559142998770/?mibextid=ZbWKwL" target="_blank" ><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/pilaretradingcompany/" target="_blank" ><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/pilaretradingcompany/" target="_blank" ><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <div class="d-flex flex-column justify-content-center">
                    <h1>WE FOCUS ON <br>CUSTOMER EXCELLENCE</h1>
                    <br>
                    <p class="text-white col-md-7 col-9">To make the world your new marketplace. get in touch with us
                        today. Click on the get
                        started button.
                    </p>
                    <a href="{{route('about')}}" class="w-active">Learn More</a>
                </div>
            </div>
        </div>
        <ul class="slides">
            <li>
                <div class="slide-image" data-bg="{{asset('assets/images/home-banner-1.jpg')}}" style="background-image: url({{asset('assets/images/home-banner-1.jpg')}}); transform-origin: left center;"
                    data-flex-start="center left "></div>
            </li>
            <li>
                <div class="slide-image" data-bg="{{asset('assets/images/home-banner-2.jpg')}}" style="background-image: url({{asset('assets/images/home-banner-2.jpg')}}); transform-origin: left center;"
                    data-flex-start="center left "></div>
            </li>
            <li>
                <div class="slide-image" data-bg="{{asset('assets/images/home-banner-3.jpg')}}" style="background-image: url({{asset('assets/images/home-banner-3.jpg')}}); transform-origin: left center;"
                    data-flex-start="center left "></div>
            </li>
        </ul>
    </div>
    <!-- Top home banner slider starts -->
    <!-- home abut us section starts -->
    <section class="bg-primary-color py-5">
        <div class="container-lg">
            <div class="d-md-flex">
                <div class="col-md-6 py-3">
                    <div class="head">
                        <span class="bg-secondary-color main-color text-capitalize px-2 rounded-5 py-1 fw-medium">About
                            us</span>
                        <h2 class="text-uppercase fw-bold">Empowering <span class="main-color">Global Commerce</span>
                        </h2>
                        <p class="mt-4">Boosting global trade seamlessly! Our company specializes in
                            merchant import, export, and
                            comprehensive import-export services. With expert knowledge and a dedication to efficiency,
                            we streamline cross-border transactions to fuel your business growth. Explore limitless
                            opportunities with our customized strategies.</p>
                    </div>
                    <div class="text-white d-flex">
                        <div class="col-5 me-3 px-3 py-3 rounded-4 head-card-one">
                            <h2 class="fs-1">89%</h2>
                            <p class="text-white fw-light">Indian businesses are not exporting
                                <br><b>Be the first one</b></p>
                        </div>
                        <div class="col-5 me-3 px-3 py-3 rounded-4 head-card-two">
                            <h2 class="fs-1">79%</h2>
                            <p class="text-white fw-light">Of businesses thinks exporting hard
                                <br><b>Let's make it easy for you</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1 text-center py-3">
                    <img src="{{asset('assets/images/home-about-1.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- home abut us section starts -->
    <!-- What we section starts -->
    <section class="bg-primary-color py-5" style="    background-image: url(assets/images/whatwedo-banner.jpg);
    background-position: bottom;">
        <div class="container-lg">
            <div class="d-md-flex">
                <div class="col-md-6">
                    <div class="head d-flex flex-column justify-content-between h-100">
                        <div>
                            <span
                                class="bg-secondary-color main-color text-capitalize px-2 rounded-5 py-1 fw-medium">What
                                we do</span>
                            <h2 class="text-uppercase fw-bold mt-3">Driving <span class="main-color">Global Trade
                                    Excellence</span></h2>
                        </div>
                        <div class="mt-3"><a href="{{route('services')}}" class="g-active">Learn More</a></div>
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <p class="mt-4">At PTC, we orchestrate seamless merchant import, export, and
                        import-export services tailored to your business needs. With a keen focus on efficiency and
                        expertise in navigating international trade regulations, we propel your cross-border
                        transactions towards success. Explore the world of limitless possibilities with our
                        comprehensive solutions, designed to elevate your global commerce journey.</p>
                </div>
            </div>
        </div>
        <div class="container-lg mt-md-5 ">
            <div class="d-flex flex-wrap">
                <div class="col-md-4 mt-4">
                    <div class="global-card-one mx-2 rounded-4 global-card-hover h-100">
                        <div><img src="{{asset('assets/images/icons/globeone.png')}}" alt="" style="width: 80px;"></div>
                        <h2 class="my-4">Merchant Exports</h2>
                        <p>Expand your reach effortlessly with our seamless export solutions, maximizing profits and
                            market penetration.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="global-card-two mx-2 rounded-4 global-card-hover h-100">
                        <div><img src="{{asset('assets/images/icons/globeone.png')}}" alt="" style="width: 80px; rotate: 180deg;">
                        </div>
                        <h2 class="my-4">Merchant Imports</h2>
                        <p>Efficient global sourcing tailored to your needs, ensuring quality and cost-effectiveness at
                            every step.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="global-card-three mx-2 rounded-4 global-card-hover h-100">
                        <div><img src="{{asset('assets/images/icons/globetwo.png')}}" alt="" style="width: 80px;"></div>
                        <h2 class="my-4">Import-Export - As a Service</h2>
                        <p>Streamlined import-export solutions encompassing customs clearance, logistics, and
                            documentation, simplifying global trade.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What we section ends -->
    <!-- why us? section starts -->
    <section class="bg-white py-5">
        <div class="container-lg">
            <div class="d-md-flex">
                <div class="col-md-5 mt-3 text-center text-md-start">
                    <img src="{{asset('assets/images/home-whyus.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 offset-md-1 mt-3">
                    <div class="head">
                        <div>
                            <span
                                class="bg-secondary-color main-color text-capitalize px-2 rounded-5 py-1 fw-medium">Why
                                Us?</span>
                            <h2 class="text-uppercase fw-bold mt-3">Choose Us for Your <span
                                    class="main-color">Import-Export Needs</span></h2>
                            <p>At PTC, we're more than just a service provider; we're your strategic partner in global
                                trade. With years of experience and a proven track record, we offer unmatched expertise
                                in merchant import, export, and import-export services. Our commitment to excellence,
                                personalized approach, and dedication to customer satisfaction set us apart. Trust us to
                                navigate the complexities of international trade seamlessly, empowering your business to
                                thrive on a global scale. Choose PTC for a reliable, efficient, and results-driven
                                import-export experience.</p>
                        </div>
                        <div class="mt-4"><a href="{{route('contact_us')}}" class="g-active">Contact us</a></div>
                    </div>
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
    <!-- why us? section ends -->
    <!-- On hover Cards starts -->
    <section>
        <div class="whyus-banner my-5">
            <div class="d-flex flex-wrap">
                <div class='newsCard news-Slide-up col-md-3 col-12'>
                    <div class='newsCaption'>
                        <h2 class='newsCaption-title'>01 <br> <br>Reliability</h2>
                        <p class='newsCaption-content text-white mt-4'>
                            LDiscover unparalleled access to global markets with our extensive network of partners,
                            suppliers, and clients worldwide. At PTC, we've cultivated strong relationships across
                            continents, ensuring seamless trade connections wherever your business takes you.
                        </p>
                    </div>
                    <div class="newscard-icon"><i class="fa-solid fa-arrow-up"></i></div>
                </div>

                <div class='newsCard news-Slide-up col-md-3 col-12'>
                    <div class='newsCaption'>
                        <h2 class='newsCaption-title'>02 <br> <br>Global Network</h2>
                        <p class='newsCaption-content text-white mt-4'>
                            LDiscover unparalleled access to global markets with our extensive network of partners,
                            suppliers, and clients worldwide. At PTC, we've cultivated strong relationships across
                            continents, ensuring seamless trade connections wherever your business takes you.
                        </p>
                    </div>
                    <div class="newscard-icon"><i class="fa-solid fa-arrow-up"></i></div>
                </div>

                <div class='newsCard news-Slide-up col-md-3 col-12'>
                    <div class='newsCaption'>
                        <h2 class='newsCaption-title'>03 <br> <br>Customized Solutions</h2>
                        <p class='newsCaption-content text-white mt-4'>
                            LDiscover unparalleled access to global markets with our extensive network of partners,
                            suppliers, and clients worldwide. At PTC, we've cultivated strong relationships across
                            continents, ensuring seamless trade connections wherever your business takes you.
                        </p>
                    </div>
                    <div class="newscard-icon"><i class="fa-solid fa-arrow-up"></i></div>
                </div>

                <div class='newsCard news-Slide-up col-md-3 col-12'>
                    <div class='newsCaption'>
                        <h2 class='newsCaption-title'>04 <br> <br>Expertise</h2>
                        <p class='newsCaption-content text-white mt-4'>
                            LDiscover unparalleled access to global markets with our extensive network of partners,
                            suppliers, and clients worldwide. At PTC, we've cultivated strong relationships across
                            continents, ensuring seamless trade connections wherever your business takes you.
                        </p>
                    </div>
                    <div class="newscard-icon"><i class="fa-solid fa-arrow-up"></i></div>
                </div>

            </div>
        </div>
    </section>
    <!-- On hover Cards ends -->

    <!-- discover events slider starts -->
    <section class="py-5">
        <div class="container-lg position-relative">
            <div class="d-flex ">
                <div class="col-md-9">
                    <span class="bg-secondary-color main-color text-capitalize px-2 rounded-5 py-1 fw-medium">We
                        Serve</span>
                    <h2 class="text-uppercase fw-bold mt-3 main-color">Indusrty</h2>
                    <p>With PTC as your trusted partner, the possibilities are endless. Whether you operate in
                        packaging, paper, incense sticks, automotive, footwear, millets, or any other industry, trust us
                        to be your gateway to global trade success. Contact us today to explore new opportunities and
                        embark on a journey to greater prosperity.</p>
                </div>
                <div class="btns col-md-3 position-relative">
                    <div class="customPreviousBtn"><i class="fa-solid fa-chevron-left"></i></div>
                    <div class="customNextBtn"><i class="fa-solid fa-chevron-right"></i></div>
                </div>
            </div>
            <div class="owl-carousel discover-carousel">
                <div class="item">
                    <div class="col-lg-4 col-md-6 col-12 px-2 mt-3 w-100 discover-carousel-main">
                        <div class="p-3 rounded-4 bg-secondary-color h-100 d-flex flex-column justify-content-between">                            
                            <div class="text-black mt-3">
                                <div><img src="{{asset('assets/images/icons/package.png')}}" alt="">
                                </div>
                                <h3 class="fs-5 fw-semibold">Packaging Solutions</h3>
                                <p>At PTC, we understand the importance of quality packaging in safeguarding your
                                    products and enhancing brand image. Benefit from our expert import-export services
                                    for packaging materials, including corrugated boxes, sheets, and custom packaging
                                    solutions. With our streamlined processes and strategic partnerships, we ensure
                                    reliable supply chains and cost-effective solutions to meet your packaging needs.
                                </p>                                                             
                            </div>
                            <div class="my-3">
                                <a href="{{route('products')}}#packaging" class="g-active px-3 py-2">Learn more</a>
                            </div>                              
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-lg-4 col-md-6 col-12 px-2 mt-3 w-100 discover-carousel-main">
                        <div class="p-3 rounded-4 bg-secondary-color h-100 d-flex flex-column justify-content-between">                            
                            <div class="text-black mt-3">
                                <div><img src="{{asset('assets/images/icons/paper.png')}}" alt="" class="">
                                </div>
                                <h3 class="fs-5 fw-semibold">Paper Industry</h3>
                                <p>Elevate your paper procurement process with PTC's import-export expertise in kraft
                                    paper and duplex paper. Whether you require raw materials for manufacturing or
                                    finished products for distribution, we offer comprehensive solutions to optimize
                                    your paper supply chain, ensuring quality and efficiency every step of the way.
                                </p>                                
                            </div>
                            <div class="my-3">
                                <a href="{{route('products')}}#paper" class="g-active px-3 py-2">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-lg-4 col-md-6 col-12 px-2 mt-3 w-100 discover-carousel-main">
                        <div class="p-3 rounded-4 bg-secondary-color h-100 d-flex flex-column justify-content-between">                            
                            <div class="text-black mt-3">
                                <div><img src="{{asset('assets/images/icons/pot.png')}}" alt="" class="">
                                </div>
                                <h3 class="fs-5 fw-semibold">Aromatic Products</h3>
                                <p>Experience seamless trade in the incense sticks industry with our specialized
                                    import-export services. From sourcing premium-quality raw materials to facilitating
                                    international distribution channels, we enable you to meet the growing demand for
                                    aromatic products, ensuring consistency and reliability in supply to your customers
                                    worldwide.
                                </p>                               
                            </div>
                            <div class="mt-4">
                                <a href="{{route('products')}}#aromatic" class="g-active px-3 py-2">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- discover events slider ends -->

    <!-- creative process -->
    <section class="creative-process position-relative">
        <div class="py-5 text-center">
            <span
                class="bg-secondary-color main-color text-capitalize px-2 rounded-5 py-1 fw-medium">How we do it</span>
            <h2 class="text-uppercase fw-bold mt-3 text-white">Our Creative Process</span></h2>
        </div>
        <div class="border-line">
            <div class="col-10 d-flex" style="position: absolute;top: -10px;">
                <div class="col-3 text-center"></div>
                <div class="col-3 text-center"></div>
                <div class="col-3 text-center"></div>
                <div class="col-3 text-center"></div>
            </div>
            <div class="btns col-md-3 position-relative w-100 container-lg">
                <div class="customPreviousBtn2"><i class="fa-solid fa-chevron-left"></i></div>
                <div class="customNextBtn2"><i class="fa-solid fa-chevron-right"></i></div>
            </div>
        </div>
        <div class="container-lg">
            <div class="owl-carousel creative-process-carousel">
                        <div class="item-logo item">                       
                            <div><img src="{{asset('assets/images/icons/step-1.png')}}" alt=""></div>
                            <div>
                                <p class="text-white text-capitalize fw-semibold text-center mt-2">Order confirmation</p>
                            </div>                    
                        </div>
                        <div class="item-logo item">                       
                            <div><img src="{{asset('assets/images/icons/step-2.png')}}" alt=""></div>
                            <div>
                                <p class="text-white text-capitalize fw-semibold text-center mt-2">procurement of goods</p>
                            </div>                    
                        </div>
                        <div class="item-logo item">                       
                            <div><img src="{{asset('assets/images/icons/step-3.png')}}" alt=""></div>
                            <div>
                                <p class="text-white text-capitalize fw-semibold text-center mt-2">Quality check</p>
                            </div>                    
                        </div>
                        <div class="item-logo item">                       
                            <div><img src="{{asset('assets/images/icons/step-4.png')}}" alt=""></div>
                            <div>
                                <p class="text-white text-capitalize fw-semibold text-center mt-2">labeling and packaging</p>
                            </div>                    
                        </div>
                        <div class="item-logo item">                       
                            <div><img src="{{asset('assets/images/icons/step-5.png')}}" alt=""></div>
                            <div>
                                <p class="text-white text-capitalize fw-semibold text-center mt-2">Logistics</p>
                            </div>                    
                        </div>
                        <div class="item-logo item">                       
                            <div><img src="{{asset('assets/images/icons/step-6.png')}}" alt=""></div>
                            <div>
                                <p class="text-white text-capitalize fw-semibold text-center mt-2">Custom</p>
                            </div>                    
                        </div>     
                        <div class="item-logo item">                       
                            <div><img src="{{asset('assets/images/icons/step-7.png')}}" alt=""></div>
                            <div>
                                <p class="text-white text-capitalize fw-semibold text-center mt-2">Sending documents</p>
                            </div>                    
                        </div>    
                        <div class="item-logo item">                       
                            <div><img src="{{asset('assets/images/icons/step-8.png')}}" alt=""></div>
                            <div>
                                <p class="text-white text-capitalize fw-semibold text-center mt-2">inland shipping procedures</p>
                            </div>                    
                        </div>
            </div>


            <!-- <div class="grid-container">
                <div class="grid-item main">
                    <div class="items">
                        <div class="item-logo item1 col-md-3 col-sm-4 col-6 text-center">                       
                            <div><img src="{{asset('assets/images/icons/step-1.png')}}" alt=""></div>
                            <div>
                                <p class="text-white text-capitalize fw-semibold">Order confirmation</p>
                            </div>                    
                        </div>
                        <div class="item-logo item2 col-md-3 col-sm-4 col-6 text-center">                       
                            <div><img src="{{asset('assets/images/icons/step-2.png')}}" alt=""></div>
                            <div>
                                <p class="text-white text-capitalize fw-semibold">procurement of goods</p>
                            </div>                    
                        </div>
                        <div class="item-logo item3 col-md-3 col-sm-4 col-6 text-center">                       
                            <div><img src="{{asset('assets/images/icons/step-3.png')}}" alt=""></div>
                            <div>
                                <p class="text-white text-capitalize fw-semibold">Quality check</p>
                            </div>                    
                        </div>
                        <div class="item-logo item4 col-md-3 col-sm-4 col-6 text-center">                       
                            <div><img src="{{asset('assets/images/icons/step-4.png')}}" alt=""></div>
                            <div>
                                <p class="text-white text-capitalize fw-semibold">labeling and packaging</p>
                            </div>                    
                        </div>
                        <div class="item-logo item5 col-md-3 col-sm-4 col-6 text-center">                       
                            <div><img src="{{asset('assets/images/icons/step-5.png')}}" alt=""></div>
                            <div>
                                <p class="text-white text-capitalize fw-semibold">Logistics</p>
                            </div>                    
                        </div>
                        <div class="item-logo item6 col-md-3 col-sm-4 col-6 text-center">                       
                            <div><img src="{{asset('assets/images/icons/step-6.png')}}" alt=""></div>
                            <div>
                                <p class="text-white text-capitalize fw-semibold">Custom</p>
                            </div>                    
                        </div>     
                        <div class="item-logo item7 col-md-3 col-sm-4 col-6 text-center">                       
                            <div><img src="{{asset('assets/images/icons/step-7.png')}}" alt=""></div>
                            <div>
                                <p class="text-white text-capitalize fw-semibold">Sending documents</p>
                            </div>                    
                        </div>    
                        <div class="item-logo item8 col-md-3 col-sm-4 col-6 text-center">                       
                            <div><img src="{{asset('assets/images/icons/step-8.png')}}" alt=""></div>
                            <div>
                                <p class="text-white text-capitalize fw-semibold">inland shipping procedures</p>
                            </div>                    
                        </div>                       
                        
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- creative process -->

     <!-- Global Partners starts -->
     <section>
        <div class="container-lg py-5">
            <div class="mb-5">
                <span
                    class="bg-secondary-color main-color text-capitalize px-2 rounded-5 py-1 fw-medium">Membership</span>
                <h2 class="text-uppercase fw-bold mt-3">Our Trusted Partners <br><span class="main-color">Around the World</span></h2>
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
        </div>
    </section>
     <!-- Global Partners ends -->
     <!-- our network starts-->
     <section>
        <div class="bg-primary-color pt-4">
            <div class="py-5 text-center">
                <span
                    class="bg-secondary-color main-color text-capitalize px-2 rounded-5 py-1 fw-medium">our Network</span>
                <h2 class="text-uppercase fw-bold mt-3">Our business Around the world</span></h2>
            </div>
            <div class="network-img"></div>
        </div>        
     </section>
     <!-- our network ends -->

@include('user.layouts.footer')