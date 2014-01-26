<?php
/**
 * @package A11Yall
 */
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main">
  	<div class="twelve columns alpha" role="main">
		<?php if ( have_posts() ) : ?>   	
      <h1>
				<?php if ( is_day() ) : ?>
    			Daily Archives for <?php echo get_the_date(); ?>
				<?php elseif ( is_month() ) : ?>
    			Monthly Archives for <?php echo get_the_date( 'F Y' ); ?>
				<?php elseif ( is_year() ) : ?>
    			Yearly Archives for <?php echo get_the_date( 'Y' ); ?>
				<?php elseif ( is_category() ) : ?>
    			<?php single_cat_title('Archive for the &#8216;'); ?>&#8217;
      	<?php else : ?>
        	Archives
        <?php endif; ?>
     </h1>

    <hr />
		<?php while ( have_posts() ) : the_post(); ?>

    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <time class="datehead"><?php the_time('F j, Y'); ?></time>
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
		<?php endwhile; ?>
  <?php 
		else : 
  		get_template_part( 'content', 'none' );
    endif;
	?>
  </div><!--.twelve.columns-->

	<div class="four columns omega">
  <?php get_sidebar(); ?>
  </div><!--.four.columns-->
  
</div><!--.sixteen.columns-->
<?php get_footer(); ?>
