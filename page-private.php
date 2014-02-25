<?php
/* Template Name: Private Page Template
 * @package a11yall
 */
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main">
  <div class="eleven columns alpha" role="main">
	<?php 
	if (is_user_logged_in()) {
    while ( have_posts() ) : the_post();
    get_template_part( 'content', 'page' );
    endwhile;
		if ( comments_open() || '0' != get_comments_number() ) :
			comments_template();
		endif;
	} else {
		echo '<div class="hentry"><h2>We\'re sorry</h2><p>You must be logged in to view this page.</p></div>';
	} 
  ?>
  </div><!--.eleven.columns-->
	<div class="five columns omega">
  <?php get_sidebar('page'); ?>
  </div><!--.five.columns-->
</div><!--.sixteen.columns-->
<?php get_footer(); ?>