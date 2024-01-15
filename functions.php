<?php
/*! 
    Created on : July 21, 2023, 5:51:35 PM
    Author     : Mohammad Hadi Behgam
    Email      : h.behgam@gmail.com
    Tel        : 09379874085
*/

///////////////////////////////////////////////
//-------------- Requirements ---------------//
///////////////////////////////////////////////
//INC - Custom post types
include get_template_directory().'/inc/custom-post-type-services.php';

//INC - Custom Taxonomies
include get_template_directory().'/inc/custom-taxonomy-services.php';

// INC ACF fields
include get_template_directory().'/inc/acf.php';


//define CMB2 file path
define("PATH", get_template_directory_uri());
require_once dirname(__FILE__) . '/plugins/cmb2/init.php';
require_once dirname(__FILE__) . '/functions/cmb2-functions.php';

// Create Menu
function drmh_menu_setup()
{
    // add_theme_support('title-tag');
    // add_theme_support('woocommerce');
    register_nav_menus(
        array(
            'header-main-menu' => 'منوی اصلی',
            'footer-sidbar1' => 'منوی پایین اول',
            'footer-sidbar2' => 'منوی پایین دوم',
        )
    );
}
add_filter('after_setup_theme', 'drmh_menu_setup');

function tirestan_enqueue()
{
    wp_enqueue_style('reset', PATH . '/assets/css/reset.css', array(), '1.0.0');
    wp_enqueue_style('style', PATH . '/assets/css/style.css', array(), '1.0.0');

    wp_enqueue_script('jqueryJs', PATH . '/assets/js/jquery-3.7.0.min.js', array(), '', true);
    if (is_home()) {
        wp_enqueue_style('swiperCss', PATH . '/assets/css/swiper-bundle.min.css', array(), '');
        wp_enqueue_style('swiperRes', PATH . '/assets/css/swiper-reset.css', array(), '');
        wp_enqueue_style('indexCss', PATH . '/assets/css/index.css', array(), '');
        wp_enqueue_style('aosCss', PATH . '/assets/css/aos.css', array(), '');
        
        wp_enqueue_script('swiperJs', PATH . '/assets/js/swiper-bundle.min.js', array(), '', true);
        wp_enqueue_script('aosJs', PATH . '/assets/js/aos.js', array(), '', true);
    }
    if (is_single()) {
        wp_enqueue_style('swiperCss', PATH . '/assets/css/swiper-bundle.min.css', array(), '');
        wp_enqueue_style('componentsCss', PATH . '/assets/css/components.css', array(), '');
        wp_enqueue_style('singleCss', PATH . '/assets/css/single.css', array(), '');
        
        wp_enqueue_script('swiperJs', PATH . '/assets/js/swiper-bundle.min.js', array(), '', true);
        wp_enqueue_script('singleJs', PATH . '/assets/js/single.js', array(), '', true);
    }
    if (is_archive()) {
        wp_enqueue_style('pageCss', PATH . '/assets/css/page.css', array(), '');
    }
    if (is_page('faq')) {
        wp_enqueue_style('faqCss', PATH . '/assets/css/faq.css', array(), '');
        wp_enqueue_script('faqJs', PATH . '/assets/js/faq.js', array(), '', true);
    }
    if (is_page('contact-us')) {
        wp_enqueue_style('contact-usCss', PATH . '/assets/css/contact-us.css', array(), '');
    }
    if (is_page('about-us')) {
        wp_enqueue_style('about-usCss', PATH . '/assets/css/about-us.css', array(), '');
    }
    if (is_page('reservation')) {
        wp_enqueue_style('contact-usCss', PATH . '/assets/css/contact-us.css', array(), '');
    }
    wp_enqueue_script('main', PATH . '/assets/js/main.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'tirestan_enqueue');

// add thumbnails
add_theme_support('post-thumbnails');


/*
 * remove url from comments
 */
add_filter('comment_form_default_fields', 'unset_url_field');
function unset_url_field($fields)
{
    if (isset($fields['url']))
        unset($fields['url']);
    if (isset($fields['cookies']))
        unset($fields['cookies']);
    return $fields;
}

