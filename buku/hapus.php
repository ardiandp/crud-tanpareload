<?php
//ession_start();
include('../connect.php');
//include 'csrf.php';

$id = $_POST['id'];

$query = mysqli_query($connect,"DELETE FROM buku WHERE id=$id ");

if(!$query){
    die(mysqli_error($connect));
}   

echo json_encode(['success' => 'Sukses']);

?>