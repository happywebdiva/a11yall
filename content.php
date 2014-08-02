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
    <?php 
			_e('Posted in ','a11yall');
			the_category(', '); 
		?>
    <?php 	
		if (!post_password_required() AND (comments_open() OR (get_comments_number() > 0))) {
			echo '<span class="commentlink">';
			$one =  sprintf( __('1 Comment' , 'a11yall') );
			$more = sprintf( __('Comments' , 'a11yall') );
			comments_popup_link($more, $one, '% '.$more); 
			echo '</span>';
		}
		?>
  </p>  
</article>