<?php
// Activate jQuery
function add_jquery() {
  if (!is_admin()) {
	 wp_enqueue_script('jquery');
  }
}
add_action('init', 'add_jquery');

// Enqueue style
function a11y_styles() {
	wp_enqueue_style( 'a11y-css', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'a11y_styles' );

// Styling the visual admin editor to resemble the theme style
add_editor_style( 'css/editor-style.css');

// Set oEmbed max width for things like videos
if ( ! isset( $content_width ) ) {
	$content_width = 600; /* pixels */
}

// Display navigation to next/previous set of posts when applicable.
if ( ! function_exists( 'a11yall_paging_nav' ) ) :
function a11yall_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'a11yall' ); ?></h1>
		<div class="page-links nav-links">
			<?php if ( get_next_posts_link() ) : ?>
			<?php next_posts_link( __( 'Older posts', 'a11yall' ) ); echo ' &nbsp; &nbsp;'; ?>
			<?php endif; ?>
			<?php if ( get_previous_posts_link() ) : ?>
			<?php previous_posts_link( __( 'Newer posts', 'a11yall' ) ); ?>
			<?php endif; ?>
		</div><!--.nav-links-->
	</nav>
	<?php
}
endif;

// Set up a sidebar widger
function a11y_widgets_init() {
	register_sidebar( array(
  	'name' => 'Sidebar Widgets',
    'id'   => 'sidebar-widgets',
    'description'   => 'Drag widget for the sidebar here',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
	register_sidebar( array(
		'name' => 'Page Sidebar',
		'id' => 'page-widgets',
		'description'   => 'Drag to create or update the sidebar for pages',
		'before_widget' => '<aside class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
   ));
}
add_action( 'widgets_init', 'a11y_widgets_init' );

// Start Theme Setup. 
// Run a11y_themesetup() to make various things possible when the 'after_setup_theme' hook is run. 
add_action('after_setup_theme', 'a11y_themesetup');
function a11y_themesetup() {
	
	// Make theme available for translation
	// Translations can be filed in the /languages/ directory.
	load_theme_textdomain( 'a11yall', get_template_directory() . '/languages' );

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'a11yall_custom_background_args', array(
		'default-color' => 'dddddd',
		'default-image' => '',
	) ) );

	// Set up Featured Images (formerly known as post thumbnails)
	add_theme_support( 'post-thumbnails' ); 

} // End Theme Setup

// Register menus
register_nav_menus( array(
	'primary' => __( 'Main Menu', 'a11yall' ),
	'secondary' => __( 'Footer Menu', 'a11yall' )
) );

// Remove double spaces
function remove_spaces($the_content) {
  return preg_replace( '/[\p{Z}\s]{2,}/u', ' ', $the_content );
}
add_filter('the_content', 'remove_spaces');

// Make so null search does not take user back to home page
function my_request_filter( $query_vars ) {
    if( isset( $_GET['s'] ) && empty( $_GET['s'] ) ) {
        $query_vars['s'] = " ";
    }
    return $query_vars;
}
add_filter( 'request', 'my_request_filter' );

// Add custom header support
add_theme_support( 'custom-header' );
$header_defaults = array(
	'default-image'          => get_template_directory_uri() . '/img/header.png',
	'random-default'         => false,
	'width'                  => 125,
	'height'                 => 125,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => false,
	'uploads'                => true
);
add_theme_support( 'custom-header', $header_defaults );
$header_args = array(
	'width'         => 125,
	'height'        => 125,
	'default-image' => get_template_directory_uri() . '/img/header.png',
	'uploads'       => true
);
add_theme_support( 'custom-header', $header_args );

?>
