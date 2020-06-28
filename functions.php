
<?php

//-------------------------------------------------------------load stylesheets
function load_css(){

  //bootstrap
  wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css',array(),false,'all');
  wp_enqueue_style('bootstrap');

  //my css
  wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
  wp_enqueue_style('main');
}

//hook
add_action('wp_enqueue_scripts','load_css');


//--------------------------------------------------------------load javascript
function load_js(){

  wp_enqueue_script('jquery');

  wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.5.0', true);
		wp_enqueue_script('bootstrap');

    wp_register_script('js', get_template_directory_uri() . '/js/script.js', array('jquery'), false, true);
    wp_enqueue_script('js');
}

//-------------------------------------------------------------------------hook
add_action('wp_enqueue_scripts','load_js');

//------------------------------------------------------------------------menus
add_theme_support('menus');

register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    )
  );


  //--------------------------------------------------------------------widgets
  add_theme_support('widgets');


  //--------------------------------------------------------------------sidebar
  add_action( 'widgets_init', 'my_register_sidebars' );
  function my_register_sidebars() {
      /* Register the 'primary' sidebar. */
      register_sidebar(
          array(
              'id'            => 'primary',
              'name'          => __( 'Primary Sidebar' ),
              'description'   => __( 'These will appear in the footer' ),
              'before_widget' => '<div id="%1$s" class="widget %2$s">',
              'after_widget'  => '</div>',
              'before_title'  => '<h3 class="widget-title">',
              'after_title'   => '</h3>',
          )
      );
      /* Repeat register_sidebar() code for additional sidebars. */
  }

  //----------------------------------------------------------------thumnbnails
  add_theme_support( 'post-thumbnails' );


  //customize API
  require_once get_template_directory() . '/customizer.php';



  //------------------------------------------------------------custom taxonomy

  add_action( 'init', 'create_topics_hierarchical_taxonomy', 0 );

  function create_topics_hierarchical_taxonomy() {

  // Add new taxonomy, make it hierarchical like categories
  //first do the translations part for GUI

    $labels = array(
      'name' => _x( 'Topics', 'taxonomy general name' ),
      'singular_name' => _x( 'Topic', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Topics' ),
      'all_items' => __( 'All Topics' ),
      'parent_item' => __( 'Parent Topic' ),
      'parent_item_colon' => __( 'Parent Topic:' ),
      'edit_item' => __( 'Edit Topic' ),
      'update_item' => __( 'Update Topic' ),
      'add_new_item' => __( 'Add New Topic' ),
      'new_item_name' => __( 'New Topic Name' ),
      'menu_name' => __( 'Topics' ),
    );

  // Now register the taxonomy

    register_taxonomy('topics',array('post'), array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'topic' ),
    ));

  }


  //-----------------------------------------------------------custom post type

  function custom_post_type() {

  // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'News', 'Post Type General Name', 'WWCC Theme' ),
          'singular_name'       => _x( 'News Item', 'Post Type Singular Name', 'WWCC Theme' ),
          'menu_name'           => __( 'News', 'WWCC Theme' ),
          'parent_item_colon'   => __( 'Parent News Item', 'WWCC Theme' ),
          'all_items'           => __( 'All News Items', 'WWCC Theme' ),
          'view_item'           => __( 'View News Item', 'WWCC Theme' ),
          'add_new_item'        => __( 'Add New News Item', 'WWCC Theme' ),
          'add_new'             => __( 'Add New', 'WWCC Theme' ),
          'edit_item'           => __( 'Edit News Item', 'WWCC Theme' ),
          'update_item'         => __( 'Update News Item', 'WWCC Theme' ),
          'search_items'        => __( 'Search News Item', 'WWCC Theme' ),
          'not_found'           => __( 'Not Found', 'WWCC Theme' ),
          'not_found_in_trash'  => __( 'Not found in Trash', 'WWCC Theme' ),
      );

  // Set other options for Custom Post Type

      $args = array(
          'label'               => __( 'news', 'WWCC Theme' ),
          'description'         => __( 'News items about corgi wellfare, nutrition, grooming, corgi related events around the Wellington region.', 'WWCC Theme' ),
          'labels'              => $labels,
          'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
          'taxonomies'          => array( 'topics' ),
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 5,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'post',
          // 'show_in_rest' => true,

      );

      // Registering your Custom Post Type
      register_post_type( 'news', $args );

  }

  /* Hook into the 'init' action so that the function
  * Containing our post type registration is not
  * unnecessarily executed.
  */

  add_action( 'init', 'custom_post_type', 0 );

?>
