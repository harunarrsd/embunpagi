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

  <link rel="stylesheet" href="../assets/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/css/skins/_all-skins.min.css">

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
        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i><span>Input</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="berita.php"><i class="fa fa-circle-o"></i>Berita</a></li>
            <li><a href="galeri.php"><i class="fa fa-circle-o"></i>Upload Artikel</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a>
            <i class="fa fa-book"></i><span>Report</span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="pendaftaran.php"><i class="fa fa-circle-o"></i>Pendaftaran</a></li>
            <li><a href="krisar.php"><i class="fa fa-circle-o"></i>Kritik dan Saran</a></li>
            <li><a href="report_berita.php"><i class="fa fa-circle-o"></i>Berita</a></li>
            <li><a href="report_galeri.php"><i class="fa fa-circle-o"></i>Artikel</a></li>
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
        Data Pendaftaran Komunitas Embun Pagi
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Report</li>
        <li class="active">Pendaftaran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <table class="table table-hover" id="myTable">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>TTL</th>
            <th>Domisili</th>
            <th>Aktivitas</th>
            <th>Instansi</th>
            <th>Sosial Media</th>
            <th>Motto</th>
            <th>No. Hp</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          include '../system/koneksi.php';
          $sql = "SELECT * FROM tb_daftar";
          $result = mysqli_query($connect,$sql);
          $no=1;
          while ($data = mysqli_fetch_array($result))
            {?>
              <tr>
                <td><?php echo $no?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['ttl']; ?></td>
                <td><?php echo $data['domisili']; ?></td>
                <td><?php echo $data['aktivitas']; ?></td>
                <td><?php echo $data['instansi']; ?></td>
                <td><?php echo $data['socmed']; ?></td>
                <td><?php echo $data['motto']; ?></td>
                <td><?php echo $data['no']; ?></td>
              </tr>
              <?php $no++;}?>
            </tbody>
          </table>
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
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/js/app.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/js/demo.js"></script>
<script>
  $(function () {
    $("#myTable").DataTable();
  });
</script>
</body>
</html>