<?php 
include '../system/koneksi.php';

$judul    = $_POST['judul'];
$isi      = $_POST['isi'];
$tgl      = date("Y-m-d H:i:s");
$fileName = $_FILES['path']['name'];

$sql = "INSERT INTO tb_posting VALUES('','$judul','$isi','$fileName','$tgl')";
$result = mysqli_query($connect,$sql);
move_uploaded_file($_FILES['path']['tmp_name'], "../assets/images/berita/".$_FILES['path']['name']);
echo"<script>alert('Data berhasil disimpan.');window.location.href='berita.php';</script>";
 ?>