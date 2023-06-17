<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Adpers Store || Login</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('admin/img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('admin/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />


    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/vendor/quill/quill.snow.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/vendor/quill/quill.bubble.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/vendor/simple-datatables/style.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <main>

        <section class="section register min-vh-100 d-flex flex-column  py-4">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">

                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="pt-2 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                <p class="text-center small">Enter your personal details to create account</p>
                            </div>

                            <form class="" action="{{ url('/register') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="col-12 mb-3">
                                    <label for="yourName" class="form-label">Full Name</label>
                                    <input type="text" placeholder="Input your Name" name="name"
                                        value="{{ old('name') }}" class="form-control" id="yourName">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-6 mb-3 m-0">
                                        <label for="yourEmail" class="form-label"> Email</label>
                                        <input placeholder="Email..." type="email" name="email" class="form-control"
                                            value="{{ old('email') }}" id="yourEmail">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-6 mb-3 m-0">
                                        <label for="phone" class="form-label"> Phone</label>
                                        <input type="number" placeholder="Phone..." name="phone" class="form-control"
                                            value="{{ old('phone') }}" id="phone">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" placeholder="Password..." name="password"
                                        value="{{ old('password') }}" class="form-control" id="Password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="address" class="form-label">Adress</label>
                                    <textarea name="address" class="form-control resize-none" id="address" rows="2">{{ old('address') }}</textarea>
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="col-12 mb-2">
                                    <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Already have an account? <a href="{{ url('/login') }}">Log
                                            in</a></p>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>


        </section>

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>




    {{-- Vendor JS Files --}}
    <script src="{{ asset('admin/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('admin/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('admin/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/php-email-form/validate.js') }}"></script>

    {{-- Template Main JS File --}}
    <script src="{{ asset('admin/js/main.js') }}"></script>
    <script src="https:://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @include('sweetalert::alert')
</body>

</html>
