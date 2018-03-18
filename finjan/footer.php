<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Finjan
 */

?>
  <div class="uk-block uk-hidden">
    <div class="uk-container uk-container-center">
    	<div data-uk-slideset="{small: 2, medium: 4, large: 5, autoplay: true}">
          <div class="uk-slidenav-position uk-margin">
         <?php if(have_rows('clients','option')):?>
              <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-2 uk-grid-width-medium-1-4 uk-grid-width-large-1-5">
               <?php while(have_rows('clients','option')):the_row();?>
								 <?php
								   $sf_image = get_sub_field('logo_cl');
								   $sf_image = wp_get_attachment_image_src($sf_image, 'full');
								   $sf_image = $sf_image[0];
								 ?>
                  <a href="<?php the_sub_field('link_cl');?>"><li><img src="<?php echo $sf_image;?>"></li></a>
             	<?php endwhile;?>
              </ul>
             <?php endif;?>
              <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
              <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
          </div>
        </div>
    </div>
  </div>
<footer class="footer">
	<div class="uk-block uk-block-secondary">
    	<div class="uk-container uk-container-center">
        	<div class="uk-grid uk-grid-match" data-uk-grid-margin>
            	<div class="uk-width-medium-4-10">
                	<h4 class="uk-contrast">COMPANY</h4>
                    <?php if(have_rows('footer_menu','option')):?>
                        <ul>
							<?php while(have_rows('footer_menu','option')):the_row();?>
                                <li><a href="<?php the_sub_field('link_footer');?>"><?php the_sub_field('label_footr');?></a></li>
                                <?php endwhile;?>
                        </ul>
                    <?php endif;?>
                </div>
                <div class="uk-width-medium-3-10">
                	<h4 class="uk-contrast">COMPANY</h4>
                   <a href="<?php the_field('phone_number_one','option');?>"><?php the_field('phone_number_one','option');?></a>
                   <a href="<?php the_field('phone_number_two','option');?>"><?php the_field('phone_number_two','option');?></a>
                   <a href="<?php the_field('email_address','option');?>"><?php the_field('email_address','option');?></a>
                </div>
                <div class="uk-width-medium-3-10">
                	<h4 class="uk-contrast">CONNECT WITH US</h4>
                    <?php $inst_link = get_field('instagram_link','option');?>
                    <?php $twtr_link = get_field('twiter_link','option');?>
                    <?php $fb_link = get_field('facebook_link','option');?>
                    <?php $trip_link = get_field('trip_advisor_link','option');?>
                    <div class="footer-social">
                        <?php if(!empty($inst_link)):?><a href="<?php echo $inst_link;?>"><img src="<?php echo get_template_directory_uri();?>/image/footer-insta.png" alt=""></a><?php endif;?>
                        <?php if(!empty($twtr_link)):?><a href="<?php echo $twtr_link;?>"><img src="<?php echo get_template_directory_uri();?>/image/footer-tweet.png" alt=""></a><?php endif;?>
                        <?php if(!empty($fb_link)):?><a href="<?php echo $fb_link;?>"><img src="<?php echo get_template_directory_uri();?>/image/footer-fb.png" alt=""></a><?php endif;?>

                         <?php if(!empty($trip_link)):?><a href="<?php echo $trip_link;?>"><img src="<?php echo get_template_directory_uri();?>/image/tripadvisor1.png" alt=""></a><?php endif;?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
