<?php 
// get the current taxonomy term
$term = get_queried_object();


// vars
$image = get_field('imagen_de_la_categoria', $term);
$al_cat_slug = $term->slug;
$al_cat_name = $term->name;
    $query = new WP_Query(array(
        'post_type'      	=> 'servicios',
        'posts_per_page'	=> -1,
        'post_status'		=> 'publish',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => $al_cat_slug
            )
        )
    ));
    if ( $query->have_posts() ) : ?>
<div class="row align-items-stretch">
    <?php while ( $query->have_posts() ) : $query->the_post(); 
    $icono = get_field('icono');
    $extracto = get_field('extracto');
    $post_slug = $post->post_name;
    ?>

    <div class="col-md-6 col-lg-4 col-xl-3 my-4">
        <div class="card shadow add-to-cart-box" style="height:100%">
            <div class="card-header">
                <div class="kit-icon">
                    <img src="<?php echo $icono['url']; ?>" alt="">
                </div>
                <p class="text-uppercase title-red">
                    <b>
                        <?php echo the_title() ;?>
                    </b>
                </p>
            </div>
            <div class="card-body">
                <div class="kit-extact mb-4">
                    <small>
                        <?php echo $extracto; ?>
                    </small>
                </div>
            </div>
            <div class="card-footer">
                <a href="<?php the_permalink();?>" class="btn btn-sm btn-primary px-3 py-2 ">ver más</a>
                <a href="#" class="btn btn-sm btn-secondary px-3 py-2 add-to-cart add-<?php echo $post_slug;?>"
                    data-servicio="<?php echo $post_slug;?>">Agregar</a>
            </div>
        </div>
    </div>

    <?php endwhile; wp_reset_postdata(); ?>
</div>
<?php endif;?>