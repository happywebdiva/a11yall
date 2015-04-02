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
				'before' => '<p class="page-links">' . __( 'Pages: ', 'a11yall' ),
				'after'  => '</p>',
			) );
		?>
  </div><!--.entry-->
  <p class="postmetadata"><?php 
		_e('Posted on <time datetime="','a11yall');
		echo date('Y-m-d') . '">'; 
		the_time('F j, Y');
		_e('</time> by ','a11yall');
		the_author_link(); 
		echo '<br />';
		_e('Categories: ','a11yall');
		the_category(', '); 
		echo '<br />';
		the_tags();
  ?></p>
  <?php 
		$editpost =  sprintf( __('Edit This Post' , 'a11yall') );
		edit_post_link($editpost, '<p class="button editlink">', '</p>'); 
	?>
</article>
