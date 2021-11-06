<?php

include('./connectDb.php');
// include("./process/connectDb.php");

if ($connect) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "UPDATE blogs SET bin='0' WHERE id='$id'";
        mysqli_query($connect, $sql);
        header('location:../recyleBin.php');
    } else {
        header("location:./index.php?msg= something went wrong !");
    }
}
mysqli_close($connect);
