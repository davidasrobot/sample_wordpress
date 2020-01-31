<?php
  /*
  * Template Name: My Home
  */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Noto+Serif|Libre+Baskerville&display=swap" rel="stylesheet"> 

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <!-- FONTAWESOME -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/fontawesome-free/css/all.min.css">
  <!-- FLAGICON -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/flag-icon-css-master/css/flag-icon.min.css">
  <!-- SLICK-CAROUSEL -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/slick-1.8.1/slick/slick.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/slick-1.8.1/slick/slick-theme.css">

  <!-- STYLE CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

  <!-- JQUERY -->
  <script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery/jquery.min.js"></script>
  <!-- BOOTSTRAP JS -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>
  <!-- FONTAWESOME JS -->
  <script src="<?php echo get_template_directory_uri(); ?>/vendor/fontawesome-free/js/all.min.js"></script>
  <!-- SLICK CAROUSEL -->
  <script src="<?php echo get_template_directory_uri(); ?>/vendor/slick-1.8.1/slick/slick.min.js"></script>

  <!-- INDEX AND CUSTOM JS -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>
  

  <title>ÉLISÉE</title>
</head>
<body>
  <section id="header" class="fixed-top">
    <div id="head-nav" class="bg-dark">
      <div id="r-pad" class="container text-white py-3">
        <div class="row">
          <ul class="mr-auto mb-0">
            <i class="fas fa-headset"></i>
            +62-8777-0858-889
          </ul>
          <ul class="ml-auto mb-0 row">
            <div class="mx-3">
              <a href="#" class="white-link text-decoration-none"><i class="fas fa-shopping-cart"></i>
              CART</a>
            </div>
            <div class="mx-3">
              <a href="#" class="white-link text-decoration-none"><i class="far fa-user"></i>
              LOGIN/SIGNUP</a>
            </div>
            <div class="mx-3">
              <div class="dropdown">
                <button class="btn p-0 dropdown-toggle text-white" type="button" id="langMenuBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="vertical-align: unset;">
                  <span class="flag-icon flag-icon-us flag-icon-squared" style="background-size: cover; width:2rem;border-radius: .2rem;"></span> ENG
                </button>
                <div class="dropdown-menu" aria-labelledby="langMenuBtn">
                  <a class="dropdown-item lang-id" href="#"><span class="flag-icon flag-icon-id flag-icon-squared" style="background-size: cover; width:2rem;border-radius: .2rem;"></span> ID</a>
                  <a class="dropdown-item lang-us" href="#"><span class="flag-icon flag-icon-us flag-icon-squared" style="background-size: cover; width:2rem;border-radius: .2rem;"></span> US</a>
                </div>
              </div>
              
            </div>
          </ul>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
      <div class="container c-container">
        <a class="navbar-brand font-1 mr-5" href="#"><i>ÉLISÉE</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link mx-2 font-size-small" href="#">DIAMONDS <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 font-size-small" href="#">ENGAGEMENT RINGS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 font-size-small" href="#">WEDDING RINGS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 font-size-small" href="#">GEMSTONES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 font-size-small" href="#">ABOUT US</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 ml-auto">
            <!-- Actual search box -->
            <div class="form-group has-search">
              <span class="fa fa-search form-control-feedback text-white"></span>
              <input type="text" class="form-control" id="search" placeholder="Search here...">
            </div>
          </form>
        </div>
      </div>
    </nav>
  </section>

