<?php
  //Hook1: customize-register to define new Cutomizer panels, settings, controls
  function mytheme_customize_register( $wp_customize ) {

    // Background Colour---------------------------------------------------------------------------
    $wp_customize->add_setting( 'cv-backgroundColour' , array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cv-backgroundColourControl', array(
    	'label'      => __( 'Background Colour', 'WWCC Theme' ),
      'description' => 'Change the background Colour (remember to update the text colour too in case the colours clash)',
    	'section'    => 'colors',
    	'settings'   => 'cv-backgroundColour',
    )));


    // Main Text Colour---------------------------------------------------------------------------
    $wp_customize->add_setting( 'cv-textColour' , array(
        'default'   => '#333',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cv-textColourControl', array(
    	'label'      => __( 'Main Text Colour', 'WWCC Theme' ),
      'description' => 'Change the main text colour (mainly affects the "join the club" and "contact us" sections)',
    	'section'    => 'colors',
    	'settings'   => 'cv-textColour',
    )));


    // Title Text Colour---------------------------------------------------------------------------
    $wp_customize->add_setting( 'cv-titleTextColour' , array(
        'default'   => '#fff',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cv-titleTextColourControl', array(
    	'label'      => __( 'Title Text Colour', 'WWCC Theme' ),
      'description' => 'Change the colour of the site title',
    	'section'    => 'header',
    	'settings'   => 'cv-titleTextColour',
    )));


    // Header Colour------------------------------------------------------------------------------
    $wp_customize->add_section( 'header' , array(
        'title'      => __( 'Header', 'WWCC Theme' ),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('cv-headerColour' , array(
      'default' => '#333',
      'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cv-headerColourControl', array(
      'label' =>__('Header Colour', 'WWCC Theme'),
      'description' => 'Change the header background colour',
      'section' => 'header',
      'settings' => 'cv-headerColour',
    )));


    // Header Text Colour------------------------------------------------------------------------------
    $wp_customize->add_setting('cv-headerTextColour' , array(
      'default' => '#fff',
      'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cv-headerTextColourControl', array(
      'label' =>__('Header Text Colour', 'WWCC Theme'),
      'description' => 'Change the header text colour',
      'section' => 'header',
      'settings' => 'cv-headerTextColour',
    )));


    // Logo Image------------------------------------------------------------------------------
    $wp_customize->add_setting('cv-logoImgChanger' , array(
      'default' => '../wp-content/themes/WWCC/images/WWCC_logo_2.png',
      'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cv-logoImgControl', array(
      'label' =>__('Logo', 'WWCC Theme'),
      'description' => 'Change the logo',
      'section' => 'header',
      'settings' => 'cv-logoImgChanger',
    )));


    // Footer Colour------------------------------------------------------------------------------
    $wp_customize->add_section( 'footer' , array(
        'title'      => __( 'Footer', 'WWCC Theme' ),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('cv-footerColour' , array(
      'default' => '#333',
      'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cv-footerColourControl', array(
      'label' =>__('Footer Colour', 'WWCC Theme'),
      'description' => 'Change the footer background colour',
      'section' => 'footer',
      'settings' => 'cv-footerColour',
    )));


    // Footer Text Colour------------------------------------------------------------------------------
    $wp_customize->add_setting('cv-footerTextColour' , array(
      'default' => '#fff',
      'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cv-footerTextColourControl', array(
      'label' =>__('Footer Text Colour', 'WWCC Theme'),
      'description' => 'Change the footer text colour',
      'section' => 'footer',
      'settings' => 'cv-footerTextColour',
    )));


    // Primary Highlight Colour------------------------------------------------------------------------------
    $wp_customize->add_setting('cv-highlightColour' , array(
      'default' => '#FCA044',
      'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cv-highlightColourControl', array(
      'label' =>__('Primary Highlight Colour', 'WWCC Theme'),
      'description' => 'Change the primary colour (used in nav bar hover effects, link hover effects, footer highlight colours etc..)',
      'section' => 'colors',
      'settings' => 'cv-highlightColour',
    )));


    // Secondary Highlight Colour------------------------------------------------------------------------------
    $wp_customize->add_setting('cv-highlightColour2' , array(
      'default' => 'FFED10',
      'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cv-highlightColour2Control', array(
      'label' =>__('Secondary Highlight Colour', 'WWCC Theme'),
      'description' => 'Change the secondary colour',
      'section' => 'colors',
      'settings' => 'cv-highlightColour2',
    )));


    // Button Colour------------------------------------------------------------------------------
    $wp_customize->add_section( 'buttons' , array(
        'title'      => __( 'Buttons', 'WWCC Theme' ),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('cv-buttonColour' , array(
      'default' => '#FCA044',
      'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cv-buttonColourControl', array(
      'label' =>__('Button Primary Colour', 'WWCC Theme'),
      'description' => 'Change the button colour',
      'section' => 'buttons',
      'settings' => 'cv-buttonColour',
    )));


    // Button Hover Colour------------------------------------------------------------------------------
    $wp_customize->add_setting('cv-buttonHoverColour' , array(
      'default' => '#dd8b39',
      'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cv-buttonHoverColourControl', array(
      'label' =>__('Button Hover Colour', 'WWCC Theme'),
      'description' => 'Change the button hover colour (should only be slightly darker than the primary colour)',
      'section' => 'buttons',
      'settings' => 'cv-buttonHoverColour',
    )));


    // Button Select Colour------------------------------------------------------------------------------
    $wp_customize->add_setting('cv-buttonSelectColour' , array(
      'default' => '#f9c590',
      'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cv-buttonSelectColourControl', array(
      'label' =>__('Button Select Colour', 'WWCC Theme'),
      'description' => 'Change the button select colour (should only be slightly lighter than the primary colour)',
      'section' => 'buttons',
      'settings' => 'cv-buttonSelectColour',
    )));

    // Button Text Colour------------------------------------------------------------------------------
    $wp_customize->add_setting('cv-buttonTextColour' , array(
      'default' => '#212529',
      'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cv-buttonTextColourControl', array(
      'label' =>__('Button Text Colour', 'WWCC Theme'),
      'description' => 'Change the button text colour',
      'section' => 'buttons',
      'settings' => 'cv-buttonTextColour',
    )));

  }//end mytheme_customize_register

  add_action( 'customize_register', 'mytheme_customize_register' );

  //Hook2: wp_head to output custom-generated CSS
   function mytheme_customize_css()
   {
     ?> <!-- end initial php open to allow for style tag -->
      <style type="text/css">

      /* Background and Text Colour Control */
      body, .woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea, .form-control {
              background-color: <?php echo get_theme_mod('cv-backgroundColour','#ffffff'); ?>!important;
              color: <?php echo get_theme_mod('cv-textColour','#333'); ?>!important;
           }

     /* Header Title Colour Control */
     .cv-title{
               color: <?php echo get_theme_mod('cv-titleTextColour', '#fff'); ?>!important ;
             }

     /* Header Background Colour Control */
     .cv-headerContent{
               background-color: <?php echo get_theme_mod('cv-headerColour', '#333'); ?>!important ;
             }

     /* Header Text Colour Control */
     .cv-topMenu, .cv-burgerBtn, .cv-burgerClose, .cv-burgerMenu .menu-item, .cv-logoText{
               color: <?php echo get_theme_mod('cv-headerTextColour', '#fff'); ?>!important ;
             }

     /* Logo Control */
     .cv-logoImg{
       background-image: url(<?php echo get_theme_mod('cv-logoImgChanger'); ?> ;)
     }

     /* Footer Background Colour Control */
     .cv-footer, .cv-searchBox{
               background-color: <?php echo get_theme_mod('cv-footerColour', '#333'); ?>!important ;
             }

     /* Footer Text Colour Control */
     .cv-footer, .cv-searchBox{
               color: <?php echo get_theme_mod('cv-footerTextColour', '#fff'); ?>!important ;
             }

     /* Highlight Colour Control */
     .cv-topMenu .menu-item a:hover, .select2-container--default .select2-results__option--highlighted[aria-selected], .select2-container--default .select2-results__option--highlighted[data-selected]{
               background-color: <?php echo get_theme_mod('cv-highlightColour', '#FCA044'); ?>!important ;
             }
     .cv-footerDetails{
              border-left: 3px solid <?php echo get_theme_mod('cv-highlightColour', '#FCA044'); ?>!important ;
            }
     .cv-postAttr a:hover, .cv-sampleAttr a:hover, .cv-burgerMenu .menu-item a:hover{
               color: <?php echo get_theme_mod('cv-highlightColour', '#FCA044'); ?>!important ;
             }

     /* Secondary Highlight Colour Control */
     .cv-sampleBody{
       border-color: <?php echo get_theme_mod('cv-highlightColour2', '#FFED10'); ?>!important ;
     }

     /* Button Colour Control */
     .cv-postBack, .cv-sampleLink, .btn-primary, .woocommerce button.button.alt, .woocommerce a.button, .woocommerce a.button.alt, .cv-searchBtn{
               background-color: <?php echo get_theme_mod('cv-buttonColour', '#FCA044'); ?>!important ;
               border-color: <?php echo get_theme_mod('cv-buttonColour', '#FCA044'); ?>!important ;
               color: <?php echo get_theme_mod('cv-buttonTextColour', '#212529'); ?>!important ;
             }
     .cv-postBack:hover, .cv-sampleLink:hover, .btn-primary:hover, .woocommerce button.button.alt:hover, .woocommerce a.button:hover, .woocommerce a.button.alt:hover, .cv-searchBtn:hover{
               background-color: <?php echo get_theme_mod('cv-buttonHoverColour', '#dd8b39'); ?>!important ;
               border-color: <?php echo get_theme_mod('cv-buttonHoverColour', '#dd8b39'); ?>!important ;
               color: <?php echo get_theme_mod('cv-buttonTextColour', '#212529'); ?>!important ;
             }
     .cv-postBack:not(:disabled):not(.disabled):active, .cv-postBack:not(:disabled):not(.disabled).active,
     .show, .cv-sampleLink:not(:disabled):not(.disabled):active, .cv-sampleLink:not(:disabled):not(.disabled).active,
     .show, .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
     .show > .btn-primary.dropdown-toggle, .woocommerce button.button.alt:not(:disabled):not(.disabled):active, .woocommerce button.button.alt:not(:disabled):not(.disabled).active,
     .show > .woocommerce button.button.alt.dropdown-toggle, .woocommerce a.button.alt:not(:disabled):not(.disabled):active, .woocommerce a.button.alt:not(:disabled):not(.disabled).active,
     .show > .woocommerce a.button.alt.dropdown-toggle{
               background-color: <?php echo get_theme_mod('cv-buttonSelectColour', '#f9c590'); ?>!important ;
               border-color: <?php echo get_theme_mod('cv-buttonSelectColour', '#f9c590'); ?>!important ;
               color: <?php echo get_theme_mod('cv-buttonTextColour', '#212529'); ?>!important ;
             }


    </style>
  <?php //reopen php tag and leave unclosed
  }
  add_action( 'wp_head', 'mytheme_customize_css');
