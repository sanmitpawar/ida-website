<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-white border-bottom fixed-top bs shadow-lift mb-5">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('public/img/company/logo.png') }}" class="navbar-brand-img" alt="...">
        </a>
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-x"></i>
            </button>
            <!-- Navigation -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" id="navbarAccount" href="{{ url("/") }}">
                    Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="navbarAccount" href="{{ url('about-us') }}">
                    About Us
                    </a>
                </li>
                @if(URL::current() == url('/'))
                <li class="nav-item">
                    <a class="nav-link" id="navbarAccount" href="#services" data-scroll='{"offset": 0}'>
                    services
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" id="navbarAccount" href="{{ url('/')."#services" }}" data-scroll='{"offset": 0}'>
                    services
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" id="navbarAccount" href="{{ url('products') }}">
                    Products
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="navbarAccount" href="{{ url("/contact-us") }}">
                    Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>