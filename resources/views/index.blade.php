<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Adpers Store</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{-- Favicons --}}
    <link href="{{ asset('admin/img/adpers.png') }}" rel="icon">

    {{-- Google Fonts --}}
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    {{-- Vendor CSS Files --}}
    <link href="{{ asset('assets/vendor/aos/aos.css" rel="stylesheet') }}">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    {{-- Template Main CSS File --}}
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    {{-- ======= Header ======= --}}
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="#" class="logo d-flex align-items-center">
                <span>AdpersStore</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#carouselExampleFade">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#catalog">Catalog</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="getstarted scrollto" href="{{ url('/login') }}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>{{-- .navbar --}}

        </div>
    </header>{{-- End Header --}}

    {{-- ======= Hero Section ======= --}}
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            @foreach ($Carousels as $key => $banner)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/carousels_banner') }}/{{ $banner->banner }}" class="d-block w-100"
                        style="height: 640px" alt="...">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- End Hero --}}

    <main id="main">
        {{-- ======= About Section ======= --}}
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>About Us</h3>
                            <h2>Adpers Store is a shoe store that sells various types of shoes from various brands, from
                                casual to formal.
                            </h2>
                            <p>
                                This shop has been around since 2023, we sell various shoe brands with quality that you
                                can't doubt. We also provide a new replacement warranty if within 3 months your shoes
                                are damaged. Customer satisfaction is our priority.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="https://bit.ly/43vsm9X"
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('assets/img/about-us.jpg') }}" class="img-fluid" alt=""
                            style="height: 100%">
                    </div>

                </div>
            </div>

        </section>{{-- End About Section --}}

        {{-- ======= Counts Section ======= --}}
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Service</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-box" style="color: #ee6c20;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $count_category }}"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Category</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-boxes" style="color: #15be56;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $count_product }}"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Product</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-people" style="color: #bb0852;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $count_user }}"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Users</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>{{-- End Counts Section --}}

        {{-- ======= Services Section ======= --}}
        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Services</h2>
                    <p>Customer satisfaction is our priority</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-award-fill icon"></i>
                            <h3>Original Product</h3>
                            <p>The goods we sell are 100% original, officially guaranteed and can be returned if the
                                goods purchased are counterfeit.</p>
                            <a href="#catalog" class="read-more"><span>Order Now</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-wallet-3-line icon"></i>
                            <h3>Payment Options</h3>
                            <p>There are many payment options and you can also pay directly on the spot, you can make
                                payments via e-wallet or bank transfer.</p>
                            <a href="#catalog" class="read-more"><span>Order Now</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-time-line icon"></i>
                            <h3>Fast Delivery</h3>
                            <p>Fast delivery, items ordered at the shop open will be processed immediately, if outside
                                opening hours then the next day.</p>
                            <a href="#catalog" class="read-more"><span>Order Now</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </section>{{-- End Services Section --}}

        {{-- ======= catalog Section ======= --}}
        <section id="catalog" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>CATALOG</h2>
                    <p>Check Our Product In The Catalog</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach ($produk as $product)
                                <li data-filter=".filter-{{ $product->categories->name }}">
                                    {{ $product->categories->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($products as $product)
                        @if ($product->status == 'accepted')
                            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $product->categories->name }}">
                                <div class="portfolio-wrap">
                                    <img src="{{ asset('storage/image_product') }}/{{ $product->image }}"
                                        class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>{{ $product->name }}</h4>
                                        <h4>${{ $product->price }} USD</h4>
                                        <div class="portfolio-links">
                                            <a href="{{ asset('storage/image_product') }}/{{ $product->image }}"
                                                data-gallery="portfolioGallery" class="portfokio-lightbox"
                                                title="{{ $product->description }}"><i class="bi bi-eye"
                                                    style="font-size: 18px"></i></a>
                                            <a href="portfolio-details.html" title="Buy Now"><i
                                                    class="bi bi-cart-plus" style="font-size: 18px"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>

        </section>{{-- End catalog Section --}}

        {{-- ======= Team Section ======= --}}
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Team</h2>
                    <p>Our hard working team</p>
                </header>

                <div class="row gy-4 gap-md-5 d-flex justify-content-center">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('admin/img/Kumparan.jpg') }}" class="img-fluid"
                                    style="height: 300px; width:100%" alt="">
                                <div class="social">
                                    <a href="https://bit.ly/3Jd0WxE" title="github" target="_blank"><i
                                            class="bi bi-github"></i></a>
                                    <a href="https://adee012.github.io/tugas2-fswd-arkatama/" title="resume"
                                        target="_blank"><i class="bi bi-file-person"></i></a>
                                    <a href="https://bit.ly/43vsm9X" title="instagram" target="_blank"><i
                                            class="bi bi-instagram"></i></a>
                                    <a href="https://bit.ly/43Crkco" title="linkedin" target="_blank"><i
                                            class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Ade Dwi Putra</h4>
                                <span>Web Programmer</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, nesciunt
                                    accusamus dolorum neque tempora temporibus quia laborum. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="http://hardwaremon.my.id/assets/img/me.jpg" class="img-fluid "
                                    style="height: 300px; width:100%" alt="">
                                <div class="social">
                                    <a href="https://bit.ly/45WEXER" title="github" target="_blank"><i
                                            class="bi bi-github"></i></a>
                                    <a href="https://andri-portofolio.vercell.app/" title="resume" target="_blank"><i
                                            class="bi bi-file-person"></i></a>
                                    <a href="https://bit.ly/3P5UFaG" title="instagram" target="_blank"><i
                                            class="bi bi-instagram"></i></a>
                                    <a href="https://bit.ly/43VO1YL" title="linkedin" target="_blank"><i
                                            class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Andri Elistiawan</h4>
                                <span>Web Programmer</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, nesciunt
                                    accusamus dolorum neque tempora temporibus quia laborum. </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>{{-- End Team Section --}}

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Our Partner</h2>
                    <p>Several Cooperating Partners</p>
                </header>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{ asset('assets/img/clients/nike.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/clients/mizuno.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/clients/converse.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/clients/puma.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/clients/ardiles.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/clients/adidas.png') }}"
                                class="img-fluid" alt=""></div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section><!-- End Clients Section -->

    </main>{{-- End #main --}}

    {{-- ======= Footer ======= --}}
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="#" class="logo d-flex align-items-center">

                            <span>AdpersStore</span>
                        </a>
                        <p>Established since 2023, selling various kinds of shoes from various brands, original shoes,
                            quality and official guarantee.</p>
                        <div class="social-links mt-3">
                            <a href="https://bit.ly/3Jd0WxE" title="github" target="_blank"><i
                                    class="bi bi-github"></i></a>
                            <a href="https://bit.ly/3qPcf8I" title="dribbble" target="_blank"><i
                                    class="bi bi-dribbble"></i></a>
                            <a href="https://bit.ly/43vsm9X" title="instagram" target="_blank"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="https://bit.ly/43Crkco" title="linkedin" target="_blank"><i
                                    class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#carouselExampleFade">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#catalog">Catalog</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#team">Team</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#services">Original Product</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#services">Payment Option</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#services">Fast Delivery</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            Curug, Gunung Sindur<br>
                            Kabupaten Bogor <br><br>
                            <strong>Phone:</strong> 085840901428<br>
                            <strong>Email:</strong> adedwiputra16@gmail.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                CreatedBy. <strong><span>Ade Dwi Putra</span></strong> &#9829;
            </div>
        </div>
    </footer>{{-- End Footer --}}

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    {{-- Vendor JS Files --}}
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    {{-- Template Main JS File --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
