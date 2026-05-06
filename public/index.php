<?php $page_title = "Home";
$page_description = "Expert auto repair and maintenance services in Sri Lanka. From mechanical repairs to auto detailing, we keep your vehicle in top condition.";
require_once '../includes/header.php'; ?>
<?php require_once '../includes/navbar.php'; ?>

<div class="content-area" id="pageContent">
<div class="container-fluid no-gutters" id="primary">

<!-- Hero Slider -->
<section id="hero-slider">
    <div id="mainSliderWrapper" data-slickslider='{"autoplay":true,"autoplay_speed":7000,"arrows":true,"dots":false,"fade":true,"speed":500,"pause_on_hover":true,"pause_on_dots_hover":true}'>
        <div id="mainSlider">

            <div class="slide" id="slide-1">
                <div class="img--holder" style="background-image: url(assets/images/slide1.jpg); min-height: 526px;"></div>
                <div class="slide-content center">
                    <div class="vert-wrap container"><div class="vert"><div class="container">
                        <h4 data-animation="zoomIn" data-animation-delay="0.5s">Looking for Right Vehicle</h4>
                        <h3 data-animation="scaleOut" data-animation-delay="0.2">Repair Service?</h3>
                        <p data-animation="fadeIn" data-animation-delay="0.9s">Get your fair-price repair estimates</p>
                    </div></div></div>
                </div>
            </div>

            <div class="slide" id="slide-2">
                <div class="img--holder" style="background-image: url(assets/images/slide2.jpg); min-height: 526px;"></div>
                <div class="slide-content left">
                    <div class="vert-wrap container"><div class="vert"><div class="container">
                        <h4 data-animation="zoomIn" data-animation-delay="0.5s">Full Service of</h4>
                        <h3 data-animation="scaleOut" data-animation-delay="0.2">Auto Repair</h3>
                        <h3 data-animation="" data-animation-delay="">&amp; Maintenance</h3>
                        <p data-animation="fadeIn" data-animation-delay="0.9s">Over 35 Years Of Quality Auto Service</p>
                    </div></div></div>
                </div>
            </div>

            <div class="slide" id="slide-3">
                <div class="img--holder" style="background-image: url(assets/images/slide3.jpg); min-height: 526px;"></div>
                <div class="slide-content center">
                    <div class="vert-wrap container"><div class="vert"><div class="container">
                        <h4 data-animation="zoomIn" data-animation-delay="0.5s">Trust Your Vehicle to</h4>
                        <h3 data-animation="scaleOut" data-animation-delay="0.2">Certified</h3>
                        <h3 data-animation="" data-animation-delay="">Technicians</h3>
                        <p data-animation="fadeIn" data-animation-delay="0.9s">SERVICE, MAINTENANCE &amp; REPAIR BY THE CERTIFIED SERVICE EXPERTS</p>
                    </div></div></div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- After Hours Drop-Off Promo Banner -->
<section id="promo-banner">
    <div class="block block-wrapper-01">
        <div class="container container-tablet-md">
            <div class="promo-01">
                <div class="promo-01__col-left">
                    <div class="promo-01__title">
                        <div class="text-01">After Hours</div>
                        <div class="text-02">Drop-OFF</div>
                    </div>
                </div>
                <div class="promo-01__col-center">
                    <div class="promo-01__description">We realize that you lead a busy life, so we have made it easy for you to drop off your vehicle 24/7.</div>
                    <div class="promo-01__img"><img alt="Autoshine After Hours Key Drop-off" decoding="async" src="assets/images/banner-key-new.png"/></div>
                </div>
                <div class="promo-01__col-right">
                    <a class="btn btn-border anchoring-link" href="#appointment-cta"><span>Contact Now</span></a>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- What We Do — Service Image Panels -->
