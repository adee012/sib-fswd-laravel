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

<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center s">Edit User</h1>
        <hr>

        <form action="/user-edit" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf

            <input name="id" type="hidden" value="{{ $users->id }}">
            <div class="mb-3">
                <label for="name" class="form-label">Nama User</label>
                <input type="text" value="{{ $users->name }}"
                    class="form-control @error('name') is-invalid @enderror " placeholder="Masukkan Nama User"
                    name="name" id="name" />
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="row">
                <div class="mb-3 col-6">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" id="role" class="form-control">
                        <option selected>{{ $users->role }}</option>
                        <option value="admin">Admin</option>
                        <option value="staff">Staff</option>
                        <option value="user">User</option>
                    </select>
                    @error('role')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3 col-6">
                    <label for="password" class="form-label">Password</label>
                    <input value="{{ $users->password }}" type="password" class="form-control"
                        placeholder="Password..." name="password" id="password" />
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-6">
                    <label for="email" class="form-label">Email User</label>
                    <input value="{{ $users->email }}" type="email" class="form-control" placeholder="Email..."
                        name="email" id="email" />
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="mb-3 col-6">
                    <label for="phone" class="form-label">Phone User</label>
                    <input value="{{ $users->phone }}" type=”text” class="form-control" placeholder="Phone..."
                        name="phone" id="phone" />
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
            </div>

            <div class="mb-3 form-group">
                <label for="address" class="form-label">Alamat User</label>
                <br />
                <textarea name="address" id="address" class="form-control" rows="3" patt>{{ $users->addres }}</textarea>
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="avatar">Add Avatar</label>
                <input type="file" class="form-control" name="avatar" id="avatar" accept="images/*" />
                @error('avatar')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" name="addUsers" class="btn btn-primary" style="float: right">
                Save
            </button>
        </form>
    </div>
    <a href="/UsersList" aria-label="close"><button aria-label="close" class="btn btn-danger me-3"
            style="float: right;">Close</button></a>



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
</div>





</html>
