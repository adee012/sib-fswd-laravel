@extends('main');

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 class="fs-2">Carousels</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                    <li class="breadcrumb-item">Product</li>
                    <li class="breadcrumb-item active">Carousels</li>
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
                                <a href="addUsers.php"><button type="button" class="btn btn-primary">
                                        Add Carousels
                                    </button></a>
                            </div>
                            <!-- Table with stripped rows -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Url</th>
                                                <th>Is Active</th>
                                                <th>Status</th>
                                                <th>Banner</th>
                                                <th>Created By</th>
                                                <th>Verified By</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @forelse ($carousels as $cl)
                                                <tr>
                                                    <td>{{ $cl->id }}</td>
                                                    <td>{{ $cl->name }}</td>
                                                    <td>{{ $cl->url }}</td>
                                                    <td>{{ $cl->is_active }}</td>
                                                    <td>{{ $cl->status }}</td>
                                                    <td>{{ $cl->banner }}</td>
                                                    <td>{{ $cl->created_by }}</td>
                                                    <td>{{ $cl->verified_by }}</td>
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
