<?php
/**
 * @package a11yall
 */
?><!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lte IE 7]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lt-ie8.css"><![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="section header">
  <header class="container" role="banner">
  	<div class="sixteen columns">
        <a href="#main" class="visuallyhidden focusable" id="skiptomain"><?php _e('Skip to content','a11yall'); ?></a>
        <?php 
				if (get_header_image() != '') {
					echo '<img src="';
					header_image();
					echo '" id="headerlogo" height="';
					echo get_custom_header()->height;
					echo '" width="';
					echo get_custom_header()->width;
					echo '" alt="" />';
				} 
				?>       
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <p id="tagline"><?php bloginfo( 'description' ); ?></p>
        <div id="main-search-box" role="search"><?php get_search_form(); ?></div>
    </div><!--.sixteen.columns-->
  </header>
</div><!--.section-->
<div class="section mainmenu">
  <div class="sixteen columns alpha omega"> 
		<?php 
      wp_nav_menu( array( 
				'theme_location' => 'primary', 
				'container' => 'nav',
				'container_class' => 'container menus',
				'container_id' => 'site-navigation',
				'menu_class' => 'mdd-menu',
				'fallback_cb'     => 'a11yall_primary_menu_fallback',
				'depth' => 2
			) );
    ?>
  </div>
</div><!--.section-->
<div class="section middle"><!-- content and sidebar -->
	<div class="container">