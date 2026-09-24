/**
 * Notice for Elementor
 *
 * Shown in the Elementor preview until answered: asks whether to switch off
 * Elementor's default colours and typography in favour of the theme's, and
 * records the reply over admin-ajax. No jQuery.
 *
 * @package Montana
 */

/* global montanaElementorNotice */

(function () {
	'use strict';

	function init() {
		var notice = window.montanaElementorNotice;
		if ( ! notice ) {
			return;
		}

		var style = '<style>.montana-disable-elementor-styling{position:fixed;z-index:9999;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.8)}.montana-elementor-notice-wrapper{position:fixed;top:50%;left:50%;max-width:380px;border-radius:6px;color:#6d7882;background-color:#fff;text-align:center;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.montana-elementor-notice-body{padding:10px 20px;font-size:12px;line-height:1.5}.montana-elementor-notice-header{padding:10px 0 20px;color:#6d7882;font-size:13px;font-weight:700}.montana-elementor-notice-buttons{border-top:1px solid #e6e9ec}.montana-elementor-notice-buttons>a{display:inline-block;width:50%;padding:13px 0;font-size:15px;font-weight:700;text-align:center}.montana-elementor-notice-buttons>a.montana-do-nothing{border-right:1px solid #e6e9ec;color:#6d7882}.montana-elementor-notice-buttons>a.montana-disable-default-styles{color:#9b0a46}</style>';

		var dialog = style + '<div class="montana-disable-elementor-styling">' +
			'<div class="montana-elementor-notice-wrapper">' +
				'<div class="montana-elementor-notice-header">Montana supports default styling for Elementor widgets</div>' +
				'<div class="montana-elementor-notice-body">Do you want to disable Elementors\' default styles and use the theme defaults?</div>' +
				'<div class="montana-elementor-notice-buttons">' +
					'<a href="#" class="montana-do-nothing" data-reply="no">No</a>' +
					'<a href="#" class="montana-disable-default-styles" data-reply="yes">Yes</a>' +
				'</div>' +
			'</div>' +
		'</div>';

		document.body.insertAdjacentHTML( 'afterbegin', dialog );

		Array.prototype.forEach.call( document.querySelectorAll( '.montana-elementor-notice-buttons > a' ), function ( button ) {
			button.addEventListener( 'click', function () {
				var reply = button.getAttribute( 'data-reply' );
				var body = new URLSearchParams();
				body.append( 'reply', reply );
				body.append( 'nonce', notice.nonce );
				body.append( 'action', 'elementor_desiable_default_style' );

				fetch( notice.ajaxurl, { method: 'POST', body: body, credentials: 'same-origin' } ).then( function ( res ) {
					if ( ! res.ok ) {
						return;
					}
					if ( reply === 'yes' ) {
						parent.location.reload();
					} else {
						fadeOutAndRemove( document.querySelector( '.montana-disable-elementor-styling' ) );
					}
				} );
			} );
		} );
	}

	// jQuery's fadeOut( 500 ), then remove.
	function fadeOutAndRemove( el ) {
		if ( ! el ) {
			return;
		}
		if ( ! el.animate ) {
			el.remove();
			return;
		}
		el.animate( [ { opacity: 1 }, { opacity: 0 } ], { duration: 500 } ).onfinish = function () {
			el.remove();
		};
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
}());
