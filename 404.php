<?php
/**
 * @package a11yall
 */
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main">
  	<div class="twelve columns alpha" role="main">
    <?php 
			echo '<h1>';
			_e('Page Not Found','a11yall');
			echo '</h1>';
		?>
    <div class="hentry">
    <?php 
			echo '<p>';
			_e("We're sorry.  The page you were looking for could not be found.</p><p>Perhaps using the search form below would help?",'a11yall');
			echo '</p>';
		?>	  
		<div id="search-box-404"><?php get_search_form(); ?></div>
		<?php
			// Uncomment next line if you wish to have five most recent blog posts show on 404 results page  
			// the_widget('WP_Widget_Recent_Posts', array('number' => 5)); 
		?>
    </div>
  </div><!--.twelve.columns-->

	<div class="four columns omega">
  <?php get_sidebar(); ?>
  </div><!--.four.columns-->
  
</div><!--.sixteen.columns-->
<?php get_footer(); ?>
