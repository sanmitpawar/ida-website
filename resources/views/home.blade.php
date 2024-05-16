@section('title', 'Indiana Drives & Automation | Home')
@extends('layouts.app')
@section('content')
<style>
</style>
<!-- SLIDER -->
<section class="home-slider container-fluid mt-11">
    <div class="row pe-10 ps-10">
        <div class="col-md-12">
            <div class="flickity-button-white flickity-button-inset" data-flickity='{"imagesLoaded": true, "wrapAround": true,"freeScroll" : true, "pageDots": false, "autoPlay" : true}'>
                <div class="w-100">
                    <!-- Image -->
                    <img src="{{ asset('public/img/company/slider/csm_keb-control-automation-c6-fokus_acf0899aed.png') }}" class="img-fluid w-100" alt="...">
                </div>
                <div class="w-100">
                    <!-- Image -->
                    <img src="{{ asset('public/img/company/slider/csm_keb-drives-s6-group-1920_3f1be80033.png') }}" alt="...">
                </div>
                <div class="w-100">
                    <!-- Image -->
                    <img src="{{ asset('public/img/company/slider/img_dr_S6_02-04-a-1920.png') }}" class="img-fluid w-100" alt="...">
                </div>
                <div class="w-100">
                    <!-- Image -->
                    <img src="{{ asset('public/img/company/slider/keb-drives_6p19-dl4-brusatori-hmi-7zol-combistop38-1920.png') }}" class="img-fluid w-100" alt="...">
                </div>
                <div class="w-100">
                    <!-- Image -->
                    <img src="{{ asset('public/img/company/slider/keb-drives-f5-group-d-u-1920.png') }}" class="img-fluid w-100" alt="...">
                </div>
                <div class="w-100">
                    <!-- Image -->
                    <img src="{{ asset('public/img/company/slider/keb-drives-f6-02-09-1920.png') }}" class="img-fluid w-100" alt="...">
                </div>
                <div class="w-100">
                    <!-- Image -->
                    <img src="{{ asset('public/img/company/slider/keb-drives-g6-e.png') }}" class="img-fluid w-100" alt="...">
                </div>
                <div class="w-100">
                    <!-- Image -->
                    <img src="{{ asset('public/img/company/slider/keb-emobility-t6apd-modul-c.jpg') }}" class="img-fluid w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT -->
<section class="pb-10 pt-10 why-indiana-section">
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-7 text-center mt-4 mb-4">
            <!-- Heading -->
            <h2 class="fw-bold">
                Why Indiana Drives & Automation?
            </h2>
            <p class="text-center">
                At Indiana Drives & Automation, we are not just a service provider; we are your partner in progress. Join us in our journey towards sustainable growth and excellence.
            </p>
        </div>
    </div>
    <div class="row mt-10 ps-10 pe-10">
        <div class="col-12 col-md-4 mb-6" data-aos="fade-up" data-aos-delay="50">
            <!-- Card -->
            <div class="card shadow-lift mb-6 mb-md-0 lift lift-lg">
                <div class="card-body">
                    <!-- Badge -->
                    <span class="badge rounded-pill text-bg-danger badge-float badge-float-outside">
                    1
                    </span>
                    <!-- Heading -->
                    <h4 class="fw-bold text-center">
                        Industry Expertise
                    </h4>
                    <!-- Text -->
                    <p class="text-body-secondary">
                        With years of experience, we bring a wealth of knowledge and expertise to every project.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-6" data-aos="fade-up" data-aos-delay="50">
            <!-- Card -->
            <div class="card shadow-lift mb-6 mb-md-0 lift lift-lg">
                <div class="card-body">
                    <!-- Badge -->
                    <span class="badge rounded-pill text-bg-danger badge-float badge-float-outside">
                    2
                    </span>
                    <!-- Heading -->
                    <h4 class="fw-bold text-center">
                        Teamwork
                    </h4>
                    <!-- Text -->
                    <p class="text-body-secondary">
                        We believe in the power of collaboration. Our cohesive team works in harmony to deliver the best results.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-6" data-aos="fade-up" data-aos-delay="50">
            <!-- Card -->
            <div class="card shadow-lift mb-6 mb-md-0 lift lift-lg">
                <div class="card-body">
                    <!-- Badge -->
                    <span class="badge rounded-pill text-bg-danger badge-float badge-float-outside">
                    3
                    </span>
                    <!-- Heading -->
                    <h4 class="fw-bold text-center">
                        Flexibility
                    </h4>
                    <!-- Text -->
                    <p class="text-body-secondary">
                        We tailor our services to meet your unique needs, ensuring flexibility in our approach.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-6" data-aos="fade-up" data-aos-delay="50">
            <!-- Card -->
            <div class="card shadow-lift mb-6 mb-md-0 lift lift-lg">
                <div class="card-body">
                    <!-- Badge -->
                    <span class="badge rounded-pill text-bg-danger badge-float badge-float-outside">
                    4
                    </span>
                    <!-- Heading -->
                    <h4 class="fw-bold text-center">
                        Acceptability
                    </h4>
                    <!-- Text -->
                    <p class="text-body-secondary">
                        Our commitment to quality and customer satisfaction has earned us wide acceptability among clients who seek top-notch industrial solutions.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-6" data-aos="fade-up" data-aos-delay="50">
            <!-- Card -->
            <div class="card shadow-lift mb-6 mb-md-0 lift lift-lg">
                <div class="card-body">
                    <!-- Badge -->
                    <span class="badge rounded-pill text-bg-danger badge-float badge-float-outside">
                    5
                    </span>
                    <!-- Heading -->
                    <h4 class="fw-bold text-center">
                        Knowledge
                    </h4>
                    <!-- Text -->
                    <p class="text-body-secondary">
                        Our continuous learning and adaptation to technology empowers us to be Competitive in the market. The knowledge we have from our qualified team enables us to complete the project successfully and on time.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-6" data-aos="fade-up" data-aos-delay="50">
            <!-- Card -->
            <div class="card shadow-lift mb-6 mb-md-0 lift lift-lg">
                <div class="card-body">
                    <!-- Badge -->
                    <span class="badge rounded-pill text-bg-danger badge-float badge-float-outside">
                    6
                    </span>
                    <!-- Heading -->
                    <h4 class="fw-bold text-center">
                        Quality
                    </h4>
                    <!-- Text -->
                    <p class="text-body-secondary">
                        Our commitment to quality is one of the bases for our competitive advantage and customers build their trust on us. Our customers’ satisfaction is one of our prime importance.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- / .container -->
