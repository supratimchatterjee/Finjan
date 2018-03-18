<?php
/**
Template Name: Our Team
 */

get_header(); ?>

	<section>
	<div class="uk-container uk-container-center">
		<div class="about-us our-team uk-block uk-margin-bottom">
			<h2>Our team</h2>
			<hr>
			<div class="uk-grid uk-grid-match" data-uk-grid-margin>
            <?php if (have_rows('team_page')):?>
            <?php while(have_rows('team_page')):the_row();?>
							<?php $tm_image = get_sub_field('image_team');?>
							<?php $tm_image = wp_get_attachment_image_src($tm_image, array('400','400'));
							$tm_image = $tm_image[0];?>
				<div class="uk-width-medium-1-2">
					<div class="uk-panel uk-panel-box">
						<div class="uk-panel-teaser">
							<img src="<?php echo $tm_image;?>" alt="">
						</div>
                        <div class="uk-panel-header uk-clearfix">
                        	<div class="uk-float-left">
                            	<h5><?php the_sub_field('title_team');?></h5>
                            </div>
                            <?php $in_link = get_sub_field('instragram_link');?>
                            <?php $twt_link = get_sub_field('twiter_link');?>
                            <?php $fb_link = get_sub_field('facebook_link');?>
                            <div class="panel-header header-social uk-float-right">
                                <?php if ($in_link):?><a href="<?php echo $in_link;?>"><img src="<?php echo get_template_directory_uri();?>/image/instagram.png" alt=""></a><?php endif;?>
                                <?php if ($twt_link):?><a href="<?php echo $twt_link;?>"><img src="<?php echo get_template_directory_uri();?>/image/twitter.png" alt=""></a><?php endif;?>
                               <?php if ($fb_link):?> <a href="<?php echo $fb_link;?>"><img src="<?php echo get_template_directory_uri();?>/image/fb.png" alt=""></a><?php endif;?>
                            </div>
                        </div>
                        <p><?php the_sub_field('description_team');?></p>

					</div>
				</div>
             <?php endwhile;?>
             <?php endif;?>

			</div>
		</div>
    </div>
 </section>
<?php
get_footer();
