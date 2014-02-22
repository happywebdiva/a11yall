<?php
/**
 * @package a11yall
 */
?>
<?php 
if ( post_password_required() ) {
	return;
}

if (comments_open()) : ?>
  <div id="commentblock">
  <h4><?php comments_number('', 'One Response', '% Responses' ); // First arg is text for 0 responses ?></h4> 
    <ol>
      <?php wp_list_comments(array('avatar_size' => '56')); ?>
    </ol>
    <?php comment_form(array('comment_notes_after' => '')); ?>
  </div><!--#commentblock-->
<?php endif; ?>