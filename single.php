<?php
/**
 * @package a11yall
 */  
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main">
  <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
  <div class="eleven columns alpha" role="main">
  <?php 
	  while ( have_posts() ) : the_post(); 
    get_template_part( 'content', 'single' ); 
		endwhile; 
		if ( comments_open() || '0' != get_comments_number() ) :
			comments_template();
		endif;
	?>
  </div><!--.eleven.columns-->

	<div class="five columns omega">
  <?php get_sidebar(); ?>
  </div><!--.five.columns-->
  
</div><!--.sixteen.columns-->
<?php get_footer(); ?>