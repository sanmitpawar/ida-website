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
<!-- Principles -->
{{-- <section class="pt-10 bg-gray-200 pb-10">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 text-center">
                <h1>
                    Principles That Define Us
                </h1>
                <!-- Text -->
                <p class="fs-lg text-gray-700 mb-7 mb-md-9">
                    At Indiana Drives & Engineering PVT LTD, our identity is shaped by a set of guiding principles that serve as the bedrock of our organization. These principles encapsulate our core beliefs, drive our decision-making processes, and define the unique character of our company.
                </p>
            </div>
        </div>
        <!-- / .row -->
        <div class="row">
            <div class="col-12 col-md-4" data-aos="fade-up">
                <!-- Card -->
                <div class="card shadow-lift mb-6 mb-md-0 lift lift-lg">
                    <!-- Shape -->
                    <div class="position-relative">
                        <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/>
                            </svg>
                        </div>
                    </div>
                    <!-- Body -->
                    <div class="card-body position-relative">
                        <!-- Heading -->
                        <h3>
                            Our Vision
                        </h3>
                        <!-- Text -->
                        <p class="text-body-secondary">
                            Our vision is to become one of the most trusted and excellent service providers for systems and technologies.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4" data-aos="fade-up">
                <!-- Card -->
                <div class="card shadow-lift mb-6 mb-md-0 lift lift-lg">
                    <!-- Shape -->
                    <div class="position-relative">
                        <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/>
                            </svg>
                        </div>
                    </div>
                    <!-- Body -->
                    <div class="card-body position-relative">
                        <!-- Heading -->
                        <h3>
                            Our Values
                        </h3>
                        <!-- Text -->
                        <p class="text-body-secondary">
                            Our values are driven by our passion for excellence, building trust through collaboration, and engaging with people to achieve shared success..
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4" data-aos="fade-up">
                <!-- Card -->
                <div class="card shadow-lift mb-6 mb-md-0 lift lift-lg">
                    <!-- Shape -->
                    <div class="position-relative">
                        <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/>
                            </svg>
                        </div>
                    </div>
                    <!-- Body -->
                    <div class="card-body position-relative">
                        <!-- Heading -->
                        <h3>
                            Our Mission
                        </h3>
                        <!-- Text -->
                        <p class="text-body-secondary">
                            We inspire organizations to achieve sustainable growth and excellence by engaging leaders in learning, sharing, and innovating. Our core values of passion for excellence, building trust, and working collaboratively drive us toward this mission.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
</section>
<!-- Principles -->
<section class="pt-10 pb-10">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 text-center">
                <h1>
                    Our Strength.
                </h1>
                <!-- Text -->
                <p class="fs-lg text-gray-700 mb-7 mb-md-9">
                    At Indiana Drives & Engineering PVT LTD, Following are our strength pointers.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <!-- Card -->
                <div class="card card-border border-success shadow-lg">
                    <div class="card-body">
                        <!-- List group -->
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <!-- Text -->
                                <div class="me-auto">
                                    <!-- Heading -->
                                    <p class="fw-bold mb-1">
                                        Automation Projects & Services
                                    </p>
                                    <!-- Text -->
                                    <p class="fs-sm text-body-secondary mb-0">
                                        Expertise in designing and implementing automation solutions to enhance operational efficiency
                                    </p>
                                </div>
                                <!-- Check -->
                                <div class="badge badge-rounded-circle text-bg-success-subtle ms-4">
                                    <i class="fe fe-check"></i>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <!-- Text -->
                                <div class="me-auto">
                                    <!-- Heading -->
                                    <p class="fw-bold mb-1">
                                        Engineering Projects
                                    </p>
                                    <!-- Text -->
                                    <p class="fs-sm text-body-secondary mb-0">
                                        Proven capabilities in executing a wide range of engineering projects with precision and excellence.
                                    </p>
                                </div>
                                <!-- Check -->
                                <div class="badge badge-rounded-circle text-bg-success-subtle ms-4">
                                    <i class="fe fe-check"></i>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <!-- Text -->
                                <div class="me-auto">
                                    <!-- Heading -->
                                    <p class="fw-bold mb-1">
                                        EPC Contracts
                                    </p>
                                    <!-- Text -->
                                    <p class="fs-sm text-body-secondary mb-0">
                                        Proficiency in handling turnkey projects from inception to completion, offering a seamless and holistic approach.
                                    </p>
                                </div>
                                <!-- Check -->
                                <div class="badge badge-rounded-circle text-bg-success-subtle ms-4">
                                    <i class="fe fe-check"></i>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <!-- Text -->
                                <div class="me-auto">
                                    <!-- Heading -->
                                    <p class="fw-bold mb-1">
                                        MEP Projects
                                    </p>
                                    <!-- Text -->
                                    <p class="fs-sm text-body-secondary mb-0">
                                        In-depth knowledge and experience in managing complex MEP projects to ensure optimal functionality.
                                    </p>
                                </div>
                                <!-- Check -->
                                <div class="badge badge-rounded-circle text-bg-success-subtle ms-4">
                                    <i class="fe fe-check"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <!-- Card -->
                <div class="card card-border border-success shadow-lg">
                    <div class="card-body">
                        <!-- List group -->
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <!-- Text -->
                                <div class="me-auto">
                                    <!-- Heading -->
                                    <p class="fw-bold mb-1">
                                        Turnkey Solutions & Services
                                    </p>
                                    <!-- Text -->
                                    <p class="fs-sm text-body-secondary mb-0">
                                        Providing end-to-end solutions and services for projects, offering clients a hassle-free experience.
                                    </p>
                                </div>
                                <!-- Check -->
                                <div class="badge badge-rounded-circle text-bg-success-subtle ms-4">
                                    <i class="fe fe-check"></i>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <!-- Text -->
                                <div class="me-auto">
                                    <!-- Heading -->
                                    <p class="fw-bold mb-1">
                                        Trading Industrial Automation Products
                                    </p>
                                    <!-- Text -->
                                    <p class="fs-sm text-body-secondary mb-0">
                                        A reliable source for industrial automation products, ensuring access to high-quality equipment and components.
                                    </p>
                                </div>
                                <!-- Check -->
                                <div class="badge badge-rounded-circle text-bg-success-subtle ms-4">
                                    <i class="fe fe-check"></i>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <!-- Text -->
                                <div class="me-auto">
                                    <!-- Heading -->
                                    <p class="fw-bold mb-1">
                                        Absolute Product Services
                                    </p>
                                    <!-- Text -->
                                    <p class="fs-sm text-body-secondary mb-0">
                                        Demonstrated commitment to maintaining and servicing products, ensuring longevity and performance
                                    </p>
                                </div>
                                <!-- Check -->
                                <div class="badge badge-rounded-circle text-bg-success-subtle ms-4">
                                    <i class="fe fe-check"></i>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <!-- Text -->
                                <div class="me-auto">
                                    <!-- Heading -->
                                    <p class="fw-bold mb-1">
                                        Maintenance Services
                                    </p>
                                    <!-- Text -->
                                    <p class="fs-sm text-body-secondary mb-0">
                                        Expertise in proactive and reactive maintenance, ensuring the longevity and reliability of industrial systems.
                                    </p>
                                </div>
                                <!-- Check -->
                                <div class="badge badge-rounded-circle text-bg-success-subtle ms-4">
                                    <i class="fe fe-check"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / .container -->
</section> --}}
{{-- commitmemt to quality --}}
<!-- ABOUT -->
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