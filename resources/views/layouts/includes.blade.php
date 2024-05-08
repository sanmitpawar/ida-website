<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Indiana Drives & Automation is a reliable service provider offering industrial service solutions including sales, services, repairs, and more. Authorized channel partner for Bharat Bijlee Ltd and KEB Germany.">
<meta name="keywords" content="Indiana Drives & Automation, industrial service solutions, sales, services, repairs, harmonic, power quality audit, AMC, Bharat Bijlee Ltd, KEB Germany">
<meta name="author" content="Indiana Drives & Automation">
{{-- og url --}}
<meta property="og:url" content="https://www.indautomation.in">
<meta property="og:title" content="Indiana Drives & Automation.">
<meta property="og:image" content="{{ asset('public/img/company/logo.png') }}">
<meta property="og:site_name" content="Indiana Drives & Automation.">
<meta property="og:description" content="Indiana Drives & Automation is a reliable service provider offering industrial service solutions including sales, services, repairs, and more. Authorized channel partner for Bharat Bijlee Ltd and KEB Germany.">
<title>@yield("title","Indiana Drives & Automation")</title>
<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('public/img/company/logo.png') }}" type="image/x-icon">
<!-- Libs CSS -->
<link rel="stylesheet" href="{{ asset("css/libs.bundle.css") }}">
<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset("css/theme.bundle.css") }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset("css/app.css") }}">
<!-- Title -->

{!! htmlScriptTagJsApi([
    'action' => 'homepage',
    'callback_then' => 'callbackThen',
    'callback_catch' => 'callbackCatch'
]) !!}