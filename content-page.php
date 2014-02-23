<?php
/**
 * @package a11yall
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <h1 id="page-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
  <div class="entry">
    <?php
			if (has_post_thumbnail()) {
				the_post_thumbnail();
			}
      the_content();
		  wp_link_pages( array(
				'before' => '<p class="page-links">Pages: ',
				'after'  => '</p>',
			) );
		?>
  </div><!--.entry-->
  <?php edit_post_link('Edit This Page', '<p class="button editlink">', '</p>'); ?>
</article>
