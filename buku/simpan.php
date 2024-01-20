<?php 

include('../connect.php');

$judul       = $_POST['judul'];
$penulis     = $_POST['penulis'];
$kategori    = $_POST['kategori'];
 
$insert = mysqli_query($connect, "insert into buku set judul='$judul', penulis='$penulis', kategori='$kategori'");


?>
