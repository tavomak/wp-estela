<?php
// Register Custom Post Type servicio
function create_servicio_cpt() {

	$labels = array(
		'name' => _x( 'Servicios', 'Post Type General Name', 'estela' ),
		'singular_name' => _x( 'servicio', 'Post Type Singular Name', 'estela' ),
		'menu_name' => _x( 'Servicios', 'Admin Menu text', 'estela' ),
		'name_admin_bar' => _x( 'servicio', 'Add New on Toolbar', 'estela' ),
		'archives' => __( 'Archivos servicio', 'estela' ),
		'attributes' => __( 'Atributos servicio', 'estela' ),
		'parent_item_colon' => __( 'Padres servicio:', 'estela' ),
		'all_items' => __( 'Todas Servicios', 'estela' ),
		'add_new_item' => __( 'Añadir nueva servicio', 'estela' ),
		'add_new' => __( 'Añadir nueva', 'estela' ),
		'new_item' => __( 'Nueva servicio', 'estela' ),
		'edit_item' => __( 'Editar servicio', 'estela' ),
		'update_item' => __( 'Actualizar servicio', 'estela' ),
		'view_item' => __( 'Ver servicio', 'estela' ),
		'view_items' => __( 'Ver Servicios', 'estela' ),
		'search_items' => __( 'Buscar servicio', 'estela' ),
		'not_found' => __( 'No se encontraron Servicios.', 'estela' ),
		'not_found_in_trash' => __( 'Ningún servicio encontrado en la papelera.', 'estela' ),
		'featured_image' => __( 'Imagen destacada', 'estela' ),
		'set_featured_image' => __( 'Establecer imagen destacada', 'estela' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'estela' ),
		'use_featured_image' => __( 'Usar como imagen destacada', 'estela' ),
		'insert_into_item' => __( 'Insertar en la servicio', 'estela' ),
		'uploaded_to_this_item' => __( 'Subido a esta servicio', 'estela' ),
		'items_list' => __( 'Lista de Servicios', 'estela' ),
		'items_list_navigation' => __( 'Navegación por el listado de Servicios', 'estela' ),
		'filter_items_list' => __( 'Lista de Servicios filtradas', 'estela' ),
	);
	$args = array(
		'label' => __( 'servicio', 'estela' ),
		'description' => __( '', 'estela' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-list-view',
		'supports' => array('title', 'editor', 'revisions', 'thumbnail', 'custom-fields'),
		'taxonomies' => array( 'category' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'show_in_rest'      => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => true,
	);
	register_post_type( 'Servicios', $args );

}
add_action( 'init', 'create_servicio_cpt', 0 );
// Register Custom Post Type Proyecto
function create_proyecto_cpt() {

	$labels = array(
		'name' => _x( 'Proyectos', 'Post Type General Name', 'estela' ),
		'singular_name' => _x( 'Proyecto', 'Post Type Singular Name', 'estela' ),
		'menu_name' => _x( 'Proyectos', 'Admin Menu text', 'estela' ),
		'name_admin_bar' => _x( 'Proyecto', 'Add New on Toolbar', 'estela' ),
		'archives' => __( 'Archivos Proyecto', 'estela' ),
		'attributes' => __( 'Atributos Proyecto', 'estela' ),
		'parent_item_colon' => __( 'Padres Proyecto:', 'estela' ),
		'all_items' => __( 'Todas Proyectos', 'estela' ),
		'add_new_item' => __( 'Añadir nueva Proyecto', 'estela' ),
		'add_new' => __( 'Añadir nueva', 'estela' ),
		'new_item' => __( 'Nueva Proyecto', 'estela' ),
		'edit_item' => __( 'Editar Proyecto', 'estela' ),
		'update_item' => __( 'Actualizar Proyecto', 'estela' ),
		'view_item' => __( 'Ver Proyecto', 'estela' ),
		'view_items' => __( 'Ver Proyectos', 'estela' ),
		'search_items' => __( 'Buscar Proyecto', 'estela' ),
		'not_found' => __( 'No se encontraron Proyectos.', 'estela' ),
		'not_found_in_trash' => __( 'Ningún Proyecto encontrado en la papelera.', 'estela' ),
		'featured_image' => __( 'Imagen destacada', 'estela' ),
		'set_featured_image' => __( 'Establecer imagen destacada', 'estela' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'estela' ),
		'use_featured_image' => __( 'Usar como imagen destacada', 'estela' ),
		'insert_into_item' => __( 'Insertar en la Proyecto', 'estela' ),
		'uploaded_to_this_item' => __( 'Subido a esta Proyecto', 'estela' ),
		'items_list' => __( 'Lista de Proyectos', 'estela' ),
		'items_list_navigation' => __( 'Navegación por el listado de Proyectos', 'estela' ),
		'filter_items_list' => __( 'Lista de Proyectos filtradas', 'estela' ),
	);
	$args = array(
		'label' => __( 'Proyecto', 'estela' ),
		'description' => __( '', 'estela' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-nametag',
		'supports' => array('title', 'editor', 'revisions', 'thumbnail', 'custom-fields'),
		'taxonomies' => array( 'category' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'show_in_rest'      => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => true,
	);
	register_post_type( 'proyectos', $args );

}
add_action( 'init', 'create_proyecto_cpt', 0 );

?>