</section>
<!-- Services -->
<section class="pb-10 pt-10 bg-gray-200 services-section" id="services">
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-7 text-center mt-4 mb-4">
            <!-- Heading -->
            <h2 class="fw-bold">
                Our Services
            </h2>
            <p class="text-center">
                At Indiana Drives & Automation., we are offer following services.
            </p>
        </div>
    </div>
    <div class="row pe-10 ps-10 mt-8">
        <div class="col-12 col-md-6">
            <!-- Card -->
            <div class="card card-border border-danger shadow-lg mb-6 mb-md-8 lift lift-lg">
                <div class="card-body text-center">
                    <!-- Icon -->
                    <div class="icon-circle bg-danger text-white mb-5">
                        <i class="fe fe-user-plus"></i>
                    </div>
                    <!-- Heading -->
                    <h4 class="fw-bold">
                        Sales Solutions
                    </h4>
                    <!-- Text -->
                    <p class="text-gray-700 mb-5">
                        Delivering tailored machinery solutions for industrial needs and comprehensive support directly to end-users, ensuring seamless operations.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <!-- Card -->
            <div class="card card-border border-danger shadow-lg mb-6 mb-md-8 lift lift-lg">
                <div class="card-body text-center">
                    <!-- Icon -->
                    <div class="icon-circle bg-danger text-white mb-5">
                        <i class="fe fe-check"></i>
                    </div>
                    <!-- Heading -->
                    <h4 class="fw-bold">
                        Technical Services
                    </h4>
                    <!-- Text -->
                    <p class="text-gray-700 mb-5">
                        Maximizing operational efficiency through expert project management, PLC, HMI programming, and automation, coupled with reliable repair services and proactive maintenance plans for drive systems and HVAC units.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row pe-10 ps-10 mt-8 justify-content-center">
        <div class="col-12 col-md-12">
            <!-- Card -->
            <div class="card card-border border-danger shadow-lg mb-6 mb-md-8 lift lift-lg">
                <div class="card-body text-center">
                    <!-- Heading -->
                    <h4 class="fw-bold">
                        We are dealing in Services and Repairs of AC and Servo Drives and Servo Motors of following make
                    </h4>
                    <!-- Text -->
                    <div class="services-owl-carousel">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/yaskawa.png") }}" alt="Yaskawa">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/rexroth.png") }}" alt="Rexroth">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/rockwell.png") }}" alt="Rockwell">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/schneider.png") }}" alt="Schneider">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/siemens.png") }}" alt="Siemens">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/abb.png") }}" alt="ABB">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/arcuchi.png") }}" alt="Arcuchi">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/baumuller.png") }}" alt="Baumuller">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/Bharat-Bijlee.png") }}" alt="Bharat Bijlee">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/cg.jpeg") }}" alt="CG">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/danfoss.png") }}" alt="Danfoss">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/delta.png") }}" alt="Delta">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/fuji.png") }}" alt="Fuji">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/golden-age-servo-motor.jpeg") }}" alt="Golden Age Servo Motor">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/hpb-motion.png") }}" alt="HPB Motion">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/inovance.png") }}" alt="Inovance">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/invt.png") }}" alt="INVT">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/KEB.png") }}" alt="KEB">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/lenze.png") }}" alt="Lenze">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/mitsubishi.png") }}" alt="Mitsubishi">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/omron.png") }}" alt="Omron">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/phase-motion.png") }}" alt="Phase Motion">
                            </div>
                            <div class="item">
                                <img src="{{ asset("public/img/company/AC-Drive-Servo-Drives-and-Servo-Motos/realland-Servo.png") }}" alt="Realland Servo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / .row -->
    <!-- / .container -->
