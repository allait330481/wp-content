<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package natures_sunset
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses natures_sunset_header_style()
 */
function natures_sunset_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'natures_sunset_custom_header_args', array(
		'default-image'			=> get_theme_file_uri( '/img/img.jpg' ),
		'default-text-color'     => '000000',
		'flex-height'            => true,
		'flext-width'			 => true,
		'wp-head-callback'       => 'natures_sunset_header_style',
		) ) );
		register_default_headers( array(
		'header-bg' => array(
			'url'           => get_theme_file_uri( '/img/img.jpg' ),
			'thumbnail_url' => get_theme_file_uri( '/img/img.jpg' ),
			'description'   => _x( 'Default', 'Default header image', 'natures-sunset' )
			),	
		) );
}
add_action( 'after_setup_theme', 'natures_sunset_custom_header_setup' );

if ( ! function_exists( 'natures_sunset_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see natures_sunset_custom_header_setup().
	 */
function natures_sunset_header_style() {
	$header_text_color = get_header_textcolor();
	$header_image = get_header_image();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( empty( $header_image ) && $header_text_color == get_theme_support( 'custom-header', 'default-text-color' ) ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
		.site-title,
		.site-description,
		.logo-container {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
		<?php
		// If the user has set a custom color for the text use that.
		else :
			?>
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
		<?php endif; ?>
		</style>
		<?php
	}
	endif;
