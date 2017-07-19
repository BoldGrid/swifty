<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-swifty';
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Enable sticky footer and attribution links.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	$boldgrid_framework_configs['temp']['attribution_links'] = true;
	
	// Disable background image and call to action.
	$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_image'] = false;
	$boldgrid_framework_configs['template']['call-to-action'] = 'disabled';

	// Assign menus, widgets, and actions to locations in generic header template.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]secondary' ),
		'5' => array( '[widget]boldgrid-widget-1' ),
		'6' => array( '[action]boldgrid_site_identity' ),
		'7' => array( '[action]boldgrid_primary_navigation' ),
		'8' => array( '[widget]boldgrid-widget-2' ),
		'13' => array( '[menu]tertiary' ),
	);

	// Assign menus, widgets, and actions to locations in generic footer template.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[widget]boldgrid-widget-3' ),
		'3' => array( '[menu]social' ),
		'5' => array( '[action]boldgrid_display_contact_block' ),
		'8' => array( '[action]boldgrid_display_attribution_links' ),
		'11' => array( '[menu]footer_center' ),
	);

	// Specify container classes.
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-header'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-content'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-footer'] = 'container-fluid';

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array(
			'default' => true,
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#ca5215',
				'#333333',
				'#ca5215',
				'#333333',
				'#ffffff',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#62717e',
				'#333333',
				'#62717e',
				'#333333',
				'#ffffff',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#141414',
			'colors' => array(
				'#6e2716',
				'#ffffff',
				'#6e2716',
				'#ffffff',
				'#141414',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#2d353d',
			'colors' => array(
				'#5b94ad',
				'#b54848',
				'#5b94ad',
				'#b54848',
				'#2d353d',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#353535',
			'colors' => array(
				'#99456e',
				'#ffffff',
				'#99456e',
				'#ffffff',
				'#353535',
			),
		),
	);

	// Override customizer options per subcategory.
	switch ( $boldgrid_framework_configs['inspiration']['subcategory_key'] ) {
		case 'Design':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 'Fitness':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 'Fashion':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		case 'Music':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		case 'General':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;
		case 'Home Repair':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;
		case 'Restaurant':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][4]['default'] = true;
			break;
		case 'Marketing':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][4]['default'] = true;
			break;

		// Default
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Enable Typography Controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Oswald';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 13;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'none';

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Lobster';
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
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h4 alt-font site-description';

	// Typography Relationships.
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.page-template-default .entry-title a'] = array(
		'type' => 'subheadings',
		'round' => 'floor',
		'amount' => 3.0,
	);

	// Button Classes.
	$boldgrid_framework_configs['components']['buttons']['variables']['button-primary-classes'] = '.btn';
	$boldgrid_framework_configs['components']['buttons']['variables']['button-secondary-classes'] = '.btn';

	// Social Icons.
	$boldgrid_framework_configs['social-icons']['size'] = 'large';

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['primary'] = "Primary Menu";
	$boldgrid_framework_configs['menu']['locations']['secondary'] = 'Header Top';
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = 'Header Bottom';
	$boldgrid_framework_configs['menu']['locations']['social'] = 'Footer Top';
	$boldgrid_framework_configs['menu']['locations']['footer_center'] = 'Footer Bottom';
	$boldgrid_framework_configs['menu']['footer_menus'][] = 'social';

	// Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Above Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-3']['name'] = 'Footer';

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

	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
