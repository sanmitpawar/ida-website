@section('title', 'Indiana Drives & Automation | About Us')
@extends('layouts.app')
@section('content')
<!-- About US -->
<section class="border-bottom pt-13 pb-10 about-indiana">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <!-- Headin -->
                <h1 class="display-2">
                    About Us
                </h1>
                <!-- Text -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="img-thumbnail mt-8">
                            <img src="{{ asset("public/img/company/logo.png") }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p class="lead text-body-secondary mt-8 mb-6" style="text-align: justify">
                            <strong>Indiana Drives & Automation</strong> incorporated in 2020 under <strong>Indiana Drives & Automation</strong> of Companies. “Indiana Drives & Automation” was incorporated in 2006 as a reliable service provider with an excellent track record and has grown tremendously since its inception. Today we are a well-known Engineering Icon for providing complete industrial service solution As in Sales, Services, Repairs, Harmonic, Power Quality Audit, AMC’s etc. through proven innovative technology with an unparalleled, Sales & Service team.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="lead text-body-secondary mt-8 mb-6" style="text-align: justify">
                            We are service providers for all makes Drives & Servo’s Service Solution providers, AMC PAN India service provider. Repairs & Services Center of All make AC Drives & Servos. Having our own dedicated highly qualified & well experienced technical team.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / .container -->
</section>
<section class="pb-10 pt-10 bg-gray-200 commitment-quality-section">
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-7 text-center mt-4 mb-4">
            <!-- Heading -->
            <h2 class="fw-bold">
                Authorized Channel Partner
            </h2>
            <p>
                Indiana Drives & Automation is Authorized Channel Partner for Bharat Bijlee Ltd (Drives & Automation Division) & KEB -Germany.
            </p>
        </div>
    </div>
    <div class="row mt-8 ps-10 pe-10">
        <div class="col-md-12 mb-6" data-aos="fade-up" data-aos-delay="50">
            <!-- Card -->
            <div class="card shadow-lift mb-6 mb-md-0 lift lift-lg">
                <div class="card-body">
                    <!-- Badge -->
                    <span class="badge rounded-pill text-bg-danger badge-float badge-float-outside">
                    1
                    </span>
                    <div class="m-auto text-center">
                        <!-- Heading -->
                        <img src="https://www.bharatbijlee.com/assets/images/bharatbijlee-logo.png" alt="">
                        <h4 class="fw-bold mt-3">
                            Bharat Bijlee Ltd
                        </h4>
                    </div>
                    <hr>
                    <!-- Text -->
                    <p class="text-body-secondary">
                    <ul>
                        <li>
                            Bharat Bijlee is a pioneer in electrical engineering in India, and one of the most
                            trusted names in the industry today. Established in 1946, the company has two
                            primary business segments: Power Systems that comprise Transformers and
                            Projects divisions, and Industrial Systems segment comprising Electric Motors,
                            Drives & Industrial Automation and Elevator Systems divisions.
                        </li>
                        <li>
                            Bharat Bijlee has partnered with KEB of Germany for the distribution of their
                            Variable Frequency Drives. KEB’s AC Variable Drives up to 900 kW are also
                            manufactured at its plant. In addition, the company provides DC Drives, Servo
                            system solutions, and Bharat Bijlee in the first Indian Servo Motor Manufacturer an
                            entire gamut of industrial automation solutions for enhanced precision, productivity
                            and efficiency. Servo systems serve various applications in Plastics, Textiles, Metals,
                            Packaging, Wind Energy and Machine Tools
                        </li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-6" data-aos="fade-up" data-aos-delay="50">
            <!-- Card -->
            <div class="card shadow-lift mb-6 mb-md-0 lift lift-lg">
                <div class="card-body">
                    <!-- Badge -->
                    <span class="badge rounded-pill text-bg-danger badge-float badge-float-outside">
                    2
                    </span>
                    <div class="m-auto text-center">
                        <!-- Heading -->
                        <img src="https://www.keb-automation.com/typo3conf/ext/user_keb/Resources/Public/Images/logo.svg" alt="">
                        <h4 class="fw-bold mt-5">
                            KEB Germany
                        </h4>
                    </div>
                    <hr>
                    <!-- Text -->
                    <p class="text-body-secondary">
                    <ul>
                        <li>
                            In 1972, Karl Ernst Brinkmann started KEB with six employees and the Combibox – a combination clutch/brake. Over the years, the company added products, fine-tuned its solution-oriented approach, and expanded into new geographies to become a global provider of automation solutions.
                        </li>
                        <li>
                            Today, KEB Automation KG is headquartered in Barntrup, Germany. It has four global production sites (Germany, U.S., China, and Japan), 10 subsidiaries, 30 sales and service centers, and 1,500+ worldwide employees
                        </li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
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