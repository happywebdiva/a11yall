<?php
/**
 * @package a11yall
 */
?>
<div class="widget-area" role="complementary">
	<h1 class="visuallyhidden">Sidebar</h1>
	<?php if ( !dynamic_sidebar( 'Page Sidebar' ) ) : ?>
  	<aside id="search" class="widget">
    	<?php get_search_form(); ?>
    </aside>
  	<aside id="archives" class="widget">
      <h2>Categories</h2>
    	<ul>
      	<?php wp_list_categories('title_li='); ?>
      </ul>
    </aside>
  <?php endif; ?>
</div><!-- .widget-area -->
