<?php

include('./connectDb.php');
// include("./process/connectDb.php");

if ($connect) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM blogs WHERE id='$id'";
        mysqli_query($connect, $sql);
        header('location:../RemoveBlog.php');
    } else {
        header("location:./index.php?msg= something went wrong !");
    }
}
mysqli_close($connect);
