<?php bk_footer_before();?>
</main>
<footer class="container-fluid py-5 bg-brand-primary-color text-white mt-5 shadow">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo-footer-wrapper">
                    <img class="w-100" src="<?php bloginfo('template_directory');?>/assets/img/animacionInicial250.gif" alt="Estela Estudio Digital">
                </div>
            </div>
            <div class="col-md-3">
                <p class="footer-title"><b>Servicios</b></p>
                <ul>
                    <li class="mb-2">
                        
                        <a href="#" class="text-white"><small>Ux & Ui</small></a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-white"><small>Web Development</small></a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-white"><small>Software Development</small></a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-white"><small>Mentoring & Consulting</small></a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-white"><small>Conversion Rate Optimization</small></a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-white"><small>Integrations & Outsourcing</small></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <p class="footer-title"><b>Contacto</b></p>
                <ul>
                    <li class="mb-2">
                        <p class="text-white mb-0"><small><b>Email:</b> contacto@estelaestudio.com</small></p>
                    </li>
                    <li class="mb-2">
                        <p class="text-white mb-0"><small><b>Teléfono:</b> +56 9 2087 1868</small></p>
                    </li>
                    <li class="mb-2">
                        <p class="text-white"><small><b>Horario:</b><br>Lunes a Jueves: 9:00 a 18:30 <br>Viernes 9:00 a 14:00</small></p>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <p class="footer-title"><b>Redes</b></p>
                <ul class="d-flex">
                    <li class="mb-2 mr-3">
                        <a href="#" class="text-white"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="mb-2 mr-3">
                        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-white"><i class="fab fa-behance"></i></a>
                    </li>
                </ul>
                <p class="footer-title"><b>Partners</b></p>
                <ul class="d-flex">
                    <li class="mb-2 mr-3">
                        <a href="#" class="text-white"><small>cerebrollo.guru</small></a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="text-center text-sm-left m-0">&copy; <?php echo date('Y'); ?> <a class="text-white" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p> 
    </div>
</footer>
<div class="modal fade" id="kit-form-modal" tabindex="-1" role="dialog" aria-labelledby="kit-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title w-100 text-center kit-text-red text-uppercase">Kit de supervivencia digital</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body wpcf7" role="form" id="wpcf7-f5-o1" lang="es-ES" dir="ltr">
                <form method="post" class="wpcf7-form" name="formulario_inicial" id="formulario_inicial">
                    <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="5">
                        <input type="hidden" name="_wpcf7_version" value="5.1.9">
                        <input type="hidden" name="_wpcf7_locale" value="en_US">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f7-o1">
                        <input type="hidden" name="_wpcf7_container_post" value="0">
                    </div>
                    <div class="container-fluid">
                        <div class="row justify-content-between align-items-stretch py-4" >
                            <div class="col-xl-6  order-md-2 mb-5 mb-lg-0">
                                <h4 class="pb-5 aling-self-start text-uppercase"><b>Servicios Seleccionados</b></h4>
                                <?php 
                                $query = new WP_Query(array(
                                    'post_type'      	=> 'servicios',
                                    'posts_per_page'	=> -1,
                                    'post_status'		=> 'publish',
                                ));
                                if ( $query->have_posts() ) : ?>
                                                <?php while ( $query->have_posts() ) : $query->the_post(); 
                                $icono = get_field('icono');
                                $post_slug = $post->post_name;
                                ?>
                                <div class="form-group form-check d-inline-block slected-services">
                                    <input type="checkbox" class="form-check-input" name="" id="<?php echo $post_slug;?>">
                                    <label class="form-check-label"
                                        for="<?php echo $post_slug;?>"><?php echo the_title() ;?></label>
                                </div>
                                <?php endwhile; wp_reset_postdata(); ?>
                                <?php endif;?>
                            </div>
                            <div class="col-lg-6 col-xl-5 order-md-1 text-center px-5">
                                <h4 class="pb-5 aling-self-start text-uppercase"><b>Ingresa tus datos</b></h4>
                                <div class="form-row">
                                    <div class="form-group w-100 px-4">
                                        <span class="bk-projectcart--text__span"></span>
                                        <label class="d-none" for="inputName">Nombre y apellido</label>
                                        <input type="text" class="form-control" id="inputName" name="inputName"
                                            placeholder="Nombre y apellido" required>
                                    </div>
                                    <div class="form-group w-100 px-4">
                                        <label class="d-none" for="inputEmail">Email</label>
                                        <input type="email" class="form-control" id="inputEmail" name="inputEmail"
                                            placeholder="Email" required>
                                    </div>
                                    <div class="form-group w-100 px-4">
                                        <label class="d-none" for="inputTelefono">Teléfono</label>
                                        <input type="email" class="form-control" id="inputTelefono" name="inputTelefono"
                                            placeholder="Teléfono" required>
                                    </div>
                                    <div class="form-group w-100">
                                        <!-- <p class="text-center text-uppercase mt-5">
                                            <b>Me interesan los servicios de:</b><br>
                                            <small class="form-servicess--selection"></small>
                                        </p> -->

                                        <div class="text-center py-4">
                                            <input type="submit" name="enviar" value="SOLICITAR KIT"
                                                class="btn btn-primary px-5 py-3 al-btn al-btn--white rounded-pill"><br>
                                            <span class="ajax-loader"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?php bk_footer_after();?>

<?php bk_bottomline();?>

<?php wp_footer(); ?>
</body>

</html>