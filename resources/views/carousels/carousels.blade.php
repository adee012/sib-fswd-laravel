@extends('main');

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 class="fs-2">Carousels</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Product</li>
                    <li class="breadcrumb-item active">Carousels</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                {{-- Add categories end --}}
                <div class="card">
                    <div class="card-body ">

                        <div class="col-lg-12">

                            {{-- Add carousels start --}}
                            <div class="add-carousels">
                                <h3 class="fs-4 mt-3 text-dark">Add Carousels</h3>

                                <form action="{{ url('/addCarousels') }}" class="row" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Category Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" name="name" id="name"
                                            placeholder="Enter The Name Category">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="banner" class="form-label">Banner</label>
                                        <input type="file" class="form-control @error('banner') is-invalid @enderror"
                                            id="banner" name="banner">
                                        @error('banner')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12 my-2">
                                        <button class="btn btn-primary" name="addCarousels" type="submit">Save </button>
                                    </div>
                            </div>

                            </form>
                            <hr>
                        </div>

                        @if (Auth::user()->role == 'admin')
                            <div class="row row-cols-1 row-cols-md-4">
                                @foreach ($carousels as $key => $banner)
                                    <div class="col col-md-4 py-2">
                                        <div class="text-center card h-100 ">
                                            <img src="{{ asset('storage/carousels_banner') }}/{{ $banner->banner }}"
                                                class="card-img-top h-50 " alt="hero">
                                            <div class="card-body">
                                                <h3 class="card-title">{{ $banner->name }}</h3>
                                                @if ($banner->is_active == 0)
                                                    <p class="card-text fw-bold text-warning "> Waiting </p>
                                                @elseif ($banner->is_active == 1)
                                                    <p class="card-text fw-bold text-success"> Accepted </p>
                                                @elseif ($banner->is_active == 2)
                                                    <p class="card-text fw-bold text-danger"> Rejected </p>
                                                @endif

                                                <div class="status ">
                                                    <form action="{{ url('/carousels-accepted') }}/{{ $banner->id }}"
                                                        class="d-inline" method="post">
                                                        @method('put')
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $banner->id }}">

                                                        @if ($banner->is_active == '1')
                                                            <button type="submit" name="accepted"
                                                                class="btn
                                            btn-primary"
                                                                style="font-size:24px"><i
                                                                    class="fa fa-thumbs-up"></i></button>
                                                        @elseif ($banner->is_active != '1')
                                                            <button type="submit" name="accepted"
                                                                onclick="return confirm('Are you sure you want to accep the banner ?')"
                                                                class="btn
                                                btn-primary"
                                                                style="font-size:24px"><i
                                                                    class="fa fa-thumbs-up"></i></button>
                                                        @endif
                                                    </form>

                                                    <form action="{{ url('/carousels-rejected') }}/{{ $banner->id }}"
                                                        class="d-inline" method="post">
                                                        @method('put')
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $banner->id }}">

                                                        @if ($banner->is_active == '2')
                                                            <button type="submit" name="rejected" class="btn btn-warning"
                                                                style="color:#ffff; font-size:24px"><i
                                                                    class="fa fa-thumbs-down"></i></i></button>
                                                        @elseif ($banner->is_active != '2')
                                                            <button type="submit"
                                                                onclick="return confirm('Are you sure you want to reject the banner ?')"
                                                                name="rejected" class="btn btn-warning"
                                                                style="color:#ffff; font-size:24px"><i
                                                                    class="fa fa-thumbs-down"></i></i></button>
                                                        @endif
                                                    </form>
                                                    <a href="/carousels-delete/{{ $banner->id }}"id="deleteBtn"
                                                        type="submit" name="delete" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete the banner ?')"
                                                        style="font-size:24px"><i class="fa fa-trash"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        @if (Auth::user()->role == 'staff')
                            <!-- Table with stripped rows -->

                            <div class="table-responsive">
                                <table class="text-center table " width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Banner</th>
                                            <th>Name</th>
                                            <th>Is Active</th>
                                            <th>Created By</th>
                                            <th>Verified By</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($carousels as $c)
                                            <tr>
                                                <td>{{ $c->id }}</td>
                                                <td class="text-center "><img width="200px" class="rounded"
                                                        height="100px"
                                                        src="{{ asset('storage/carousels_banner') }}/{{ $c->banner }}">
                                                </td>
                                                <td>{{ $c->name }}</td>

                                                @if ($c->is_active == 0)
                                                    <td class="text-warning">Waiting</td>
                                                @elseif ($c->is_active == 1)
                                                    <td class="text-success">Active</td>
                                                @elseif ($c->is_active == 2)
                                                    <td class="text-danger">Rejected</td>
                                                @endif



                                                <td>{{ $c->CreatedUsers->name }}</td>
                                                @if ($c->verified_by == null)
                                                    <td class="text-danger">Belum Di Verifikasi</td>
                                                @else
                                                    <td>{{ $c->VerifiedUsers->name }}</td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="text-center" colspan="11">
                                                    Data Tidak Ada
                                                </td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>

                            <!-- End Table with stripped rows -->
                        @endif
                    </div>
                </div>

            </div>
            </div>
        </section>

    </main><!-- End #main -->

    @include('sweetalert::alert')
@endsection