<section class="reveal-effect" id="what-we-do">
    <div class="block">
        <div class="container">
            <div class="block-title">
                <h2 class="block-title__title">What We Do</h2>
                <div class="block-title__description">We offer full service auto repair &amp; maintenance</div>
                <div class="title-separator"></div>
            </div>
            <div class="services-block">

                <div class="service">
                    <div class="image"><img loading="lazy" alt="Vehicle Maintenance Service" decoding="async" src="assets/images/service-1-bg.png"/></div>
                    <div class="caption">
                        <div class="services__text-background text-color-01">Maintenance</div>
                        <div class="vert-wrap"><div class="vert">
                            <h3>Preventative<br/>Maintenance</h3>
                            <div class="text">The best way to minimize breakdowns is doing routine maintenance</div>
                        </div></div>
                    </div>
                </div>

                <div class="service hidden-xs">
                    <a class="image image-scale" href="service-preventative-maintenance.php">
                        <img loading="lazy" alt="Car Maintenance Workshop" decoding="async" src="assets/images/service-2-bg.jpg"/>
                    </a>
                </div>

                <div class="service">
                    <div class="image"><img loading="lazy" alt="Common Car Repairs" decoding="async" src="assets/images/service-3-bg.jpg"/></div>
                    <div class="caption">
                        <div class="services__text-background text-color-02">Common</div>
                        <div class="vert-wrap"><div class="vert">
                            <h3>Most Common<br/>Repairs</h3>
                            <div class="text">We have over 30 common car repairs<br/>and the list is growing</div>
                        </div></div>
                    </div>
                </div>

                <div class="service hidden-xs">
                    <a class="image image-scale" href="service-brake-repair.php">
                        <img loading="lazy" alt="Brake Repair Service" decoding="async" src="assets/images/service-6-bg.jpg"/>
                    </a>
                </div>

                <div class="service dark">
                    <div class="image"><img loading="lazy" alt="Brake Service & Repair" decoding="async" src="assets/images/service-5-bg.jpg"/></div>
                    <div class="caption">
                        <div class="services__text-background text-color-03">Brake</div>
                        <div class="vert-wrap"><div class="vert">
                            <h3>Brake<br/>Repair &amp; Service</h3>
                            <div class="text">Brake maintenance is important in helping<br/>ensure the safety of you and your<br/>passengers</div>
                        </div></div>
                    </div>
                </div>

                <div class="service hidden-xs">
                    <a class="image image-scale" href="service-transmission.php">
                        <img loading="lazy" alt="Transmission Repair" decoding="async" src="assets/images/service-6-bg_1.jpg"/>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- 100% Result Guarantee — Feature Boxes -->
<section class="reveal-effect" id="guarantee">
    <div class="block">
        <div class="container">
            <div class="block-title">
                <h2 class="block-title__title">100% Result Guarantee</h2>
                <div class="block-title__description">We offer full service auto repair &amp; maintenance</div>
            </div>
            <div class="box01-listing">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="box01">
                            <div class="box01__icon"><i class="icon icon-wrech1"></i></div>
                            <div class="box01__content">
                                <h6 class="box01__title">All Car Makes</h6>
                                <p>We provide a variety of repair and maintenance services for all car makes and models, even for exotic and vintage ones.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box01">
                            <div class="box01__icon"><i class="icon icon-gear"></i></div>
                            <div class="box01__content">
                                <h6 class="box01__title">Variety Services</h6>
                                <p>The main principle of our work is to offer a wide range of quality car repair services and we've been doing it since our first day.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box01">
                            <div class="box01__icon"><i class="icon icon-259477"></i></div>
                            <div class="box01__content">
                                <h6 class="box01__title">Quality Support</h6>
                                <p>Car Repair Services offers quality support programs for any vehicles that allow them to always stay fully functional.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Repair Services We Offer (dark background section) -->
