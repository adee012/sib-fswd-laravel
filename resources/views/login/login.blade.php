<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login || Adpers Store </title>

    {{-- Icon --}}
    <link rel="icon" href="{{ asset('admin/img/adpers.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <section class="container forms">
        {{-- Login Form Start --}}
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="{{ url('/login-proses') }}" method="post">
                    @csrf
                    <div class="field input-field">
                        <input name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}"
                            type="email" placeholder="Email">
                    </div>
                    @error('email')
                        <span class="text">{{ $message }}</span>
                    @enderror

                    <div class="field input-field">
                        <input name="password" type="password" placeholder="Password" class="password ">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    @error('password')
                        <span class="text">{{ $message }}</span>
                    @enderror

                    {{-- <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div> --}}

                    <div class="field button-field">
                        <button type="submit" name="btnLogin">Login</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Don't have an account? <a href="{{ url('/register') }}">Signup</a></span>
                </div>
            </div>


        </div>
        {{-- Login Form End --}}

    </section>

    <!-- JavaScript -->
    <script src="{{ asset('assets/js/login.js') }}"></script>

    @include('sweetalert::alert')
</body>

</html>
