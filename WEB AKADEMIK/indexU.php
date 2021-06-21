<head>
<!DOCTYPE html>
<html lang="en">
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>TK.RIRI</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
<link rel="stylesheet" type="text/css" href="style.css">

</head>


<body>
	

<div id="head">

<?php  
include "../koneksi.php";
session_start();
$user = $_SESSION['username'];
$tampil = $konek -> query ("select * from aman where username ='$user'");
$level  = $tampil -> fetch_array();

echo "<b>$user</b> <i>anda login sebagai</i> : <b>$level[level]</b> ";


if (!isset($_SESSION['username'])){

  header('location:index.php');
}else {

  
}

?>


	<div align="center"><h1> <font color="red"><b>TAMAN KANAK-KANAK RIRI<b></h1></div>
<div align="right">
	<form action="search.php" method="post" target="wadah">
		Search : <input type="text" name="search"></font>
		<input type="submit" name="" value="cari">




	</form>
</div>
</div>

<div id="side">

<div class="list-group">
  <a href="#" class="list-group-item active">
    <div align="center"> MENU </div>
  </a>
  <a href="inputU.php" class="list-group-item" target="wadah">INPUT</a>
  <a href="" class="list-group-item">TAMPIL</a>
  <a href="../logout.php" class="list-group-item">LOG OUT</a>
</div>


<div id="content">

	<iframe src="tampil.php" name="wadah" style=" height: 99%; width: 100%;"><div>



</iframe>
	
</div>

</body>