<section class="reveal-effect" id="services-offered">
    <div class="block bg-1" style="background-image:url('assets/images/block-bg-1.jpg'); background-position:center center; background-repeat:no-repeat; background-size:cover;">
        <div class="container position-relative">
            <div class="section__text-background text-color01">Services</div>
            <div class="row" id="slideMobile">

                <div class="col-sm-6 col-md-4">
                    <div class="block-title text-left">
                        <h2 class="block-title__title">Repair Services That <span class="color">We Offer</span></h2>
                        <div class="title-separator"></div>
                    </div>
                    <p>We provide a full range of front end mechanical repairs for all makes and models of cars, no matter the cause. This includes everything from struts, shocks, and tie rod ends to ball joints, springs, and basically everything that is included in repairing the front end of the vehicle.</p>
                    <a class="btn btn-top btn-border hide-onlymobile" data-target="#appointmentForm" data-toggle="modal" href="#"><span>Book an Appointment</span></a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <ul class="marker-list">
                        <li>Vehicle Lubricant Service</li>
                        <li>Auto Detailing</li>
                        <li>Mechanical Repairs</li>
                        <li>Tinkering &amp; Painting</li>
                        <li>Accident Repairs</li>
                        <li>Auto Electrical Repairs</li>
                        <li>Seat Cushioning &amp; Upholstery</li>
                        <li>Auto Fiber Glass Work</li>
                        <li>Vehicle Fabrications and Modifications</li>
                        <li class="list-hidden">Specialized Body Modifications</li>
                        <li class="list-hidden">Door Lock and Winder Mechanism Repair</li>
                        <li class="list-hidden">Vehicle Tinting</li>
                        <li class="list-hidden">Auto Lathe Work</li>
                        <li class="list-hidden">Vehicle Branding</li>
                        <li class="list-hidden">Vehicle Wrapping</li>
                        <li class="list-hidden">Installation of Aesories - HDV/ Front &amp; Reverse Camera/ GPS/ Installing enter Lock System</li>
                    </ul>
                    <a class="js-add-points show-tablet btn-add btn-top" href="#">+ More Services</a><br/>
                    <a class="btn btn-top btn-border show-onlymobile" data-target="#appointmentForm" data-toggle="modal" href="#"><span>Book an Appointment</span></a>
                </div>

                <!-- Extended list shown on tablet/desktop -->
                <div class="col-sm-6 col-md-4 view-more-mobile view-more-tablet">
                    <ul class="marker-list">
                        <li>Specialized Body Modifications</li>
                        <li>Door Lock and Winder Mechanism Repair</li>
                        <li>Vehicle Tinting</li>
                        <li>Auto Lathe Work</li>
                        <li>Vehicle Branding</li>
                        <li>Vehicle Wrapping</li>
                        <li>Installation of Aesories - HDV/ Front &amp; Reverse Camera/ GPS/ Installing enter Lock System</li>
                    </ul>
                    <a class="js-add-points show-tablet btn-add btn-top" href="#">+ More Services</a><br/>
                    <a class="btn btn-top btn-border show-onlymobile" data-target="#appointmentForm" data-toggle="modal" href="#"><span>Book an Appointment</span></a>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Why Choose Certified Service -->
<section class="reveal-effect" id="why-choose-us">
    <div class="block">
        <div class="container">
            <div class="block-title">
                <h2 class="block-title__title">Why Choose Certified Service?</h2>
                <div class="block-title__description">We partnered with RepairPal to bring you the most sophisticated fair-price estimates</div>
                <div class="title-separator"></div>
            </div>
            <div class="text-icon-wrapper">
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <div class="text-icon">
                            <div class="icon-wrapper"><span><i class="icon icon-808728"></i><span class="icon-hover"></span></span></div>
                            <h3 class="title">Estimates</h3>
                            <p class="text">We bring you the most accurate and fair-price service estimates</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="text-icon active">
                            <div class="icon-wrapper"><span><i class="icon icon-tool"></i><span class="icon-hover"></span></span></div>
                            <h3 class="title">Trusted</h3>
                            <p class="text">Trusted Service Centers <br/> are certified for high quality</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="text-icon">
                            <div class="icon-wrapper"><span><i class="icon icon-612844"></i><span class="icon-hover"></span></span></div>
                            <h3 class="title">Guarantees</h3>
                            <p class="text">Covers parts and labor on qualifying repairs and services for 24 months/24,000 miles</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works — 4 Step Process (dark background) -->
