
<?php  
include "koneksi.php";
session_start();
$user = $_SESSION['username'];
$tampil = $konek -> query ("select * from aman where username ='$user'");
$level  = $tampil -> fetch_array();

echo "$user anda login sebagai : $level[level] <br>";


if (!isset($_SESSION['username'])){

	header('location:index.php');
}else {

	echo "anda berhasil";
}

?>


<h1> Ramadhan </h1>


<a href="logout.php"> Log Out </a>