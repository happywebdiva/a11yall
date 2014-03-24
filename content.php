<?php
/**
 * @package a11yall
 */
?>

<?php
  echo '<time datetime="' . date('Y-m-d') . '" class="datehead">';
  the_time('F j, Y');
  echo '</time>';
?>					
<article <?php post_class('blurbing') ?> id="post-<?php the_ID(); ?>">
	<?php 
  if(has_post_thumbnail()) {
    echo '<figure class="thumbnailsquare">';
    the_post_thumbnail('thumbnail');
    echo '</figure>';
  }
  ?>  
  <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  <div class="entry clearfix">
    <?php the_excerpt(); ?>
  </div><!--.entry-->
  <p class="postmetadata">
    Posted in <?php the_category(', ') ?>
    <?php 
		if ( comments_open() ) {
			echo '<span class="commentlink">';
			comments_popup_link('Comments', '1 Comment', '% Comments'); 
			echo '</span>';
		}
		?>
  </p>  
</article>