<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner font-2">
      <div class="carousel-item active">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carousel/carousel-1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <span class="top-stripe"></span>
          <h2><b><i>Counting Days</i></b></h2>
          <h2><b><i>to Happily Ever After</i></b></h2>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carousel/carousel-2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <span class="top-stripe"></span>
          <h2><b><i>Counting Days</i></b></h2>
          <h2><b><i>to Happily Ever After</i></b></h2>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carousel/carousel-3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <span class="top-stripe"></span>
          <h2><b><i>Counting Days</i></b></h2>
          <h2><b><i>to Happily Ever After</i></b></h2>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="best-seller">
  <div class="container">
    <div class="section-header text-center my-5 py-3">
      <h4 class="text-dark"><b>MEET OUR</b></h4>
      <h1 class="font-2 header-font">Best Seller</h1>
    </div>
    <div class="content-display my-5 py-3">
      <div class="row text-center">
        <div class="col-md-3">
          <img src="https://picsum.photos/300/300" alt="..." class="img-thumbnail">
          <div class="caption">
            <h5 class="my-2 py-3 font-weight-bold text-uppercase">emerald ring</h5>
            <p class="text-uppercase">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum quam distinctio voluptatibus odit quia, laborum quae vero inventore quod fugiat ea ut asperiores magni recusandae temporibus blanditiis sit, cumque ullam!</p>
          </div>
        </div>
        <div class="col-md-3">
          <img src="https://picsum.photos/300/300" alt="..." class="img-thumbnail">
          <div class="caption">
            <h5 class="my-2 py-3 font-weight-bold text-uppercase">king ring</h5>
            <p class="text-uppercase">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum quam distinctio voluptatibus odit quia, laborum quae vero inventore quod fugiat ea ut asperiores magni recusandae temporibus blanditiis sit, cumque ullam!</p>
          </div>
        </div>
        <div class="col-md-3">
          <img src="https://picsum.photos/300/300" alt="..." class="img-thumbnail">
          <div class="caption">
            <h5 class="my-2 py-3 font-weight-bold text-uppercase">twin ring</h5>
            <p class="text-uppercase">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum quam distinctio voluptatibus odit quia, laborum quae vero inventore quod fugiat ea ut asperiores magni recusandae temporibus blanditiis sit, cumque ullam!</p>
          </div>
        </div>
        <div class="col-md-3">
          <img src="https://picsum.photos/300/300" alt="..." class="img-thumbnail">
          <div class="caption">
            <h5 class="my-2 py-3 font-weight-bold text-uppercase">luxurious ring</h5>
            <p class="text-uppercase">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum quam distinctio voluptatibus odit quia, laborum quae vero inventore quod fugiat ea ut asperiores magni recusandae temporibus blanditiis sit, cumque ullam!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="favorite">
  <div class="container">
    <div class="section-header text-center my-5 py-3">
      <h4 class="text-dark"><b>Creator's</b></h4>
      <h1 class="font-2 header-font">Favourite Ring</h1>
    </div>
    <div class="content-display">
      <div class="col p-5">
        <div class="row">
          <img class="mr-auto" src="https://picsum.photos/720/430" alt="">
        </div>
        <div class="content-body-right bg-white">
          <div class="p-4">
          <h5 class="text-uppercase"><b>Emerald Ring</b></h5>
          <ul class="text-uppercase items">
            <li class="item-list">metal - 18k white gold</li>
            <li class="item-list">carat weight - 0.644 (IDM-0.304;65DM-0.340)</li>
            <li class="item-list">gold weight - 3.04 gram</li>
          </ul>
          <p class="text-uppercase item-desc">purchase includes one-time free resizing, engraving, and our jewelery box</p>
          <a href="#" class="item-link">READ MORE</a>
          </div>
        </div>
      </div>
      <div class="col p-5">
        <div class="row">
          <img class="ml-auto" src="https://picsum.photos/720/430" alt="">
        </div>
        <div class="content-body-left bg-white">
          <div class="p-4">
          <h5 class="text-uppercase"><b>Emerald Ring</b></h5>
          <ul class="text-uppercase items">
            <li class="item-list">metal - 18k white gold</li>
            <li class="item-list">carat weight - 0.644 (IDM-0.304;65DM-0.340)</li>
            <li class="item-list">gold weight - 3.04 gram</li>
          </ul>
          <p class="text-uppercase item-desc">purchase includes one-time free resizing, engraving, and our jewelery box</p>
          <a href="#" class="item-link">READ MORE</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<section id="visit-store" class="my-3">
  <div class="container text-center py-6 text-white w-50">
    <div class="py-3">
      <h4 class="text-uppercase">view all our</h4>
      <h1 class="font-2">Gallery Store</h1>
    </div>
    <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum neque nemo saepe vero, recusandae sit sequi magnam reprehenderit vitae voluptates? Nisi, nesciunt quia. Vitae et soluta ipsam. Magni, eveniet similique!</p>
    <button class="btn btn-secondary my-3">SHOP NOW</button>
  </div>
</section>

<section id="latest-product" class="my-3">
  <div class="container">
    <div class="section-header text-center my-5 py-3">
      <h4 class="text-dark"><b>DON'T FORGET TO SEE</b></h4>
      <h1 class="font-2 header-font">Our Latest Product</h1>
    </div>
    <div class="content-display py-3 my-3">
      <div class="row text-center">

        <?php for ($i=0; $i < 6; $i++) { ?>
        <div class="col-4 py-3">
          <img src="https://picsum.photos/300/300" alt="..." class="">
          <div class="caption">
            <h5 class="my-2 py-3 font-weight-bold text-uppercase">Emerald ring</h5>
            <p class="text-uppercase">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum quam distinctio voluptatibus odit quia, laborum quae vero inventore quod fugiat ea ut asperiores magni recusandae temporibus blanditiis sit, cumque ullam!</p>
          </div>
        </div>
        <?php } ?>

      </div>
    </div>
  </div>
