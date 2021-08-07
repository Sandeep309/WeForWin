<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
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
  <!-- Header -->
  <header class="container-fluid p-0 shadow-sm sticky-top">
    <!-- Navigation -->
    <?php
    include('./include/menu.php');
    ?>
  </header>

  <!-- Header image -->
  <figure class="container-fluid contactHeadImg">
    <div class="contaner divCenter">
      <h1 class="text-light fw-bold">Contact</h1>
    </div>
  </figure>

  <!-- Main Body -->
  <main class="container-fluid mt-5">
    <section class="container my-5">
      <!-- Blog Title -->
      <div class="text-center my-5">
        <h2 class="text-center fw-bold text-uppercase">Get In Touch</h2>
        <img src="img/lines.svg" class="img-fluid" alt="" />
      </div>
      <div class="row">
        <div class="col-md-6 d-none d-md-block">
          <img src="img/undraw_Letter_re_8m03.svg" class="w-50" alt="" />
        </div>
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
              <div id="emailHelp" class="form-text">
                We'll never share your email with anyone else.
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" />
            </div>
            <div class="mb-3">
              <label for="forMassage" class="form-label">Massage</label>
              <textarea class="form-control" name="" id="" cols="3" rows="2"></textarea>
            </div>
            <button type="submit" class="btn btnGreen">Send</button>
          </form>
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