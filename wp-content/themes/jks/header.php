<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title><?php bloginfo( 'name' ); ?> | <?php is_front_page() ? bloginfo( 'description' ) : wp_title( '' ); ?></title>
    <link rel="icon" type="image/x-icon" href="<?php the_field('favicon', 'option'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="wrapper">
        <!-- Begin Header -->
        <header class="header position-relative w-100 top-0 shadow">
            <div class="header__top">
                <div class="container">
                    <div class="header__top-item d-flex align-items-center text-white">
                        <div class="icon-box"><i class="fas fa-phone-alt"></i></div>
                        <a class="text-white" href="tel:<?php the_field( 'hotline_1', 'option' ); ?>"><?php the_field( 'hotline_1', 'option' ); ?></a>
                        <div class="separate"></div>
                        <div class="icon-box"><i class="fas fa-map-marker-alt"></i></div>
                        <?php the_field( 'office_1', 'option' ); ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="header__desktop d-xl-flex d-none align-items-center justify-content-between py-2">
                    <div class="header__desktop-logo">
                        <a href="<?php echo get_home_url(); ?>" class="d-inline-block">
                            <img class="shadow" src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="header__desktop-nav d-flex align-items-center">
                        <?php
                        $primary_menu = array(
                            'theme_location'  => 'primary',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'slimmenu',
                            'menu_id'         => 'primary-menu',
                            'fallback_cb'     => '',
                            'walker'          => '',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul data-breakpoint="800" id="%1$s" class="main-nav list-unstyled d-flex m-0">%3$s</ul>',
                            'depth'           => 0,
                        );

                        if ( has_nav_menu( 'primary' ) ) {
                            wp_nav_menu( $primary_menu );
                        }
                        ?>
                    </div>
                    <div class="header__search">
                        <button class="header__search--btn"><i class="far fa-search btn-font-download"></i></button>
                    </div>
                </div>

                <div class="header__mobile d-block d-xl-none position-relative">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="header__mobile-nav">
                            <div class="action-nav d-flex justify-content-center align-items-center">
                                <a id="call-mobile-menu" href="#" class="hamburger-menu"><i class="far fa-bars"></i></a>
                            </div>
                        </div>
                        <div class="header__mobile-logo d-flex align-items-center">
                            <a href="<?php echo get_home_url(); ?>">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="Logo">
                            </a>
                        </div>
                        <div class="header__search">
                            <button class="header__search--btn">
                                <i class="far fa-search btn-font-download"></i>
                            </button>
                        </div>
                    </div>
                    <div id="content-mobile-menu" class="header__mobile-navcontent position-absolute bg-white">
                    <?php
                        $mobile_menu = array(
                            'theme_location'  => 'primary',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'slimmenu',
                            'menu_id'         => 'mobile-menu',
                            'fallback_cb'     => '',
                            'walker'          => '',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul data-breakpoint="800" id="%1$s" class="list-unstyled list-unstyled pt-3 pb-3 mb-0 border-top">%3$s</ul>',
                            'depth'           => 1,
                        );

                        if ( has_nav_menu( 'primary' ) ) {
                            wp_nav_menu( $mobile_menu );
                        }
                        ?>  
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->
