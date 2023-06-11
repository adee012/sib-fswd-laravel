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
                                <h1 class="text-center text-dark fs-2">Edit User</h1>
                            </div>

                            <div class="p-5">

                                <form action="/user-edit" method="post" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf

                                    <input name="id" type="hidden" value="{{ $users->id }}">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama User</label>
                                        <input type="text" value="{{ $users->name }}"
                                            class="form-control @error('name') is-invalid @enderror "
                                            placeholder="Masukkan Nama User" name="name" id="name" />
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
                                            <input value="{{ $users->email }}" type="email" class="form-control"
                                                placeholder="Email..." name="email" id="email" />
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>

                                        <div class="mb-3 col-6">
                                            <label for="phone" class="form-label">Phone User</label>
                                            <input value="{{ $users->phone }}" type=”text” class="form-control"
                                                placeholder="Phone..." name="phone" id="phone" />
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
                                        <img src="{{ asset('storage/avatar') }}/{{ $users->avatar }}" class="rounded mb-1"
                                            style="height: 120px" alt="">
                                        <br>
                                        <input type="file" class="form-control" name="avatar" id="avatar"
                                            accept="images/*" />
                                        @error('avatar')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <button type="submit" name="addUsers" class="btn btn-primary" style="float: right">
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
