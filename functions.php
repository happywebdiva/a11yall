<?php
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
		<div class="nav-links">
			<?php if ( get_next_posts_link() ) : ?>
			<div class="button"><?php next_posts_link( __( 'Older posts', 'a11yall' ) ); ?></div>
			<?php endif; ?>
			<?php if ( get_previous_posts_link() ) : ?>
			<div class="button"><?php previous_posts_link( __( 'Newer posts', 'a11yall' ) ); ?></div>
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
    'description'   => 'Drag widger for the sidebar here',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
	register_sidebar( array(
		'name' => 'Page Sidebar',
		'id' => 'page-widgets',
		'description' => __( 'Drag to create or update the sidebar for pages'),
		'before_widget' => '<aside class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
   ));
}
add_action( 'widgets_init', 'a11y_widgets_init' );

// Customize Excerpt from default [...] to ... Link to post/page
function new_excerpt_more($more) {
	global $post;
	return '... <a href="'. get_permalink($post->ID) . '">Read more</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Start Theme Setup. 
// Run a11y_themesetup() to make various things possible when the 'after_setup_theme' hook is run. 
add_action('after_setup_theme', 'a11y_themesetup');
function a11y_themesetup() {
	
	// Make theme available for translation
	// Translations can be filed in the /languages/ directory.
	load_theme_textdomain( 'a11yall', get_template_directory() . '/languages' );

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/* ABL @@@@@ Consider doing this (code from _s)
	 * Enable support for Post Thumbnails on posts and pages.
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

  /* ABL @@@@@ Consider doing this code; see also Kitchen Sink
	 * Code from _s
	 */
	// Enable support for Post Formats.
	// add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

  /* ABL @@@@@ Consider doing this code; see also Kitchen Sink
	 * Code from _s
	 */
	// Setup the WordPress core custom background feature.
	//add_theme_support( 'custom-background', apply_filters( 'a11yall_custom_background_args', array(
	//	'default-color' => 'ffffff',
	//	'default-image' => '',
	//) ) );

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

?>
