<?php
/**
 * Template for displaying tag archive posts.
 * 
 * @package TW
 */
?>
<?php get_header() ?>
<div id="content-section" class="content-section">
    <?php get_sidebar() ?>
    <div class="inner-content-section">
        <div class="author-info-box">
            <div class="count">
                <strong>“<?php printf(' %s', single_term_title('', false)); ?>”相关文章，</strong>共有<span><?php printf(count_user_posts(get_the_author_meta( 'ID' ), 'post')) ?></span>篇
            </div>
            <div class="tag-info">
                
                </p>
            </div>

        </div>

              <?php if( have_posts() ) : ?>

                    <?php if( have_posts() ) : ?>

                    <ul class="loop-container-section post-list clearfix">

                        <?php
                            // Here starts the loop
                            while (have_posts()): the_post();
                                get_template_part('loop', 'tag');
                            endwhile;
                        ?>                

                    </ul><!-- loop-container-section ends -->

                    <?php endif; ?>
                    
                    
                    <?php afford_archive_nav() // Calls the 'Previous' and 'Next' Post Links  ?>

              <?php else : ?>

                    <?php afford_404_show() // Function dedicated for handling empty queries. ?>

              <?php endif ?>

    </div><!-- inner-content-section ends -->
    
</div><!-- Content-section ends here -->

<?php get_footer() ?>