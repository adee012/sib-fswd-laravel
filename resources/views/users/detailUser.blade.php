@extends('main');
@section('content')
    {{-- Start main --}}
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>User Profile</h1>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                {{-- Profile --}}
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <div class="overflow-hidden rounded-circle" style="width: 120px; height:120px">
                                @if (Auth::user()->avatar == null)
                                    <img src="{{ asset('admin/img/default.jpg') }}" class="img-circle" alt="Profile"
                                        style="width:100%; height:auto">
                                @endif
                                <img src="{{ asset('storage/avatar') }}/{{ Auth::user()->avatar }}" class="img-circle"
                                    alt="Profile" style="width:100%; height:auto">
                            </div>

                            <h2>{{ Auth::user()->name }}</h2>
                            <h3>{{ Auth::user()->role }}</h3>
                        </div>
                    </div>
                </div>

                {{-- Overview, Edit, Change Password --}}
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Overview</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                        Profile</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">Change Password</button>
                                </li>
                            </ul>

                            {{-- Overview --}}
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->name }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Role</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->role }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->addres }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->phone }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->email }}</div>
                                    </div>

                                </div>

                                {{-- Edit Profile --}}
                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form action="{{ url('/update-detail') }}" method="post"
                                        enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                                Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                @if (Auth::user()->avatar == null)
                                                    <img src="{{ asset('admin/img/default.jpg') }}" alt="Profile"
                                                        class="rounded" style=" height:150; width:200px" id="images">
                                                    <img src="" id="image" alt="Profile" class="rounded"
                                                        style="display: none; height:150; width:200px">
                                                @elseif (Auth::user()->avatar != null)
                                                    <img src="{{ asset('storage/avatar') }}/{{ Auth::user()->avatar }}"
                                                        alt="Profile" id="images" class="rounded"
                                                        style=" height:150; width:200px">
                                                    <img src="" id="image" alt="Profile" class="rounded"
                                                        style="display: none; height:150; width:200px">
                                                @endif

                                                <div class="pt-2">
                                                    <label for="choose" class="btn btn-primary"><i class="bi bi-upload"
                                                            style="color:white;"></i></label>
                                                    <input name="avatar" onchange="showPreview(event);" type="file"
                                                        class="d-none" id="choose">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control" id="fullName"
                                                    value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="role" class="col-md-4 col-lg-3 col-form-label">Role</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="role" type="text" class="form-control" id="role"
                                                    value="{{ Auth::user()->role }}" disabled>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="address" type="text" class="form-control" id="Address"
                                                    value="{{ Auth::user()->addres }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control" id="Phone"
                                                    value="{{ Auth::user()->phone }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="Email"
                                                    value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button name="personalEdit" type="submit" class="btn btn-primary">Save
                                                Changes</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Profile Edit  -->

                                {{-- Change password --}}
                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Form -->
                                    <form>

                                        <div class="row mb-3">
                                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control"
                                                    id="currentPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="newpassword" type="password" class="form-control"
                                                    id="newPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter
                                                New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="renewpassword" type="password" class="form-control"
                                                    id="renewPassword">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Change Password  -->

                            </div>
                            <!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->


    @include('sweetalert::alert')
@endsection
@section('script')
    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("image");
                var previews = document.getElementById("images");
                preview.src = src;
                preview.style.display = "block";
                previews.style.display = "none";
            }
        }
    </script>
@endsection
