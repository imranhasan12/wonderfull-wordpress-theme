<?php

/* Template Name: Test Page*/
get_header();


?>

 <section class="section-padding bg-light">
        <div class="container">
            <div class="row">
         <?php if($redux_demo['layout_1']== 1):?>
                <div class="col-lg-8">
                    <!-- Blog Area -->
                         <div class="container">

        

        <div class="row">

        <?php
			$custom_query=new WP_Query('type=post&posts_per_page=3');
			
			
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
				    <div class="col-lg-4">
                    <!-- Single sidebar widget -->
                    <div class="sidebar-widget search-widget">
                        <form action="#">
                            <input type="text" placeholder="search" required>
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <!-- // Single sidebar widget -->

                    <!-- Single sidebar widget -->
                    <div class="sidebar-widget sidebar-list">
                        <h3>Categotis</h3>
                        <ul>
                       <?php wp_list_categories( array(
        'orderby'    => 'name',
        'show_count' => true,
        'exclude'    => array( 10 )
    ) ); ?> 
                        </ul>
                    </div>
                    <!-- // Single sidebar widget -->

                    <!-- Single sidebar widget -->
                    <div class="sidebar-widget popular-posts">
                        <?php dynamic_sidebar('sidebar-2');?>
                       
                    </div>
                    <!-- // Single sidebar widget -->



                    <!-- Single sidebar widget -->
                    <div class="sidebar-widget tags">
                        <h3>Tags</h3>
                        <ul>
							<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
							
                          
                        </ul>
                    </div>
                    <!-- // Single sidebar widget -->

                </div>
				
				
             <?php endif;?> <!-- // only For website layout -->
				  <!-- sidebar widget -->
				<?php if($redux_demo['layout_1'] == 2):?>
                <div class="col-lg-4">
                    <!-- Single sidebar widget -->
                    <div class="sidebar-widget search-widget">
                        <form action="#">
                            <input type="text" placeholder="search" required>
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <!-- // Single sidebar widget -->

                    <!-- Single sidebar widget -->
                    <div class="sidebar-widget sidebar-list">
                        <h3>Categotis</h3>
                        <ul>
                       <?php wp_list_categories( array(
        'orderby'    => 'name',
        'show_count' => true,
        'exclude'    => array( 10 )
    ) ); ?> 
                        </ul>
                    </div>
                    <!-- // Single sidebar widget -->

                    <!-- Single sidebar widget -->
                    <div class="sidebar-widget popular-posts">
                        <?php dynamic_sidebar('sidebar-2');?>
                       
                    </div>
                    <!-- // Single sidebar widget -->



                    <!-- Single sidebar widget -->
                    <div class="sidebar-widget tags">
                        <h3>Tags</h3>
                        <ul>
							<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
							
                          
                        </ul>
                    </div>
                    <!-- // Single sidebar widget -->

                </div>
				        <div class="col-lg-8">
                    <!-- Blog Area -->
                         <div class="container">

        

        <div class="row">

        <?php
			$custom_query=new WP_Query('type=post&posts_per_page=3');
			
			
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
				
				  <?php endif;?> <!-- // only For website layout -->
				
            </div>
            <!-- // sidebar widget -->
                
        </div>
    </section>




<?php get_footer();?>
