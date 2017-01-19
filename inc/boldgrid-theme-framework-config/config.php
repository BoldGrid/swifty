<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	// Text domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-gridone';
	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;
	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;
	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;
	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';
	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = '1';
	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = 'generic';
	// Assign menus, widgets, and actions to locations in generic header template.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]secondary' ),
		'5' => array( '[widget]boldgrid-widget-1' ),
		'6' => array( '[action]boldgrid_site_identity' ),
		'7' => array( '[menu]social' ),
		'8' => array( '[widget]boldgrid-widget-2' ),
		'11' => array( '[action]boldgrid_primary_navigation' ),
		'13' => array( '[menu]tertiary' ),
	);

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array(
			'default' => true,
			'format' => 'palette-primary',
			'colors' => array(
				'#333333',
				'#ca5215',
				'#ffffff',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#333333',
				'#62717e',
				'#ffffff',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#b54848',
				'#5b94ad',
				'#2d353d',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#42282c',
				'#78343f',
				'#84abaa',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#ffffff',
				'#a1c1be',
				'#59554e',
			),
		),
	);

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Oswald';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 13;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'none';

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Oswald';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	// Typography Navigation.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Muli';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 20;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 150;

	// Typography Tagline Classes.
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h4 alt-font';

	// Typography Relationships.
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['h2.title-main'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 6.1,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.entry-header h1.entry-title'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 1.6,
	);

	// Icons.
	$boldgrid_framework_configs['social-icons']['size'] = 'large';

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['secondary'] = 'Above Header';
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = 'Below Header';
	$boldgrid_framework_configs['menu']['locations']['social'] = 'Upper Right';

	// Background.
	$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_image'] = false;

	// Name Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Above Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Site Title';

	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Lobster';
	$controls['logo_font_size']['default'] = 60;
	$controls['logo_margin_top']['default'] = 0;
	$controls['logo_margin_bottom']['default'] = 0;
	$controls['logo_letter_spacing']['default'] = 0;
	$controls['logo_text_transform']['default'] = 'none';

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
