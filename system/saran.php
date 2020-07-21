<?php
include 'koneksi.php';

$nama        = $_POST['nama'];
$kritik      = $_POST['kritik'];
$saran       = $_POST['saran'];

$sql = "INSERT INTO tb_krisar VALUES('','$nama','$kritik','$saran')";
$result = mysqli_query($connect,$sql);
if ($result) {
	?>
	<script>alert('Terima Kasih sudah kasih kritik dan saran di Komunitas Embun Pagi.');
        window.location.href='../';
    </script>
	<?php
}else{
	?>
	<script>alert('Kritik dan Saran Gagal.');</script>
    <?php
}
?>