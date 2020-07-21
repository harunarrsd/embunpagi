<?php 
include '../system/koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM tb_posting WHERE id = $id";
$result = mysqli_query($connect,$sql);
if ($result) {
	header('location:report_berita.php');
}else{
	echo "Gagal hapus!";
}
?>
