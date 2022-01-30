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
    <section class="section-padding breadcrumb-area bg-overlay" style="background-image: url(assets/img/breadcrumb.jpg);">
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
			<div class="col-lg-10">
				<div class="image py-5">
				<?php the_post_thumbnail();?>
				
				</div>
				
			 <div class="title">
				 <h2><spam class=""></spam></h2>
				<h3 class=""><?php the_title();?></h3>
				 <p><?php the_content();?></p>
			</div>
			 
			 </div>
			<div class="col-lg-2"></div>
			</div>
	
	   </div>
    
   


</article>