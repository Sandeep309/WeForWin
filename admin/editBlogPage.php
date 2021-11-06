<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Blog Page | We For Win</title>
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
                header("location:./editBlog.php?msg= please select editable blog");
            }
        } else {
            header("location:./index.php?msg= something went wrong !");
        }
    }
    mysqli_close($connect);
    ?>
    <!-- Header -->
    <?php include('./includes/header.php'); ?>

    <div class="contentContainer">
        <div class="leftPanel">
            <?php include('./includes/sideNav.php') ?>
        </div>
        <div class="rightPanel">
            <main class="container-fluid">
                <!-- Sub-Heading -->
                <ol class="breadcrumb p-3 mb-4 rounded myLigthGrey">
                    <li class="breadcrumb-item " aria-current="page">
                        <span class="h2">Edit Blog</span>
                    </li>
                </ol>

                <!-- Details -->
                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-header">
                        Edit Blog Form
                    </div>
                    <div class="card-body">

                        <form name="addBlogForm" action="process/updateBlogProcess.php?id=<?php echo $data['id']; ?>" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="" class="form-label"> Title </label>
                                        <input type="text" name="title" class="form-control" value="<?php echo $data['title']; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label"> Tag </label>
                                        <input type="text" name="tag" class="form-control" value="<?php echo $data['tag']; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label"> Author </label>
                                        <input type="text" name="author" class="form-control" value="<?php echo $data['author']; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Content</label>
                                        <textarea class="form-control" name="content" rows="10" required>
                                        <?php echo $data['content']; ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100">
                                    Update
                                </button>
                            </div>
                        </form>
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