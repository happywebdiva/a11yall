<?php
/* Template Name: Page Without Title
 * @package a11yall
 */
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main">
  <div class="eleven columns alpha" role="main">
	<?php 
    while ( have_posts() ) : the_post();
	?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry">
      <?php
        the_content();
        wp_link_pages( array(
          'before' => '<p class="page-links">' . __( 'Pages: ', 'a11yall' ),
          'after'  => '</p>',
        ) );
      ?>
    </div><!--.entry-->
		<?php 
      $editpage =  sprintf( __('Edit This Page' , 'a11yall') );
      edit_post_link($editpage, '<p class="button editlink">', '</p>'); 
    ?>    
  </article>
	<?php
    endwhile;
		if ( comments_open() || '0' != get_comments_number() ) :
			comments_template();
		endif;
  ?>
  </div><!--.eleven.columns-->
	<div class="five columns omega">
  <?php get_sidebar('page'); ?>
  </div><!--.five.columns-->
</div><!--.sixteen.columns-->
<?php get_footer(); ?>