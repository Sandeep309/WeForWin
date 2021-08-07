<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="bootstrap-5.1.0-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body class="bg-light">
    <!-- Main Body -->
    <section class="container-fluid my-5">
        <div class="container divCenter">
            <div class="h1 fw-bolder text-center mb-3">WE FOR WIN</div>
            <div class="card border-0 my-auto mx-auto shadow-sm" style="max-width: 30rem;">
                <div class="card-body">
                    <div class="h1 mb-4 text-center fw-light">Signup</div>
                    <form action="" class="">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" placeholder="name">
                            <label for="name">Full name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="password" placeholder="name@example.com">
                            <label for="password">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                Show password
                            </label>
                        </div>
                        <button class="btn btnGreen w-100">Create Account</button>
                    </form>
                </div>
                <div class="card-footer bg-transparent text-center">
                    <a href="login.php" class="small text-decoration-none text-secondary hoverGreen">
                        Have an account? Go To Login
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script src="bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/web.js"></script>
</body>

</html>