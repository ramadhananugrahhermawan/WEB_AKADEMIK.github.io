<table border="1">
      <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Alamat</th>     	
 <th>Hapus</th>
 <th>Edite</th>


</tr>





<?php  
 include "koneksi.php";

 $cari=$_POST['search'];
 
 $tampil2 = $konek -> query ("select * from input where nama like '$cari' or alamat like '%$cari%' ");

while ($a= $tampil2 -> fetch_array()) {

@$no++;

echo "

    <tr>
      

      <td>$no</td>
      <td>$a[nama]</td>
      <td>$a[alamat]</td>";



?>
<td><a href="delete.php?id=<?php echo $a['no'] ?>">hapus</a></td>
<td><a href="edit.php?id=<?php echo $a['no'] ?>">edit</a><br></td>	


<?php


}

?>
</tr>
</table>