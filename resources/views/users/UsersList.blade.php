@extends('main');
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 class="fs-2">User List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">User List</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                @if (Auth::user()->role == 'admin')
                                    <!-- Button to Open the add new user -->
                                    <a href="/addUser" role="button" class="btn btn-primary">Add Users</a>
                                @endif

                            </div>
                            <!-- Table with stripped rows -->

                            <div class="table-responsive">
                                <table class="text-center table table-bordered table-striped" width="100%"
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
                                            @if (Auth::user()->role == 'admin')
                                                <th style="width:15%">Action</th>
                                            @endif
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
                                                @if (Auth::user()->role == 'admin')
                                                    <td class="text-center">
                                                        {{-- button update --}}
                                                        <a href="/users-edit/{{ $u->id }}" class="btn btn-primary"
                                                            role="button"><i class="bi bi-pencil-square"></i></a>

                                                        {{-- button view --}}
                                                        {{-- <a href="" class="btn btn-warning" role="button"
                                                                data-bs-toggle="modal" data-bs-target="#largeModal"><i
                                                                    class="bi bi-eye"></i></a> --}}

                                                        {{-- button delete --}}
                                                        <a href="/users-delete/{{ $u->id }}" class="btn btn-danger"
                                                            role="button" data-confirm-delete="true"><i
                                                                class="bi bi-trash-fill"></i></a>
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

    </main>
    <!-- End #main -->


    @include('sweetalert::alert')
@endsection
