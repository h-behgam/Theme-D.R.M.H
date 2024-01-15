<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
</head>

<body>
    <!-- partial:index.partial.html -->

    <header class="">
        <div class="row header-top wrapper container">
            <div class="row align-items header-top-logo">
                <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" class="header-logo">
                    <svg version="1.1" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m92.96 38.54c1.75 5.69 8.95 7.25 11.53 1.88 3.09-6.42-5.67-20.98-9.68-26.01q-1.96-2.45-3.06-4.75a2.18 2.17 74.2 0 1 1.73-3.11c27.03-2.78 47.84 22.13 43.12 47.67q-1.67 9.01-3.88 13.97c-0.61 1.38-2.59 1.44-4.04 1.11-18.63-4.33-38.55-7.33-57.68-6.7q-24.39 0.81-50.48 6.99c-1.79 0.42-3.07-1.13-3.71-2.75-3.47-8.74-5.28-18.36-3.56-27.56 7.22-38.49 58.95-44.78 76.42-9.92 1.39 2.77 2.34 6.1 3.29 9.18z"
                            fill="#1b83f5" />
                        <path
                            d="m140.93 85.97c5.91 4.86 1.75 13.01-5.68 10.98q-4.75-1.29-9.46-2.72a0.6 0.59-81.4 0 0-0.77 0.57q-0.02 13.97-0.11 28.19c-0.15 22.18-29.73 28.95-38.29 8.4-2.02-4.86-1.68-12.06-4.89-15.87-3.29-3.91-10.3-3.95-13.49 0.02-3.14 3.89-2.6 10.35-4.64 15.17-7.18 16.92-30.48 17.6-37.17 0.13q-1.39-3.65-1.42-10.96-0.04-12.5 0-25.11a0.65 0.65 0 0 0-0.84-0.62c-3.67 1.16-9.82 3.73-13.35 2.87-5.91-1.44-5.78-9.98-0.07-11.8q65.37-20.74 129.67 0.47a1.57 1.51 72.7 0 1 0.51 0.28z"
                            fill="#1b83f5" />
                    </svg>
                </a>
                <div id="title" class="">
                    <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" class="textColor">دکتر <span
                            class="lightBlue">مهناز
                            حسینی</span></a>
                    <p>جراح, دندانپزشک زیبایی</p>
                </div>
            </div>
            <div class="row info align-items">
                <div class="row align-items">
                    <div class="column">
                        <h4>نشانی:</h4>
                        <p>شیراز, خیابان معدل</p>
                    </div>
                    <i class="location">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                    </i>
                </div>
                <div class="row align-items">
                    <div class="column">
                        <h4>تلفن تماس:</h4>
                        <a href="tel:+989173114103">0917-311-4103</a>
                    </div>
                    <i class="location">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-telephone-inbound" viewBox="0 0 16 16">
                            <path
                                d="M15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0zm-12.2 1.182a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                    </i>
                </div>

            </div>
        </div>
        <div class="row header-color">
            <div class="container header-main row">
                <nav class="main-nav">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'header-main-menu',
                            'container' => 'ul',
                            'menu_class' => 'navbar-nav me-auto main-menu'
                        )
                    ); ?>
                </nav>
                <div id="call-action" class="wrapper">
                    <div class="header-search">
                        <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
                            <input id="shoppingCartInput" type="text" name="s" value="<?php echo get_search_query(); ?>"
                                placeholder="<?php echo esc_attr_x('جستجو ...', 'placeholder'); ?>" maxlength="50"
                                required="required">
                            <input type="submit" id="search-input" value="">
                            <!-- <input type="hidden" name="post_type" value="product"> -->
                        </form>
                    </div>
                    <div class="request-counsel top-to-left">
                        <a title="درخواست مشاوره دکتر مهناز حسینی" href="<?php bloginfo('url'); ?>/reservation/" class="counsel" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#fff"
                                class="bi bi-heart-pulse" viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053.918 3.995.78 5.323 1.508 7H.43c-2.128-5.697 4.165-8.83 7.394-5.857.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17c3.23-2.974 9.522.159 7.394 5.856h-1.078c.728-1.677.59-3.005.108-3.947C13.486.878 10.4.28 8.717 2.01L8 2.748ZM2.212 10h1.315C4.593 11.183 6.05 12.458 8 13.795c1.949-1.337 3.407-2.612 4.473-3.795h1.315c-1.265 1.566-3.14 3.25-5.788 5-2.648-1.75-4.523-3.434-5.788-5Z" />
                                <path
                                    d="M10.464 3.314a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.5a.5.5 0 0 0 0 1H4a.5.5 0 0 0 .416-.223l1.473-2.209 1.647 4.118a.5.5 0 0 0 .945-.049l1.598-5.593 1.457 3.642A.5.5 0 0 0 12 9h3.5a.5.5 0 0 0 0-1h-3.162l-1.874-4.686Z" />
                            </svg>
                            درخواست مشاوره
                        </a>
                    </div>
                </div>
            </div>
            <div class="side-menu-close">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

    </header>



    <!-- side menu start -->
    <div class="side-menu-wrap">
        <div class="row align-items side-menu-logo">
            <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" class="header-logo">
            <svg version="1.1" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg">
<path d="m92.96 38.54c1.75 5.69 8.95 7.25 11.53 1.88 3.09-6.42-5.67-20.98-9.68-26.01q-1.96-2.45-3.06-4.75a2.18 2.17 74.2 0 1 1.73-3.11c27.03-2.78 47.84 22.13 43.12 47.67q-1.67 9.01-3.88 13.97c-0.61 1.38-2.59 1.44-4.04 1.11-18.63-4.33-38.55-7.33-57.68-6.7q-24.39 0.81-50.48 6.99c-1.79 0.42-3.07-1.13-3.71-2.75-3.47-8.74-5.28-18.36-3.56-27.56 7.22-38.49 58.95-44.78 76.42-9.92 1.39 2.77 2.34 6.1 3.29 9.18z" fill="#1b83f5"/>
<path d="m140.93 85.97c5.91 4.86 1.75 13.01-5.68 10.98q-4.75-1.29-9.46-2.72a0.6 0.59-81.4 0 0-0.77 0.57q-0.02 13.97-0.11 28.19c-0.15 22.18-29.73 28.95-38.29 8.4-2.02-4.86-1.68-12.06-4.89-15.87-3.29-3.91-10.3-3.95-13.49 0.02-3.14 3.89-2.6 10.35-4.64 15.17-7.18 16.92-30.48 17.6-37.17 0.13q-1.39-3.65-1.42-10.96-0.04-12.5 0-25.11a0.65 0.65 0 0 0-0.84-0.62c-3.67 1.16-9.82 3.73-13.35 2.87-5.91-1.44-5.78-9.98-0.07-11.8q65.37-20.74 129.67 0.47a1.57 1.51 72.7 0 1 0.51 0.28z" fill="#1b83f5"/>
</svg>
            </a>
            <div id="title" class="">
                <a href="/" title="<?php bloginfo('name'); ?>" class="textColor">دکتر <span class="lightBlue">مهناز
                        حسینی</span></a>
            </div>
        </div>
        <nav class="side-menu-nav">
            <!-- auto generated side menu from top header menu -->
        </nav>
        <div class="side-menu-close side-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>