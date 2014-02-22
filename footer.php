<?php
/**
 * @package a11yall
 */
?>
	</div><!--.container-->
</div><!--.section-->
<div class="section mainmenu">  
  <div class="sixteen columns alpha omega">  
	  <?php 
      wp_nav_menu( array( 
				'theme_location' => 'secondary', 
				'container' => 'nav',
				'container_class' => 'container menus',
				'container_id' => 'footer-navigation',
				'menu_class' => 'mdd-menu',
				'depth' => 2,
			) );
	  ?>
  </div>
</div><!--.section menu-->
<div class="section footer">
  <footer class="container" role="contentinfo">
  	<div class="sixteen columns">
  	  <p>Copyright &copy; <?php echo date("Y"); ?> : 
	    <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name'); ?></a>
	    </p>
	  </div>
  </footer>
</div><!--.section.footer-->
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>