<section class="reveal-effect" id="how-it-works">
    <div class="block bg-2" style="background-image:url('assets/images/block-bg-2.jpg'); background-position:center center; background-repeat:no-repeat; background-size:cover;">
        <div class="container">
            <div class="block-title">
                <h2 class="block-title__title">How It <span class="color">Works</span></h2>
                <div class="block-title__description">These few steps will help you understand how our service works</div>
            </div>
        </div>
        <div class="container">
            <div class="promo02-wrapper">
                <div class="row js-promo02-carousel">

                    <div class="col-sm-6 col-w1500-3">
                        <div class="promo02">
                            <div class="promo02__marker">1</div>
                            <div class="promo02__content">
                                <div class="promo02__img" data-bg="assets/images/promo02-img-01.jpg">
                                    <div class="promo02__description">
                                        <h6 class="promo02__title">Make an<br/>Appointment</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-w1500-3">
                        <div class="promo02">
                            <div class="promo02__marker">2</div>
                            <div class="promo02__content">
                                <div class="promo02__img" data-bg="assets/images/promo02-img-02.jpg">
                                    <div class="promo02__description">
                                        <h6 class="promo02__title">Select Services</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-w1500-3">
                        <div class="promo02">
                            <div class="promo02__marker">3</div>
                            <div class="promo02__content">
                                <div class="promo02__img" data-bg="assets/images/promo02-img-03.jpg">
                                    <div class="promo02__description">
                                        <h6 class="promo02__title">Select Quote, <br/>Confirm Request</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-w1500-3">
                        <div class="promo02">
                            <div class="promo02__marker">4</div>
                            <div class="promo02__content">
                                <div class="promo02__img" data-bg="assets/images/promo02-img-04.jpg">
                                    <div class="promo02__description">
                                        <h6 class="promo02__title">Get Your Car</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics + Map/Video Block -->
<section class="reveal-effect" id="statistics">
    <div class="block">
        <div class="container">
            <div class="row text-center-tablet" id="counterBlock">

                <div class="col-lg-6">
                    <div class="block-title text-left block-title__small-indent">
                        <h2 class="block-title__title">The Car Repair Statistics</h2>
                    </div>
                    <p>Auto repair technical statistics you must to know. Whether you're coming in for a routine inspection, oil change or a repair service, we promise that you will be completely satisfied with our work.</p>
                    <div class="row stat-box02-wrapper">
                        <div class="col-sm-6">
                            <div class="stat-box02">
                                <div class="stat-box02__value"><span class="number"><span class="count" data-speed="1000" data-to="20">20</span></span></div>
                                <div class="stat-box02__title"><h5>Years of experience</h5></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="stat-box02">
                                <div class="stat-box02__value"><span class="number"><span class="count" data-speed="1000" data-to="2">2</span>.<span class="count" data-speed="1000" data-to="9">9</span>K</span></div>
                                <div class="stat-box02__title"><h5>Vehicle Repaired</h5></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="stat-box02">
                                <div class="stat-box02__value"><span class="number"><span class="count" data-speed="1000" data-to="32">32</span></span></div>
                                <div class="stat-box02__title"><h5>Technicians &amp; Workers</h5></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="stat-box02">
                                <div class="stat-box02__value"><span class="number"><span class="count" data-speed="1000" data-to="100">100</span>%</span></div>
                                <div class="stat-box02__title"><h5>Satisfied Customers</h5></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider-lg hidden-lg"></div>

                <div class="col-lg-6">
                    <div class="video-block">
                        <a class="video-block__icon" href="#">
                            <span class="icon">
                                <svg id="Capa_1" style="enable-background:new 0 0 191.255 191.255;" version="1.1" viewbox="0 0 191.255 191.255" x="0px" xml:space="preserve" y="0px">
                                    <path d="M162.929,66.612c-2.814-1.754-6.514-0.896-8.267,1.917s-0.895,6.513,1.917,8.266c6.544,4.081,10.45,11.121,10.45,18.833s-3.906,14.752-10.45,18.833l-98.417,61.365c-6.943,4.329-15.359,4.542-22.512,0.573c-7.154-3.97-11.425-11.225-11.425-19.406V34.262c0-8.181,4.271-15.436,11.425-19.406c7.153-3.969,15.569-3.756,22.512,0.573l57.292,35.723c2.813,1.752,6.513,0.895,8.267-1.917c1.753-2.812,0.895-6.513-1.917-8.266L64.512,5.247c-10.696-6.669-23.661-7-34.685-0.883C18.806,10.48,12.226,21.657,12.226,34.262v122.73c0,12.605,6.58,23.782,17.602,29.898c5.25,2.913,10.939,4.364,16.616,4.364c6.241,0,12.467-1.754,18.068-5.247l98.417-61.365c10.082-6.287,16.101-17.133,16.101-29.015S173.011,72.899,162.929,66.612z"></path>
                                </svg>
                            </span>
                        </a>
                        <img loading="lazy" alt="Autoshine Workshop Video" decoding="async" src="assets/images/video-img-01.jpg"/>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Testimonials Carousel -->
