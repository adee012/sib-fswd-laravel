@extends('main')

@section('content')
    <main id="main" class="main">


        <section class="section dashboard">
            <div class="row">
                {{-- Left side columns --}}
                <div class="col-lg-12">
                    <div class="row">
                        <div class="card">
                            <div class="card-body py-3">
                                <div class="col-lg-12 text-center ">
                                    <h3 class="fw-semibold">Shope Now</h3>
                                    <hr>
                                </div>
                                <div class="row row-cols-1 row-cols-md-4">
                                    @foreach ($products as $key => $product)
                                        @if ($product->status == 'accepted')
                                            <div class="col col-md-4 py-2">
                                                <div class="text-center card h-100 ">
                                                    <img src="{{ asset('storage/image_product') }}/{{ $product->image }}"
                                                        class="card-img-top" alt="hero" style="height:270px">
                                                    <div class="card-body mb-0 py-0 ">
                                                        <h3 class="card-title">{{ $product->name }}</h3>
                                                        <h6 class="fs-5 fw-bold text-primary">
                                                            ${{ $product->price }} USD
                                                        </h6>
                                                        <p class="text-start">
                                                            {{ $product->description }}
                                                        </p>

                                                    </div>
                                                    <div class="card mx-3">
                                                        <a href="#" role="button"
                                                            class="bg-primary text-white rounded p-2 col-12">Buy
                                                            Now</a>
                                                    </div>


                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Left side columns --}}
            </div>
        </section>
    </main>
    {{-- End #main --}}
@endsection
