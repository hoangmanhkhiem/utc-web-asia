<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <base href="<?= bloginfo('wpurl'); ?>/">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo THEME_URL ?>/assets/image/logoutc.png" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php echo THEME_URL ?>/assets/image/logoutc.png">
  <link rel="stylesheet" href="<?php echo THEME_URL ?>/assets/style.css?v=<?php echo time() ?>">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.8.162/pdf.min.js"
    integrity="sha512-9Wd08apcJEwm8g3lBTg1UW/njdN0iuuOVWKpyinK3uA7ISAE5PmEZ4y8bZYTXVOE3tlt7aFlCBBLmLt5cUxe2Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link href="<?php echo THEME_URL ?>/assets/dist/css/bootstrap.min.css?v=<?php echo time() ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <header id="Top_bar">
    <div class="container">
      <div class="column one">
        <div class="top_bar_left clearfix">
          <img src="<?php echo THEME_URL ?>/assets/image/banner.png" height="auto" alt="">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
              <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <?php
                  wp_nav_menu(
                      array(
                          'theme_location' => 'primary',
                          'menu_class' => '',
                          'items_wrap' => '<ul class="navbar-nav %2$s">%3$s</ul>',
                          'add_li_class'  => 'nav-item',
                          'link_class'   => 'nav-link active-link-default'
                      )
                  );
                  ?>

              </div>
            </div>
          </nav>
          <div class="burgers">
            <span style="font-size:30px;cursor:pointer" class="burgers_open" onclick="openNav()">&#9776;</span>
          </div>
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <?php
                  wp_nav_menu(
                      array(
                          'theme_location' => 'primary',
                          'menu_class' => '',
                          'items_wrap' => '<ul class="navbar-nav %2$s">%3$s</ul>',
                          'add_li_class'  => 'nav-item',
                          'link_class'   => 'nav-link active-link-default'
                      )
                  );
                  ?>
          </div>
          <script>
          var page = window.location.pathname.split("/").pop();
          var navLinks = document.querySelectorAll(".nav-link");
          if (page === "") {
            page = "index.php";
          }
          navLinks.forEach((link) => {
            if (link.href.includes(page)) {
              link.classList.add("active-link");
            } else {
              link.classList.add("active-link-default");
            }
          });
          </script>
        </div>
      </div>
    </div>
  </header>