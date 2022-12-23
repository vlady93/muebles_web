<!DOCTYPE html>
<html lang="en">

<head>
    <title>Muebles &mdash; Diseño e Innovación</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Oswald:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-xl-2">
                        <h1 class="mb-0 site-logo m-0 p-0"><a href="{{ route('login') }}" class="mb-0"> Mangoo</a>
                        </h1>
                    </div>
                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="#home-section" class="nav-link">Inicio</a></li>

                                <li><a href="#properties-section" class="nav-link">Muebles</a></li>
                                <li><a href="#services-section" class="nav-link">Servicios</a></li>
                                <li><a href="#contact-section" class="nav-link">Contacto</a></li>
                                @if (Route::has('login'))
                                    @auth
                                        @can('ver-categoria')
                                            <li><a href="{{ route('categorias.index') }}" class="nav-link">Categorias</a></li>
                                        @endcan
                                        @can('ver-producto')
                                            <li><a href="{{ route('productos.index') }}" class="nav-link">Productos</a></li>
                                        @endcan

                                        <li> <a href="{{ route('logout') }}"
                                                class="nav-link "onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                Salir </a>
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
                            class="site-menu-toggle js-menu-toggle text-white float-right">
                            <span class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>
        </header>


        <div class="site-block-wrap">
            <div class="owl-carousel with-dots">
                <div class="site-blocks-cover overlay overlay-2"
                    style="background-image: url(image/pexels-curtis-adams-7601369.jpg);" data-aos="fade"
                    id="home-section">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-6 mt-lg-5 text-center">
                                <h1 class="text-shadow">Buy &amp; Sell Property Here</h1>
                                <p class="mb-5 text-shadow">Free website template for Real Estate websites by the fine
                                    folks at <a href="https://free-template.co/" target="_blank">Free-Template.co</a>
                                </p>
                                <p><a href="https://free-template.co" target="_blank"
                                        class="btn btn-primary px-5 py-3">EXPLORAR</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="site-blocks-cover overlay overlay-2"
                    style="background-image: url(image/pexels-curtis-adams.jpg);" data-aos="fade" id="home-section">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-6 mt-lg-5 text-center">
                                <h1 class="text-shadow">Los muebles perfectos para tu hogar </h1>
                                <p class="mb-5 text-shadow">Elaborados con madera de alta calidad y durabilidad.</p>
                                <p><a href="https://free-template.co" target="_blank"
                                        class="btn btn-primary px-5 py-3">Get Started</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section" id="properties-section">
            <div class="container">
                <div class="row large-gutters">
                    @foreach ($categorias as $categoria)
                        <div class="col-md-6 col-lg-4 mb-3 mb-lg-5 ">
                            <div class="ftco-media-1">
                                <div class="ftco-media-1-inner">
                                    <a href={{ route('categorias.show', $categoria->id) }}
                                        class="d-inline-block mb-4"><img
                                            src={{ asset('image/' . $categoria->imagencategoria) }}
                                            alt="Free website template by Free-Template.co" class="img-fluid"></a>
                                    <div class="ftco-media-details">
                                        <h3>{{ $categoria->titulo }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <section class="site-section bg-light" id="services-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Servicios</h2>
                    </div>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-house"></span></div>
                            <div>
                                <h3>Find Property</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae
                                    vitae eligendi at.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-coin"></span></div>
                            <div>
                                <h3>Buy Property</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae
                                    vitae eligendi at.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-home"></span></div>
                            <div>
                                <h3>Beautiful Home</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae
                                    vitae eligendi at.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="site-section bg-light bg-image" id="contact-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Contacto</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 mb-5">



                        <form action="#" class="p-5 bg-white">

                            <h2 class="h4 text-black mb-5">Get In Touch</h2>

                            <div class="row form-group">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label class="text-black" for="fname">First Name</label>
                                    <input type="text" id="fname" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="text-black" for="lname">Last Name</label>
                                    <input type="text" id="lname" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">

                                <div class="col-md-12">
                                    <label class="text-black" for="email">Email</label>
                                    <input type="email" id="email" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">

                                <div class="col-md-12">
                                    <label class="text-black" for="subject">Subject</label>
                                    <input type="subject" id="subject" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="7" class="form-control"
                                        placeholder="Write your notes or questions here..."></textarea>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Send Message"
                                        class="btn btn-primary btn-md text-white">
                                </div>
                            </div>


                        </form>
                    </div>
                    <div class="col-md-5">

                        <div class="p-4 mb-3 bg-white">
                            <p class="mb-0 font-weight-bold">Address</p>
                            <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

                            <p class="mb-0 font-weight-bold">Phone</p>
                            <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

                            <p class="mb-0 font-weight-bold">Email Address</p>
                            <p class="mb-0"><a href="#">youremail@domain.com</a></p>

                        </div>

                    </div>
                </div>
            </div>
        </section>


        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-5">
                                <h2 class="footer-heading mb-4">About Us</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium
                                    magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
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
                                    <input type="text"
                                        class="form-control border-secondary text-white bg-transparent"
                                        placeholder="Enter Email" aria-label="Enter Email"
                                        aria-describedby="button-addon2">
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

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>


    <script src="js/main.js"></script>

</body>

</html>
