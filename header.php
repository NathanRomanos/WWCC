<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Gentium+Book+Basic&family=Raleway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cce07ad146.js" crossorigin="anonymous"></script>
    <title></title>
    <?php wp_head(); ?><!-- notice the wordpress admin bar on top-->
  </head>
  <body>

    <?php $randHeader = rand(1,5);
    echo("<script>console.log('$randHeader');</script>");
    ?>

    <header class="cv-header">

      <div class="cv-headerImg <?php if ($randHeader === 1){echo "img1";}elseif ($randHeader === 2){echo "img2";}elseif ($randHeader === 3){echo "img3";}elseif ($randHeader === 4){echo "img4";}else{echo "img5";}?> ">
        <h1 class="cv-title"> <?php if (get_the_archive_title() === 'Archives: News'){echo 'News';}else{the_title();} ?> </h1>
      </div>

      <div class="cv-headerContent">

        <div class="cv-logo">
          <a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/wwcc/">
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
