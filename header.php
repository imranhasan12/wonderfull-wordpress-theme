<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <title><?php bloginfo('name');?>|<?php wp_title();?></title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <?php wp_head (); global $redux_demo; ?>
	
	
	
	<style  type='text/css'>
	<?php echo $redux_demo['custom_1'];?>
		/* body{
			background-color: <?php echo $redux_demo['body_1']['background-color'];?> !important;
			background-image: url(<?php echo $redux_demo['body_1']['background-image'];?>)!important;
			background-attachment: <?php echo $redux_demo['body_1']['background-attachment'];?> !important;
			background-repeat: <?php echo $redux_demo['body_1']['background-repeat'];?> !important;
			background-position: <?php echo $redux_demo['body_1']['background-position'];?> !important;
			background-size: <?php echo $redux_demo['body_1']['background-size'];?> !important;
	     */
		
		.header-area {
			border-color: <?php echo $redux_demo['border_1']['border-color'];?> !important;
			border-top: <?php echo $redux_demo['border_1']['border-top'];?>  !important;
			Border-style: <?php echo $redux_demo['border_1']['border-style'];?>  !important;
			Border-bottom: <?php echo $redux_demo['border_1']['border-bottom'];?>  !important;
			Border-right: <?php echo $redux_demo['border_1']['border-right'];?>  !important;
			Border-left: <?php echo $redux_demo['border_1']['border-left'];?>  !important;
		}
		
	sidebar-widget search-widget{
			
			height: <?php echo $redux_demo['header_dimension']['height'];?> !important;
			
			
			
		}
		
		
	</style>
	
	
	
	
	
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="spinner">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    <!-- // Preloader -->

    <!-- Header top -->
	 <!--Button on of condition start -->
	<?php if($redux_demo['botton_1'] == 1 ) : ?>
    <div class="header-top">
        <div class="container">
            <div class="row">
			
                <div class="col-md-6">
                    <div class="top-info">
                        <ul>
                            <li><a href="#"><i class="fas fa-phone"></i> +123 4567 7890</a></li>
                            <li><a href="#"><i class="fas fa-envelope"></i> name@website.com</a></li>
                        </ul>
                    </div>
                </div>
				
				
				
                <div class="col-md-6">
                    <div class="header-top-right text-right">
                        <!-- Socila Links -->
                        <div class="social-links no-border">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <!-- //Socila Links -->
                        <a href="#" class="bttn-sm">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php endif;?>
	 <!--Button on of condition end -->
    <!-- // Header top -->

    <!--Header Area-->
    <header class="header-area white-bg">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
	         <div class="logo-image animate__animated wow animate__fadeInUp animate__slow 2s">
				<?php echo get_custom_logo(); ?>
			</div>
            
              
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
					
						<?php  
                        $args=array(
						'Theme_location'=>'Header_menu',
						'depth'=>'2',
						'container'=>'div',
						'container_class'=>'collapse navbar-collapse',		
						 'container_id'=>'navbarSupportedContent',	
						'menu_class'=>'navbar-nav ml-auto main-menu'
                          //'fallback_cb'=> 'WP_Bootstrap_Navwalker::fallback',
                         //'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						);
					    wp_nav_menu($args);
					?>
			
				
                 

                    <div class="header-btn justify-content-end">
                        <button type="button" class="search-btn"><i class="fas fa-search"></i></button>
                    </div>

                </div>
            </div>
        </nav>
    </header>
    <!--// Header Area-->