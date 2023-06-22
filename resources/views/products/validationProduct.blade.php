@extends('main');

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1 class="fs-2">Products</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Product</li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">

                {{-- Admin aprov --}}
                <div class="card">
                    <div class="card-body py-3">
                        <div class="col-lg-12 text-center ">
                            <h3 class="fw-semibold">Admin Approval </h3>
                            <hr>
                        </div>

                        <div class="row row-cols-1 row-cols-md-4">
                            @foreach ($products as $key => $product)
                                <div class="col col-md-4 py-2">
                                    <div class="text-center card h-100 ">
                                        <img src="{{ asset('storage/image_product') }}/{{ $product->image }}"
                                            class="card-img-top h-50 " alt="hero">
                                        <div class="card-body">
                                            <h3 class="card-title">{{ $product->name }}</h3>
                                            @if ($product->status == 'waiting')
                                                <p class="card-text fw-bold text-warning "> Waiting </p>
                                            @elseif ($product->status == 'accepted')
                                                <p class="card-text fw-bold text-success"> Accepted </p>
                                            @elseif ($product->status == 'rejected')
                                                <p class="card-text fw-bold text-danger"> Rejected </p>
                                            @endif

                                            <div class="status ">
                                                <form action="{{ url('/products-accepted') }}/{{ $product->id }}"
                                                    class="d-inline" method="post">
                                                    @method('put')
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $product->id }}">

                                                    @if ($product->status == 'accepted')
                                                        <button type="submit" name="accepted"
                                                            class="btn
                                                btn-primary"
                                                            style="font-size:24px"><i class="fa fa-thumbs-up"></i></button>
                                                    @elseif ($product->status != 'accepted')
                                                        <button type="submit" name="accepted"
                                                            onclick="return confirm('Are you sure you want to accep the product ?')"
                                                            class="btn
                                                    btn-primary"
                                                            style="font-size:24px"><i class="fa fa-thumbs-up"></i></button>
                                                    @endif
                                                </form>

                                                <form action="{{ url('/products-rejected') }}/{{ $product->id }}"
                                                    class="d-inline" method="post">
                                                    @method('put')
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $product->id }}">

                                                    @if ($product->status == 'rejected')
                                                        <button type="submit" name="rejected" class="btn btn-warning"
                                                            style="color:#ffff; font-size:24px"><i
                                                                class="fa fa-thumbs-down"></i></i></button>
                                                    @elseif ($product->status != 'rejected')
                                                        <button type="submit"
                                                            onclick="return confirm('Are you sure you want to reject the product ?')"name="rejected"
                                                            class="btn btn-warning" style="color:#ffff; font-size:24px"><i
                                                                class="fa fa-thumbs-down"></i></i></button>
                                                    @endif
                                                </form>
                                                <a href="{{ asset('/product-delete') }}/{{ $product->id }}"id="deleteBtn"
                                                    type="submit" name="delete" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete the product ?')"
                                                    style="font-size:24px"><i class="fa fa-trash"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>

            </div>
            </div>
        </section>

    </main><!-- End #main -->

    @include('sweetalert::alert')
@endsection
