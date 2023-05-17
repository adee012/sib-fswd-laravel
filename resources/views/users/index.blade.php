<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Arkatama Store</title>
  <link type="text/css" href="/assets/css/styles.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Arkatama Store</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar-->
    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0 ">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Users</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="login.html">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            {{-- <div class="sb-sidenav-menu-heading">Main Menu</div>
            <a class="nav-link" href="index.php">
              <div class="sb-nav-link-icon">
                <i class="fas fa-clipboard-list"></i>
              </div>
              Dashboard
            </a>
            <a class="nav-link" href="products.php">
              <div class="sb-nav-link-icon">
                <i class="fas fa-boxes"></i>
              </div>
              Products
            </a>
            <a class="nav-link" href="categories.php">
              <div class="sb-nav-link-icon">
                <i class="fas fa-box"></i>
              </div>
              Categories
            </a> --}}

            <div class="sb-sidenav-menu-heading">Menu Admin</div>
            <a class="nav-link" href="users.php">
              <div class="sb-nav-link-icon">
                <i class="fas fa-users"></i>
              </div>
              Users
            </a>

          </div>
        </div>
        <div class="sb-sidenav-footer text-center">
          <div class="small">adedwiputra16@gmail.com</div>
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid">
          <h1 class="mt-4">Users</h1>
          <div class="card mb-4">
            <div class="card-header">
              <!-- Button to Open the Modal -->
              <a href="addUsers.php"><button type="button" class="btn btn-primary">
                  Add Users
                </button></a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                    
					@foreach($users as $u)
					<tr>
						<td>{{ $u->id }}</td>
						<td>
							<!-- Detail Data Start -->
							<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModalDetail{{ $u->id }}" value="{{ $u->id }}">
							  Detail
							</button>

							<div class="modal fade" id="ModalDetail{{ $u->id }}">
								<div class="modal-dialog">
								  <div class="modal-content">
									<!-- Modal Header -->
									<div class="modal-header text-center bg-warning">
									  <h4 class="modal-title">Detail Users</h4>
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<!-- Modal body -->
									<div class="row d-flex justify-content-center align-items-center">
									  <div class="mb-3 mt-3 mr-5">
										<p><img src="{{asset('assets/avatars/'.$u->avatar)}}" style="width:120px; height:180px"></p>
									  </div>
									  <div class=" mb-3 mt-3">
										<div class="row d-flex justify-content-center">
										  <div class=" mb-3 mt-3">
											<p>Id User &emsp;&emsp;&emsp;&nbsp; :</p>
											<p>Nama Lengkap : </p>
											<p>Role &emsp;&emsp;&emsp;&emsp;&ensp; :</p>
											<p>No.HP&emsp;&emsp;&emsp;&ensp;&nbsp; :</p>
											<p>Email &emsp;&emsp;&emsp;&ensp;&ensp; :</p>
											<p>Alamat &emsp;&emsp;&emsp;&ensp;:</p>
										  </div>
										  <div class=" mb-3 mt-3">
											<p>&ensp;{{ $u->id }}</p>
											<p>&ensp;{{ $u->name }}</p>
											<p>&ensp;{{ $u->role }}</p>
											<p>&ensp;{{ $u->phone }}</p>
											<p>&ensp;{{ $u->email }}</p>
											<p>&ensp;{{ $u->address }}</p>
										  </div>
										</div>
									  </div>
									</div>
		
									<!-- Modal footer -->
									<div class="modal-footer">
									  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									</div>
		
		
								  </div>
								</div>
							  </div>
						</td>
						<td>{{ $u->email }}</td>
						<td>{{ $u->name }}</td>
						<td>{{ $u->role }}</td>
						<td><img src="{{asset('assets/avatars/'.$u->avatar)}}" style="width:120px; height:120px"></td>
						<td>{{ $u->phone }}</td>
						<td>{{ $u->address }}</td>
						<td>{{ $u->password }}</td>
						<td>{{ $u->created_at }}</td>
						<td>{{ $u->updated_at }}</td>
					</tr>
					@endforeach



                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main>
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Ade Dwi Putra</div>
            <div>
              <a href="#">Privacy Policy</a>
              &middot;
              <a href="#">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script>
    function konfirmasi() {
      konfirmasi = confirm("Apakah anda yakin ingin menghapus data ini?"), alert("Data berhasil dihapus");
      document.writeln(konfirmasi)
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script  src="/assets/js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>
