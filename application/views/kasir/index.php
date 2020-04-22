<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url(); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
					</li>
					
					<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
					</li>
					
					<li class="nav-item has-treeview">
            <a href="<?= base_url()?>Auth/logout" class="nav-link">
              <p>
                Log Out
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- Input addon -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Kos kiye alus te?</h3>
              </div>
              <div class="card-body">
                <span class="input-group-text">Uang CashDrawer</span>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Pecahan 100.000" value="100000" id="pec100k" readonly>
                  &nbsp;<div style="margin-top: 1%;">x</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah Pecahan 100.000" id="100k" onchange="jum100k()">
                  &nbsp;<div style="margin-top: 1%;">=</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah" id="jum100k" readonly>
                </div>

                <!-- <span class="input-group-text">Rp. 50.000</span> -->
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Pecahan 50.000" value="50000" id="pec50k" readonly>
                  &nbsp;<div style="margin-top: 1%;">x</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah Pecahan 50.000" id="50k" onchange="jum50k()">
                  &nbsp;<div style="margin-top: 1%;">=</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah" id="jum50k" readonly>
                </div>

                <!-- <span class="input-group-text">Rp. 20.000</span> -->
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Pecahan 20.000" value="20000" id="pec20k" readonly>
                  &nbsp;<div style="margin-top: 1%;">x</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah Pecahan 20.000" id="20k" onchange="jum20k()">
                  &nbsp;<div style="margin-top: 1%;">=</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah" id="jum20k" readonly>
                </div>

                <!-- <span class="input-group-text">Rp. 10.000</span> -->
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Pecahan 10.000" value="10000" id="pec10k" readonly>
                  &nbsp;<div style="margin-top: 1%;">x</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah Pecahan 10.000" id="10k" onchange="jum10k()">
                  &nbsp;<div style="margin-top: 1%;">=</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah" id="jum10k" readonly>
                </div>
    
                <!-- <span class="input-group-text">Rp. 5.000</span> -->
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Pecahan 5.000" value="5000" id="pec5k" readonly>
                  &nbsp;<div style="margin-top: 1%;">x</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah Pecahan 5.000" id="5k" onchange="jum5k()">
                  &nbsp;<div style="margin-top: 1%;">=</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah" id="jum5k" readonly>
                </div>
    
                <!-- <span class="input-group-text">Rp. 2.000</span> -->
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Pecahan 2.000" value="2000" id="pec2k" readonly>
                  &nbsp;<div style="margin-top: 1%;">x</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah Pecahan 2.000" id="2k" onchange="jum2k()">
                  &nbsp;<div style="margin-top: 1%;">=</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah" id="jum2k" readonly>
                </div>
    
                <!-- <span class="input-group-text">Rp. 1.000</span> -->
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Pecahan 1.000" value="1000" id="pec1k" readonly>
                  &nbsp;<div style="margin-top: 1%;">x</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah Pecahan 1.000" id="1k" onchange="jum1k()">
                  &nbsp;<div style="margin-top: 1%;">=</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah" id="jum1k" readonly>
                </div>
    
                <!-- <span class="input-group-text">Rp. 500</span> -->
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Pecahan 500" value="500" id="pec500" readonly>
                  &nbsp;<div style="margin-top: 1%;">x</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah Pecahan 500" id="500" onchange="jum500()">
                  &nbsp;<div style="margin-top: 1%;">=</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah" id="jum500" readonly>
                </div>
    
                <!-- <span class="input-group-text">Rp. 200</span> -->
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Pecahan 200" value="200" id="pec200" readonly>
                  &nbsp;<div style="margin-top: 1%;">x</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah Pecahan 200" id="200" onchange="jum200()">
                  &nbsp;<div style="margin-top: 1%;">=</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah" id="jum200" readonly>
                </div>
    
                <!-- <span class="input-group-text">Rp. 100</span> -->
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Pecahan 100" value="100" id="pec100" readonly>
                  &nbsp;<div style="margin-top: 1%;">x</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah Pecahan 100" id="100" onchange="jum100()">
                  &nbsp;<div style="margin-top: 1%;">=</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah" id="jum100" readonly>
                </div>
    
                <!-- <span class="input-group-text">Pecahan Lainnya</span> -->
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Pecahan Lainnya" id="nominalpecahan">
                  &nbsp;<div style="margin-top: 1%;">x</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Jumlah Pecahan Lainnya" id="adaberapa" onchange="jumlah()">
                  &nbsp;<div style="margin-top: 1%;">=</div>&nbsp;
									<input type="text" class="form-control" placeholder="Jumlah" id="jumpec" readonly>
								</div>

								<!-- <span class="input-group-text">Total</span> -->
                <div class="input-group mb-3">
                  <!-- <input type="submit" class="form-control" value="Save"> -->
                <input type="submit" class="form-control" value="Count" onclick="sum()">
                </div>
                <div class="input-group mb-3">
									<label for="">Total 1: </label>
                  <input type="text" class="form-control" placeholder="Jumlah" id="total" readonly>
								</div>

								<span class="input-group-text">Retur Penjualan</span>
								<div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Nomor Faktur">
                  &nbsp;<div style="margin-top: 1%;">=</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Nilai">
								</div>
								<div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Nomor Faktur">
                  &nbsp;<div style="margin-top: 1%;">=</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Nilai">
								</div>
								<div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Nomor Faktur">
                  &nbsp;<div style="margin-top: 1%;">=</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Nilai">
								</div>
								<div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Nomor Faktur">
                  &nbsp;<div style="margin-top: 1%;">=</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Nilai">
								</div>
								<div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Nomor Faktur">
                  &nbsp;<div style="margin-top: 1%;">=</div>&nbsp;
                  <input type="text" class="form-control" placeholder="Nilai">
								</div>
								<div class="input-group mb-3">
									<label for="">Total 2: </label>
                  <input type="text" class="form-control" placeholder="Jumlah" id="total" readonly>
								</div>
								<div class="input-group mb-3">
									<label for="">Total 3: </label>
                  <input type="text" class="form-control" placeholder="Jumlah" id="total" readonly>
								</div>
								

								<div class="input-group mb-3">
                  <input type="submit" class="form-control" value="Save">
                </div>
                <script>
                  function jum100k() {
                    seratusrebu = document.getElementById('pec100k').value;
                    berapa100k = document.getElementById('100k').value;
                    jumlah100k = parseInt(seratusrebu) * parseInt(berapa100k);
                    document.getElementById('jum100k').value = parseInt(jumlah100k);
                  }
                  function jum50k() {
                    seratusrebu = document.getElementById('pec50k').value;
                    berapa100k = document.getElementById('50k').value;
                    jumlah100k = parseInt(seratusrebu) * parseInt(berapa100k);
                    document.getElementById('jum50k').value = parseInt(jumlah100k);
                  }
                  function jum20k() {
                    seratusrebu = document.getElementById('pec20k').value;
                    berapa100k = document.getElementById('20k').value;
                    jumlah100k = parseInt(seratusrebu) * parseInt(berapa100k);
                    document.getElementById('jum20k').value = parseInt(jumlah100k);
                  }
                  function jum10k() {
                    seratusrebu = document.getElementById('pec10k').value;
                    berapa100k = document.getElementById('10k').value;
                    jumlah100k = parseInt(seratusrebu) * parseInt(berapa100k);
                    document.getElementById('jum10k').value = parseInt(jumlah100k);
                  }
                  function jum5k() {
                    seratusrebu = document.getElementById('pec5k').value;
                    berapa100k = document.getElementById('5k').value;
                    jumlah100k = parseInt(seratusrebu) * parseInt(berapa100k);
                    document.getElementById('jum5k').value = parseInt(jumlah100k);
                  }
                  function jum2k() {
                    seratusrebu = document.getElementById('pec2k').value;
                    berapa100k = document.getElementById('2k').value;
                    jumlah100k = parseInt(seratusrebu) * parseInt(berapa100k);
                    document.getElementById('jum2k').value = parseInt(jumlah100k);
                  }
                  function jum1k() {
                    seratusrebu = document.getElementById('pec1k').value;
                    berapa100k = document.getElementById('1k').value;
                    jumlah100k = parseInt(seratusrebu) * parseInt(berapa100k);
                    document.getElementById('jum1k').value = parseInt(jumlah100k);
                  }
                  function jum500() {
                    seratusrebu = document.getElementById('pec500').value;
                    berapa100k = document.getElementById('500').value;
                    jumlah100k = parseInt(seratusrebu) * parseInt(berapa100k);
                    document.getElementById('jum500').value = parseInt(jumlah100k);
                  }
                  function jum200() {
                    seratusrebu = document.getElementById('pec200').value;
                    berapa100k = document.getElementById('200').value;
                    jumlah100k = parseInt(seratusrebu) * parseInt(berapa100k);
                    document.getElementById('jum200').value = parseInt(jumlah100k);
                  }
                  function jum100() {
                    seratusrebu = document.getElementById('pec100').value;
                    berapa100k = document.getElementById('100').value;
                    jumlah100k = parseInt(seratusrebu) * parseInt(berapa100k);
                    document.getElementById('jum100').value = parseInt(jumlah100k);
                  }
									function jumlah() {
                    seratusrebu = document.getElementById('nominalpecahan').value;
                    berapa100k = document.getElementById('adaberapa').value;
                    jumlah100k = parseInt(seratusrebu) * parseInt(berapa100k);
                    document.getElementById('jumpec').value = parseInt(jumlah100k);
                  }
                  function sum() {
                    txt100k = document.getElementById('jum100k').value;
                    txt50k = document.getElementById('jum50k').value;
                    txt20k = document.getElementById('jum20k').value;
                    txt10k = document.getElementById('jum10k').value;
                    txt5k = document.getElementById('jum5k').value;
                    txt2k = document.getElementById('jum2k').value;
                    txt1k = document.getElementById('jum1k').value;
                    txt500 = document.getElementById('jum500').value;
                    txt200 = document.getElementById('jum200').value;
                    txt100 = document.getElementById('jum100').value;
                    txtlain = document.getElementById('jumpec').value;
                    if (txtlain == "") {
                      txtlain = 0;
                    }
                    result = parseInt(txt100k) + parseInt(txt50k) + parseInt(txt20k) + parseInt(txt10k) + parseInt(txt5k) + parseInt(txt2k) + parseInt(txt1k) + parseInt(txt500) + parseInt(txt200) + parseInt(txt100) + parseInt(txtlain); 
                    if (!isNaN(result)) {
                      document.getElementById('total').value = result;
                    }
                  }
                </script>
                <!-- /input-group -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.4
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url(); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?= base_url(); ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
