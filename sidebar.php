<?php
/**
 * @package a11yall
 */
?>
<div class="widget-area" role="complementary">
	<h1 class="visuallyhidden">Sidebar</h1>
	<?php if ( ! dynamic_sidebar( 'Sidebar Widgets' ) ) : ?>
  	<aside id="archives" class="widget">
    	<h2 class="widget-title">Archives</h2>
      <ul>
      	<?php wp_get_archives('type=monthly&limit=12'); ?>
      </ul>
    </aside>
    <aside id="meta" class="widget">
      <h2 class="widget-title">Meta</h2>
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
      </ul>
    </aside>
  <?php endif; // end sidebar widget area ?>
</div><!-- .widget-area -->
