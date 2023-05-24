@php

function checkRouteActive($route){
if(Route::current()->uri == $route) return 'active';
}
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Si Masbro Politap</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="{{ url('public/home') }}/assets/img/ti.png" rel="icon">
    <link href="{{ url('public/home') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
        rel="stylesheet">
    <link href="{{ url('public/home') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ url('public/home') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('public/home') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ url('public/home') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ url('public/home') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ url('public/home') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ url('public/home') }}/assets/css/style.css" rel="stylesheet">
</head>

<body>

    @include('layout.home.header')
    <br>
    @yield('content')

    <!-- <main id="main">

        <section id="clients">
            <div class="container" data-aos="fade-up">


            </div>
        </section>
    </main> -->



    @include('layout.home.footer')
    <script src="{{ url('public/home') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ url('public/home') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/home') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ url('public/home') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ url('public/home') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ url('public/home') }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ url('public/home') }}/assets/js/main.js"></script>

</body>

</html>
