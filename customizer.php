<?php
  //Hook1: customize-register to define new Cutomizer panels, settings, controls
  function mytheme_customize_register( $wp_customize ) {

    // Background Colour---------------------------------------------------------------------------
    $wp_customize->add_setting( 'cv-backgroundColour' , array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cv-backgroundColourControl', array(
    	'label'      => __( 'Background Colour', 'Con-Vol' ),
      'description' => 'Change the background Colour',
    	'section'    => 'colors',
    	'settings'   => 'cv-backgroundColour',
    )));


    // Title Text Colour---------------------------------------------------------------------------
    $wp_customize->add_setting( 'cv-titleTextColour' , array(
        'default'   => '#fff',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cv-titleTextColourControl', array(
    	'label'      => __( 'Title Text Colour', 'Con-Vol' ),
      'description' => 'Change the colour of the site title',
    	'section'    => 'colors',
    	'settings'   => 'cv-titleTextColour',
    )));


    // Header Colour------------------------------------------------------------------------------
    $wp_customize->add_section( 'header' , array(
        'title'      => __( 'Header', 'Con-Vol' ),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('cv-headerColour' , array(
      'default' => '#333',
      'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cv-headerColourControl', array(
      'label' =>__('Header Colour', 'Con-Vol'),
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
      'label' =>__('Header Text Colour', 'Con-Vol'),
      'description' => 'Change the header text colour',
      'section' => 'header',
      'settings' => 'cv-headerTextColour',
    )));


    // Footer Colour------------------------------------------------------------------------------
    $wp_customize->add_section( 'footer' , array(
        'title'      => __( 'Footer', 'Con-Vol' ),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('cv-footerColour' , array(
      'default' => '#333',
      'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cv-footerColourControl', array(
      'label' =>__('Footer Colour', 'Con-Vol'),
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
      'label' =>__('Footer Text Colour', 'Con-Vol'),
      'description' => 'Change the footer text colour',
      'section' => 'footer',
      'settings' => 'cv-footerTextColour',
    )));

  }//end mytheme_customize_register

  add_action( 'customize_register', 'mytheme_customize_register' );

  //Hook2: wp_head to output custom-generated CSS
   function mytheme_customize_css()
   {
     ?> <!-- end initial php open to allow for style tag -->
      <style type="text/css">
      body {
              background-color: <?php echo get_theme_mod('cv-backgroundColour','#ffffff'); ?>!important;
           }
     .cv-title{
               color: <?php echo get_theme_mod('cv-titleTextColour', '#fff'); ?>!important ;
             }
     .cv-header{
               background-color: <?php echo get_theme_mod('cv-headerColour', '#333'); ?>!important ;
             }
     .cv-topMenu, .cv-sidebarButton, .cv-sidebarClose, .cv-searchBox, .cv-searchBox:focus{
               color: <?php echo get_theme_mod('cv-headerTextColour', '#fff'); ?>!important ;
             }
     .cv-footer{
               background-color: <?php echo get_theme_mod('cv-footerColour', '#333'); ?>!important ;
             }
     .cv-bottomMenu, .cv-footer{
               color: <?php echo get_theme_mod('cv-footerTextColour', '#fff'); ?>!important ;
             }

    </style>
  <?php //reopen php tag and leave unclosed
  }
  add_action( 'wp_head', 'mytheme_customize_css');
