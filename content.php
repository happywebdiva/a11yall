<?php
/**
 * @package a11yall
 */
?>

<?php
  echo '<time class="datehead">';
  the_time('F j, Y');
  echo '</time>';
?>					
<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
  <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  <div class="entry">
    <?php the_excerpt(); ?>
  </div><!--.entry-->
  <p class="postmetadata">
    Posted by <?php the_author_link(); ?> in <?php the_category(', ') ?><br /> 
    <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
  </p>
</article>
<hr />