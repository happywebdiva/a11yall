<?php
/**
 * @package a11yall
 */
?>
	</div><!--.container-->
</div><!--.section-->
<div class="section mainmenu" role="navigation">  
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
  	  <p><?php 
				_e('Copyright &copy; ','a11yall');
				echo date("Y"); 
				?> : <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
      </p>
	  </div>
  </footer>
</div><!--.section.footer-->
<?php wp_footer(); ?>
</body>
</html>