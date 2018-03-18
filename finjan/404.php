<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Finjan
 */

get_header(); ?>

	<div class="uk-container uk-container-center">
    	<div class="about-us uk-block">
        		<h2 class="uk-text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'finjan' ); ?></h2>
					<hr>
					
                    <div class="uk-text-center">
		
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'finjan' ); ?></p>

					<p><?php get_search_form();?></p>
                    </div>

		</div>
			
</div>

<?php
get_footer();
