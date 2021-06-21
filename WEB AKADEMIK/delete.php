<?php  
include "koneksi.php";

$del=$_GET["id"];

echo $del;

$hapus= $konek -> query ("delete from input where no ='$del'");

if ($hapus) {

header('location:input.php');

}


?>