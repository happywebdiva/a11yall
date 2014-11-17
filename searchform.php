<?php
/**
 * @package a11yall
 */ 
?>
<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
  <label for="searchbox2" class="visuallyhidden">Enter keywords to search:</label>
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="searchbox2" />
	<input type="submit" id="searchsubmit" value="Search" />
</form>
