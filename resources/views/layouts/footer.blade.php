<footer class="py-8 py-md-11 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 footer-first-wrapper">
                <!-- Brand -->
                <img src="{{ asset("public/img/company/logo.png") }}" alt="..." class="footer-brand footer-logo img-fluid mb-2">
            </div>
            <div class="col-6 col-md-4">
                <!-- Heading -->
                <h6 class="fw-bold text-uppercase text-gray-700">
                    Indiana Drives & Automation
                </h6>
                <!-- List -->
                <ul class="list-unstyled text-body-secondary mb-6 mb-md-8 mb-lg-0">
                    <li class="mb-3">
                        <a href="{{ url('/') }}" class="text-reset">
                        Home
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="{{ url('/about-us') }}" class="text-reset">
                        About Us
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="{{ url('/contact-us') }}" class="text-reset">
                        Contact Us
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-md-4">
                <!-- Heading -->
                <h6 class="fw-bold text-uppercase text-gray-700">
                    Policies
                </h6>
                <!-- List -->
                <ul class="list-unstyled text-body-secondary mb-0">
                    <li class="mb-3">
                        <a href="{{ url('policy/privacy') }}" class="text-reset">
                        Privacy Policy
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="{{ url('policy/disclaimer') }}" class="text-reset">
                        Website Disclaimer Policy
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('policy/terms') }}" class="text-reset">
                        Terms Of Usage Policy
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
</footer>