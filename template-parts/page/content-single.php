<?php
/**
 * Template part for displaying posts
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>




<article>

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
    <section class="section-padding breadcrumb-area bg-overlay" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('image_1'));?>);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner-title text-center">
                        <h2>Blog</h2>
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
        <div class="container">
	     <div class="row">
			<div class="col-lg-8">
				<div class="image py-5">
				<?php the_post_thumbnail();?>
				
				</div>
				
			 <div class="title">
				 <h2><spam class=""></spam></h2>
				<h3 class=""><?php the_title();?></h3>
				 <p><?php the_content();?></p>
				 <?php echo sunset_post_navigation();?>
				  <?php comments_popup_link( __( 'Leave a comment', 'themename' ), __( '1 Comment', 'themename' ), __( '% Comments', 'themename' ) ) ?>
			</div>
			 
			 </div>
			<div class="col-lg-4">
			         <!-- sidebar widget -->
                <div class="single-page-sidebar">
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
                     <?php wp_list_categories( array(
                       'orderby'    => 'name',
                        'show_count' => true,
                         'exclude'    => array( 10 )
                         ) ); ?> 
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
			 
			 
			 
			 </div>
			</div>
	
	   </div>
    
   


</article>