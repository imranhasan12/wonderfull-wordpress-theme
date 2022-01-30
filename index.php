

<?php get_header();?>
    <!--Full Search-->
    <div class="search-full">
        <button type="submit" class="search-close"><i class="fas fa-times"></i></button>
        <div class="search-full--inner">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <form class="main-search-form">
                            <input type="search" name="main_search" id="main_search" placeholder="Search here...">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Full Search-->


    <!-- Breadcrumb Area -->
    <section class="section-padding breadcrumb-area bg-overlay" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('image_1'));?> );">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner-title text-center">
                        <h2 class="title"><?php the_breadcrumb(); ?></h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Breadcrumb Area -->

    <section class="section-padding bg-light">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <!-- Blog Area -->
                         <div class="container">

        

        <div class="row">

        <?php
			$custom_query=new WP_Query('type=post&posts_per_page=4');
			
			
			if($custom_query->have_posts()): ?>

            <?php while($custom_query->have_posts() ): $custom_query->the_post(); ?>

            <div class="col-sm-6" style="margin-bottom: 65px;">

            <p class="image-animation animate__animated wow animate__zoomIn animate__slow 2s">
                <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
                <?php endif; ?>
            </p>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <p>Posted on <?php echo the_time('F jS, Y');?> by <?php the_author_posts_link(); ?> </p>

            <?php echo substr(get_the_excerpt(),0,100); ?>
            
            </div><!-- col -->

            <?php endwhile; 
	
			endif;
		wp_reset_query();
			?>

         </div><!-- row -->

    </div><!-- container -->
                    <!-- // Blog Area -->
                    <!-- Blog Pagination -->
                    <div class="blog-pagination text-center">
			
                        <ul>
				
					      <?php
					
							echo paginate_links(

							);
						  ?>
						</ul>
                    </div>
                    <!-- // Blog Pagination -->
           
   
                </div>
                
				<?php get_sidebar();?>
				
				
            </div>
            <!-- // sidebar widget -->
                
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section-padding call-to-action bg-overlay" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('image'));?>);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="inner-promo">
                        <h2 class="animate__animated wow animate__fadeInUp animate__slow 2s"><?php echo get_theme_mod('text_title');?></h2>
                        <p><?php echo get_theme_mod('text_area');?></p>
						
                      <?php if( get_theme_mod( 'cd_button_display', 'show' ) == 'show' ) : ?>
                      <a href="" class='bttn-md-light'>Come On In</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Call to Action -->

<?php get_footer();?>