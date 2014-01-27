<?php
/**
 * @package a11yall
 */ 
?>
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
  <label for="searchbox" class="visuallyhidden">Enter keywords to search:</label>
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="searchbox" />
	<input type="submit" id="searchsubmit" value="Search" />
</form>
