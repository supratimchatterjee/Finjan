<?php
/**
 * Template Name: Instagram
 * @package Finjan
 */

get_header(); ?>

<section>
	<div class="uk-container uk-container-center">
    	<?php echo do_shortcode('[instashow columns="6" rows="2"]');?>
    </div>
</section>
<?php
get_footer();
