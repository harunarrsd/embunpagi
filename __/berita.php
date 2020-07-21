<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Komunitas Embun Pagi</title>
  <link rel="icon" type="image/x-icon" href="../assets/images/logo-embun.png"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/css/skins/_all-skins.min.css">

  <script type="text/javascript">
  function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

    oFReader.onload = function (oFREvent) {
      document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
  };
</script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">EP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Embun Pagi</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>

  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="home.php">
            <i class="fa fa-dashboard"></i><span>Dashboard</span>
          </a>
        </li>
        <li class="treeview active">
          <a>
            <i class="fa fa-edit"></i><span>Input</span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="berita.php"><i class="fa fa-circle-o"></i>Berita</a></li>
            <li><a href="galeri.php"><i class="fa fa-circle-o"></i>Upload Galeri</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a>
            <i class="fa fa-book"></i><span>Report</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pendaftaran.php"><i class="fa fa-circle-o"></i>Pendaftaran</a></li>
            <li><a href="krisar.php"><i class="fa fa-circle-o"></i>Kritik dan Saran</a></li>
            <li><a href="report_berita.php"><i class="fa fa-circle-o"></i>Berita</a></li>
            <li><a href="report_galeri.php"><i class="fa fa-circle-o"></i>Galeri</a></li>
          </ul>
        </li>
        <li>
          <a href="logout.php">
            <i class="fa fa-sign-out"></i><span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Posting Berita
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Input</li>
        <li class="active">Berita</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12">
          <form action="input_berita.php" method="POST" enctype="multipart/form-data">
            <div class="col-md-6">
              <div class="form-group">
                <label>Judul Berita</label>
                <input type="text" name="judul" class="form-control" placeholder="Komunitas Embun Pagi" required>
              </div>
              <div class="form-group">
                <label>Deskripsi Berita</label>
                <textarea class="form-control" name="isi" rows="8" placeholder="Kegiatan Embun Pagi..." required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Gambar (Max. 416px X 252px)</label><br />
                <img id="uploadPreview" style="width: 416px; height: 252px;" /><br><br>
                <input id="uploadImage" type="file" name="path" onchange="PreviewImage();" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2017-2018 <a href="#!">#ManusiaBiasa</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../assets/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/js/app.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/js/demo.js"></script>
</body>
</html>