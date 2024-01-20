<?php 

include('connect.php');

$nama       = $_POST['nama'];
$jurusan    = $_POST['jurusan'];
$jk         = $_POST['jk'];
 
$insert = mysqli_query($connect, "insert into mahasiswa set nama='$nama', jurusan='$jurusan', jk='$jk'");

?>
