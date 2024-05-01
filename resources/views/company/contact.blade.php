@extends('layouts.app')
@section('content')
<!-- WELCOME -->
<section class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover contact-hero-welcome" style="background-image: url({{ asset('img/covers/cover-5.jpg') }});" id="contact-us">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <!-- Heading -->
                <h1 class="display-2 fw-bold text-white">
                    We’re Here to Help.
                </h1>
                <!-- Text -->
                <p class="lead text-white text-opacity-75 mb-0">
                    We always want to hear from you! Let us know how we can best help you and we'll do our very best.
                </p>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
</section>
<!-- SHAPE -->
<div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x text-light">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/>
        </svg>
    </div>
</div>
<!-- INFO -->
<section class="py-7 py-md-9 border-bottom border-gray-300" id="info">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Button -->
                <a href="#info" class="btn btn-white btn-rounded-circle shadow mt-n11 mt-md-n13" data-scroll>
                <i class="fe fe-arrow-down"></i>
                </a>
            </div>
        </div>
        <!-- / .row -->
        <div class="row">
            <div class="col-12 col-md-4 text-center border-end border-gray-300">
                <!-- Heading -->
                <h6 class="text-uppercase text-gray-700 mb-1">
                    Address
                </h6>
                <!-- Link -->
                <div class="mb-5 mb-md-0">
                    <a href="https://maps.app.goo.gl/cShhZ5hGFiuiyAkh9" target="_blank" class="h4">
                    PAP-D 153, Opp. To Titan Crusher Company, Near to CNG Pump Station, Shiravane MIDC, Nerul, Navi Mumbai, Maharashtra 400706.
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center border-end border-gray-300">
                <!-- Heading -->
                <h6 class="text-uppercase text-gray-700 mb-1">
                    Call anytime
                </h6>
                <!-- Link -->
                <div class="mb-5 mb-md-0">
                    <a href="tel:+91-9892161115" class="h4">
                    +91-9892161115
                    </a> <br>
                    <a href="tel:+91-9766645930" class="h4">
                    +91-9766645930
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center">
                <!-- Heading -->
                <h6 class="text-uppercase text-gray-700 mb-1">
                    Email us
                </h6>
                <!-- Link -->
                <a href="mailto:sales@indautomation.in" class="h4">
                sales@indautomation.in
                </a>
            </div>
        </div>
        <!-- / .row -->
    </div>
</section>
<!-- FORM -->
<section class="pt-10 pb-10 bg-gray-200">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <!-- Heading -->
                <h2 class="fw-bold">
                    Let us hear from you directly!
                </h2>
                <!-- Text -->
                <p class="fs-lg text-body-secondary mb-7 mb-md-9">
                    We always want to hear from you! Let us know how we can best help you and we'll do our very best.
                </p>
            </div>
        </div>
        <!-- / .row -->
        <div class="row justify-content-center pe-10 ps-10">
            <div class="col-md-6 mb-3">
                <div class="card map-card">
                    <div class="card-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.2274985961876!2d72.87571887474746!3d19.053732652672117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c39c9527f627%3A0x22586c58d1b8d37a!2sIndiana%20Drives%20%26%20Engineering%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1701444891944!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <!-- Form -->
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ url('contact-us/mail') }}">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-5">
                                        <!-- Label -->
                                        <label class="form-label" for="contactName">
                                        Full name
                                        </label>
                                        <!-- Input -->
                                        <input class="form-control" id="contactName" type="text" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-5">
                                        <!-- Label -->
                                        <label class="form-label" for="contactEmail">
                                        Email
                                        </label>
                                        <!-- Input -->
                                        <input class="form-control" id="contactEmail" type="email" placeholder="hello@domain.com">
                                    </div>
                                </div>
                            </div>
                            <!-- / .row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-7 mb-md-9">
                                        <!-- Label -->
                                        <label class="form-label" for="contactMessage">
                                        What can we help you with?
                                        </label>
                                        <!-- Input -->
                                        <textarea class="form-control" id="contactMessage" rows="5" placeholder="Tell us what we can help you with!"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- / .row -->
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <!-- Submit -->
                                    <button type="submit" class="btn btn-danger lift">
                                    Send message
                                    </button>
                                </div>
                            </div>
                            <!-- / .row -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
</section>
@endsection