<?php
/* 
 * @package a11yall
 * Invoked by using a custom field called NoSidebar that is set to true
 */
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main" role="main">
	<?php 
		if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} 
	    while ( have_posts() ) : the_post();
    	get_template_part( 'content', 'page' );
    	endwhile;
		if ( comments_open() || '0' != get_comments_number() ) :
			comments_template();
		endif;
	?>
</div><!--.sixteen.columns-->
<?php get_footer(); ?>