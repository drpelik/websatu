<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset') ?>" />
<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
<!-- Created by Artisteer v4.0.0.58475 -->
<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php
remove_action('wp_head', 'wp_generator');
if (is_singular() && get_option('thread_comments')) {
	wp_enqueue_script('comment-reply');
}
wp_head();
?>
</head>
<body <?php body_class(); ?>>

<div id="art-main">

<?php if(theme_has_layout_part("header")) : ?>
<header class="clearfix art-header<?php echo (theme_get_option('theme_header_clickable') ? ' clickable' : ''); ?>"><?php get_sidebar('header'); ?>



    <div class="art-shapes">

<div class="art-object1408867259" data-left="3.24%"></div>
<div class="art-textblock art-object1782933654" data-left="49.93%">
        <div class="art-object1782933654-text">DR AZIMUTH BIOHERBAL</div>
    
</div><div class="art-textblock art-object1245139951" data-left="68.58%">
        <div class="art-object1245139951-text">KEKAL CANTIK SIHAT SECARA SEMULAJADI</div>
    
</div><div class="art-textblock art-object385407657" data-left="38.82%">
        <div class="art-object385407657-text"><span style="font-family: Arvo, Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 36px; letter-spacing: 2px; line-height: 36px; white-space: nowrap; "><a href="#" contenteditable="true" id="headline" style="line-height: 43px; text-decoration: none; text-shadow: rgb(23, 23, 23) 1px 0px 0px, rgb(23, 23, 23) 1px 0px 0px, rgb(23, 23, 23) 0px -1px 0px, rgb(23, 23, 23) 0px 1px 0px, rgba(0, 0, 0, 0.980469) 0px 0px 10px; color: rgb(255, 255, 255); outline-color: rgb(100, 100, 100); cursor: text; "><br style="cursor: text; "></a></span></div>
    
</div>
            </div>

                        
                    
</header>
<?php endif; ?>

<nav class="art-nav clearfix">
    <div class="art-nav-inner">
    <?php
	echo theme_get_menu(array(
			'source' => theme_get_option('theme_menu_source'),
			'depth' => theme_get_option('theme_menu_depth'),
			'menu' => 'primary-menu',
			'class' => 'art-hmenu'
		)
	);
?> 
        </div>
    </nav>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix">
