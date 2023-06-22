@extends('main');
@section('content')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <!-- Button to Open the Add Product -->
                                <h1 class="text-center text-dark fs-2">Add New Product</h1>
                            </div>

                            <div class="p-5">
                                <form action="{{ url('/addProduct') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="category" class="form-label">Category</label>
                                        <select name="category" id="category" class="form-select">
                                            <option disabled selected>-- Select Category --</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Product Name</label>
                                        <input type="text" value="{{ old('name') }}"
                                            class="form-control @error('name') is-invalid @enderror "
                                            placeholder="Enter The Product Name" name="name" id="name" />
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="price" class="form-label">Price </label>
                                        <input type="text" value="{{ old('price') }}"
                                            class="form-control @error('price') is-invalid @enderror "
                                            placeholder="Enter The Product price" name="price" id="price" />
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3 form-group">
                                        <label for="deskripsi" class="form-label">Description</label>
                                        <br />
                                        <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" patt>{{ old('deskripsi') }}</textarea>
                                        @error('deskripsi')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="image">Add Image</label>
                                        <input type="file" class="form-control" name="image" id="image"
                                            accept="images/*" />
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <button type="submit" name="addProducts" class="btn btn-primary" style="float: right">
                                        Save
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
    @include('sweetalert::alert')
@endsection
