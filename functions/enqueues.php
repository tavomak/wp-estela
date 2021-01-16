<?php
/*
 * Enqueues
 */
$url = 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js';
$test_url = @fopen($url, 'r');
if ($test_url !== false) {
	function load_external_jQuery()
	{
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
		wp_enqueue_script('jquery');
	}
	add_action('wp_enqueue_scripts', 'load_external_jQuery');
} else {
	function load_local_jQuery()
	{
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_bloginfo('template_url') . '/assets/js/jquery-3.4.1.min.js');
		wp_enqueue_script('jquery');
	}
	add_action('wp_enqueue_scripts', 'load_local_jQuery');
}

if ( ! function_exists('bk_enqueues') ) {
	function bk_enqueues() {

	/*
   	------------------------------------------------------------------
       Global Styles
   	------------------------------------------------------------------
   	*/

		wp_register_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css', false, '4.3.1', null);
		wp_enqueue_style('bootstrap');

		wp_register_style('fontawesome5', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', false, '5.8.1', null);
		wp_enqueue_style('fontawesome5');

		wp_enqueue_style( 'gutenberg-blocks', get_template_directory_uri() . '/assets/css/blocks.css' );

		wp_register_style('bk', get_template_directory_uri() . '/assets/css/bk.css', false, null);
		wp_enqueue_style('bk');

		wp_register_style('owl-carousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
		wp_enqueue_style('owl-carousel-css');
	
		wp_register_style('owl-carousel-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
		wp_enqueue_style('owl-carousel-theme-css');

		/*wp_register_style('fancibox-css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css');
		wp_enqueue_style('fancibox-css'); */
		
		wp_register_style('main', get_template_directory_uri() . '/assets/css/main-dist.css', false, null);
		wp_enqueue_style('main');
	
		
	/*
   	------------------------------------------------------------------
       Global Scripts
   	------------------------------------------------------------------
   	*/
		wp_register_script('validate-js', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', false, null, true);
		wp_enqueue_script('validate-js');

		wp_register_script('valid-method-js', get_template_directory_uri() . '/assets/js/additional-methods.min.js', false, null, true);
		wp_enqueue_script('valid-method-js');

		wp_register_script('rut-js', get_template_directory_uri() . '/assets/js/rut.js', false, null, true);
		wp_enqueue_script('rut-js');
		
		wp_register_script('sweet-alert', 'https://cdn.jsdelivr.net/npm/sweetalert2@9', false, '2.8.3', true);
		wp_enqueue_script('sweet-alert');
		
		wp_register_script('bootstrap-bundle', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js', false, '4.3.1', true);
		wp_enqueue_script('bootstrap-bundle');
		// (The Bootstrap JS bundle contains Popper JS.)
		
		wp_register_script('owl-carousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', false, null, true);
		wp_enqueue_script('owl-carousel-js');

		/* wp_register_script('fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', false, null, true);
		wp_enqueue_script('fancybox');

		
		wp_register_script('fullpage-js', get_template_directory_uri() . '/assets/js/fullpage.min.js', false, null, true);
		wp_enqueue_script('fullpage-js');

		wp_register_script('fullpage-ext-js', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.2/fullpage.extensions.min.js', false, null, true);
		wp_enqueue_script('fullpage-ext-js'); */
		

		wp_register_script('sbjs', get_template_directory_uri() . '/assets/js/sourcebuster.min.js', false, null, true);
		wp_enqueue_script('sbjs');

		wp_register_script('headlines', get_template_directory_uri() . '/assets/js/headlines.js', false, null, true);
		wp_enqueue_script('headlines');

	/*
   	------------------------------------------------------------------
       Main script
   	------------------------------------------------------------------
   	*/
		wp_register_script('main', get_template_directory_uri() . '/assets/js/main-dist.js', false, null, true);

		$data = array(
			'templateUrl' => get_template_directory_uri()
		);
		wp_localize_script(
			'main',
			'data',
			$data
		);
		wp_enqueue_script('main');
		

		/* if (is_archive('proyectos')) {
		
			wp_register_script('main-proyectos', get_template_directory_uri() . '/assets/js/main-proyectos.js', false, null, true);
			wp_enqueue_script('main-proyectos');
		} */


	}
	add_action('wp_enqueue_scripts', 'bk_enqueues', 100);
	
}