<?php
/**
 * Markup required to showcase Customizer Library features.
 *
 * @package Customizer Library Demo
 */ ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php _e( 'Customizer Library Demo', 'demo' ); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<h1 class="primary">
		<?php if ( get_theme_mod( 'logo', false ) ) {
			echo '<img src="' . esc_url( get_theme_mod( 'logo' ) ) . '">';
		} else { ?>
			<?php _e( 'Customizer Library', 'demo' ); ?>
		<?php } ?>
	</h1>
	<h2 class="secondary"><?php _e( 'Try it Out', 'demo' ); ?></h2>

	<?php do_action( 'customizer-library-notices' ); ?>

	<div class="border"></div>

<?php wp_footer(); ?>
</body>
</html>