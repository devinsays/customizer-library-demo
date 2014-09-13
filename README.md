# Customizer Library Demo

An example theme that shows how to work with the Customizer Library.

## About

Read the description for the [Customizer Library](https://github.com/devinsays/customizer-library) project.

## Installation

To install this demo and the required submodule, use:
`git clone --recursive git@github.com:devinsays/customizer-library-demo`

The [Customizer Library](https://github.com/devinsays/customizer-library) is included in this theme as a git submodule.  To include it in your own projects the same way, navigate to the directory and use:

`git submodule add git@github.com:devinsays/customizer-library customizer-library`

## Define Options

This theme demo includes the following customizer options as examples:

* Logo
* Primary Color
* Secondary Color
* Border Color
* Primary Font (Google Fonts)
* Secondary Font (Google Fonts)
* Example Checkbox
* Example Select
* Example Radio
* Example Textarea

The options are defined as an array in "inc/customizer-options.php".

Here's an example of how to set up a customizer section for "Logo" and a customizer control the an image uploader:

~~~php
// Logo
$section = 'logo';

$sections[] = array(
	'id' => $section,
	'title' => __( 'Logo Example', 'demo' ),
	'priority' => '30'
);

$options['logo'] = array(
	'id' => 'logo',
	'label'   => __( 'Logo', 'demo' ),
	'section' => $section,
	'type'    => 'upload',
	'default' => '',
);
~~~

After all the options and sections are defined, load them with the Customizer Library:

~~~php
// Adds the sections to the $options array
$options['sections'] = $sections;

$customizer_library = Customizer_Library::Instance();
$customizer_library->add_options( $options );
~~~

## Styles

The Customizer Library has a helper class to output inline styles.  This code was originally developed by [The Theme Foundry](https://thethemefoundry.com/) for use in [Make](https://thethemefoundry.com/wordpress-themes/make/).  To see how it works, see "inc/styles.php".

CSS selector(s) and value are passed to Customizer_Library_Styles class like this:

~~~php
Customizer_Library_Styles()->add( array(
	'selectors' => array(
		'.primary'
	),
	'declarations' => array(
		'color' => $color
	)
) );
~~~

## Fonts

The Customizer Library has a helper functions to output font stacks and load inline fonts.  This code was also developed by [The Theme Foundry](https://thethemefoundry.com/) for use in [Make](https://thethemefoundry.com/wordpress-themes/make/).  You can see an example of font enqueing in "inc/mods.php":

~~~php
function demo_fonts() {

	// Font options
	$fonts = array(
		get_theme_mod( 'primary-font', customizer_library_get_default( 'primary-font' ) ),
		get_theme_mod( 'secondary-font', customizer_library_get_default( 'secondary-font' ) )
	);

	$font_uri = customizer_library_get_google_font_uri( $fonts );

	// Load Google Fonts
	wp_enqueue_style( 'demo_fonts', $font_uri, array(), null, 'screen' );

}
add_action( 'wp_enqueue_scripts', 'demo_fonts' );
~~~

Fonts can be used in inline styles like this:

~~~php
// Primary Font
$setting = 'primary-font';
$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
$stack = customizer_library_get_font_stack( $mod );

if ( $mod != customizer_library_get_default( $setting ) ) {

	Customizer_Library_Styles()->add( array(
		'selectors' => array(
			'.primary'
		),
		'declarations' => array(
			'font-family' => $stack
		)
	) );

}
~~~