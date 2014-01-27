<?php
/**
 * @package a11yall
 */
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main">
  	<div class="twelve columns alpha" role="main">
		<?php 
		  if ( have_posts() ) : while ( have_posts() ) : the_post(); 
			  get_template_part( 'content', get_post_format() );
		    endwhile; 
				a11yall_paging_nav();  
			else : 
			  get_template_part( 'content', 'none' );
			endif; ?>
  </div><!--.twelve.columns-->
	<div class="four columns omega">
    <?php get_sidebar(); ?>
  </div><!--.four.columns-->
</div><!--.sixteen.columns-->
<?php get_footer(); ?>
