<?php
/**
 * @package a11yall
 */
?>
<?php 
if ( post_password_required() ) {
	return;
}

if (comments_open() OR have_comments()) : ?>
  <div id="commentblock">
  <?php if ( have_comments() ) : ?>
    <h4><?php 
			$one =  sprintf( __('One Response' , 'a11yall') );
			$more = sprintf( __('Responses' , 'a11yall') );
			comments_number( '', $one, '% '.$more ); // First arg is text for 0 responses 
		?></h4> 
    <ol>
      <?php wp_list_comments(array('avatar_size' => '56')); ?>
    </ol>
    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
    <p class="page-links">
		<?php 
      previous_comments_link();
      echo ' &nbsp; &nbsp; ';
      next_comments_link();
    ?>
    </p>
    <?php endif; // check for comment navigation ?>
    <?php endif; // end have_comments() ?>
    <?php comment_form(array('comment_notes_after' => '')); ?>
  </div><!--#commentblock-->
<?php endif; ?>