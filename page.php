<?php
/**
 * @package a11yall
 */
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main">
  <div class="twelve columns alpha" role="main">
	<?php 
    while ( have_posts() ) : the_post();
    get_template_part( 'content', 'page' );
    endwhile;
  ?>
  </div><!--.twelve.columns-->
	<div class="four columns omega">
  <?php get_sidebar('page'); ?>
  </div><!--.four.columns-->
</div><!--.sixteen.columns-->
<?php get_footer(); ?>