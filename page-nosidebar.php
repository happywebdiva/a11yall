<?php
/* Template Name: Page Without Sidebar Template
 * @package a11yall
 */
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main" role="main">
	<?php 
    while ( have_posts() ) : the_post();
    get_template_part( 'content', 'page' );
    endwhile;
		if ( comments_open() || '0' != get_comments_number() ) :
			comments_template();
		endif;
  ?>
</div><!--.sixteen.columns-->
<?php get_footer(); ?>