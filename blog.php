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
    <link rel="stylesheet" href="bootstrap-5.1.0-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>

    <?php
    include("./process/connectDb.php");

    if ($connect) {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM blogs WHERE bin='0' AND id='$id' LIMIT 1";
            $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result) > 0) {
                $data = mysqli_fetch_assoc($result);
            } else {
                header("location:./blogs.php?msg= something went wrong");
            }
        } else {
            header("location:./index.php?msg= something went wrong !");
        }
    }
    mysqli_close($connect);
    ?>

    <!-- Header & Navigation -->
    <?php include('./include/menu.php'); ?>

    <!-- Main Body -->
    <main class="container-fluid mt-5">
        <!-- Blog One -->
        <section class="container my-5">
            <article class="container textjustify" style="max-width: 60em;">
                <div class="w-100 mx-auto">
                    <img src="./img/blog.webp" class="img-fluid mb-3" alt="astronaut image">
                </div>
                <h1 class="fw-bold">
                    <?php echo $data['title']; ?>
                </h1>
                <p class="loraFont fst-italic text-muted">
                    Posted by
                    <span class="text-dark"> <?php echo $data['author']; ?>
                    </span>
                    on <?php echo date('M d, Y', strtotime($data['date'])); ?>
                </p>
                <p class="h4 fw-light">
                    <?php echo $data['content']; ?>
                </p>

                <!-- <p>Thank you for reading</p> -->
            </article>
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