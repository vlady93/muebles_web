<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />

    <link rel="shortcut icon" href="ftco-32x32.png">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Oswald:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('fonts/icomoon/style.css') }}>

    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/jquery-ui.css') }}>
    <link rel="stylesheet" href={{ asset('css/owl.carousel.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/owl.theme.default.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/owl.theme.default.min.css') }}>

    <link rel="stylesheet" href={{ asset('css/jquery.fancybox.min.css') }}>

    <link rel="stylesheet" href={{ asset('css/bootstrap-datepicker.css') }}>

    <link rel="stylesheet" href={{ asset('fonts/flaticon/font/flaticon.css') }}>

    <link rel="stylesheet" href={{ asset('css/aos.css') }}>

    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    @yield('styles')
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar-m py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <h1 class="mb-0 site-logo m-0 p-0"><a href="{{route('inicio')}}" class="mb-0">Muebles</a></h1>
                </div>

                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="{{route('inicio')}}" class="nav-link">Inicio</a></li>
                            <li><a href="{{route('inicio')}}#properties-section" class="nav-link">Muebles</a></li>
                            <li><a href="{{route('inicio')}}#services-section" class="nav-link">Servicios</a></li>
                            <li><a href="{{route('inicio')}}#contact-section" class="nav-link">Contacto</a></li>
                            
                            @if (Route::has('login'))
                            @auth
                                <li><a href="{{ route('categorias.index') }}" class="nav-link">Categorias</a></li>
                                <li><a href="{{ route('productos.index') }}" class="nav-link">Productos</a></li>
                                <li> <a href="{{ route('logout') }}" class="nav-link "onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"> Salir </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endauth
                        @endif
                            
                        </ul>
                    </nav>
                </div>


                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#"
                        class="site-menu-toggle js-menu-toggle text-white float-right"><span
                            class="icon-menu h3"></span></a></div>

            </div>
        </div>

    </header>

    @yield('content')

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-5">
                            <h2 class="footer-heading mb-4">About Us</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam
                                voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                        </div>
                        <div class="col-md-3 mx-auto">
                            <h2 class="footer-heading mb-4">Quick Links</h2>
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-4">
                        <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                        <form action="#" method="post" class="footer-subscribe">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control border-secondary text-white bg-transparent"
                                    placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary text-black" type="button"
                                        id="button-addon2">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="">
                        <h2 class="footer-heading mb-4">Follow Us</h2>
                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook">s</span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </div>


                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="copyright"><small>&copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> Warehouse. All Rights Reserved. Design by <a
                                    href="https://free-template.co" target="_blank">Free-Template.co</a>
                            </small></p>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    </div> <!-- .site-wrap -->

    <a href="#top" class="gototop"><span class="icon-angle-double-up"></span></a>

    <script src={{ asset('js/jquery-3.3.1.min.js')}}></script>
    <script src={{ asset('js/jquery-ui.js')}}></script>
    <script src={{ asset('js/popper.min.js')}}></script>
    <script src={{ asset('js/bootstrap.min.js')}}></script>
    <script src={{ asset('js/owl.carousel.min.js')}}></script>
    <script src={{ asset('js/jquery.countdown.min.js')}}></script>
    <script src={{ asset('js/bootstrap-datepicker.min.js')}}></script>
    <script src={{ asset('js/jquery.easing.1.3.js')}}></script>
    <script src={{ asset('js/aos.js')}}></script>
    <script src={{ asset('js/jquery.fancybox.min.js')}}></script>
    <script src={{ asset('js/jquery.sticky.js')}}></script>
    <script src={{asset('js/main.js')}}></script>
    @yield('scripts')
</body>

</html>
