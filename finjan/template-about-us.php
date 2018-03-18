<?php
/**
Template name: About Us
 */

get_header(); ?>
<?php if ( have_posts() ) : ?>
 <?php while ( have_posts() ) : the_post(); ?>
<!--main-body-content-->
<section>
	<div class="uk-container uk-container-center">
    	<div class="about-us uk-block uk-width-1-1">
        	<h2>ABOUT US</h2>
               <?php
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,array('1200','320'));
					$image_url = $image_url[0];
				?>
            <hr>
            <div class="about-banner"><img class="uk-width-1-1" src="<?php echo $image_url; ?>"</div>
            <div class="uk-panel uk-panel-box uk-margin-top">
            	<div class="uk-grid" data-uk-grid-margin>
                	<div class="uk-width-medium-1-1">
                    	<?php the_content();?>
                        </div>
                    <div class="uk-width-medium-3-10 partner">
                    	<div class="uk-panel-header uk-margin-bottom">
                        	<h3>OUR PARTNERS</h3>
                        </div>
                        <?php if( have_rows('partner_logo')):?>
                        <div class="brand-images uk-text-center">
                        <?php while(have_rows('partner_logo')):the_row();?>
                        	<a href="<?php the_sub_field('link_partner');?>"><img src="<?php the_sub_field('image_partner');?>" alt=""></a>
                            <?php endwhile;?>
                        </div>
                        <?php endif;?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!--main-body-content-->
<?php endwhile;?>
<?php endif;?>
<?php

get_footer();
