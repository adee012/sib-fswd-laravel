<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Adpers Store || Admin</title>
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
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="" />
                <span class="d-none d-lg-block">Adpers Store</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <!-- Start Profile Nav -->
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <div class="overflow-hidden rounded-circle" style="width: 36px; height:36px">
                            <img src="{{ asset('storage/avatar') }}/{{ Auth::user()->avatar }}" alt="Profile"
                                style="width:100%; height:auto" />
                        </div>
                        <span class="d-none d-md-block dropdown-toggle ps-2">
                            {{ Auth::user()->name }}

                        </span>
                    </a>
                    <!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ Auth::user()->name }}</h6>
                            <span>{{ Auth::user()->role }}</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <form action="{{ url('/logout') }}" method="post">
                                @csrf
                                <button class="dropdown-item d-flex align-items-center" type="submit">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->
            </ul>
        </nav>
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <!-- Start Dashboard Nav -->
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

            @if (Auth::user()->role == 'admin' || Auth::user()->role == 'staff')
                <!-- Sart Produk Nav -->
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-product" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-box-seam"></i><span>Produk</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-product" class="nav-content collapse" data-bs-parent="#sidebar-nav">

                        <li>
                            <a href="/categories">
                                <i class="bi bi-circle"></i><span>Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="/ProductList">
                                <i class="bi bi-circle"></i><span>Product List</span>
                            </a>
                        </li>
                        <li>
                            <a href="/carousels">
                                <i class="bi bi-circle"></i><span>Carousels</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End Produk Nav -->

                <!-- Sart User Nav -->
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-user" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-people-fill"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-user" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="UserGroup">
                                <i class="bi bi-circle"></i><span>User Group</span>
                            </a>
                        </li>
                        <li>
                            <a href="/UsersList">
                                <i class="bi bi-circle"></i><span>User List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End User Nav -->
            @endif
            <li class="nav-heading">Pages</li>

            <!-- Start Profile Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/detail-user') }}">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-contact.html">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>
            </li>
            <!-- End Contact Page Nav -->
        </ul>
    </aside>
    <!-- End Sidebar-->

    @yield('content')

    {{-- ======= Footer ======= --}}
    <footer id="footer" class="footer bg-light fixed-bottom">
        <div class="copyright">
            &copy; Copyright <strong><span>AdpersStore</span></strong>. Ade Dwi Putra
        </div>
    </footer>
    {{-- End Footer --}}

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
</body>

</html>
