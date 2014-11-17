<?php
/**
 * @package a11yall
 */
?>
<div class="widget-area" role="complementary">
	<h1 class="visuallyhidden">Sidebar</h1>
	<?php if ( !dynamic_sidebar( 'Page Sidebar' ) ) : ?>
  	<aside id="archives" class="widget">
      <h2>Pages</h2>
    	<ul>
      	<?php wp_list_pages('title_li=&depth=2&sort_column=menu_order'); ?>
      </ul>
    </aside>
  <?php endif; ?>
</div><!-- .widget-area -->
