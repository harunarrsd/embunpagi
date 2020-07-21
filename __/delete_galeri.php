<?php 
include '../system/koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM tb_post_galeri WHERE id = $id";
$result = mysqli_query($connect,$sql);
if ($result) {
	header('location:report_galeri.php');
}else{
	echo "Gagal Delete";
}?>
