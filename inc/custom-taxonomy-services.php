<?php
///////////////////////////////////////////////
//----- Register Taxonomy for Services ------//
///////////////////////////////////////////////

function drmh_create_taxonomies_Services()
{
    // Add new taxonomy, make it hierarchical (like categories)

    $labels = array(
        'name'              => __('Services Types', 'drmh'),
        'singular_name'     => __('Services Types', 'drmh'),
        'search_items'      => __('Search Services Types','drmh'),
        'all_items'         => __('All Services Types','drmh'),
        'parent_item'       => __('Parent Services Type','drmh'),
        'parent_item_colon' => __('Parent Services Type:','drmh'),
        'edit_item'         => __('Edit Services Type','drmh'),
        'update_item'       => __('Update Services Type','drmh'),
        'add_new_item'      => __('افزودن دسته جدید خدمات','drmh'),
        'new_item_name'     => __('نام دسته جدید','drmh'),
        'menu_name'         => __('دسته ها', 'drmh'),
    );

    $args = array(
        'hierarchical'      => true,
        'label'             => __('Services Types', 'drmh'),
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'services-types'),
    );

    register_taxonomy('services-types', 'services', $args);
}
// hook into the init action and call create_taxonomies when it fires

add_action( 'init', 'drmh_create_taxonomies_services', 0 );
