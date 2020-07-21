<?php
	session_start();

	if( !isset($_POST['user']) ) 
	{
		header('location:index.php');
		exit();
	}
	$error = '';

	require ( '../system/koneksi.php' );
	$username = trim( $_POST['user'] );
	$password = trim( $_POST['pass'] );

	if( strlen($username) < 2 )
	{
 		$error = '<div class="alert alert-danger" role="alert">
 		<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  		<span class="sr-only">Error:</span>Username Tidak Boleh Kosong!</div>';
	}
	else if( strlen($password) < 2 )
	{
		$error = '<div class="alert alert-danger" role="alert">
		<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  		<span class="sr-only">Error:</span>Password Tidak Boleh Kosong!</div>';
	}
	else
	{
 		$username = $_POST['user'];
 		$password = $_POST['pass'];

		$password = md5($password);

 		$sql = "SELECT * FROM users
   				WHERE username='$username'
   				AND password='$password' LIMIT 1";

 		$result = mysqli_query($connect,$sql);

 	if( !$result )
 	{
  		die( 'Oops!! Sepertinya ada kesalahan database '. $connect->error );
 	}

 	//check hasil perintah
 	if( $result->num_rows == 1 )
 	{
  		//jika data yang dimaksud ada maka akan ditampilkan
  		$row =$result->fetch_assoc();

  		header('location:home.php');
  		exit();	
 	}
 	else
 	{

  		$error = '<div class="alert alert-danger" role="alert">
  		<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  		<span class="sr-only">Error:</span>Username dan Password Tidak ditemukan!</div>';
 	}

}

if( !empty($error) )
{
 	$_SESSION['error'] = $error;
 	header('location:index.php');
 	exit();
}
?>