<?php
/**
 * The template for the taxonomies MEM.
 *
 * @package Peak_Publishing
 */

if ( is_active_sidebar( 'taxonomy' ) ) :
	dynamic_sidebar( 'taxonomy' );
else :
	the_widget( 'Peak_Publishing_MEM_Block_Full' );
endif;
