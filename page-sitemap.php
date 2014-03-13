<?php
/* Template Name: Site Map Template
 * @package a11yall
 */
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main">
  <div class="eleven columns alpha" role="main">
	<?php 
    while ( have_posts() ) : the_post();
    get_template_part( 'content', 'page' );
    endwhile;
  ?>
    <div class="hentry">
      <h2>List of Pages</h2>
      <ul>
        <?php wp_list_pages('title_li=&depth=2&sort_column=post_title'); ?>
      </ul>
		</div>      
    <div class="hentry">
      <h2>Blog Archives</h2>
      <ul>
        <?php wp_get_archives('type=monthly&limit=12'); ?>
      </ul>
		</div>      
  </div><!--.eleven.columns-->
	<div class="five columns omega">
  <?php get_sidebar('page'); ?>
  </div><!--.five.columns-->
</div><!--.sixteen.columns-->
<?php get_footer(); ?>