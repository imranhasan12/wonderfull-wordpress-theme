<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$twenty_twenty_one_comment_count = get_comments_number();
?>

<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php
	if ( have_comments() ) :
		;
		?>
		<h2 class="comments-title">
			<?php if ( '1' === $twenty_twenty_one_comment_count ) : ?>
				<?php esc_html_e( '1 comment', 'twentytwentyone' ); ?>
			<?php else : ?>
				<?php
				printf(
					/* translators: %s: Comment count number. */
					esc_html( _nx( '%s comment', '%s comments', $twenty_twenty_one_comment_count, 'Comments title', 'twentytwentyone' ) ),
					esc_html( number_format_i18n( $twenty_twenty_one_comment_count ) )
				);
				?>
			<?php endif; ?>
		</h2><!-- .comments-title -->

		<ul class="comment-list">
			<?php
			wp_list_comments(
				array(
					'avatar_size' => 60,
					'style'       => 'ul',
					'short_ping'  => true,
				)
			);
			?>
		</ul><!-- .comment-list -->

		<?php
		/* the_comments_pagination(
			array(
				'before_page_number' => esc_html__( 'Page', 'twentytwentyone' ) . ' ',
				'mid_size'           => 0,
				'prev_text'          => sprintf(
					'%s <span class="nav-prev-text">%s</span>',
					is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ),
					esc_html__( 'Older comments', 'twentytwentyone' )
				),
				'next_text'          => sprintf(
					'<span class="nav-next-text">%s</span> %s',
					esc_html__( 'Newer comments', 'twentytwentyone' ),
					is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' )
				),
			)
		); */
		?>

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'twentytwentyone' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
$fields =  array(
    'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
    'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
);
 
$comments_args = array(
    'fields' =>  $fields,
    'title_reply'=>'Please give us your valuable comment',
    'label_submit' => 'Send My Comment'
);
 
comment_form($comments_args);

	?>

</div><!-- #comments -->
