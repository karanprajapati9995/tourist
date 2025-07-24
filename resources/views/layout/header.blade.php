<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('style.css')}}">
    <link rel="stylesheet" href="{{url('Package.css')}}">
    <link rel="stylesheet" href="{{url('Destination.css')}}">
    <link rel="stylesheet" href="{{url('Detailes.css')}}">
    <link rel="stylesheet" href="{{url('Contact.css')}}">
    <!-- ✅ Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ✅ Font Awesome v6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- ✅ Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- ✅ Bootstrap 5.3.3 JS (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ✅ Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Montserrat:wght@400&display=swap"
        rel="stylesheet">


    <!-- Font Awesome 6 CDN (Free version) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">



</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container d-flex justify-content-between align-items-center hima">

                <!-- Logo -->
                <div class="logo-section d-flex align-items-center">
                    <img class="logo-img" src="{{url('images/logo.webp')}}" alt="">
                </div>

                <!-- Small screen: WhatsApp icon + Toggler -->
                <div class="d-lg-none d-flex align-items-center gap-2">
                    <a href="https://wa.me/your-number" target="_blank" class="login-btn">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <button class="navbar-toggler" type="button" id="menuToggle">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <!-- ✅ Desktop Navigation Centered -->
                <div class="d-none d-lg-flex justify-content-center flex-grow-1">
                    <ul class="navbar-nav gap-4">
                        <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('destination')}}">Destination</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('package')}}">Packages</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </div>

                <!-- WhatsApp icon for large screen -->
                <div class="d-none d-lg-block">
                    <a href="https://wa.me/your-number" target="_blank" class="login-btn">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>

            </div>
        </nav>


        <!-- Offcanvas Menu -->
        <div id="offcanvasMenu" class="offcanvas-custom d-lg-none">
            <button class="close-btn" id="menuClose">&times;</button>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('destination')}}">Destination</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('package')}}">Packages</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contact</a></li>
            </ul>
        </div>
    </header>
