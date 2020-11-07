<?php
    get_template_part('includes/header');
    bk_main_before();
    $icono = get_field('icono');
    $subtitulo = get_field('subtitulo');
    $texto_principal = get_field('texto_principal');
    $imagen_principal = get_field('imagen_principal');
    $caracteristicas = get_field('caracteristicas');
    $valor_del_kit = get_field('valor_del_kit');
    $caracteristicas = get_field('caracteristicas');
    $post_slug = $post->post_name;
?>

<section class="container mt-5">
    <div class="row text-center py-5">
        <div class="col-12">
            <h2 class="w-100 text-uppercase kit-text-red">
                <img src="<?php echo $icono['url']; ?>" alt="">
                <?php the_title(); ?>
            </h2>
        </div>
        <div class="col-12 py-5 mt-3">

            <p style="font-size:28px;">
                <?php echo $subtitulo; ?>
            </p>
        </div>

    </div>
    </div><!-- /.row -->
</section><!-- /.container -->

<section class="container-fluid bg-red py-5">
    <div class="container">
        <div class="row text-white justify-content-center align-items-center">

            <div class="col-md-6">
                <img src="<?php echo $imagen_principal['url']; ?>" class="kit-single-image mb-4 mb-lg-0">
            </div>

            <div class="col-md-6">
                <?php echo $texto_principal; ?>
            </div>
        </div>
</section>

<?php if( have_rows('caracteristicas') ): ?>

<section class="container py-lg-5">
  <div class="row py-lg-5">

  

    <?php while( have_rows('caracteristicas') ): the_row(); 

    // vars
    $icono_caracteristicas = get_sub_field('icono_caracteristicas');
    $titulo_caracteristica = get_sub_field('titulo_caracteristica');
    $contenido_caracteristica = get_sub_field('contenido_caracteristica');

    ?>

      <div class="col-md-6 pt-5">
        <div class="d-md-flex">
          <div class="list-img mr-4" style="min-width:70px; max-width:70px;">
            <img class="w-100" src="<?php echo $icono_caracteristicas['url']; ?>" alt="<?php echo $icono_caracteristicas['alt']; ?>">
          </div>
          <div class="list-text">
            <p class="text-uppercase">
              <b>
                <?php echo $titulo_caracteristica; ?>
              </b>
            </p>
            <?php echo $contenido_caracteristica; ?>
          </div>
        </div>
      </div>


    <?php endwhile; ?>
    </div>
</section>


<?php endif; ?>

<section class="container-fluid text-white py-5" style="background:black;">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-6">
      <?php if($valor_del_kit) :?>
        <h4 class="text-center text-lg-left"><b>Valor Desde UF <span><?php echo $valor_del_kit; ?></span></b></h4>
      <?php endif;?>
      </div>
      <div class="col-md-6 add-to-cart-box text-center text-lg-right">
      <a href="#" class="btn btn-sm btn-tertiary px-5 py-3 mr-lg-4 my-3 my-lg-0 text-uppercase rounded-pill cotizar">Contáctanos</a>
      <a href="#" class="btn btn-sm btn-secondary px-5 py-3 add-to-cart rounded-pill add-<?php echo $post_slug;?>" data-servicio="<?php echo $post_slug;?>">Agregar al kit</a>
      </div>
    </div>
  </div>
</section>
<?php
    bk_main_after();
    get_template_part('includes/footer');
?>