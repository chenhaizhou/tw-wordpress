<?php
/*
 * Header Section of TW Theme.
 * 
 * @package TW
 */
?>
<!DOCTYPE html >
<!--[if IE 6]>
<html id="ie6" <?php language_attributes() ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes() ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes() ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes() ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="wrapper" class="wrapper">
        <?php if(!afford_get_option('disable_header')): ?>
            <header class="header">
                <div class="banner">
                    <div class="logo">
                        <?php afford_logo() ?>
                    </div>
                </div>
                <nav id="nav-section" class="nav-section clearfix">
                    <div class="content-wrap content-section">
                        <div id="primarymenu-resp" class="primarymenu-resp"><i class="mdf mdf-bars"></i><span><?php _e('Menu', 'afford') ?></span></div>
                        <div class="search-wrap">
                            <?php get_search_form() ?>
                            <i class="icon-search"></i>
                        </div>
                        <?php afford_nav() ?>
                    </div>
                </nav>
            </header>
        <?php endif; ?>
