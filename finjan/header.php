<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Finjan
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="uk-container uk-container-center">
<div id="my-id" class="uk-offcanvas uk-visible-small">
    <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
    	<nav class="uk-navbar tm-offcanvas-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'primar-menu', 'menu_id' => 'primar-menu', 'menu_class' => 'uk-navbar-nav','container' => false ) ); ?>
        </nav>
    
    </div>
        
</div>
<a class="uk-hidden-large uk-float-right tm-offcanavs" href="#my-id" data-uk-offcanvas><i class="uk-icon-bars"></i></a>
</div>

<header class="site-header">    	
   <a href="<?php bloginfo('url') ?>" class="uk-navbar-brand logo"><img src="<?php the_field('header_logo','option');?>" alt=""></a>
        <div class="site-navbar uk-visible-large">
            <div class="uk-container uk-container-center">
                <nav class="uk-navbar">
<?php wp_nav_menu( array( 'theme_location' => 'primar-menu', 'menu_id' => 'primar-menu', 'menu_class' => 'uk-navbar-nav','container' => false ) ); ?>
                </nav>
             </div>
       </div>
       
       
       
       <div class="floating-div">
                	
                    <?php $inst_link = get_field('instagram_link','option');?>
                    <?php $twtr_link = get_field('twiter_link','option');?>
                    <?php $fb_link = get_field('facebook_link','option');?>
                    <?php $trip_link = get_field('trip_advisor_link','option');?>
                    <div class="floting-social">
                        <?php if(!empty($inst_link)):?><a href="<?php echo $inst_link;?>"><img src="<?php echo get_template_directory_uri();?>/image/footer-insta.png" alt=""></a><?php endif;?>
                        <?php if(!empty($twtr_link)):?><a href="<?php echo $twtr_link;?>"><img src="<?php echo get_template_directory_uri();?>/image/footer-tweet.png" alt=""></a><?php endif;?>
                        <?php if(!empty($fb_link)):?><a href="<?php echo $fb_link;?>"><img src="<?php echo get_template_directory_uri();?>/image/footer-fb.png" alt=""></a><?php endif;?>
                        
                         <?php if(!empty($trip_link)):?><a href="<?php echo $trip_link;?>"><img src="<?php echo get_template_directory_uri();?>/image/tripadvisor1.png" alt=""></a><?php endif;?>
                        
                    </div>                        
                </div>
</header>

<?php if( is_page_template('template-home.php') ) {?>
<?php } else { ?>
<section>
	<div class=" uk-container uk-container-center">
        <div class="trip-search uk-float-right">
        	<span>SEARCH TRAVELS</span>
        <form  class="uk-form uk-display-inline-block uk-border-rounded" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
        	<input type="submit" id="searchsubmit" value="" />
            <input class="uk-border-rounded" placeholder="Search" type="text" value="" name="s" id="s" />
            
        
        </form>
        </div>
    </div>
</section>




<?php } ?>