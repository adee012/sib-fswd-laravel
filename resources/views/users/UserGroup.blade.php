@extends('main');
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1 class="fs-2">User Group</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">User Group</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <!-- Select to select admin or staff -->
                                <button class="text-start btn btn-white border text-dark dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Select role
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('/UserGroup') }}">All</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/admin-group') }}">Admin</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/staff-group') }}">Staff</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/user-group') }}">User</a></li>

                                </ul>
                                <hr>
                            </div>
                            <!-- Table with stripped rows -->
                            <div class="table-responsive">
                                <table id="table" class="text-center table table-bordered table-striped" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Email</th>
                                            <th style="width:15%">Name</th>
                                            <th>Role</th>
                                            <th>Phone</th>
                                            <th style="width:15%">Addres</th>
                                            <th>Avatar</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($users as $u)
                                            <tr>
                                                <td>{{ $u->id }}</td>
                                                <td>{{ $u->email }}</td>
                                                <td>{{ $u->name }}</td>
                                                <td>{{ $u->role }}</td>
                                                <td>{{ $u->phone }}</td>
                                                <td>{{ $u->addres }}</td>
                                                <td class="text-center"><img width="100px" height="100px"
                                                        src="{{ asset('storage/avatar') }}/{{ $u->avatar }}">
                                                </td>
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
@endsection
