<?php
/**
 * Template for displaying author archive page.
 * 
 * @package TW
 */
?>
<?php get_header() ?>
<div class="archive-meta-container">
    <div class="archive-head">
        <h1 class="page-title author"><?php _e('Author Archives', 'afford') ?></h1>
    </div>
    <div class="archive-description">
        <?php
        if (get_the_author_meta('description')) :
            printf('%s', "<p>" . get_the_author_meta('description') . "</p>");
        else :
            printf(__('Archive of the posts written by author :', 'afford').' %s.', get_the_author());
        endif;
        ?>
    </div>
</div><!-- Archive Meta Container ends -->

<div id="content-section" class="content-section content-wrap">

    <?php get_sidebar() ?>

    <div class="inner-content-section">
        
              <?php if ( have_posts() ) : the_post() ?>


                    <ul class="loop-container-section clearfix">

                        <?php
                            // Here starts the loop
                            rewind_posts();
                            while (have_posts()): the_post();
                                get_template_part('loop', 'archive');
                            endwhile;
                        ?>                

                    </ul><!-- loop-container-section ends -->
                    
                    <?php afford_archive_nav() // Calls the 'Previous' and 'Next' Post Links ?>

              <?php else : ?>

                    <?php afford_404_show() // Function dedicated for handling empty queries. ?>

              <?php endif ?>

        
    </div><!-- inner-content-section ends -->
    
</div><!-- Content-section ends here -->

<?php get_footer() ?>