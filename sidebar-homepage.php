<?php
/**
 * The template for the homepage featured section.
 *
 * @package Peak_Publishing
 */

if ( is_active_sidebar( 'homepage' ) ) :
	dynamic_sidebar( 'homepage' );
else :
	the_widget( 'Peak_Publishing_Featured_Section_Full' );
	the_widget( 'Peak_Publishing_Featured_Section_Small' );
	the_widget( 'Peak_Publishing_Featured_Section_Large' );
	the_widget( 'Peak_Publishing_Featured_Section_Spacer' );
endif;
