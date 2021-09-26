<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bootstrap-5.1.0-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- Header & Navigation -->
    <?php
    include('./include/menu.php');
    ?>

    <!-- Header image -->
    <div class="container-fluid aboutHeadImg">
        <div class="contaner divCenter">
            <h1 class="text-light fw-bold">About Us</h1>
        </div>
    </div>

    <!-- Main Body -->
    <main class="container-fluid mt-5">
        <section class="container my-5">
            <!-- Blog Title -->
            <div class="text-center my-5">
                <h2 class="text-center fw-bold text-uppercase">WHO WE ARE</h2>
                <img src="img/lines.svg" class="img-fluid" alt="" />
            </div>
            <div class="row">
                <div class="col">
                    <p class="textjustify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat nunc a justo pretium molestie venenatis ut libero. Integer fermentum sem dui. Ut non nulla quam. Donec nec convallis urna. Phasellus viverra dictum varius. Curabitur volutpat ligula vel lectus ultrices, vel fermentum erat efficitur. In eleifend ultricies odio, sed commodo augue tincidunt at. Vivamus tempor volutpat eros, sit amet ultrices sem mollis a. Fusce maximus ac augue vel blandit.
                        Suspendisse sit amet turpis sit amet magna ullamcorper ornare ac eget mauris. Praesent suscipit hendrerit metus, eu pulvinar metus pretium a. Sed id diam aliquet, aliquam massa eu, gravida elit. Nam blandit mattis leo, a faucibus odio tristique vel. Etiam fringilla, orci sed sagittis eleifend, mi velit semper urna, quis sagittis leo purus vitae mi. Vivamus fringilla vitae ex non lobortis. Proin in semper enim. Morbi id malesuada dolor. Sed nisl ante, pulvinar eu est eget, maximus sodales neque. Vestibulum id suscipit magna. Nulla sed iaculis mi. Proin aliquam malesuada velit a mollis. Praesent vulputate laoreet tortor vitae dapibus. Aliquam porttitor pretium blandit. Sed orci quam, scelerisque ut lobortis vitae, tincidunt quis enim.
                    </p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="container-fluid bg-white border-top">
        <?php
        include('./include/footer.php')
        ?>
    </footer>

    <script src="bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/web.js"></script>
</body>

</html>