<?php

	show_admin_bar(false);
 if(!defined('ABSPATH')) exit;

 if ( ! function_exists( 'wx__setup' ) ) :

	function ici__setup() {

		/**
		 * Show or Hide Admin top bar
		 *
		 * @param true/false
		 */

		//show_admin_bar(true);

		load_theme_textdomain( 'buenoste' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */

		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-background' );


		// Custom Crop Sizes
		add_image_size( 'wx_small', 190,220, 1 );
		add_image_size( 'wx_medium', 424,540, 1 );
		add_image_size( 'wx_big', 1260 );
		add_image_size( 'wx_blog',370,230,1);
		add_image_size( 'wx_product',360,360,1);

		// This theme uses wp_nav_menu() in one locations.
		register_nav_menus( array(
			'top'    => __( 'Top Menu', 'bike2box' ),
			'footer_menu' => __('Footer Menu', 'bike2box')
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'video',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		if ( ! isset( $content_width ) ) {
			$content_width = 1500;
		}

		add_editor_style();

	}

	add_action( 'after_setup_theme', 'ici__setup' );

 endif;

 /**
  * Enqueue scripts and styles.
  *
  * @since 1.0
  */

  
  
  register_nav_menus( array(
	'header-menu' => 'Header-menu',
	'footer-menu' => 'Footer-menu',
) );



 function ici__enqueue_scripts() {
	global $post;
	$post_pt = get_post_type($post->ID);
	
	// CSS
	
	wp_enqueue_style('Roboto','http://fonts.googleapis.com/css?family=Roboto:300,400,500,700');
	wp_enqueue_style('akslider',get_template_directory_uri().'/css/akslider.css');
	wp_enqueue_style('Donate',get_template_directory_uri().'/css/donate.css');
	wp_enqueue_style('Theme',get_template_directory_uri().'/css/theme.css');
	wp_enqueue_style( 'ici-style', get_stylesheet_uri() );

	// JS
	




    
	wp_enqueue_script( 'Mootools','http://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js' , array(),'',false);
	wp_enqueue_script( 'Maps', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', array(),'',false);
	wp_enqueue_script( 'Jquery', get_template_directory_uri() . '/js/jquery.js', array(),'',true);
	wp_enqueue_script( 'UiKit', get_template_directory_uri() . '/js/uikit.js', array('jquery'),'',true);
	wp_enqueue_script( 'SimpleCounter', get_template_directory_uri() . 'js/SimpleCounter.js', array('jquery'),'',true);
	wp_enqueue_script( 'grid', get_template_directory_uri() . 'js/components/grid.js', array('jquery'),'',true);
	wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/components/slider.js', array('jquery'),'',true);
	wp_enqueue_script( 'slideshow', get_template_directory_uri() . '/js/components/slideshow.js', array('jquery'),'',true);
	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/components/sticky.js', array('jquery'),'',true);
	wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/components/lightbox.js', array('jquery'),'',true);
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'),'',true);
	wp_enqueue_script( 'theme', get_template_directory_uri() . '/js/theme.js', array('jquery'),'',true);
 }

 add_action( 'wp_enqueue_scripts', 'ici__enqueue_scripts' );


  // Loading WP Ajax
 function ici__custom_js() {
 	
	global $rdx;

	$contact_bg = '';
	if(!empty($rdx['rdx_contact__bg']['url'])) {
		$contact_bg = $rdx['rdx_contact__bg']['url'];
	}
	
	echo '<script type="text/javascript">
			var ajaxurl = "' . admin_url('admin-ajax.php') . '";
		</script>';
 }
 
 add_action('wp_head', 'ici__custom_js');

 /**
  *
  * Head Title us wp_title()
  *
  * @since Wexzy Start 1.0
  */

 function ici_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'buenoste' ), max( $paged, $page ) );
	}

	return $title;
 }
 add_filter( 'wp_title', 'ici_wp_title', 10, 2 );


  /**
  *
  * Get url of post thumbnail
  *
  * @param number $post_id		ID of post
  * @param string $thumbnail	Image size
  */

 function ici__featured_image($post_id,$thumbnail="thumbnail") {
 	$post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id), $thumbnail );

	if($post_image) {
		return esc_url($post_image[0]);
	}

	return false;
 }

	add_action( 'init', 'ic_cpt_partners' );
	
	function ic_cpt_partners() {
		$labels = array(
			'name'               => _x( 'Партньори', 'post type general name', 'your-plugin-textdomain' ),
			'singular_name'      => _x( 'Партньор', 'post type singular name', 'your-plugin-textdomain' ),
			'menu_name'          => _x( 'Партньори', 'admin menu', 'your-plugin-textdomain' ),
			'name_admin_bar'     => _x( 'Партньор', 'add new on admin bar', 'your-plugin-textdomain' ),
			'add_new'            => _x( 'Добави нов', 'Партньор', 'your-plugin-textdomain' ),
			'add_new_item'       => __( 'Добави нов Партньор', 'your-plugin-textdomain' ),
			'new_item'           => __( 'Нов Партньор', 'your-plugin-textdomain' ),
			'edit_item'          => __( 'Редактирай', 'your-plugin-textdomain' ),
			'view_item'          => __( 'Преглед', 'your-plugin-textdomain' ),
			'all_items'          => __( 'Всички Партньори', 'your-plugin-textdomain' ),
			'search_items'       => __( 'Търсене', 'your-plugin-textdomain' ),
			'parent_item_colon'  => __( 'Parent Партньори:', 'your-plugin-textdomain' ),
			'not_found'          => __( 'No Партньори found.', 'your-plugin-textdomain' ),
			'not_found_in_trash' => __( 'No Партньори found in Trash.', 'your-plugin-textdomain' )
		);
	
		$args = array(
			'labels'             => $labels,
	                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'partners' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'thumbnail')
		);
	
		register_post_type( 'ic_partners', $args );
	}


	
	add_action( 'init', 'ic_cpt_team' );
	
	function ic_cpt_team() {
		$labels = array(
			'name'               => _x( 'Играчи', 'post type general name', 'your-plugin-textdomain' ),
			'singular_name'      => _x( 'Играч', 'post type singular name', 'your-plugin-textdomain' ),
			'menu_name'          => _x( 'Играчи', 'admin menu', 'your-plugin-textdomain' ),
			'name_admin_bar'     => _x( 'Играч', 'add new on admin bar', 'your-plugin-textdomain' ),
			'add_new'            => _x( 'Добави нов', 'Партньор', 'your-plugin-textdomain' ),
			'add_new_item'       => __( 'Добави нов играч', 'your-plugin-textdomain' ),
			'new_item'           => __( 'Нов Играч', 'your-plugin-textdomain' ),
			'edit_item'          => __( 'Редактирай', 'your-plugin-textdomain' ),
			'view_item'          => __( 'Преглед', 'your-plugin-textdomain' ),
			'all_items'          => __( 'Всички Играчи', 'your-plugin-textdomain' ),
			'search_items'       => __( 'Търсене', 'your-plugin-textdomain' ),
			'parent_item_colon'  => __( 'Parent Играчи:', 'your-plugin-textdomain' ),
			'not_found'          => __( 'No Играч found.', 'your-plugin-textdomain' ),
			'not_found_in_trash' => __( 'No Играч found in Trash.', 'your-plugin-textdomain' )
		);
	
		$args = array(
			'labels'             => $labels,
	                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'team' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'thumbnail')
		);
	
		register_post_type( 'ic_team', $args );
	}







  // Trace Debug
 function trace($data) {
 	echo "<pre>";
	print_r($data);
	echo "</pre>";
 }


function choise_position($key=null) {
	
	$fposition = array(
	    1       =>  'Вратар',
	    2		=>	'Крило',
	 	3		=>	'Универсален',
	 	4		=>	'Тренцор'
	);
	
	if(!empty($key)) {
		return $fposition[$key];
	}
	
	return $fposition;

}


	// TGM Activation Plugins
	require_once('inc/tgm-activation.php');
	
	// MetaBox io Settings
	require_once('inc/metaboxio.php');
	
	// Active Redux Framework
	if( class_exists('ReduxFramework')) {
		require_once('inc/reduxf.php');
	}
	