<section class="reveal-effect" id="testimonials">
    <div class="block section-bg-wrapper">
        <div class="container position-relative">
            <div class="section-blog section-blog__color02">
                <div class="section__text-background text-background__top text-center text-color01">Testimonials</div>
                <div class="testimonials-carousel" data-testimonialslider='{"slides_to_show":1,"slides_to_scroll":1,"infinite":true,"autoplay":true,"autoplay_speed":2500,"arrows":true,"dots":true,"fade":false}'>

                    <div class="item text-center">
                        <div class="item__img">
                            <img loading="lazy" alt="" decoding="async" src="assets/images/section-blog-img01.jpg"/>
                            <span class="icon"></span>
                        </div>
                        <div class="item__description">
                            <p>I took my car there to get fixed after I was hit and my rear upper controler arm was bent. They gave me the best estimate, and had the work done super quick! The customer service was amazing, and they were very polite and knowledgable!</p>
                        </div>
                        <div class="item__autor"><span class="color">– Silvia R. Brown,</span> Manager</div>
                    </div>

                    <div class="item text-center">
                        <div class="item__img">
                            <img loading="lazy" alt="" decoding="async" src="assets/images/testimonial1-178x179.jpg"/>
                            <span class="icon"></span>
                        </div>
                        <div class="item__description">
                            <p>I would recommend Car Repair Service to anyone without a doubt! Very professional and reliable. The best customer service and reasonable prices. My go to auto shop from now on!!!</p>
                        </div>
                        <div class="item__autor"><span class="color">– Joseph C. Billups,</span> Electrician</div>
                    </div>

                    <div class="item text-center">
                        <div class="item__img">
                            <img loading="lazy" alt="" decoding="async" src="assets/images/testimonial2-178x179.jpg"/>
                            <span class="icon"></span>
                        </div>
                        <div class="item__description">
                            <p>Told them to replace my belt tensioner due to frequent squeaking after replacing my belt. They looked around and said, "nope, take the belt back and ask for a new one under warranty".. Charged me $12, and after installing a new belt, turns out they were right.</p>
                        </div>
                        <div class="item__autor"><span class="color">– Rod N. Clay,</span> Industrial photographer</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Appointment CTA -->
<section class="reveal-effect" id="appointment-cta">
    <div class="block schedule_one">
        <div class="container position-relative">
            <div class="section__text-background text-color02 text-center text-background__center">Schedule</div>
            <div class="row">
                <div class="col-md-6">
                    <div class="text-appointment">
                        <h2 class="h-lg">Schedule <span class="color">Your Appointment</span> Today</h2>
                        <p class="info">Your Automotive Repair &amp; Maintenance Service Specialist</p>
                        <h2 class="h-phone">011-554-8648 / 070-221-1022</h2>
                        <div>
                            <a class="btn btn-border btn-invert" data-target="#appointmentForm" data-toggle="modal" href="#"><span>Appointment</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-move animation animated fadeInRight" data-animation="fadeInRight" data-animation-delay="0s">
                        <img loading="lazy" alt="Schedule Autoshine Appointment" decoding="async" src="assets/images/img-car-move.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div><!-- #primary -->
</div><!-- #pageContent -->

<?php require_once '../includes/footer.php'; ?>

