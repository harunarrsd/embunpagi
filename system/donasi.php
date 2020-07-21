<?php
include 'koneksi.php';

$nama       = $_POST['nama'];
$alamat     = $_POST['alamat'];
$kerja    	= $_POST['pekerjaan'];
$no_hp   	= $_POST['no_hp'];
$donatur    = $_POST['donatur'];
$nominal    = $_POST['nominal'];

$sql = "INSERT INTO tb_donasi VALUES('','$nama', '$alamat', '$kerja', '$no_hp', '$donatur', '$nominal')";
$result = mysqli_query($connect,$sql);
if ($result) {
	?>
	<script>alert('Terima Kasih sudah mendonasi di Komunitas Embun Pagi.');
        window.location.href='../';
    </script>
	<?php
}else{
	?>
	<script>alert('Pendaftaran Gagal.');</script>
    <?php
}
?>