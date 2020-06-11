<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Gentium+Book+Basic&family=Raleway&display=swap" rel="stylesheet">
    <title></title>
    <?php wp_head(); ?><!-- notice the wordpress admin bar on top-->
  </head>
  <body>
    <header class="cv-header">

      <div class="cv-headerImg">
        <h1 class="cv-title"> <?php bloginfo( 'name' ); ?> </h1>
      </div>

      <div class="cv-headerContent">

        <div class="cv-logo">
          <a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/wwcc/home">
            <img class="cv-logoImg" src="../wp-content/themes/wwcc/images/WWCC_logo.png" alt="">
            <img class="cv-logoImg" src="wp-content/themes/wwcc/images/WWCC_logo.png" alt="">
            <p class="cv-logoText">
              Wellington
              <br>
              Welsh Corgi
              <br>
              Club
            </p>
          </a>
        </div>
        <div class="cv-menuContainer">
          <?php
          wp_nav_menu(
            array(
            'theme_location' => 'top-menu',
            'menu' => 'primary',
            'menu_class' => 'cv-topMenu'
            )
          );

          /**
           * Register a custom menu page.
           */
          add_action( 'primary', 'wpdocs_register_my_custom_menu_page' );
        ?>
        </div>
        <div class="bruh">
          <div class="cv-sidebarButton">
            &#9776;
          </div>
          <div class="cv-sidebarClose">
            &times;
          </div>
        </div>
      </div> <!-- end header content -->
    </header>
