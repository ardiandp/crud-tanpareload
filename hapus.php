<?php

    include "connect.php";

    $id = $_POST['id'];

    $query = mysqli_query($connect, "DELETE FROM mahasiswa WHERE idmahasiswa='$id'");
?>

