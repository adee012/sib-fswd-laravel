<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <title>Adpers Store</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Adpers<span class="dot"> Store</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#slider">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#services">Catalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                </ul>
                <a href="login" class="btn btn-brand ms-lg-3">Login</a>
            </div>
        </div>
    </nav>

    <!-- SLIDER -->
    <div id="slider" class="owl-carousel owl-theme hero-slider">
        <div class="slide slide1 "
            style="background-image:linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url('{{ asset('assets/img/bg-shoes2.jpg') }}');background-position:center;background-size:cover;background-repeat: no-repeat;">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12 text-center text-white">
                        <h6 class="text-white text-uppercase">
                            Need or Want
                        </h6>
                        <h1 class="display-3 my-4">Check the collection<br />at adpers shop</h1>
                        <a href="#" class="btn btn-brand">Get Started</a>
                        <a href="#" class="btn btn-outline-light ms-3">Our work</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide2"
            style="background-image:linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url('{{ asset('assets/img/bg-shoes1.jpg') }}');background-position:center;background-size:cover;background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        <h6 class="text-white text-uppercase">
                            Stability and Flexibility
                        </h6>
                        <h1 class="display-3 my-4">Improve your appearance<br />With new shoes</h1>
                        <a href="#" class="btn btn-brand">Get Started</a>
                        <a href="#" class="btn btn-outline-light ms-3">Our work</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SERVICE START --}}
    <section id="services" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>Our Shoes Gallery</h1>
                        <p class="mx-auto">
                            Contrary to popular belief, Lorem Ipsum is not simply random
                            text. It has roots in a piece of classical Latin literature from
                            45 BC, making it over 2000 years old
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <img class="w-100 rounded-top" src="{{ asset('assets/img/n-sport 1.png') }}" alt="" />
                    <div class="service">

                        <h5><span class="text-primary">Sport:</span> Nike Basketball </h5>
                        <p>
                            Light, Flexible, and Forward. this shoes are designed for playing basketball, make the
                            spirit of playing passionate.
                        </p>

                        <h6 class="text-start text-primary fs-5">$35,7 USD</h6>

                        <a class="btn btn-primary w-100" href="https://www.instagram.com/ade.designn/?hl=id"
                            role="button" target="_blank">BUY NOW</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <img class="w-100 rounded-top" src="{{ asset('assets/img/n-sport2.png') }}" alt="" />
                    <div class="service">
                        <h5><span class="text-primary">Sport:</span> Nike Running</h5>
                        <p>
                            Perfect for running. The sure steps are Nike Sport steps, make sure your steps are using
                            quality shoes!
                        </p>

                        <h6 class="text-start text-primary fs-5">$32,3 USD</h6>

                        <a class="btn btn-primary w-100" href="https://www.instagram.com/ade.designn/?hl=id"
                            role="button" target="_blank">BUY NOW</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <img class="w-100 rounded-top" src="{{ asset('assets/img/c-high 1.png') }}" alt="" />
                    <div class="service">
                        <h5><span class="text-primary">Casual:</span> Converse High</h5>
                        <p>
                            Satisfying shoes, satisfying life. Find original Converse sneakers only at the Adpers Store.
                        </p>

                        <h6 class="text-start text-primary fs-5">$21,5 USD</h6>

                        <a class="btn btn-primary w-100" href="https://www.instagram.com/ade.designn/?hl=id"
                            role="button" target="_blank">BUY NOW</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <img class="w-100 rounded-top" src="{{ asset('assets/img/n-sport 1.png') }}" alt="" />
                    <div class="service">

                        <h5><span class="text-primary">Sport:</span> Nike Basketball </h5>
                        <p>
                            Light, Flexible, and Forward. this shoes are designed for playing basketball, make the
                            spirit of playing passionate.
                        </p>

                        <h6 class="text-start text-primary fs-5">$35,7 USD</h6>

                        <a class="btn btn-primary w-100" href="https://www.instagram.com/ade.designn/?hl=id"
                            role="button" target="_blank">BUY NOW</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <img class="w-100 rounded-top" src="{{ asset('assets/img/n-sport2.png') }}" alt="" />
                    <div class="service">
                        <h5><span class="text-primary">Sport:</span> Nike Running</h5>
                        <p>
                            Perfect for running. The sure steps are Nike Sport steps, make sure your steps are using
                            quality shoes!
                        </p>

                        <h6 class="text-start text-primary fs-5">$32,3 USD</h6>

                        <a class="btn btn-primary w-100" href="https://www.instagram.com/ade.designn/?hl=id"
                            role="button" target="_blank">BUY NOW</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <img class="w-100 rounded-top" src="{{ asset('assets/img/c-high 1.png') }}" alt="" />
                    <div class="service">
                        <h5><span class="text-primary">Casual:</span> Converse High</h5>
                        <p>
                            Satisfying shoes, satisfying life. Find original Converse sneakers only at the Adpers Store.
                        </p>

                        <h6 class="text-start text-primary fs-5">$21,5 USD</h6>

                        <a class="btn btn-primary w-100" href="https://www.instagram.com/ade.designn/?hl=id"
                            role="button" target="_blank">BUY NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- SERVICE START --}}



    <section class="bg-light" id="reviews">
        <div class="owl-theme owl-carousel reviews-slider container">
            <div class="review">
                <div class="person">
                    <img src="img/team_1.jpg" alt="" />
                    <h5>Ralph Edwards</h5>
                    <small>Market Development Manager</small>
                </div>
                <h3>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quis,
                    rem culpa labore voluptate ullam! In, nostrum. Dicta, vero nihil.
                    Delectus minus vitae rerum voluptatum, excepturi incidunt ut, enim
                    nam exercitationem optio ducimus!
                </h3>
                <div class="stars">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class="bx bxs-quote-alt-left"></i>
            </div>
            <div class="review">
                <div class="person">
                    <img src="img/team_2.jpg" alt="" />
                    <h5>Ralph Edwards</h5>
                    <small>Market Development Manager</small>
                </div>
                <h3>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quis,
                    rem culpa labore voluptate ullam! In, nostrum. Dicta, vero nihil.
                    Delectus minus vitae rerum voluptatum, excepturi incidunt ut, enim
                    nam exercitationem optio ducimus!
                </h3>
                <div class="stars">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class="bx bxs-quote-alt-left"></i>
            </div>
            <div class="review">
                <div class="person">
                    <img src="img/team_3.jpg" alt="" />
                    <h5>Ralph Edwards</h5>
                    <small>Market Development Manager</small>
                </div>
                <h3>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quis,
                    rem culpa labore voluptate ullam! In, nostrum. Dicta, vero nihil.
                    Delectus minus vitae rerum voluptatum, excepturi incidunt ut, enim
                    nam exercitationem optio ducimus!
                </h3>
                <div class="stars">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class="bx bxs-quote-alt-left"></i>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Blog</h6>
                        <h1>Blog Posts</h1>
                        <p class="mx-auto">
                            Contrary to popular belief, Lorem Ipsum is not simply random
                            text. It has roots in a piece of classical Latin literature from
                            45 BC, making it over 2000 years old
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="img/project5.jpg" alt="" />
                        <a href="#" class="tag">Web Design</a>
                        <div class="content">
                            <small>01 Dec, 2022</small>
                            <h5>Web Design trends in 2022</h5>
                            <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random
                                text. It has roots in a piece of classical Latin literature
                                from
                            </p>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="img/project4.jpg" alt="" />
                        <a href="#" class="tag">Programming</a>
                        <div class="content">
                            <small>01 Dec, 2022</small>
                            <h5>Web Design trends in 2022</h5>
                            <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random
                                text. It has roots in a piece of classical Latin literature
                                from
                            </p>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="img/project2.jpg" alt="" />
                        <a href="#" class="tag">Marketing</a>
                        <div class="content">
                            <small>01 Dec, 2022</small>
                            <h5>Web Design trends in 2022</h5>
                            <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random
                                text. It has roots in a piece of classical Latin literature
                                from
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <footer
        style="background-image:linear-gradient(
            0deg,
            rgba(8, 32, 50, 0.9),
            rgba(8, 32, 50, 0.9)
        ),url('{{ asset('assets/img/bg-shoes1.jpg') }}');background-position:center;background-size:cover;background-repeat: no-repeat;">
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand">Adpers<span class="dot"> Store</span></h4>
                        <p>
                            Look cool with new shoes. Fulfill your needs by shopping at the Adpers store
                        </p>
                        <div class="col-auto social-icons">
                            <a href="https://www.linkedin.com/in/ade-dwi-putra-87525a181/" target="_blank"><i
                                    class="bx bxl-linkedin"></i></a>
                            <a href="https://www.instagram.com/ade.designn/?hl=id" target="_blank"><i
                                    class="bx bxl-instagram"></i></a>
                            <a href="https://github.com/adee012" target="_blank"><i class="bx bxl-github"></i></a>
                            <a href="https://dribbble.com/ddwptrr_" target="_blank"><i
                                    class="bx bxl-dribbble"></i></a>
                        </div>
                        <div class="col-auto conditions-section">
                            <a href="#">privacy</a>
                            <a href="#">terms</a>
                            <a href="#"><i>disclaimer</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="mb-0">Copyright 2023. Ade Dwi Putra</p>

        </div>
    </footer>

    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="container-fluid">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-sm-12 bg-cover"
                                style="background-image: url(img/c2.jpg); min-height: 300px">
                                <div></div>
                            </div>
                            <div class="col-lg-8">
                                <form class="p-lg-5 col-12 row g-3">
                                    <div>
                                        <h1>Get in touch</h1>
                                        <p>
                                            Fell free to contact us and we will get back to you as
                                            soon as possible
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">First name</label>
                                        <input type="text" class="form-control" placeholder="Jon" id="userName"
                                            aria-describedby="emailHelp" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">Last name</label>
                                        <input type="text" class="form-control" placeholder="Doe" id="userName"
                                            aria-describedby="emailHelp" />
                                    </div>
                                    <div class="col-12">
                                        <label for="userName" class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="Johndoe@example.com"
                                            id="userName" aria-describedby="emailHelp" />
                                    </div>
                                    <div class="col-12">
                                        <label for="exampleInputEmail1" class="form-label">Enter Message</label>
                                        <textarea name="" placeholder="This is looking great and nice." class="form-control" id=""
                                            rows="4"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-brand">
                                            Send Message
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
</body>

</html>
