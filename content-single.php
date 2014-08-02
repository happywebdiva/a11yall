<?php
/**
 * @package a11yall
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
  <h1 id="page-title"><?php the_title(); ?></h1>
  </header>
  <div class="entry clearfix">
    <?php
     the_content();
		  wp_link_pages( array(
				'before' => '<p class="page-links">Pages: ',
				'after'  => '</p>',
			) );
		?>
  </div><!--.entry-->
  <p class="postmetadata">
    Posted on <time datetime="<?php echo date('Y-m-d'); ?>"><?php the_time('F j, Y') ?></time> by <?php the_author_link(); ?><br />
    Categories: <?php the_category(', '); ?><br />
    <?php the_tags(); ?>  
  </p>
  <?php 
		$editpost =  sprintf( __('Edit This Post' , 'a11yall') );
		edit_post_link($editpost, '<p class="button editlink">', '</p>'); 
	?>
</article>
