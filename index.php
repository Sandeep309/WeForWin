<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>We For Win</title>
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
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
  <figure class="container-fluid homeHeadImg">
    <div class="contaner divCenter">
      <h1 class="text-light fw-bold">Home</h1>
    </div>
  </figure>

  <!-- Main Body -->
  <main class="container-fluid mt-5">
    <!-- Recent Blogs -->
    <section class="container my-5">
      <!-- Blog Title -->
      <div class="text-center my-5">
        <h2 class="text-center fw-bold text-uppercase">Recent Blogs</h2>
        <img src="img/lines.svg" class="img-fluid" alt="" />
      </div>

      <!-- Blog Contant -->
      <div class="row">
        <div class="col-md-6 mb-3">
          <div class="card border-0 curserPoint">
            <div class="card-body border-bottom ">
              <a href="blogs/blog.php" class="text-decoration-none text-dark hoverGreen">
                <p class="h3 card-title fw-bold">
                  Man must explore, and this is exploration at its greatest
                </p>
                <p class="h4 card-text fw-light">
                  Problems look mighty small from 150 miles up
                </p>
                <p class="loraFont fst-italic text-muted">
                  Posted by <span class="text-dark">Sandeep</span> on July 17,
                  2021
                </p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="card border-0 curserPoint">
            <div class="card-body border-bottom ">
              <a href="blogs/blog.php" class="text-decoration-none text-dark hoverGreen">
                <p class="h3 card-title fw-bold">
                  Man must explore, and this is exploration at its greatest
                </p>
                <p class="h4 card-text fw-light">
                  Problems look mighty small from 150 miles up
                </p>
                <p class="loraFont fst-italic text-muted">
                  Posted by <span class="text-dark">Sandeep</span> on July 17,
                  2021
                </p>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-3 text-end">
        <button class="btn btnGreen shadow-none">
          <span class="d-flex align-items-center gap-2">OLDER POST<i class="fas fa-long-arrow-alt-right"></i>
          </span>
        </button>
      </div>
    </section>

    <!-- Popular Blogs -->
    <section class="container my-5">
      <!-- Blog Title -->
      <div class="text-center my-5">
        <h2 class="text-center fw-bold text-uppercase">Popular Blogs</h2>
        <img src="img/lines.svg" class="img-fluid" alt="" />
      </div>

      <!-- Blog Contant -->
      <div class="row">
        <div class="col-md-6 mb-3">
          <div class="card border-0 curserPoint">
            <div class="card-body border-bottom ">
              <a href="blogs/blog.php" class="text-decoration-none text-dark hoverGreen">
                <p class="h3 card-title fw-bold">
                  Man must explore, and this is exploration at its greatest
                </p>
                <p class="h4 card-text fw-light">
                  Problems look mighty small from 150 miles up
                </p>
                <p class="loraFont fst-italic text-muted">
                  Posted by <span class="text-dark">Sandeep</span> on July 17,
                  2021
                </p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="card border-0 curserPoint">
            <div class="card-body border-bottom ">
              <a href="blogs/blog.php" class="text-decoration-none text-dark hoverGreen">
                <p class="h3 card-title fw-bold">
                  Man must explore, and this is exploration at its greatest
                </p>
                <p class="h4 card-text fw-light">
                  Problems look mighty small from 150 miles up
                </p>
                <p class="loraFont fst-italic text-muted">
                  Posted by <span class="text-dark">Sandeep</span> on July 17,
                  2021
                </p>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-3 text-end">
        <button class="btn btnGreen shadow-none">
          <span class="d-flex align-items-center gap-2">VIEW MORE<i class="fas fa-long-arrow-alt-right"></i>
          </span>
        </button>
      </div>
    </section>

    <!-- Video Glance -->
    <section class="container my-5">
      <!-- Blog Title -->
      <div class="text-center my-5">
        <h2 class="text-center fw-bold text-uppercase">Video Glance</h2>
        <img src="img/lines.svg" class="img-fluid" alt="" />
      </div>
      <!-- Video Content -->
      <div class="row">
        <?php
        $videoDetails = array(
          "I believe every human has a finite number of heartbeats." => "https://www.youtube.com/embed/oqFn6AHoJZQ",
          "I don't intend to waste any of mine." => "https://www.youtube.com/embed/oqFn6AHoJZQ",
          "Human has a finite number of heartbeats." => "https://www.youtube.com/embed/oqFn6AHoJZQ",
        );
        foreach ($videoDetails as $vName => $vSrc) : ?>

          <div class="col-md-6 col-lg-4 mb-3">
            <div class="card border-0">
              <iframe class="card-img-top" src="<?php echo $vSrc; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <div class="card-body">
                <p><?php echo $vName; ?></p>
              </div>
            </div>
          </div>

        <?php
        endforeach;
        ?>

      </div>
    </section>

    <!-- Who We Are -->
    <section class="container my-5">
      <!-- About Title -->
      <div class="text-center my-5">
        <h2 class="text-center fw-bold text-uppercase">About Us</h2>
        <img src="img/lines.svg" class="img-fluid" alt="" />
      </div>
      <!-- About Contant -->
      <div class="row">
        <div class="col-lg-6 mb-3">
          <div class="mx-auto mx-lg-0 w-75">
            <img src="img/undraw_Partying_re_at7f.svg" class="img-fluid" alt="" />
          </div>
        </div>
        <div class="col-lg-6">
          <p class="h2">Wo We Are</p>
          <p class="h5 mb-3 lh-base">
            I believe every human has a finite number of heartbeats. I don't
            intend to waste any of mine. I believe every human has a finite
            number of heartbeats. I don't intend to waste any of mine. I
            believe every human has a finite number of heartbeats. I don't
            intend to waste any of mine. I believe every human has a finite
            number of heartbeats. I don't intend to waste any of mine. I
            believe every human has a finite number of heartbeats.
          </p>
          <button class="btn btnGreen shadow-none">Find more</button>
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

  <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/web.js"></script>
</body>

</html>