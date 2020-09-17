	<?php 
		// Copyright text
		$url = 'https://colorlib.com/';
		$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'montana' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
		$copyRight = !empty( montana_opt( 'montana_footer_copyright_text' ) ) ? montana_opt( 'montana_footer_copyright_text' ) : $copyText;
	?>

	<div class="copy-right_text">
		<div class="container">
			<div class="footer_border"></div>
				<div class="row">
					<div class="col-xl-8 col-md-7 col-lg-9">
						<p class="copy_right"><?php echo wp_kses_post( $copyRight ); ?></p>
					</div>

					<?php
					// Social profiles
					$social_opt = montana_opt('montana_social_profile_toggle');
					if ( $social_opt == true ) {
						$social_items = montana_opt('montana_social_profiles');
						if( is_array( $social_items ) && count( $social_items ) > 0 ){
							echo '<div class="col-xl-4 col-md-5 col-lg-3"><div class="socail_links"><ul>';
								foreach ($social_items as $value) {
									echo '<li><a href="'. esc_url($value['social_url']) .'"><i class="'. esc_attr($value['social_icon']) .'"></i></a><li>';
								}
							echo '</ul></div></div>';
						}          
					}  
					?>
				</div>
			</div>
		</div>
	</div>

	
    <!-- form itself start-->
	<div id="test-form" class="white-popup-block mfp-hide">
		<div class="popup_box ">
			<div class="popup_inner">
				<h3>Check Availability</h3>
					
				<?php echo do_shortcode('[contact-form-7 id="169" title="Book Room Popup Form"]');?>
			</div>
		</div>
	</div>
	<!-- form itself end-->