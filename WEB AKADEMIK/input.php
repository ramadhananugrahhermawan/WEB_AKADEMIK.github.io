<!DOCTYPE html>
<html lang="en">
  <head>
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
  </head>

<br>
<form action="input2.php" method="post">
	 Nama : <input type="text" name="nama">
	 Alamat : <input type="text" name="alamat">

	 <input type="submit" name="simpan" value="simpan" >
</form>
<br>
   <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"> <div align="center">TK.RIRI</div></div>

  <!-- Table -->
  <table class="table">

	
		<tr>
	<th>No</th>
	<th>Nama</th>		
    <th>Alamat</th>
    <th>Hapus</th>
    <th>Edite</th>



		</tr>




 



<?php
include "koneksi.php";

$tampil = $konek -> query ("select * from input ");

while ($a= $tampil -> fetch_array()) {

@$no++;

echo "
     <tr>

    <td>$no</td>
     <td>$a[nama]</td>
     <td>$a[alamat]</td> ";
 
	
?>
<td><a href="delete.php?id=<?php echo $a['no']  ?>"> <i class ="glyphicon glyphicon-trash"></a></td>
<td><a href="edit.php?id=<?php echo $a['no']  ?>"> <i class="glyphicon glyphicon-pencil"></a></td>

<?php  




}



?>
</tr>
</table>