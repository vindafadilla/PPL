<?php
// Membangun koneksi ke database
$connection = mysql_connect("localhost", "root", "");
// Seleksi Database
$db = mysql_select_db("db_sma", $connection);


$error=''; // Variabel untuk menyimpan pesan error
if (isset($_POST['submit'])){
	if (empty($_POST['username']) || empty($_POST['password'])) {
	$error = "Username or Password is invalid";
	echo $error;
	}
	else
	{
	// Variabel username dan password
		$username=$_POST['username'];
		$password=$_POST['password'];
		// Mencegah MySQL injection 
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		// SQL query untuk memeriksa apakah admin terdapat di database?
		$query = mysql_query("select * from admin where nama_admin='$username' AND password='$password'", $connection);
		$rows = mysql_num_rows($query);
		if ($rows == 1) {
			session_start(); // Memulai Session
			$_SESSION['login_user']=$username; // Membuat Sesi/session
			header("location: profile.php"); // Mengarahkan ke halaman profil
		} else {
			$error = "Username atau Password belum terdaftar";
			echo $error;
		}
		mysql_close($connection); // Menutup koneksi
	}
}
?>