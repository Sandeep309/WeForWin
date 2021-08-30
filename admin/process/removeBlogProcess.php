<?php
// if () {

//     include('./connectDb.php');

//     if ($connect) {
//         extract($_POST);
//         $insertSql = "INSERT INTO blogs(title,author,content,tag)
//             VALUES('$title','$author','$content','$tag')";

//         if (mysqli_query($connect, $insertSql)) {
//             header(("location:../addBlog.php"));
//             // echo 'done';
//         } else {
//             echo  mysqli_error($connect);
//         }
//     } else {
//         echo mysqli_connect_error($connect);
//     }
//     mysqli_close($connect);
// } else {
//     header("location:../index.php?msg=Something went wrong !");
// }
