<?php 
include '../system/koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$isi      = $_POST['isi'];
$tgl      = date('Y-m-d H:i:s');
$fileName = $_FILES['path']['name'];

$sql = "UPDATE tb_post_artikel SET judul = '$judul', deskripsi = '$isi', path = '$fileName', waktu = '$tgl' WHERE id = $id";
$result = mysqli_query($connect,$sql);
move_uploaded_file($_FILES['path']['tmp_name'], "../assets/images/artikel/".$_FILES['path']['name']);
echo"<script>alert('Data berhasil diubah.');window.location.href='report_galeri.php';</script>";
?>