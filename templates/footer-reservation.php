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

	$montana_reservation_text      	  = !empty( montana_opt( 'montana_reservation_text' ) ) ? montana_opt( 'montana_reservation_text' ) : '';
	$montana_reservation_phone_number = !empty( montana_opt( 'montana_reservation_phone_number' ) ) ? montana_opt( 'montana_reservation_phone_number' ) : '';
	?>
	<!-- forQuery_start -->
	<div class="forQuery">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1 col-md-12">
					<div class="Query_border">
						<div class="row align-items-center justify-content-center">
							<div class="col-xl-6 col-md-6">
								<div class="Query_text">
									<p><?php echo esc_html( $montana_reservation_text )?></p>
								</div>
							</div>
							<div class="col-xl-6 col-md-6">
								<div class="phone_num">
									<a href="#" class="mobile_no"><?php echo esc_html( $montana_reservation_phone_number )?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- forQuery_end-->