<?php
/**
 * @package A11Yall
 */  
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main">
  <div class="twelve columns alpha" role="main">
  <?php 
	  while ( have_posts() ) : the_post(); 
    get_template_part( 'content', 'single' ); 
		endwhile; 
		if ( comments_open() || '0' != get_comments_number() ) :
			comments_template();
		endif;
	?>
  </div><!--.twelve.columns-->

	<div class="four columns omega">
  <?php get_sidebar(); ?>
  </div><!--.four.columns-->
  
</div><!--.sixteen.columns-->
<?php get_footer(); ?>