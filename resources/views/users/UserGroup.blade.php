@extends('main');

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 class="fs-2">User Group</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
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

                            </div>
                            <!-- Table with stripped rows -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered " width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Action</th>
                                                <th>Email</th>
                                                <th>Name</th>
                                                <th>Role</th>
                                                <th>Avatar</th>
                                                <th>Phone</th>
                                                <th>Addres</th>
                                                <th>Password</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @forelse ($users as $u)
                                                <tr>
                                                    <td>{{ $u->id }}</td>
                                                    <td>--</td>
                                                    <td>{{ $u->email }}</td>
                                                    <td>{{ $u->name }}</td>
                                                    <td>{{ $u->role }}</td>
                                                    <td>{{ $u->avatar }}</td>
                                                    <td>{{ $u->phone }}</td>
                                                    <td>{{ $u->address }}</td>
                                                    <td>{{ $u->password }}</td>
                                                    <td>{{ $u->created_at }}</td>
                                                    <td>{{ $u->updated_at }}</td>
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
                            </div>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
