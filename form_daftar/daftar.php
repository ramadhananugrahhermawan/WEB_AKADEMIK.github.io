<?php  

include "koneksi.php";


if (isset($_POST['daftar'])) {
	


$email=$_POST['email'];
$pass=md5($_POST['pass']);
$level=$_POST['level'];

$lihat=$konek -> query("select * from aman where username='$email'");
$cek=$lihat -> num_rows;

if ($email=="") {
	
 echo "Maaf Email Harus Di Isi ";

}elseif ($cek > 0) {
    
echo "Maaf User Sudah Terdaftar";

}else{

$input=$konek -> query ("insert into aman(username,password,level) values('$email','$pass','$level')");

echo "data tersimpan";

}
}

?>