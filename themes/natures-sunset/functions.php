<?php 
add_action( 'wp_enqueue_scripts', 'natures_sunset_enqueue_styles' );
function natures_sunset_enqueue_styles() {
	wp_enqueue_style( 'natures-sunset-parent-style', get_template_directory_uri() . '/style.css' ); 
} 

require_once( get_stylesheet_directory() . '/inc/custom-header.php' );

function natures_sunset_load_google_fonts() {
	wp_enqueue_style( 'natures-sunset-google-fonts', '//fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap' ); 
}
add_action( 'wp_enqueue_scripts', 'natures_sunset_load_google_fonts' );




function natures_sunset_customize_register( $wp_customize ) {


	/* Footer Settings */
	$wp_customize->add_section( 'postfeed_btn', array(
		'title'      => __('Post feed button','natures-sunset'),
		'priority'   => 20,
		'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_setting( 'postfeed_button_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'postfeed_button_color', array(
		'label'       => __( 'Continue reading button color', 'natures-sunset' ),
		'section'     => 'postfeed_btn',
		'priority'   => 1,
		'settings'    => 'postfeed_button_color',
	) ) );

	$wp_customize->add_setting( 'postfeed_button_color_bg', array(
		'default'           => '##00bc87',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'postfeed_button_color_bg', array(
		'label'       => __( 'Continue reading button background color', 'natures-sunset' ),
		'section'     => 'postfeed_btn',
		'priority'   => 1,
		'settings'    => 'postfeed_button_color_bg',
	) ) );



	$wp_customize->add_section( 'footer_settings', array(
		'title'      => __('Footer Settings','natures-sunset'),
		'priority'   => 20,
		'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_setting( 'footer_background', array(
		'default'           => '#151b26',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background', array(
		'label'       => __( 'Background Color', 'natures-sunset' ),
		'section'     => 'footer_settings',
		'priority'   => 1,
		'settings'    => 'footer_background',
	) ) );

	$wp_customize->add_setting( 'footer_widget_headline', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_headline', array(
		'label'       => __( 'Widget Headline Color', 'natures-sunset' ),
		'section'     => 'footer_settings',
		'priority'   => 1,
		'settings'    => 'footer_widget_headline',
	) ) );
	$wp_customize->add_setting( 'footer_widget_border', array(
		'default'           => '#333',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_border', array(
		'label'       => __( 'Widget Border Color', 'natures-sunset' ),
		'section'     => 'footer_settings',
		'priority'   => 1,
		'settings'    => 'footer_widget_border',
	) ) );
	$wp_customize->add_setting( 'footer_widget_text', array(
		'default'           => '#a3a3a3',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_text', array(
		'label'       => __( 'Widget Text Color', 'natures-sunset' ),
		'section'     => 'footer_settings',
		'priority'   => 1,
		'settings'    => 'footer_widget_text',
	) ) );
	$wp_customize->add_setting( 'footer_widget_link', array(
		'default'           => '#c5c5c5',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_link', array(
		'label'       => __( 'Widget Link Color', 'natures-sunset' ),
		'section'     => 'footer_settings',
		'priority'   => 1,
		'settings'    => 'footer_widget_link',
	) ) );

	$wp_customize->add_setting( 'footer_copyright_link', array(
		'default'           => '#fab526',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_copyright_link', array(
		'label'       => __( 'Copyright Link Color', 'natures-sunset' ),
		'section'     => 'footer_settings',
		'priority'   => 1,
		'settings'    => 'footer_copyright_link',
	) ) );

	$wp_customize->add_setting( 'footer_copyright_text', array(
		'default'           => '#dedede',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_copyright_text', array(
		'label'       => __( 'Copyright Text Color', 'natures-sunset' ),
		'section'     => 'footer_settings',
		'priority'   => 1,
		'settings'    => 'footer_copyright_text',
	) ) );
}
add_action( 'customize_register', 'natures_sunset_customize_register' );



