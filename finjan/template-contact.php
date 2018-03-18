<?php
/**
Template Name: Contact

 */

get_header(); ?>
 <?php if ( have_posts() ) : ?>
 <?php while ( have_posts() ) : the_post(); ?>	
<section>
	<div class="uk-container uk-container-center">
    	<div class="about-us uk-block">
        	<h2>CONTACT</h2>
            <hr>
            <div class="uk-grid">
            	<div class="uk-width-medium-6-10">
                	<div class="uk-panel uk-panel-box contact-detail uk-text-bold">
                    	<?php the_content();?>
                     </div>
                </div>
                <div class="uk-width-medium-4-10">
                	<div class="uk-panel uk-panel-box contact-address">
                    	<?php the_field('right_section');?>
                        <?php $inst_con = get_field('instagram_link_con');?>
                        <?php $twt_con = get_field('twiter_link_cont');?>
                        <?php $fb_con = get_field('facebook_link_con');?>
                        <div class="contact-social">
                            <?php if($inst_con):?><a href="<?php echo $inst_con;?>"><img src="<?php echo get_template_directory_uri();?>/image/contact-insta.png" alt=""></a><?php endif;?>
                            <?php if($twt_con):?><a href="<?php echo $twt_con;?>"><img src="<?php echo get_template_directory_uri();?>/image/contact-tweet.png" alt=""></a><?php endif;?>
                            <?php if($fb_con):?><a href="<?php echo $fb_con;?>"><img src="<?php echo get_template_directory_uri();?>/image/contact-fb.png" alt=""></a><?php endif;?>
                    	</div>  
                    </div>
                <div
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; endif;?>
<?php
get_footer();
