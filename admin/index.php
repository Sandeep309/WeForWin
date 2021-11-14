<?php
session_start();

if (isset($_SESSION['userDetails']) && $_SESSION['userDetails']['email'] == 'weforwin@admin.com') {
    $session_value =  $_SESSION['userDetails']['userName'];
} else {
    $_SESSION["msgRed"] = "Please Login !";
    header('location:./login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - We for win</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body class="displayArea">
    <!-- Header -->
    <?php include('./includes/header.php'); ?>

    <div class="contentContainer">
        <div class="leftPanel">
            <?php include('./includes/sideNav.php') ?>
        </div>
        <div class="rightPanel">
            <!-- main Content -->
            <main class="container-fluid">
                <!-- Heading -->
                <ol class="breadcrumb p-3 mb-4 rounded myLigthGrey">
                    <li class="breadcrumb-item " aria-current="page">
                        <span class="h2">Dashboard</span>
                    </li>
                </ol>

                <div class="row mb-3">
                    <p class="h3 mb-3">Analyze</p>
                    <div class="col-md-6 mb-3">
                        <div class="card bg-primary text-light shadow border-0 cardBlue">
                            <div class="card-body">
                                <?php
                                include('process/connectDb.php');
                                if ($connect) {
                                    $fetchTotalBlog = "SELECT COUNT(DISTINCT title) FROM blogs";
                                    $result = mysqli_query($connect, $fetchTotalBlog);
                                    $row = mysqli_fetch_array($result);
                                    $totalBlog = $row[0];
                                } else {
                                    mysqli_connect($connect);
                                }
                                mysqli_close($connect);

                                ?>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="card-title h3">Total Blog</p>
                                    <p class="card-text h2"><?php echo $totalBlog; ?></p>
                                </div>

                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <a href="blogList.php" class="stretched-link text-decoration-none text-light">View more</a>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="card bg-danger text-light shadow border-0 cardRed">
                            <div class="card-body">
                                <?php
                                include('process/connectDb.php');
                                if ($connect) {
                                    $fetchRecyleBin = "SELECT COUNT(DISTINCT title) FROM blogs WHERE bin='1'";
                                    $result = mysqli_query($connect, $fetchRecyleBin);
                                    $row = mysqli_fetch_array($result);
                                    $totalBin = $row[0];
                                } else {
                                    mysqli_connect($connect);
                                }
                                mysqli_close($connect);

                                ?>

                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="card-title h3">Recyle Bin</p>
                                    <p class="card-text h2"><?php echo $totalBin; ?></p>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <a href="recyleBin.php" class="stretched-link text-decoration-none text-light">View more</a>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <p class="h3 mb-3">Create blog or edit existing</p>
                    <div class="col-md-6 mb-3">
                        <div class="card bg-success text-light shadow border-0 cardGreen">
                            <div class="card-body">
                                <p class="fs-4">Create blog</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <a href="addBlog.php" class="stretched-link text-decoration-none text-light">View more</a>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card bg-warning shadow border-0 cardYellow">
                            <div class="card-body">
                                <p class="fs-4">Edit blog</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <a href="editBlog.php" class="stretched-link text-decoration-none text-dark">View more</a>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Script -->
    <script src="../bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>

</body>

</html>