</section>
<!-- Products -->
<section class="pb-10 pt-10 products-section" id="products">
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-7 text-center mt-4 mb-4">
            <!-- Heading -->
            <h2 class="fw-bold">
                Our Products
            </h2>
            <p class="text-center">
                At Indiana Drives & Automation., we are offer following products.
            </p>
        </div>
    </div>
    <div class="row ps-10 pe-10 align-items-center justify-content-center">
        <div class="col-12 col-md-3 mb-3">
            <!-- Card -->
            <div class="card card-border border-danger shadow-lg">
                <div class="card-body">
                    <!-- List group -->
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <!-- Text -->
                            <div class="me-auto">
                                <!-- Heading -->
                                <p class="p-header fw-bold mb-1">
                                    General Purpose AC Drives
                                </p>
                                <!-- Text -->
                                <p class="p-content fs-sm text-body-secondary mb-0">
                                    BL5X AC VARIABLE FREQUENCY DRIVES
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <!-- Card -->
            <div class="card card-border border-danger shadow-lg">
                <div class="card-body">
                    <!-- List group -->
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <!-- Text -->
                            <div class="me-auto">
                                <!-- Heading -->
                                <p class="p-header fw-bold mb-1">
                                    KEB Make F5 Application/ Servo Drives
                                </p>
                                <!-- Text -->
                                <p class="p-content fs-sm text-body-secondary mb-0">
                                    F5-Multi Drives (Rating upto 900kw)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <!-- Card -->
            <div class="card card-border border-danger shadow-lg">
                <div class="card-body">
                    <!-- List group -->
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <!-- Text -->
                            <div class="me-auto">
                                <!-- Heading -->
                                <p class="p-header fw-bold mb-1">
                                    KEB Make Advance Smart Servo Drives S6/F6
                                </p>
                                <!-- Text -->
                                <p class="p-content fs-sm text-body-secondary mb-0">
                                    KEB COMBIVERT S6 / F6 Intelligent Servo Drives
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <!-- Card -->
            <div class="card card-border border-danger shadow-lg">
                <div class="card-body">
                    <!-- List group -->
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <!-- Text -->
                            <div class="me-auto">
                                <!-- Heading -->
                                <p class="p-header fw-bold mb-1">
                                    KEB Make Modular Drives for Multi Axis Servo Control:H6 (MultiAxis Drives)
                                </p>
                                <!-- Text -->
                                <p class="p-content fs-sm text-body-secondary mb-0">
                                    The modular drive technology: KEB COMBIVERT H6
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <!-- Card -->
            <div class="card card-border border-danger shadow-lg">
                <div class="card-body">
                    <!-- List group -->
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <!-- Text -->
                            <div class="me-auto">
                                <!-- Heading -->
                                <p class="p-header fw-bold mb-1">
                                    KEB F6K Series Servo Drive
                                </p>
                                <!-- Text -->
                                <p class="p-content fs-sm text-body-secondary mb-0">
                                    KEB COMBIVERT F6-K - Power Range
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <!-- Card -->
            <div class="card card-border border-danger shadow-lg">
                <div class="card-body">
                    <!-- List group -->
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <!-- Text -->
                            <div class="me-auto">
                                <!-- Heading -->
                                <p class="p-header fw-bold mb-1">
                                    KEB P6 Pitch Control Drive
                                </p>
                                <!-- Text -->
                                <p class="p-content fs-sm text-body-secondary mb-0">
                                    Pitch and Yaw Drives for Wind Turbine Generator
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <!-- Card -->
            <div class="card card-border border-danger shadow-lg">
                <div class="card-body">
                    <!-- List group -->
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <!-- Text -->
                            <div class="me-auto">
                                <!-- Heading -->
                                <p class="p-header fw-bold mb-1">
                                    KEB Make Smart C6
                                </p>
                                <!-- Text -->
                                <p class="p-content fs-sm text-body-secondary mb-0">
                                    Programmable Multi Axis Controller
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <!-- Card -->
            <div class="card card-border border-danger shadow-lg">
                <div class="card-body">
                    <!-- List group -->
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <!-- Text -->
                            <div class="me-auto">
                                <!-- Heading -->
                                <p class="p-header fw-bold mb-1">
                                    Synchronous AC Servo Motors
                                </p>
                                <!-- Text -->
                                <p class="p-content fs-sm text-body-secondary mb-0">
                                    For cyclic applications demanding accurate positioning
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / .row -->
    <!-- / .container -->
