<?php
/*
 * Template for displaying the loop
 * 
 * @package TW
 */
global $afford_loop_count;
?>
<?php if(!isset($afford_loop_count)){ $afford_loop_count = 1; } else { $afford_loop_count++;} ?>
<li class="loop-section-col post-item">
    <div class="header-bar">
      <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php echo __('Permalink to', 'afford'). ' ' ?><?php the_title_attribute() ?>"><?php the_title() ?></a></h2>
      <div class="loop-post-meta">
           
           <a class="author-avatar" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
           </a>

           <strong class="author loop-meta-author"><?php the_author_posts_link() ?></strong>
           <time><?php echo get_the_time('Y.m.d') ?></time>
           
      </div>
    </div>
    <div class="post-content">
      <?php if ( has_post_thumbnail() ) { ?>
        <div class="loop-thumbnail"><?php the_post_thumbnail( 'afford-thumb' ) ?></div>
      <?php } ?>
      <?php the_excerpt() ?>
    </div>
    <div class="footer-bar">
    <!--
      <span class="loop-meta-comments"><?php comments_popup_link( __('没有评论', 'afford'), __('1 评论', 'afford'), '% '.__('评论', 'afford'), 'comments-link', __('No Comments','afford')); ?></span>
      <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . __('Pages:', 'afford') . '</span>', 'after' => '</div>')) ?>
-->
      <span class="zan">
        <i class="icon-wifi_tethering"></i>
        <?php if( get_post_meta($post->ID,'specs_zan',true) ){
                        echo get_post_meta($post->ID,'specs_zan',true);
                        } else {
                  echo '0';
                }?>
         点赞
      </span>
      <span class="read"><?php post_views(' ', '阅读'); ?></span>
    </div>
</li>