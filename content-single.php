<?php
/**
 * @package A11Yall
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
  <h1 id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>"><?php the_title(); ?></h1>
  </header>
  <p class="postmetadata">
    Posted on <time datetime="<?php echo get_the_date(); ?>"><?php the_time('F j, Y') ?></time> by <?php the_author_link(); ?>
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
  <p class="postmetadata">
     Posted in <?php the_category(', ') ?><br /> 
  </p>
  <?php edit_post_link('Edit This Post', '<p class="button editlink">', '</p>'); ?>
</article>
