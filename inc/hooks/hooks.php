<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'montana_preloader', 'montana_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'montana_header', 'montana_header_cb', 10 );

	/**
	 * Hook for before footer
	 *
	 */
	add_action( 'montana_footer', 'montana_before_footer_area', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'montana_footer', 'montana_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'montana_wrp_start', 'montana_wrp_start_cb', 10 );
	add_action( 'montana_wrp_end', 'montana_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'montana_blog_col_start', 'montana_blog_col_start_cb', 10 );
	add_action( 'montana_blog_col_end', 'montana_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'montana_blog_posts_thumb', 'montana_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'montana_blog_details_wrap_start', 'montana_blog_details_wrap_start_cb', 10 );
	add_action( 'montana_blog_details_wrap_end', 'montana_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'montana_blog_posts_title', 'montana_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'montana_blog_posts_meta', 'montana_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'montana_blog_posts_excerpt', 'montana_blog_posts_excerpt_cb', 10 );
	// add_action( 'montana_blog_posts_excerpt', 'montana_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'montana_blog_posts_info_link', 'montana_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'montana_blog_posts_content', 'montana_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'montana_blog_posts_share', 'montana_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'montana_blog_sidebar', 'montana_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'montana_blog_single_meta', 'montana_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'montana_page_content', 'montana_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'montana_fof', 'montana_fof_cb', 10 );

	

?>