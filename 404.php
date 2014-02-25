<?php
/**
 * @package a11yall
 */
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main">
  	<div class="twelve columns alpha" role="main">
		<h1>Page Not Found</h1>
    <div class="hentry">
	  <p>We're sorry.  The page you were looking for could not be found.</p>
    <p>Perhaps using the search form below would help? </p>
		<?php get_search_form(); ?>
		<script type="text/javascript">
			// focus on search field after it has loaded
			document.getElementById('s') && document.getElementById('s').focus();
		</script>
		<?php the_widget('WP_Widget_Recent_Posts', array('number' => 5)); ?>
    </div>
  </div><!--.twelve.columns-->

	<div class="four columns omega">
  <?php get_sidebar(); ?>
  </div><!--.four.columns-->
  
</div><!--.sixteen.columns-->
<?php get_footer(); ?>
