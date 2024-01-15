<?php
/**
 * This snippet has been updated to reflect the official supporting of options pages by CMB2
 * in version 2.2.5.
 *
 * If you are using the old version of the options-page registration,
 * it is recommended you swtich to this method.
 */
add_action('cmb2_admin_init', 'drmh_register_theme_options_metabox');
/**
 * Hook in and register a metabox to handle a theme options page and adds a menu item.
 */
function drmh_register_theme_options_metabox()
{

	/**
	 * Registers options page menu item and form.
	 */
	$cmb = new_cmb2_box(
		array(
			'id' => 'drmh_option_metabox',
			'title' => esc_html__('تنظیمات قالب', 'drmh'),
			'object_types' => array('options-page'),

			/*
			 * The following parameters are specific to the options-page box
			 * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
			 */

			'option_key' => 'drmh_options', // The option key and admin menu page slug.
			// 'icon_url'        => 'dashicons-palmtree', // Menu icon. Only applicable if 'parent_slug' is left empty.
			// 'menu_title'      => esc_html__( 'Options', 'drmh' ), // Falls back to 'title' (above).
			// 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
			// 'capability'      => 'manage_options', // Cap required to view options-page.
			// 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
			// 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
			// 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
			// 'save_button'     => esc_html__( 'Save Theme Options', 'drmh' ), // The text for the options-page save button. Defaults to 'Save'.
		));

	/*
	 * Options fields ids only need
	 * to be unique within this box.
	 * Prefix is not needed.
	 */

	$main_settings = $cmb->add_field(
		array(
			'id' => 'main_settings',
			'type' => 'group',
			'description' => __( 'تنظیمات صفحه اصلی', 'cmb2' ),
			'repeatable' => false,
			// use false if you want non-repeatable group
			'options' => array(
				'group_title' => __('تنظیمات صفحه اصلی', 'cmb2'),
				// since version 1.1.4, {#} gets replaced by row number
				// 'add_button'        => __( 'Add Another Entry', 'cmb2' ),
				// 'remove_button'     => __( 'Remove Entry', 'cmb2' ),
				// 'sortable'          => true,
				'closed' => true,
				// true to have the groups closed by default
				// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
			),
		));

	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb->add_group_field($main_settings, array(
		'name' => 'عکس پزشک',
		'desc'    => 'در این قسمت عکس پزشک برای صفحه اصلی قرار داده شود.',
		'id' => 'dr-image',
		'type' => 'file',
		'options' => array(
			'url' => false,
			
		),
	));
	$cmb->add_group_field($main_settings, array(
		'name' => 'توضیحات درباره پزشک',
		'desc'    => '',
		'id' => 'dr-description',
		'type' => 'text',
	));
	$cmb->add_group_field($main_settings, array(
		'name' => 'توضیحات بخش سایر خدمات',
		'desc'    => '',
		'id' => 'dr-more-description',
		'type' => 'text',
	));
	$cmb->add_group_field($main_settings, array(
		'name' => 'توضیحات بخش فوتر',
		'desc'    => 'در این قسمت متن توضیح پزشک در قسمت فوتر را قرار دهید',
		'id' => 'dr-description-footer',
		'type' => 'text',
	));

}

/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string $key     Options array key
 * @param  mixed  $default Optional default value
 * @return mixed           Option value
 */
function drmh_get_option($key = '', $default = false)
{
	if (function_exists('cmb2_get_option')) {
		// Use cmb2_get_option as it passes through some key filters.
		return cmb2_get_option('drmh_options', $key, $default);
	}

	// Fallback to get_option if CMB2 is not loaded yet.
	$opts = get_option('drmh_options', $default);

	$val = $default;

	if ('all' == $key) {
		$val = $opts;
	} elseif (is_array($opts) && array_key_exists($key, $opts) && false !== $opts[$key]) {
		$val = $opts[$key];
	}

	return $val;
}