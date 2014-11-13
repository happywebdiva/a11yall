<?php
/**
 * @package a11yall
 */
?><!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php	
	// Using minimum so works best with Yoast's SEO plugin
	wp_title();
?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
<?php
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); 
	wp_head(); 
?>
<!--[if lte IE 7]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lt-ie8.css"><![endif]-->
</head>
<body <?php body_class(); ?>>
<div class="section header">
  <header class="container" role="banner">
  	<div class="sixteen columns">
        <a href="#main" class="visuallyhidden focusable" id="skiptomain">Skip to content</a>
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
        <h1><a href="<?php echo home_url( '/' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <p id="tagline"><?php bloginfo( 'description' ); ?></p>
        <div id="main-search-box" role="search"><?php  get_search_form() ?></div>
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
				'depth' => 2
			) );
    ?>
  </div>
</div><!--.section-->
<div class="section middle"><!-- content and sidebar -->
	<div class="container">