<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Montana
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$montana_instagram_userid      	= !empty( montana_opt( 'montana_instagram_userid' ) ) ? montana_opt( 'montana_instagram_userid' ) : 'colorlib';
	$montana_instagram_gallery_item = !empty( montana_opt( 'montana_instagram_gallery_item' ) ) ? montana_opt( 'montana_instagram_gallery_item' ) : '5';
	?>
	
    <!-- instragram_area_start -->
    <div class="instragram_area" data-username="<?php echo esc_attr( $montana_instagram_userid )?>" data-items="<?php echo esc_attr( $montana_instagram_gallery_item )?>"></div>
    <!-- instragram_area_end -->