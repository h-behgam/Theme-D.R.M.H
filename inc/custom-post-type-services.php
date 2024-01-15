<?php
///////////////////////////////////////////////
//------- Custom Post type Services -----------//
///////////////////////////////////////////////
function drmh_custom_post_type_Services()
{
    $labels = array(
        'name'              => __('Services', 'drmh'),
        'singular_name'     => __('Services', 'drmh'),
        'menu_name'         => __('خدمات', 'drmh'),
        'name_admin_bar'    => __('خدمات', 'drmh'),
        'add_new'           => __('افزودن خدمات', 'drmh'),
        'add_new_item'      => __('Add Services Item', 'drmh'),
        'new_item'          => __('New Services', 'drmh'),
        'edit_item'         => __('ویرایش خدمات', 'drmh'),
        'view_item'         => __('نمایش خدمات', 'drmh'),
        'all_items'         => __('همه خدمات', 'drmh'),
        'search_items'      => __('جستجو خدمات', 'drmh'),
        'parent_item_colon' => __('Parent Services','drmh'),
        'not_found'         => __('No Services found','drmh'),
        'not_found_in_trash'=> __('No Services found in trash','drmh')
    );
    $args = array(
        'labels'            => $labels,
        'description'       => __('Description.', 'drmh'),
        'public'            => true,
        'publicly_queryable'=> true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menus' => true,
        'show_in_rest'      => true,
        'taxonomies'        => array('Services-types'),
        'query_var'         => true,
        'rewrite'           => array('slug' => 'Services'),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'menu_icon'         => 'dashicons-id-alt',
        'hierarchical'      => true,
        'menu_position'     => null,
        'supports'          => array('title', 'editor', 'author', 'thumbnail','excerpt')

    );
    register_post_type('Services', $args);
}
add_action('init','drmh_custom_post_type_Services');
