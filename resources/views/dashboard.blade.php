@extends('main')
<link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

@section('content')
    <main id="main" class="main">
        <div class="container">
            <h2 class="text-center fw-semibold mt-3 text-dark">Catalog Products</h2>
            <hr>
            <div class="row clearfix">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card product_item">
                            <div class="body">
                                <div class="cp_img">
                                    <img src="{{ asset('storage/image_product') }}/{{ $product->image }}" alt="Product"
                                        class="img-fluid">
                                    <div class="hover">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{ $product->id }}">
                                            <i class="zmdi zmdi-eye" style="font-size:24px"></i>
                                        </button>
                                        <a target="_blank"
                                            href="https://wa.me/+6285840901428?text=Halo%20saya%20ingin%20membeli%20sepatu%20%3A%20{{ $product->name }}%0A%0AData%20pembeli%0ANama%20%3A%0AAlamat%20%3A%0ANo%20Hp%20%3A%0ASize%20%3A%0A"
                                            class="ms-1 btn btn-primary btn-sm waves-effect"><i
                                                class="zmdi zmdi-shopping-basket" style="font-size:24px"></i></a>
                                    </div>
                                </div>
                                <div class="product_details ">
                                    <h5><a href="#" class="text-primary fw-bold fs-5">{{ $product->name }}</a></h5>
                                    <ul class="product_price list-unstyled">
                                        <li class="old_price fw-semibold fs-6">${{ $product->price }} USD</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Modal View --}}
                    <div class="modal fade" id="exampleModal{{ $product->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-4" id="exampleModalLabel">Detail Product</h1>
                                    <button type="button" class="fs-1 btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row gx-5">
                                        <aside class="col-lg-6">
                                            <div class="border rounded-4 mb-lg-0 mb-3 d-flex justify-content-center">
                                                <a data-fslightbox="mygalley" class="rounded-4" target="_blank"
                                                    data-type="image"
                                                    href="{{ asset('storage/image_product') }}/{{ $product->image }}">
                                                    <img style="max-width: 100%; max-height: 100vh; margin: auto;"
                                                        class="rounded-4 fit"
                                                        src="{{ asset('storage/image_product') }}/{{ $product->image }}" />
                                                </a>
                                            </div>
                                        </aside>
                                        <main class="col-lg-6 mt-lg-3">
                                            <div class="ps-lg-1">
                                                <h5 class="title text-primary mb-2 fw-semibold">
                                                    {{ $product->categories->name }}
                                                </h5>
                                                <h5 class="title fw-semibold text-dark">
                                                    {{ $product->name }}
                                                </h5>

                                                <div class="mb-3">
                                                    <span class="fw-semibold">${{ $product->price }} USD</span>
                                                </div>
                                                <p>
                                                    {{ $product->description }}
                                                </p>
                                                <hr />
                                                <a target="_blank"
                                                    href="https://wa.me/+6285840901428?text=Halo%20saya%20ingin%20membeli%20sepatu%20%3A%20{{ $product->name }}%0A%0AData%20pembeli%0ANama%20%3A%0AAlamat%20%3A%0ANo%20Hp%20%3A%0ASize%20%3A%0A"
                                                    class="btn btn-primary shadow-0" style="width: 100%"> <i
                                                        class="me-1 fa fa-shopping-basket"></i> Buy Now </a>
                                            </div>
                                        </main>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </main>
    {{-- End #main --}}
@endsection
