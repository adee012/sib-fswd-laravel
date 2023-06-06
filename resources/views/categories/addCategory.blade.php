@extends('main');
@section('content')
    <main id="main" class="main">


        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <input type="text" value="{{ $categories->name }}">
                </div>
            </div>
        </section>

    </main><!-- End #main -->
    @include('sweetalert::alert')
@endsection
