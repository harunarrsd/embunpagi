<?php
include 'koneksi.php';

$nama        = $_POST['nama'];
$ttl         = $_POST['ttl'];
$domisili    = $_POST['domisili'];
$aktivitas   = $_POST['aktivitas'];
$instansi    = $_POST['instansi'];
$socmed      = $_POST['socmed'];
$motto       = $_POST['motto'];
$no          = $_POST['no'];

$sql = "INSERT INTO tb_daftar VALUES('','$nama', '$ttl', '$domisili', '$aktivitas', '$instansi', '$socmed', '$motto', '$no')";
$result = mysqli_query($connect,$sql);
if ($result) {
	?>
	<script>alert('Terima Kasih sudah mendaftar di Komunitas Embun Pagi.');
        window.location.href='../';
    </script>
	<?php
}else{
	?>
	<script>alert('Pendaftaran Gagal.');</script>
    <?php
}
?>