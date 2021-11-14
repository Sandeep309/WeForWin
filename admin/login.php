<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body class="bg-light">
    <!-- Main Body -->
    <section class="container-fluid my-5">
        <div class="container divCenter">
            <div class="h1 fw-bolder text-center mb-3">WE FOR WIN</div>
            <div class="card border-0 mx-auto shadow-sm" style="max-width: 30rem;">
                <div class="card-body">
                    <!-- Massage -->
                    <div class="h1 mb-4 text-center fw-light">Login</div>
                    <?php
                    if (isset($_SESSION['msgRed'])) {
                        echo "<p class='card-text text-danger'>" . $_SESSION['msgRed'] . "</p>";
                        unset($_SESSION['msgRed']);
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['msgGreen'])) {
                        echo "<p class='card-text text-success'>" . $_SESSION['msgGreen'] . "</p>";
                        unset($_SESSION['msgGreen']);
                    }
                    ?>
                    <form name="loginForm" action="process/auth/loginprocess.php" method="post" onsubmit="return validateLoginForm()">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input curserPoint" id="showPassword">
                            <label class="form-check-label curserPoint" for="showPassword">
                                Show password
                            </label>
                        </div>
                        <button type="submit" class="btn btnGreen">Login</button>
                    </form>
                </div>
                <div class="card-footer bg-transparent text-center">
                    <!-- <a href="signup.php" class="small text-decoration-none text-secondary hoverGreen">
                        Need an account? Sign up!
                    </a> -->
                    <a href="../index.php" class="small text-decoration-none text-secondary hoverGreen">
                        Back to home
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script src="bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/web.js"></script>
    <script src="js/auth.js"></script>
</body>

</html>