if(! function_exists('natures_sunset_customize_register_output' ) ):
	function natures_sunset_customize_register_output(){
		?>

		<style type="text/css">
			/* Navigation */
			.main-navigation a, #site-navigation span.dashicons.dashicons-menu:before, .iot-menu-left-ul a { color: <?php echo esc_attr(get_theme_mod( 'navigation_link_color')); ?>; }
			.navigation-wrapper, .main-navigation ul ul, #iot-menu-left{ background: <?php echo esc_attr(get_theme_mod( 'navigation_background_color')); ?>; }
			<?php if ( get_theme_mod( 'hide_navigation' ) == '1' ) : ?>
				.navigation-wrapper {display: none;}
			<?php endif; ?>
			<?php if ( get_theme_mod( 'display_navigation_tagline' ) == '1' ) : ?>
				.site-description {display:block;}
				.main-navigation a {line-height:63px;}
			<?php endif; ?>

			a.readmore-btn { color: <?php echo esc_attr(get_theme_mod( 'postfeed_button_color')); ?>; }
			a.readmore-btn { background: <?php echo esc_attr(get_theme_mod( 'postfeed_button_color_bg')); ?>; }


			.single .content-area a, .page .content-area a { color: <?php echo esc_attr(get_theme_mod( 'global_link')); ?>; }
			.page .content-area a.button, .single .page .content-area a.button {color:#fff;}
			a.button,a.button:hover,a.button:active,a.button:focus, button, input[type="button"], input[type="reset"], input[type="submit"] { background: <?php echo esc_attr(get_theme_mod( 'global_link')); ?>; }
			.tags-links a, .cat-links a{ border-color: <?php echo esc_attr(get_theme_mod( 'global_link')); ?>; }
			.single main article .entry-meta *, .single main article .entry-meta, .archive main article .entry-meta *, .comments-area .comment-metadata time{ color: <?php echo esc_attr(get_theme_mod( 'global_byline')); ?>; }
			.single .content-area h1, .single .content-area h2, .single .content-area h3, .single .content-area h4, .single .content-area h5, .single .content-area h6, .page .content-area h1, .page .content-area h2, .page .content-area h3, .page .content-area h4, .page .content-area h5, .page .content-area h6, .page .content-area th, .single .content-area th, .blog.related-posts main article h4 a, .single b.fn, .page b.fn, .error404 h1, .search-results h1.page-title, .search-no-results h1.page-title, .archive h1.page-title{ color: <?php echo esc_attr(get_theme_mod( 'global_headline')); ?>; }
			.comment-respond p.comment-notes, .comment-respond label, .page .site-content .entry-content cite, .comment-content *, .about-the-author, .page code, .page kbd, .page tt, .page var, .page .site-content .entry-content, .page .site-content .entry-content p, .page .site-content .entry-content li, .page .site-content .entry-content div, .comment-respond p.comment-notes, .comment-respond label, .single .site-content .entry-content cite, .comment-content *, .about-the-author, .single code, .single kbd, .single tt, .single var, .single .site-content .entry-content, .single .site-content .entry-content p, .single .site-content .entry-content li, .single .site-content .entry-content div, .error404 p, .search-no-results p { color: <?php echo esc_attr(get_theme_mod( 'global_content')); ?>; }
			.page .entry-content blockquote, .single .entry-content blockquote, .comment-content blockquote { border-color: <?php echo esc_attr(get_theme_mod( 'global_content')); ?>; }
			.error-404 input.search-field, .about-the-author, .comments-title, .related-posts h3, .comment-reply-title{ border-color: <?php echo esc_attr(get_theme_mod( 'global_borders')); ?>; }

			<?php if ( get_theme_mod( 'fullwidth_pages' ) == '1' ) : ?>
				.page #primary.content-area { width: 100%; max-width: 100%;}
				.page aside#secondary { display: none; }
			<?php endif; ?>

			<?php if ( get_theme_mod( 'fullwidth_posts' ) == '1' ) : ?>
				.single div#primary.content-area { width: 100%; max-width: 100%; }
				.single aside#secondary { display: none; }
			<?php endif; ?>

			/* Blog Feed */
			body.custom-background.blog, body.blog, body.custom-background.archive, body.archive, body.custom-background.search-results, body.search-results{ background-color: <?php echo esc_attr(get_theme_mod( 'blog_site_background')); ?>; }
			.blog main article, .search-results main article, .archive main article{ background-color: <?php echo esc_attr(get_theme_mod( 'blog_post_background')); ?>; }
			.blog main article h2 a, .search-results main article h2 a, .archive main article h2 a{ color: <?php echo esc_attr(get_theme_mod( 'blog_post_headline')); ?>; }
			.blog main article .entry-meta, .archive main article .entry-meta, .search-results main article .entry-meta{ color: <?php echo esc_attr(get_theme_mod( 'blog_post_byline')); ?>; }
			.blog main article p, .search-results main article p, .archive main article p { color: <?php echo esc_attr(get_theme_mod( 'blog_post_excerpt')); ?>; }
			.nav-links span, .nav-links a, .pagination .current, .nav-links span:hover, .nav-links a:hover, .pagination .current:hover { background: <?php echo esc_attr(get_theme_mod( 'blog_post_navigation_bg')); ?>; }
			.nav-links span, .nav-links a, .pagination .current, .nav-links span:hover, .nav-links a:hover, .pagination .current:hover{ color: <?php echo esc_attr(get_theme_mod( 'blog_post_navigation_link')); ?>; }

			<?php if ( get_theme_mod( 'blog_feed_fullwidth' ) == '1' ) : ?>
				.fp-blog-grid {
					width: 100% !important;
					max-width: 100% !important;
				}
				.blog #secondary,
				.archive #secondary,
				.search-results #secondary {
					display:none;
				}
				.blog main article, .search-results main article, .archive main article {
					flex: 0 0 32%;
					max-width: 32%;
				}
				.blog main, .search-results main, .archive main {
					display: flex;
					flex-wrap: wrap;
					justify-content: space-between;
				}
				@media screen and (max-width: 900px) {
					.blog main article, .search-results main article, .archive main article {
						flex: 0 0 48%;
						max-width: 48%;
					}
				}
				@media screen and (max-width: 700px) {
					.blog main article, .search-results main article, .archive main article {
						flex: 0 0 100%;
						max-width: 100%;
					}
					.blog main article, .search-results main article, .archive main article {
						display: inline-block;
						flex-wrap: none;
						float: left;
						width: 100%;
						justify-content: none;
					}
				}
			<?php endif; ?>



		</style>
	<?php }
	add_action( 'wp_head', 'natures_sunset_customize_register_output' );
endif;
