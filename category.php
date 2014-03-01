<?php
/**
 * @package a11yall
 */
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main">
  	<div class="twelve columns alpha" role="main">
		<?php if ( have_posts() ) : ?>
	  	<h1 id="archive-title">Category Archives: <?php single_cat_title(); ?></h1>  
    	<?php while ( have_posts() ) : the_post(); ?>
      	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        	<time datetime="' . date('Y-m-d') . '" class="datehead"><?php the_time('F j, Y'); ?></time>
          <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
          <div class="entry">
          	<?php 
							the_excerpt(); 
							// wp_link_pages();
							edit_post_link('edit', '<p>', '</p>');
						?>
          </div><!--.entry-->
          <p class="postmetadata">
             Posted by <?php the_author_link(); ?> in <?php the_category(', ') ?>
						<?php 
            if ( comments_open() ) {
              echo '<br />';
              comments_popup_link('Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); 
            }
            ?>
          </p>
				</article>
        <hr />
			<?php endwhile; ?>
    <?php else : ?>
			<h1>Not Found</h1>
	    <p>We're sorry.  The posts you were looking for could not be found.</p>
      <p>Perhaps using the search form below would help? </p>
      <?php get_search_form(); ?>
    <?php endif; ?>
  </div><!--.twelve.columns-->

	<div class="four columns omega">
  <?php get_sidebar(); ?>
  </div><!--.four.columns-->
  
</div><!--.sixteen.columns-->
<?php get_footer(); ?>
