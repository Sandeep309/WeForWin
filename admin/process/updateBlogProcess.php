<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    include('./connectDb.php');

    if ($connect) {
        $id = $_GET['id'];
        extract($_POST);
        $insertSql = "UPDATE blogs SET title='$title', author='$author', content='$content', tag='$tag' WHERE id='$id' ";

        if (mysqli_query($connect, $insertSql)) {
            header(("location:../editBlog.php"));
            // echo 'done';
        } else {
            echo  mysqli_error($connect);
        }
    } else {
        echo mysqli_connect_error($connect);
    }
    mysqli_close($connect);
} else {
    header("location:../index.php?msg=Something went wrong !");
}
