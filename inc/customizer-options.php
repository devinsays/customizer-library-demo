<?php
/**
 * Defines customizer options
 *
 * @package Customizer Library Demo
 */

function customizer_library_demo_options() {

	// Theme defaults
	$primary_color = '#5bc08c';
	$secondary_color = '#666';

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	// Stores all the panels to be added
	$panels = array();

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Logo
	$section = 'logo';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Image Example', 'demo' ),
		'priority' => '30',
		'description' => __( 'Example section description.', 'demo' )
	);

	$options['logo'] = array(
		'id' => 'logo',
		'label'   => __( 'Logo', 'demo' ),
		'section' => $section,
		'type'    => 'image',
		'default' => ''
	);

	// File Upload
	$section = 'upload';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'File Upload Example', 'demo' ),
		'priority' => '30',
		'description' => __( 'Example section description.', 'demo' )
	);

	$options['upload'] = array(
		'id' => 'upload',
		'label'   => __( 'upload', 'demo' ),
		'section' => $section,
		'type'    => 'upload',
		'default' => '',
	);

	// Colors
	$section = 'colors';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Colors', 'demo' ),
		'priority' => '80'
	);

	$options['primary-color'] = array(
		'id' => 'primary-color',
		'label'   => __( 'Primary Color', 'demo' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $primary_color,
	);

	$options['secondary-color'] = array(
		'id' => 'secondary-color',
		'label'   => __( 'Secondary Color', 'demo' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $secondary_color,
	);

	$options['border'] = array(
		'id' => 'border',
		'label'   => __( 'Border Color', 'demo' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $primary_color,
	);

	// Typography
	$section = 'typography';
	$font_choices = customizer_library_get_font_choices();

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Typography', 'demo' ),
		'priority' => '80'
	);

	$options['primary-font'] = array(
		'id' => 'primary-font',
		'label'   => __( 'Primary Font', 'demo' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Monoton'
	);

	$options['secondary-font'] = array(
		'id' => 'secondary-font',
		'label'   => __( 'Secondary Font', 'demo' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Merriweather'
	);

	// More Examples
	$section = 'examples';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'More Examples', 'demo' ),
		'priority' => '90'
	);

	$options['example-text'] = array(
		'id' => 'example-text',
		'label'   => __( 'Example Text Input', 'demo' ),
		'section' => $section,
		'type'    => 'text',
	);

	$options['example-url'] = array(
		'id' => 'example-url',
		'label'   => __( 'Example URL Input', 'demo' ),
		'section' => $section,
		'type'    => 'url',
	);

	$options['example-checkbox'] = array(
		'id' => 'example-checkbox',
		'label'   => __( 'Example Checkbox', 'demo' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 0,
	);

	$choices = array(
		'choice-1' => 'Choice One',
		'choice-2' => 'Choice Two',
		'choice-3' => 'Choice Three'
	);

	$options['example-select'] = array(
		'id' => 'example-select',
		'label'   => __( 'Example Select', 'demo' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $choices,
		'default' => 'choice-1'
	);

	$options['example-radio'] = array(
		'id' => 'example-radio',
		'label'   => __( 'Example Radio', 'demo' ),
		'section' => $section,
		'type'    => 'radio',
		'choices' => $choices,
		'default' => 'choice-1'
	);

	$options['example-textarea'] = array(
		'id' => 'example-textarea',
		'label'   => __( 'Example Textarea', 'demo' ),
		'section' => $section,
		'type'    => 'textarea',
		'default' => __( 'Example textarea text.', 'demo'),
	);

	$options['example-range'] = array(
		'id' => 'example-range',
		'label'   => __( 'Example Range Input', 'demo' ),
		'section' => $section,
		'type'    => 'range',
		'input_attrs' => array(
	        'min'   => 0,
	        'max'   => 10,
	        'step'  => 1,
	        'style' => 'color: #0a0',
		)
	);

	// Panel Example
	$panel = 'panel';

	$panels[] = array(
		'id' => $panel,
		'title' => __( 'Panel Examples', 'demo' ),
		'priority' => '100'
	);

	$section = 'panel-section';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Panel Section', 'demo' ),
		'priority' => '10',
		'panel' => $panel
	);

	$options['example-panel-text'] = array(
		'id' => 'example-panel-text',
		'label'   => __( 'Example Text Input', 'demo' ),
		'section' => $section,
		'type'    => 'text',
	);

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Adds the panels to the $options array
	$options['panels'] = $panels;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'customizer_library_demo_options' );