</section>
<!-- COMPANIES -->
<section class="py-8 py-md-11 bg-gray-200">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 text-center">
                <!-- Heading -->
                <h2>
                    We strive to work with the best. <br />
                    The best companies in the world.
                </h2>
                <!-- Text -->
                <p class="text-center fs-lg text-body-secondary mb-7 mb-md-9">
                    Indiana Drives & Automation worked with some of the greatest companies in the world.
                </p>
            </div>
        </div>
        <!-- / .row -->
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="img-fluid mb-6 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/22/Hindalco_Logo.svg/1200px-Hindalco_Logo.svg.png">
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-fluid mb-6 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Kellogg%27s-Logo.svg/2560px-Kellogg%27s-Logo.svg.png">
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-fluid mb-6 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/en/d/d9/AsianHeartInstitute.jpg">
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-fluid mb-6 text-center">
                    <img src="https://dyimg77.exportersindia.com/company_logo/1024921.jpg">
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-fluid mb-6 text-center">
                    <img src="https://urbanelectricpower.com/wp-content/uploads/2020/08/Godrej-Logo.png">
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-fluid mb-6 text-center">
                    <img src="https://www.sarvottampolymers.com/assets/front/images/logo.png">
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-fluid mb-6 text-center">
                    <img src="https://i.ibb.co/sv5tMWt/download.png">
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-fluid mb-6 text-center">
                    <img src="https://i.ibb.co/xJRTQ5f/1651510667447.jpg">
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-fluid mb-6 text-center">
                    <img src="https://www.unominda.com/images/logo.png">
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-fluid mb-6 text-center">
                    <img src="https://apextechnoplast.com/img/logo/logo1.jpg">
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-fluid mb-6 text-center">
                    <img src="https://i.ibb.co/hCfyMRq/download.jpg">
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-fluid mb-6 text-center">
                    <img src="https://i.ibb.co/T4b7bYx/abc.png">
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-fluid mb-6 text-center">
                    <img src="https://i.ibb.co/m0hkDs1/sterimax.png">
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-fluid mb-6 text-center">
                    <img src="https://johncockerill.com/wp-content/uploads/2022/01/cockerill-logo.png">
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-fluid mb-6 text-center">
                    <img src="https://image.pitchbook.com/XiuHA1rqripBVIDUmiSz8KFOZ1P1669472788817_200x200">
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-fluid mb-6 text-center">
                    <img src="https://acmemachinery.co.in/img/acme-logo.png">
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-fluid mb-6 text-center">
                    <img src="https://i.ibb.co/JnkFY4P/download-1.png">
                </div>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
</section>
<!-- CTA -->
<section class="pt-6 pt-md-8 bg-danger">
    <div class="container pb-6 pb-md-8 border-bottom">
        <div class="row align-items-center">
            <div class="col-12 col-md">
                <!-- Heading -->
                <h3 class="mb-1 text-white">
                    Need Anything ?
                </h3>
                <!-- Text -->
                <p class="fs-lg text-white mb-6 mb-md-0">
                    We’re Here to Help. Connect with us.
                </p>
            </div>
            <div class="col-12 col-md-auto">
                <a href="{{ url("/contact-us") }}" class="btn btn-light lift">
                Contact Us
                </a>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
</section>
@endsection
@section('scripts')

<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay : false,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
})
</script>

@endsection