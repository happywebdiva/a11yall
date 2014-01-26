<?php
/**
 * @package A11Yall
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <h1 id="page-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

  <p class="postmetadata">
    Posted on <time datetime="<?php echo get_the_date(); ?>"><?php the_time('F j, Y') ?></time>, by <?php the_author_link(); ?>
  </p>
  <div class="entry">
    <?php
      the_content();
		  wp_link_pages( array(
				'before' => '<p class="page-links">Pages: ',
				'after'  => '</p>',
			) );
		?>
  </div><!--.entry-->
  <?php edit_post_link('Edit This Page', '<p class="button editlink">', '</p>'); ?>
</article>
