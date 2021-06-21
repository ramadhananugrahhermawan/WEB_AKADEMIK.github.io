<?php  
include "koneksi.php";

$d=$_GET['id'];

echo $d;

$edit= $konek -> query ("select * from input where no ='$d'");


$b= $edit -> fetch_array(); 



?>


<form action="" method="post">
	 Nama   : <input type="text" name="nama" value="<?php echo $b['nama']  ?>">
	 Alamat : <input type="text" name="alamat" value="<?php echo $b['alamat']  ?>">

	 <input type="submit" value="simpan" name="edit" >
</form>

<?php 
if (isset($_POST['edit'])) {


$update= $konek -> query ("update input set nama='$_POST[nama]',alamat='$_POST[alamat]' where no='$d'");

header('location:input.php');


}
?>
