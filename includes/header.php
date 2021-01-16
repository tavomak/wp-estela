<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WNWJQ2C');</script>
    <!-- End Google Tag Manager -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNWJQ2C"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php bk_navbar_before();?>

    <div class="container-fluid bg-light bk-sticky--nav p-0">
        <nav class="py-3 container navbar">
            <div class="hamburger-container d-none">
                <button class="hamburger hamburger--emphatic">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                
            </div>
            <div class="mr-auto">
                <a href="<?php echo bloginfo('url');?>" >
                    <img src="<?php bloginfo('template_directory');?>/assets/img/logoWeb.svg" alt="Estela Estudio Digital Logo" style="height:35px">
                    <span style="position: relative; top:3px;">| Estudio Digital</span>
                </a>
            </div>
           <!--  <ul class="d-flex mb-0 mr-4">
                <li class="mx-2">Enfoque</li>
                <li class="mx-2"> Servicios</li>
                <li class="mx-2">Cultura</li>
            </ul>
            <div class="">
                <a href="" class="car-icon empty cotizar" data-before="">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/car.png" class="car-icon--img">
                    <div class="cart-count"></div>
                </a>
            </div> -->
        </nav>
    </div>


    <nav class='container-fluid bk-primary-nav bg-light'>
        <div class="container">
            <ul class="bk-primary-nav__menu row justify-content-center align-items-center">
                <div class="col-md-6">
    
                    <?php
                    wp_nav_menu( array(
                    'theme_location'  => 'navbar',
                    'container'       => false,
                    'menu_class'      => '',
                    'fallback_cb'     => '__return_false',
                    'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
                    'depth'           => 2,
                    'walker'          => new bk_walker_nav_menu()
                    ) );
                    ?>
    
                </div>
            </ul>
        </div>
    </nav>


    <div class="cd-loader">
            <div class="spinner"></div>
            
    </div>

    <main class="content-wrapper">