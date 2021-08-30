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

                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card bg-primary text-light shadow border-0 cardBlue">
                            <div class="card-body">
                                <p class="fs-4">Total Blog</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <a href="#" class="stretched-link text-decoration-none text-light">View more</a>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card bg-warning shadow border-0 cardYellow">
                            <div class="card-body">
                                <p class="fs-4">Total Blog</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <a href="#" class="stretched-link text-decoration-none text-dark">View more</a>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card bg-success text-light shadow border-0 cardGreen">
                            <div class="card-body">
                                <p class="fs-4">Total Blog</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <a href="#" class="stretched-link text-decoration-none text-light">View more</a>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card bg-danger text-light shadow border-0 cardRed">
                            <div class="card-body">
                                <p class="fs-4">Total Blog</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <a href="#" class="stretched-link text-decoration-none text-light">View more</a>
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