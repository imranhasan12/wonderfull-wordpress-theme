<?php get_header();?>
 

<?php   

while(have_posts()): the_post();
get_template_part( 'template-parts/page/content','page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile;
?>



    
<?php get_footer();?>
