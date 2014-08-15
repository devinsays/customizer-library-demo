<?php
/**
 * Markup required to showcase Customizer Library features.
 *
 * @package Customizer Library Demo
 */?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<h1 class="primary"><?php _e( 'Customizer Library Demo', 'demo' ); ?></h1>

<?php wp_footer(); ?>

</body>
</html>