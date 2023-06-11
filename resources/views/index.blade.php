<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Adpers Store</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/themify-icons/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>
    {{-- ================ Start Header Menu Area ================= --}}
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand logo_h" href="index.html">
                        <h3>Adpers <span class="text-primary">Store</span></h3>
                    </a>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#slider">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tranding">Popular</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#parallax-1">Discount</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#best-seller">Best Seller</a>
                            </li>
                        </ul>

                        <ul class="nav-shop">

                            <li class="nav-item">
                                <a class="button button-header" href="{{ url('/login') }}">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    {{-- ================ End Header Menu Area ================= --}}

    <main class="site-main">
        {{-- ================ Hero banner start ================= --}}
        <section id="slider" class="hero-banner">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($Carousels as $key => $banner)
                        @if ($banner->is_active == 1)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img class="d-block w-100" style="max-height: 720px"
                                    src="{{ asset('storage/carousels_banner') }}/{{ $banner->banner }}"
                                    alt="First slide" />
                            </div>
                        @endif
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        {{-- ================ Hero banner start ================= --}}

        {{-- ================ trending product section start ================= --}}
        <section id="tranding" class="section-margin calc-60px">
            <div class="container">
                <div class="section-intro pb-60px">
                    <p>Popular Item in the market</p>
                    <h2>Trending <span class="section-intro__style">Product</span></h2>
                </div>
                <div class="row">
                    @foreach ($products as $key => $value)
                        @if ($value->status == 'accepted')
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="card text-center card-product">
                                    <div class="card-product__img">
                                        <img class="card-img"
                                            src="{{ asset('storage/image_product') }}/{{ $value->image }}"
                                            alt="" />
                                        <ul class="card-product__imgOverlay">
                                            <li>
                                                <a href="{{ url('/detail-product') }}/{{ $value->id }}"
                                                    class="btn btn-primary" role="button"><i class="ti-eye"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/detail-product') }}/{{ $value->id }}"
                                                    class="btn btn-primary" role="button"><i
                                                        class="ti-shopping-cart"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/detail-product') }}/{{ $value->id }}"
                                                    class="btn btn-primary" role="button"><i class="ti-heart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <p>{{ $value->Categories->name }}</p>
                                        <h4 class="card-product__title">
                                            <a href="single-product.html">{{ $value->name }}</a>
                                        </h4>
                                        <p class="card-product__price">${{ $value->price }} USD</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
        {{-- ================ trending product section end ================= --}}

        {{-- ================ offer section start ================= --}}
        <section class="offer" id="parallax-1" data-anchor-target="#parallax-1"
            data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="offer__content text-center">
                            <h3>Up To 50% Off</h3>
                            <h4>Discount 6.6</h4>
                            <p>Quality and original shoes</p>
                            <a class="button button--active mt-3 mt-xl-4" href="{{ url('/login') }}">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- ================ offer section end ================= --}}

        {{-- ================ Best Selling item  carousel ================= --}}
        <section id="best-seller" class="section-margin calc-60px">
            <div class="container">
                <div class="section-intro pb-60px">
                    <p>Popular Item in the market</p>
                    <h2>Best <span class="section-intro__style">Sellers</span></h2>
                </div>
                <div class="owl-carousel owl-theme" id="bestSellerCarousel">
                    @foreach ($products as $product)
                        @if ($product->status == 'accepted')
                            <div class="card text-center card-product">
                                <div class="card-product__img">
                                    <img class="img-fluid"
                                        src="{{ asset('storage/image_product') }}/{{ $product->image }}"
                                        alt="" />
                                    <ul class="card-product__imgOverlay">
                                        <li>
                                            <a href="{{ url('/detail-product') }}/{{ $product->id }}"
                                                class="btn btn-primary" role="button"><i class="ti-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/detail-product') }}/{{ $product->id }}"
                                                class="btn btn-primary" role="button"><i
                                                    class="ti-shopping-cart"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/detail-product') }}/{{ $product->id }}"
                                                class="btn btn-primary" role="button"><i class="ti-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <p>{{ $product->categories->name }}</p>
                                    <h4 class="card-product__title">
                                        <a href="single-product.html">{{ $product->name }}</a>
                                    </h4>
                                    <p class="card-product__price">${{ $product->price }} USD</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    @foreach ($products as $product)
                        @if ($product->status == 'accepted')
                            <div class="card text-center card-product">
                                <div class="card-product__img">
                                    <img class="img-fluid"
                                        src="{{ asset('storage/image_product') }}/{{ $product->image }}"
                                        alt="" />
                                    <ul class="card-product__imgOverlay">
                                        <li>
                                            <a href="{{ url('/detail-product') }}/{{ $product->id }}"
                                                class="btn btn-primary" role="button"><i class="ti-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/detail-product') }}/{{ $product->id }}"
                                                class="btn btn-primary" role="button"><i
                                                    class="ti-shopping-cart"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/detail-product') }}/{{ $product->id }}"
                                                class="btn btn-primary" role="button"><i class="ti-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <p>{{ $product->categories->name }}</p>
                                    <h4 class="card-product__title">
                                        <a href="single-product.html">{{ $product->name }}</a>
                                    </h4>
                                    <p class="card-product__price">${{ $product->price }} USD</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
        {{-- ================ Best Selling item  carousel end ================= --}}

        {{-- ================ Blog section start ================= --}}
        <section id="blog" class="blog">
            <div class="container">
                <div class="section-intro pb-60px">
                    <h2>Our <span class="section-intro__style">Team</span></h2>
                </div>

                <div class="row text-center">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-blog">
                            <div class="card-blog__img">
                                <img class="card-img rounded" src="{{ asset('admin/img/Kumparan.jpg') }}"
                                    alt="" style="height: 23em" />

                            </div>
                            <div class="card-body text-center">
                                <ul class="card-blog__info">
                                    <li><a href="#">IT Development</a></li>
                                </ul>
                                <h4 class="card-blog__title">
                                    <a href="single-blog.html">Ade Dwi Putra</a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-blog">
                            <div class="card-blog__img">
                                <img class="card-img rounded" src="{{ asset('admin/img/profile-img.jpg') }}"
                                    alt="" style="height: 23em" />
                            </div>
                            <div class="card-body">
                                <ul class="card-blog__info">
                                    <li><a href="#">IT Strategy & Planning</a></li>

                                </ul>
                                <h4 class="card-blog__title">
                                    <a href="single-blog.html">Jhon Doe</a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-blog">
                            <div class="card-blog__img">
                                <img class="card-img rounded" src="{{ asset('admin/img/me_crop.jpg') }}"
                                    alt="" style="height: 23em" />
                            </div>
                            <div class="card-body">
                                <ul class="card-blog__info">
                                    <li><a href="#">Database Management</a></li>

                                </ul>
                                <h4 class="card-blog__title">
                                    <a href="single-blog.html">Andri Elistiawan</a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- ================ Blog section end ================= --}}


    </main>

    {{-- ================ Start footer Area  ================= --}}
    <footer class="footer">
        <div class="footer-area">
            <div class="container">
                <div class="row section_gap">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title large_title">Our Mission</h4>
                            <p>
                                Selling original and cheap shoes so that it can be reached by many people including
                                students.
                            </p>
                            <p>
                                Shoes that are cool and comfortable to wear make you more confident
                            </p>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Quick Links</h4>
                            <ul class="list">
                                <li><a href="#slider">Home</a>
                                </li>
                                <li><a href="#tranding">Popular</a>
                                </li>
                                <li><a href="#parallax-1">Discount</a>
                                </li>
                                <li><a href="#best-seller">Best Seller</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Contact Us</h4>
                            <div class="ml-40">
                                <p class="sm-head">
                                    <span class="fa fa-location-arrow"></span>
                                    Head Office
                                </p>
                                <p>Curug, Gunung Sindur</p>

                                <p class="sm-head">
                                    <span class="fa fa-phone"></span>
                                    Phone Number
                                </p>
                                <p>
                                    085377805905 <br />

                                </p>

                                <p class="sm-head">
                                    <span class="fa fa-envelope"></span>
                                    Email
                                </p>
                                <p>
                                    adedwiputra16@gmail.com <br />
                                    ig: adedwiputra02
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row d-flex">
                    <p class="col-lg-12 footer-text text-center">
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        Ade Dwi Putra
                    </p>
                </div>
            </div>
        </div>
    </footer>
    {{-- ================ End footer Area  ================= --}}

    <script src="{{ asset('assets/vendors/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/skrollr.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/mail-script.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
