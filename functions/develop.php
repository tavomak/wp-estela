<?php

/* Desactivar Barra de wordpress para todos los usuarios */
  show_admin_bar(false);

// CUSTOM ADMIN LOGIN HEADER LOGO
function my_custom_login_logo()
{
    echo '<style  type="text/css">#login{padding:20px 0;} .login h1 a {  background-image:url(' . get_bloginfo('template_directory') . '/assets/img/animacionInicial250.gif)  !important;background-size: 180px; margin: 0 auto;width: 180px;height: 180px;} </style>';
}
add_action('login_head',  'my_custom_login_logo');

// CUSTOM ADMIN DASHBOARD HEADER LOGO
function wpb_custom_logo() {
echo '
<style type="text/css">
#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
background-image: url(' . get_bloginfo('stylesheet_directory') . '/assets/img/animacionInicial250.gif) !important;
background-size: cover;
color:rgba(0, 0, 0, 0);
}
#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
background-position: 0 0;
}
</style>
';
}
add_action('wp_before_admin_bar_render', 'wpb_custom_logo');

/*/ Cambio de icono Entradas/Noticias
function add_menu_icons_styles(){
    ?>
    <style>
    #adminmenu #menu-posts div.wp-menu-image:before { content: '\f488'; }
    </style>
    <?php }
add_action( 'admin_head', 'add_menu_icons_styles' );

//Cambiar Entradas por noticias
function edit_admin_menus() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Eventos';
    $submenu['edit.php'][5][0] = 'Lista de eventos';
    $submenu['edit.php'][10][0] = 'Agregar evento';
}
add_action( 'admin_menu', 'edit_admin_menus' );
*/

// Admin footer modification
function remove_footer_admin ()
{
    echo '<span id="footer-thankyou">Developed by <a href="https://www.tavomak.com" target="_blank">Tavomak</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

function wpdocs_custom_excerpt_length( $length ) {
    global $post;

    if ($post->post_type == 'post'){
        if ( is_category() || is_page( array('proximos-eventos','eventos-pasados') ) ){
            return 6;
        }
        else{
            return 10;
        }
    }else if ($post->post_type == 'dojo') {
        return 14;
    }
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


?>