</section>

<section id="video">
  <div class="container">
    <h1 class="header-font font-1"><b>0.70 F VS1 GIA</b></h1>
    <h4>2020, Jakarta, Indonesia</h4>
    <h4 class="text-secondary">
      Beautiful 0.70 F VS1 GIA certificated diamond set with out "Amour" setting. <br>
      Purchase includes one-time free resizing, engraving and our jewelery box.
    </h4>
    <div class="py-5">
      <div class="video-wrapper">
        <video src="<?php echo get_template_directory_uri(); ?>/assets/video/videoplayback2.mp4">
        </video>
      </div>
    </div>
  </div>
</section>

<section id="carousel-2" class="my-5">
  <div class="container-fluid">
    <div class="row" style="background-color: #ede4c5">
      <div class="col-md-6 p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators top-left-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner font-2">
            <div class="carousel-item active">
              <img src="https://picsum.photos/640/640" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/640/640" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/640/640" class="d-block" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 p-5">
        <h4 class="font-3 w-75">We are beyond grateful to be a part of your special moment</h4>
        <p class="mx-3 w-75 py-3 mb-3 text-secondary">We loved working with calvin to find audrey's dream ring. After much consideration, Calvin opted for an Oval-shaped diamond with six-prong halo setting platinum. A fantastic choice indeed!</p>
        <a href="#" class="item-link text-uppercase mx-3">read the story</a>
        <div class="mw-125 p-0 position-absolute tr-carousel">
        <div class="example">
            <?php for ($i=0; $i < 15; $i++) { ?>
              <div>
                <img class="" src="https://picsum.photos/200/200" alt="">
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="quotes">
  <div class="container">
    <div class="bg-white text-center p-7-0">
      <blockquote class="blockquote w-75 mx-auto">
        <h1 class="font-2 fs-5">"Ever thine, ever mine, ever ours."</h1>
        <footer class="blockquote-footer text-dark">Ludwig Van Beethoven</footer>
      </blockquote>
    </div>
  </div>
</section>

<section id="footer" class="bg-dark text-white">
  <div class="container py-3">
    <div class="my-5">
      <h1 class="font-1">ÉLISÉE</h1>
    </div>
    <div class="my-2 py-3 fnav-border">
      <ul class="nav justify-content-center">
        <li class="text-uppercase nav-item mx-md-3 px-md-5">
          <a href="#" class="nav-link white-link active">diamonds</a>
        </li>
        <li class="text-uppercase nav-item mx-md-3 px-md-5">
          <a href="#" class="nav-link white-link">engagement ring</a>
        </li>
        <li class="text-uppercase nav-item mx-md-3 px-md-5">
          <a href="#" class="nav-link white-link">wedding ring</a>
        </li>
        <li class="text-uppercase nav-item mx-md-3 px-md-5">
          <a href="#" class="nav-link white-link">Gemstone</a>
        </li>
      </ul>
    </div>
    <div class="row py-5 fc-border">
      <div class="col-md-3 text-center">
        <div>
          <img class="download-store" src="<?php echo get_template_directory_uri(); ?>/assets/images/applestore.svg" alt="">
        </div>
        <div>
          <img class="download-store" src="<?php echo get_template_directory_uri(); ?>/assets/images/googleplay.svg" alt="">
        </div>
      </div>
      <div class="col-md-3 px-5">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link white-link active" href="#">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link white-link" href="#">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link white-link" href="#">REVIEW</a>
          </li>
          <li class="nav-item">
            <a class="nav-link white-link" href="#">GALERY</a>
          </li>
        </ul>
      </div>
      <div class="col-md-3 px-5">
        <h5>Address</h5>
        <p>Jl. Nama Jalan 1, Jakarta Selatan, Jakarta, Indonesia. 12345</p>
        <h5>Telephone</h5>
        <p>+62-8777-0858-889</p>
      </div>
      <div class="col-md-3 px-5">
        <h5>Find Us</h5>
        <h5>
          <a href="#" class="white-link mr-1"><i class="fab fa-facebook"></i></a>
          <a href="#" class="white-link mr-1"><i class="fab fa-linkedin"></i></a>
          <a href="#" class="white-link mr-1"><i class="fab fa-twitter"></i></a>
          <a href="#" class="white-link mr-1"><i class="fab fa-youtube"></i></a>
        </h5>
      </div>
    </div>
    <div class="py-3 text-center">
      Copyright &copy; 2020 ÉLISÉE All Rights Reserved.
    </div>
  </div>
</section>

</body>
</html>