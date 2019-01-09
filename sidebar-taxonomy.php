<?php
/**
 * The template for the taxonomies featured section.
 *
 * @package Peak_Publishing
 */

if ( is_active_sidebar( 'taxonomy' ) ) :
	dynamic_sidebar( 'taxonomy' );
else :
	the_widget( 'Peak_Publishing_Featured_Section_Full' );
endif;
