<?php
/**
 * @package a11yall
 *
 * search.php is for search results
 * Note: no sidebar
 */
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main">
  <div class="twelve columns alpha" role="main">
  <?php if ( have_posts() ) : ?>
    <h1 id="page-title"><?php _e('Search Results for ','a11yall'); ?>"<?php the_search_query(); ?>"</h1>
    <hr />
    <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <div class="entry">
          <?php the_excerpt(); ?>
        </div><!--.entry-->
	     <hr />
      </article>
     <?php endwhile; ?>
    <div class="nav-links"><p class="page-links"><?php posts_nav_link(' &nbsp; &nbsp; '); ?></p></div>
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