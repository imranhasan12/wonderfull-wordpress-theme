<?php





function hello_theme_create_css(){
	
	wp_enqueue_style('bootstrap-min',get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'1.0.0','all');
	wp_enqueue_style('fontawesome-all',get_template_directory_uri().'/assets/css/fontawesome-all.min.css',array(),'1.0.0','all');
	wp_enqueue_style('magnific-popup',get_template_directory_uri().'/assets/css/magnific-popup.css',array(),'1.0.0','all');
	wp_enqueue_style('carsouse-min',get_template_directory_uri().'/assets/css/owl.carousel.min.css',array(),'','');
	wp_enqueue_style('min-css',get_template_directory_uri().'/assets/css/style.css',array(),'1.0.0','all');
	wp_enqueue_style('responsive-css',get_template_directory_uri().'/assets/css/responsive.css',array(),'1.0.0','all');
	wp_enqueue_style( 'animate-css', get_stylesheet_directory_uri() . '/assets/css/animate.min.css' );
	
}

add_action('wp_enqueue_scripts','hello_theme_create_css');



function hello_theme_create_js(){
	
	wp_enqueue_script('jquery-js',get_template_directory_uri().'/assets/js/jquery-3.4.1.min.js',array('jquery'),'','true');
	wp_enqueue_script('bootstrap-min-js',get_template_directory_uri().'/assets/js/bootstrap.min.js',array('jquery'),'','true');
    wp_enqueue_script('magnific-popup',get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js',array('jquery'),'','true');
	wp_enqueue_script('carouse-js',get_template_directory_uri().'/assets/js/owl.carousel.min.js',array('jquery'),'','true');
	wp_enqueue_script('jquery-mixitup',get_template_directory_uri().'/assets/js/jquery.mixitup.js',array('jquery'),'','true');
	wp_enqueue_script('sticy-kit',get_template_directory_uri().'/assets/js/sticky-kit.min.js',array('jquery'),'','true');
	wp_enqueue_script('min-js',get_template_directory_uri().'/assets/js/main.js',array('jquery'),'','true');
	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/wow-js/dist/wow.min.js', array('jquery'), '', true );
	
}
  
add_action('wp_enqueue_scripts','hello_theme_create_js');

   

function mytheme_min_menus() {
  register_nav_menus(
    array(
      'Header_menu' => __( 'Header menu', 'hello'),
      'Fotter_menu' => __( 'footer menu' )
    )
  );
}
add_action( 'init', 'mytheme_min_menus' );
  
    
    
    
   
  
   