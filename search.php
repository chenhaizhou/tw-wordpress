<?php
/*
 * Template for displaying search queries.
 * 
 * @package TW
 */
?>
<?php get_header() ?>

<div class="archive-meta-container">
    <div class="archive-head">
        <h1><?php _e('Search Results', 'afford') ?></h1>
    </div>
    <div class="archive-description">
        <?php printf(__('We have found following content based on your search query: %s.', 'afford'), get_search_query()) ?>
    </div>

</div><!-- Archive Meta Container ends -->

<div id="content-section" class="content-section">

    <?php get_sidebar() ?>

    <div class="inner-content-section">
        
              <?php if( have_posts() ) : ?>

                    <ul class="loop-container-section post-list clearfix">

                        <?php
                            // Here starts the loop
                            while (have_posts()): the_post();
                                get_template_part('loop', 'archive');
                            endwhile;
                        ?>                

                    </ul><!-- loop-container-section ends -->
                    
                    <?php afford_archive_nav() // Calls the 'Previous' and 'Next' Post Links. ?>

              <?php else : ?>

                    <?php afford_404_show() // Function dedicated for handling empty queries. ?>

              <?php endif;?>

                    
    </div><!-- inner-content-section ends -->
    
</div><!-- Content-section ends here -->

<?php get_footer() ?>