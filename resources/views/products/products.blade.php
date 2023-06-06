@extends('main');

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 class="fs-2">Product List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                    <li class="breadcrumb-item">Product</li>
                    <li class="breadcrumb-item active">Product List</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <!-- Button to Open the Modal -->
                                <a href="/addProduct" type="button" class="btn btn-primary">
                                    Add products
                                </a>
                            </div>
                            <!-- Table with stripped rows -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="text-center table table-striped table-bordered" width="100%"
                                        cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Category</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th class="w-25">Description</th>
                                                <th>Status</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @forelse ($products as  $p)
                                                <tr>
                                                    <td>{{ $p->id }}</td>
                                                    <td>{{ $p->categories->name }}</td>
                                                    <td>{{ $p->name }}</td>
                                                    <td>${{ $p->price }} USD</td>
                                                    <td class="text-start">{{ $p->description }}</td>
                                                    <td>{{ $p->status }}</td>
                                                    <td><img width="100px" height="100px"
                                                            src="{{ asset('storage/image_product') }}/{{ $p->image }}">
                                                    </td>
                                                    @if (Auth::user()->role == 'admin')
                                                        <td>
                                                            {{-- button update --}}
                                                            <a href="/product-edit/{{ $p->id }}"
                                                                class="btn btn-primary me-2" role="button"><i
                                                                    class="bi bi-pencil-square"></i></a>

                                                            {{-- button view --}}
                                                            {{-- <a href="" class="btn btn-warning" role="button"
                                                                data-bs-toggle="modal" data-bs-target="#largeModal"><i
                                                                    class="bi bi-eye"></i></a> --}}

                                                            {{-- button delete --}}
                                                            <a href="/product-delete/{{ $p->id }}"
                                                                class="btn btn-danger ms-2" role="button"
                                                                data-confirm-delete="true"><i
                                                                    class="bi bi-trash-fill"></i></a>
                                                        </td>
                                                    @endif

                                                </tr>
                                            @empty
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    @include('sweetalert::alert')
@endsection
