<?php
/*
 * Template for displaying Search Form.
 * 
 * @package TW
 */
?>

<form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url( '/' )) ?>">
    <div class="search-box clearfix">
        <input type="text" value="" name="s" id="s" placeholder="<?php _e('Search...', 'afford') ?>" />
        <input type="submit" id="searchsubmit" value="<?php _e('Go', 'afford') ?>" />
    </div>
</form>