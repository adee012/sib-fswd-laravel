@extends('main')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 class="fs-2">Categories</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Product</li>
                    <li class="breadcrumb-item active">Categories</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">

                            {{-- Add categories start --}}
                            <div class="add-categories">
                                <h3 class="fs-4 mt-3 text-dark">Add Categories</h3>

                                <form action="{{ url('/addCategories') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-11">
                                            <input type="text" value="{{ old('name') }}" class="form-control "
                                                placeholder="Enter The Name Category" name="name" id="name" />
                                        </div>

                                        <div class="col-1">
                                            <button type="submit" id="submitBtn" name="addCategory"
                                                class=" btn btn-primary">
                                                Save
                                            </button>
                                        </div>
                                    </div>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </form>
                            </div>
                            {{-- Add categories end --}}

                            <hr>

                            <!-- Table with stripped rows -->

                            <h3 class="fs-4 mt-3 text-dark">Daftar Categories</h3>
                            <div class="table-responsive">
                                <table class="table table-striped text-center table-bordered" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            @if (Auth::user()->role == 'admin')
                                                <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($category as $c)
                                            <tr>
                                                <td>{{ $c->id }}</td>

                                                <td>{{ $c->name }}</td>
                                                <td>{{ $c->created_at }}</td>
                                                <td>{{ $c->updated_at }}</td>
                                                @if (Auth::user()->role == 'admin')
                                                    <td>
                                                        {{-- button update --}}
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editCategory{{ $c->id }}">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </button>

                                                        {{-- Modal edit category --}}
                                                        <div class="modal fade" id="editCategory{{ $c->id }}"
                                                            tabindex="-1">
                                                            <div class="modal-dialog modal-md">
                                                                <div class="modal-content">
                                                                    <div class="modal-header bg-primary text-white">
                                                                        <h4 class="modal-title">Edit Category
                                                                        </h4>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <form class="needs-validation" novalidate
                                                                            action="{{ url('/categories-edit') }}"
                                                                            method="post">
                                                                            @method('put')
                                                                            @csrf
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $c->id }}">
                                                                            <div class="mb-3 col-12">
                                                                                <input type="text" class="form-control "
                                                                                    value="{{ $c->name }}"
                                                                                    placeholder="Masukkan Nama Category"
                                                                                    name="name" id="namea" required
                                                                                    pattern="[A-Z a-z]+" />
                                                                                <div class="text-start invalid-feedback"
                                                                                    id="name-error">Nama wajib diisi dan
                                                                                    harus text</div>
                                                                            </div>

                                                                            <button type="submit" id="submitBtn"
                                                                                name="editCategory" class="btn btn-primary"
                                                                                style="float: right">
                                                                                Save Change
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        {{-- Modal edit category --}}

                                                        {{-- button delete --}}
                                                        <a href="/categories-delete/{{ $c->id }}"
                                                            class="btn btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete the category ?')"
                                                            role="button"><i class="bi bi-trash-fill"></i></a>
                                                    </td>
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

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->



    @include('sweetalert::alert')
@endsection
