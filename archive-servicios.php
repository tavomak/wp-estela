<?php
    get_template_part('includes/header'); 
    bk_main_before();
?>


<section class=" container-fluid py-5 mb-4">
    <div class="container">


    <?php 
			$taxonomy = 'category';
			$terms_args = array(
			'orderby' => 'title',
			'hide_empty' => true,
			);
            
            
            $cats = get_terms( $taxonomy, $terms_args );
			foreach ($cats as $cat) {
				
					$parent = $cat->parent;
					$lugar = $cat->name;
					$cat_id= $cat->term_id;
                    $term_slug = $cat->slug;
                     echo "<p><b>".$cat->name."</b></p>";
                    $args = array(
						'post_type' => 'servicios',
						'posts_per_page' => -1,
						'post_status' => 'publish',
						'orderby' => 'title',
						'order' => 'ASC',
						'tax_query' => array(
							array(
							'taxonomy' => $taxonomy,
							'field'    => 'slug',
							'terms'    => $term_slug
							),
						),
					);
                    
                    $proyectos = new WP_Query($args);
					if ($proyectos->have_posts()) {
                        while ($proyectos->have_posts()) : $proyectos->the_post();
                        echo "<br>".the_title()."<br>";
                    endwhile;
                    wp_reset_postdata(); //Reseteamos la consulta del post
                    }
                }
            ?>

    </div>
</section>


<?php 
    bk_main_after();
    get_template_part('includes/footer'); 
?>