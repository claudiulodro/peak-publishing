<?php
/**
 * The template for the homepage MEM.
 *
 * @package Peak_Publishing
 */

if ( is_active_sidebar( 'homepage' ) ) :
	dynamic_sidebar( 'homepage' );
else :
	the_widget( 'Peak_Publishing_MEM_Block_Full' );
	the_widget( 'Peak_Publishing_MEM_Block_Small' );
	the_widget( 'Peak_Publishing_MEM_Block_Large' );
	the_widget( 'Peak_Publishing_MEM_Block_Spacer' );
endif;
