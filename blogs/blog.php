<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <!-- Header -->
    <header class="container-fluid p-0 shadow-sm sticky-top">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand fw-bolder" href="index.php">WE FOR WIN</a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title fw-bolder" id="offcanvasNavbarLabel">WE FOR WIN</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body menu">
                        <ul class="navbar-nav justify-content-end flex-grow-1 gap-md-4">
                            <li class="nav-item">
                                <a class="nav-link fw-bold " aria-current="page" href="../index.php">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="../blogs.php">Blogs</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="../videos.php">Videos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="../contact.php">Contact</a>
                            </li>
                        </ul>
                        <form class="d-flex gap-3 ms-md-3 mt-3 mt-md-auto">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle shadow-none" type="button" id="dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user-circle"></i>
                                </button>
                                <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="dropdownMenu">
                                    <!-- <li><a class="dropdown-item" href="#">New Blog</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li> -->
                                    <li><a class="dropdown-item" href="../login.php">Login</a></li>
                                    <!-- <hr /> -->
                                    <li><a class="dropdown-item" href="#">Sign-up</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Scroll Indicator -->
        <!-- <div class="progressContainer">
    <div class="progressBar" id="myBar"></div>
</div> -->
    </header>

    <!-- Header image -->
    <figure class="container-fluid blogOneHeadImg">
        <div class="contaner divCenter">
            <h1 class="text-light fw-bold">Blog One</h1>
        </div>
    </figure>

    <!-- Main Body -->
    <main class="container-fluid mt-5">
        <!-- Blog One -->
        <section class="container my-5">
            <!-- Blog Title -->
            <div class="text-center my-5">
                <h2 class="text-center fw-bold text-uppercase">Letest Blogs</h2>
                <img src="img/lines.svg" class="img-fluid" alt="" />
            </div>

            <article class="container textjustify" style="max-width: 60em;">
                <img src="../img/blog.webp" class="img-fluid mb-3" alt="astronaut image" style="max-height: 50% !important;">
                <h3 class="fw-bold">
                    Man must explore, and this is exploration at its greatest
                </h3>
                <p class="loraFont fst-italic text-muted">
                    Posted by <span class="text-dark">Admin</span> on July 17,
                    2021
                </p>
                <p class=" h4 fw-light">
                    Man must explore, and this is exploration at its greatest
                    Man must explore, and this is exploration at its greatest
                    Man must explore Problems look mighty small from 150 miles Man must explore, and this is exploration at its greatest Man must explore, and this is exploration at its greatest Man must explore Problems look mighty small from 150 miles Man must explore, and this is exploration at its greatest
                    Man must explore, and this is exploration at its greatest Man must explore Problems look mighty small from 150 miles
                </p>
                <p class=" h4 fw-light">
                    Man must explore, and this is exploration at its greatest
                    Man must explore, and this is exploration at its greatest
                    Man must explore Problems look mighty small from 150 miles Man must explore, and this is exploration at its greatest Man must explore, and this is exploration at its greatest Man must explore Problems look mighty small from 150 miles Man must explore, and this is exploration at its greatest
                    Man must explore, and this is exploration at its greatest Man must explore Problems look mighty small from 150 miles
                </p>
                <p class=" h4 fw-light">
                    Man must explore, and this is exploration at its greatest
                    Man must explore, and this is exploration at its greatest
                    Man must explore Problems look mighty small from 150 miles Man must explore, and this is exploration at its greatest Man must explore, and this is exploration at its greatest Man must explore Problems look mighty small from 150 miles Man must explore, and this is exploration at its greatest
                    Man must explore, and this is exploration at its greatest Man must explore Problems look mighty small from 150 miles.
                </p>

            </article>
        </section>
    </main>

    <!-- Footer -->
    <footer class="container-fluid bg-white border-top">
        <?php
        include('../include/footer.php')
        ?>
    </footer>

    <script src="../bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/web.js"></script>
</body>

</html>