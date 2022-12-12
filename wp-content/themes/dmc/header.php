<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mingrand</title>
    
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fontawesome6/css/fontawesome.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fontawesome6/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/slick/slick.css">
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css?v=<?= rand(); ?>" />
  </head>
  <body <?php body_class(); ?>>
    <div class="wrapper">
      <div class="banner">
        <?php if(is_home()):?>  
          <div id="header" class="container">
            <div class="header-top row justify-content-between">
              <div class="header-top-left col-xl-8 col-12 row justify-content-center">
                <div class="header-location col-12 col-xl-5 col-md-auto">
                  <i class="fa-solid fa-location-dot"></i>
                  <span>420 Love Sreet 133/2 Mirpur City, Dhaka</span>
                </div>
                <div class="header-phone col-12 col-xl col-md-auto">
                  <i class="fa-solid fa-phone"></i>
                  <span>+(066) 19 5017 800 628</span>
                </div>
                <div class="header-mail col-12 col-xl col-md-auto">
                  <i class="fa-solid fa-envelope"></i>
                  <span>info.contact@gmail.com</span>
                </div>
              </div>  
              <div class="header-top-right row col-xl-4 col-md-12 justify-content-start justify-content-md-center justify-content-xl-end">
                <?php 
                  if (isset($_SESSION['username']) && $_SESSION['username']){
                      echo "<div class='d-flex'><a href='profile.php'>{$_SESSION['username']}</a>&nbsp&nbsp&nbsp<a href='logout.php'>Logout</a></div>";
                    } else {
                      echo "<div class='col-auto row'><a class='col' href='./signup.php'>Register</a><a class='col' href='./login.php'>Login</a>
                      <p class='col brick'>|</p></div><div class='col-auto'><div class='d-flex flex-row'>
                      <i class='fa-brands fa-facebook-f'></i><i class='fa-brands fa-twitter'>
                      </i><i class='fa-brands fa-instagram'></i><i class='fa-brands fa-skype'></i></div></div>";
                    }
                ?>
                
              </div>
            </div>
            <?php get_template_part( 'template', 'menu' ); ?>
          </div>
          <div class="slider-text">
            <p class="text-center">Lorem ipsum dolor sit consectetur adipisicing elit, sed do eius</p>
            <div class="container">
              <div class="mw-900 text-center">
                <h1>The Best Way To Find Your Perfect Home</h1>
              </div>
              <div class="row">
                <div class="col-md-1"></div>
                  <form class="col-md-10 search-selector row" action="./category/house" method="get">
                    <div class="col-md-3 col-4">
                      <select name="location" class="form-control form-select">
                        <option value="">Location</option>
                        <option value="Ha Noi">Ha Noi</option>
                        <option value="NewYork">NewYork</option>
                        <option value="London">London</option>
                      </select>
                    </div>
                    <div class="col-md-3 col-4">
                      <select name="type" id="" class="form-control form-select">
                        <option value=""> Type</option>
                        <option value="Villa">Villa</option>
                        <option value="Apartment">Apartment</option>
                      </select>
                    </div>
                    <div class="col-md-3 col-4">
                      <select name="price" id="price" class="form-control form-select">
                        <option value="">Price</option>
                        <option value="<50K"> 0-50K</option>
                        <option value="50K-100K">50K-100K</option>
                        <option value=">100K">100K-1M</option>
                      </select>
                    </div>
                    <div class="col-md-3 col-12 text-center">
                    <button class="search-btn d-block w-100 text-center btn btn-success">
                      <i class="bi bi-search"></i>
                      <span>SEARCH</span>
                    </button>
                  </form>
                </div>
                <div class="col-md-1"></div>
              </div>
            </div>
          
        <?php else:?>
        <div id="header" class="container">
          <?php get_template_part( 'template', 'menu' ); ?>
        </div>
        <?php if(is_single() || is_page() || is_category()):
          $page_title = is_category() ? get_cat_name(get_query_var('cat')) : get_the_title();
          ?>
          <div class="contact-us text-center">
            <h1><?= $page_title; ?></h1>
            <div class="breadcrump d-flex justify-content-center">
                <a href="<?= home_url(); ?>">
                    <span>Home</span>
                </a>
                <i class="fa-solid fa-angle-right"></i>
                <h5><?= $page_title; ?></h5>
            </div>
          </div>
        <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>