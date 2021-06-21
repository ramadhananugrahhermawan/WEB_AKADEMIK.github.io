

<?php
include "koneksi.php";

$nama=$_POST['nama'];
$alamat=$_POST['alamat'];

$simpan= $konek ->  query ("insert into input (nama,alamat) values ('$nama','$alamat') ");

header ('location:inputU.php');


?>