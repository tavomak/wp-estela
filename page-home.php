<?php
    /* Template Name: Home */
    get_template_part('includes/header'); 
    bk_main_before();
?>

<section class="container-fluid p-0">
    <div class="long-content">
        <div class="container">
            <div class="row align-items-stretch" style="height:70vh">
                <div class="col-md-9 d-flex align-items-center text-white">
                    <section class="cd-intro">
                        <h1 class="cd-headline push ">
                            <span class="static-headline">Ayudamos a <br>personasss a crear <br></span>
                            <span class="cd-words-wrapper">
                                <b class="is-visible" style="letter-spacing: 6px;">estrategias</b>
                                <b style="letter-spacing: 6px;">desarrollos</b>
                                <b>experiencias</b>
                            </span>
                            <span class="static-headline">digitales.</span>
                        </h1>
                        <p class="pt-2"><span class="d-none d-md-inline">Somos creadores digitales, vivimos y disfrutamos del ambiente online.</span> <br>
                            Nos especializamos en diseñar y desarrollar sitios y aplicaciones web a la medida.
                        </p>
                        <a href="#" class="btn btn-sm btn-secondary px-3 py-2 mt-4" data-toggle="modal" data-target="#kit-form-modal">Cuentanos
                            sobre tu proyecto</a>
                    </section> <!-- cd-intro -->
                </div>
                <div class="long-content">
                    <video id="myVideo" loop muted autoplay class="d-none d-md-block">
                        <source src="<?php bloginfo('template_directory');?>/assets/img/videobg.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>

        <video id="myVideo" loop muted autoplay class="d-none d-md-block">
            <source src="<?php bloginfo('template_directory');?>/assets/img/videobg.mp4" type="video/mp4">
        </video>
    </div>
</section>

<section class="container info-culture mb-5 d-none d-md-block">
    <div class="row align-items-center">
        <div class="col-md-6 col-lg-5 p-md-0">
            <div class="wrapper bg-ligth-grey py-lg-5 px-lg-4">
                <h2 class="info-culture--title pl-2">
                    <span class="title-pre">Porque creemos que</span><br>
                    <span class="title-regular">Cada Interacción Cuenta</span>
                </h2>
            </div>
        </div>
        <div class="col-md-6 col-lg-7 bg-dark-grey p-md-0">
            <ul class="wrapper shadow d-md-flex text-white p-lg-5 w-100">
                <li class="info-culture--icon d-none d-md-inline">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/info-icon.svg" alt="Cada Interacción Cuenta">
                </li>
                <li class="info-culture--text">
                    <p>
                        <b>Creemos en el poder del diseño para fomentar relaciones.</b>
                    </p>
                    <p>
                        Una experiencia de usuario bien diseñada es crucial, nuestro propósito es crear estas
                        experiencias digitales inteligentes, que construyan marcas y ayuden a crear negocios.
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="container py-5 my-5 happiness">
    <div class="row justify-content-center">
        <div class="col-lg-9 text-center">
            <h2 class="mb-0">Digital <span class="text-brand-emphasis-color">Happiness</span> People</h2>
            <p class="subtitle mb-5">Nuestro Propósito</p>
            <p>Diseñamos y desarrollamos servicios que faciliten a personas mostrarse, comunicarse y crecer haciendo uso
                de la tecnología y los medios digitales. Creemos que las personas felices aseguran negocios saludables,
                un proyecto exitoso comienza y termina con confianza y una estrecha colaboración.</p>
            <p>Nuestro propósito es crear experiencias de usuario inteligentes, buscamos siempre la combinación correcta
                entre innovación, simplicidad, funcionalidad, marketing y gráficos. Creamos proyectos digitales y sitios
                bien diseñados que funcionen de la manera más intuitiva posible y nos permitan acercar a la gente.</p>
        </div>
    </div>
</section>

<section class="services container-fluid bg-ligth-grey">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-6 p-0">
                <img class="w-100" src="<?php bloginfo('template_directory');?>/assets/img/servicios-home.jpg" alt="Nuestros servicios">
            </div>
            <div class="col-lg-6 p-0">
                <ul class="service-list text-center text-md-left">
                    <li class="service-item d-md-flex">
                        <ul class="service-item--list d-md-flex justify-content-between align-items-center p-4 p-md-0 bg-white border w-100 w-100">
                            <li>
                                <img class="w-100 service-icon" src="<?php bloginfo('template_directory');?>/assets/img/uxui.svg" alt="UX AND UI">
                            </li>
                            <li>
                                <h3 class="service-title font-weight-bold">UX AND UI</h3>
                                <p class="service-subtitle mb-md-0">Diseñamos o mejoramos tu sitio web desde la arquitectura de la información hasta la usabilidad</p>
                            </li>
                            <li class="px-4">
                                <a href="#" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#kit-form-modal">cotizar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="service-item d-md-flex">
                        <ul
                            class="service-item--list d-md-flex justify-content-between align-items-center p-4 p-md-0 bg-white border w-100 w-100">
                            <li>
                                <img class="w-100 service-icon" src="<?php bloginfo('template_directory');?>/assets/img/web-develop.svg" alt="WEB DEVELOPMENT">
                            </li>
                            <li>
                                <h3 class="service-title font-weight-bold">WEB DEVELOPMENT</h3>
                                <p class="service-subtitle mb-md-0">Desarrollamos tu aplicación web, sitio o ecommerce con foco en tus reglas de negocio.</p>
                            </li>
                            <li class="px-4">
                                <a href="" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#kit-form-modal">cotizar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="service-item d-md-flex">
                        <ul class="service-item--list d-md-flex justify-content-between align-items-center p-4 p-md-0 bg-white border w-100 w-100">
                            <li>
                                <img class="w-100 service-icon" src="<?php bloginfo('template_directory');?>/assets/img/software-develop.svg" alt="SOFTWARE DEVELOPMENT"></li>
                            <li>
                                <h3 class="service-title font-weight-bold">SOFTWARE DEVELOPMENT</h3>
                                <p class="service-subtitle mb-md-0">Desarrollamos sistemas complejos de manejo y gestión fáciles de usar por los administradores </p>
                            </li>
                            <li class="px-4">
                                <a href="" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#kit-form-modal">cotizar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="service-item d-md-flex">
                        <ul class="service-item--list d-md-flex justify-content-between align-items-center p-4 p-md-0 bg-white border w-100 w-100">
                            <li>
                                <img class="w-100 service-icon" src="<?php bloginfo('template_directory');?>/assets/img/mentoring.svg" alt="MENTORING AND CONSULTING"></li>
                            <li>
                                <h3 class="service-title font-weight-bold">MENTORING AND CONSULTING</h3>
                                <p class="service-subtitle mb-md-0">Te ayudamos a desarrollar un sistema de generación y gestión de leads desde tu sitio web</p>
                            </li>
                            <li class="px-4">
                                <a href="" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#kit-form-modal">cotizar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="service-item d-md-flex">
                        <ul class="service-item--list d-md-flex justify-content-between align-items-center p-4 p-md-0 bg-white border w-100 w-100">
                            <li>
                                <img class="w-100 service-icon" src="<?php bloginfo('template_directory');?>/assets/img/cro.svg" alt="CONVERSION RATE OPTIMIZATION"></li>
                            <li>
                                <h3 class="service-title font-weight-bold">CONVERSION RATE OPTIMIZATION</h3>
                                <p class="service-subtitle mb-md-0">Te ayudamos a aumentar la tasa de conversión de tus visitantes.</p>
                            </li>
                            <li class="px-4">
                                <a href="" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#kit-form-modal">cotizar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="service-item d-md-flex">
                        <ul class="service-item--list d-md-flex justify-content-between align-items-center p-4 p-md-0 bg-white border w-100 w-100">
                            <li>
                                <img class="w-100 service-icon" src="<?php bloginfo('template_directory');?>/assets/img/integrations.svg" alt="INTEGRATIONS AND OUTSOURCING"></li>
                            <li>
                                <h3 class="service-title font-weight-bold">INTEGRATIONS AND OUTSOURCING</h3>
                                <p class="service-subtitle mb-md-0">Los sitios y apps web son entidades vivas, mejora continua y automatización es la clave</p>
                            </li>
                            <li class="px-4">
                                <a href="" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#kit-form-modal">cotizar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="aproach container py-5 ">
    <div class="row">
        <div class="col-12 text-center py-5">
            <h2 class="mb-0">Our <span class="text-brand-emphasis-color">Approach</span></h2>
            <p class="subtitle">Cómo lo hacemos</p>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12">
            <ul class="aproach-list d-md-flex w-100 justify-content-between">
                <li class="aproach-item">
                    <div class="aproach-item--img">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/strategy-icon.svg" alt="STRATEGY">
                    </div>
                    <div class="aproach-item--text">
                        <p class="aproach-item--title mb-0 text-brand-icons-color font-weight-bold">STRATEGY</p>
                        <p class="px-3"><small>Diseñamos y desarrollamos servicios que faciliten a personas
                                mostrarse</small></p>
                    </div>
                </li>
                <li class="aproach-item">
                    <div class="aproach-item--img">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/design-icon.svg" alt="DESIGN">
                    </div>
                    <div class="aproach-item--text">
                        <p class="aproach-item--title mb-0 text-brand-icons-color font-weight-bold">DESIGN</p>
                        <p class="px-3"><small>Diseñamos y desarrollamos servicios que faciliten a personas
                                mostrarse</small></p>
                    </div>
                </li>
                <li class="aproach-item">
                    <div class="aproach-item--img">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/development-icon.svg"
                            alt="DEVELOPMENT">
                    </div>
                    <div class="aproach-item--text">
                        <p class="aproach-item--title mb-0 text-brand-icons-color font-weight-bold">DEVELOPMENT</p>
                        <p class="px-3"><small>Diseñamos y desarrollamos servicios que faciliten a personas
                                mostrarse</small></p>
                    </div>
                </li>
                <li class="aproach-item">
                    <div class="aproach-item--img">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/launch-icon.svg" alt="LAUNCH">
                    </div>
                    <div class="aproach-item--text">
                        <p class="aproach-item--title mb-0 text-brand-icons-color font-weight-bold">LAUNCH</p>
                        <p class="px-3"><small>Diseñamos y desarrollamos servicios que faciliten a personas
                                mostrarse</small></p>
                    </div>
                </li>
                <li class="aproach-item">
                    <div class="aproach-item--img">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/review-icon.svg" alt="REVIEW">
                    </div>
                    <div class="aproach-item--text">
                        <p class="aproach-item--title mb-0 text-brand-icons-color font-weight-bold">REVIEW</p>
                        <p class="px-3"><small>Diseñamos y desarrollamos servicios que faciliten a personas
                                mostrarse</small></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row pt-5 align-items-center">
        <div class="col-md-6 order-md-2">
            <img class="w-100" src="<?php bloginfo('template_directory');?>/assets/img/proceso.svg" alt="Nuestro proceso">
        </div>
      <div class="col-md-6 order-md-1">
        <div class="process-text pr-md-5 mt-5 mt-md-0">
            <h2 class="info-culture--title text-center">
                <span class="title-pre">Seguimos</span><br>
                <span class="title-regular font-weight-bold">Un proceso iterativo</span>
            </h2>
            <p>
              Tiene más ideas de funciones geniales de las que puede pagar. Y seguirá teniendo nuevas ideas a lo largo de su proyecto de software.
            </p>
        </div>
      </div>
      
    </div>
</section>

<section class="work container-fluid bg-ligth-grey">
    <div class="container">
      <div class="row">
          <div class="col-12 text-center py-5">
              <h2 class="mb-0">Featured <span class="text-brand-emphasis-color">Work</span></h2>
              <p class="subtitle">Últimos proyectos</p>
          </div>
      </div>
    </div>
    <div class="container owl-carousel owl-theme mb-5 pb-5">
     
        <div class="item row align-items-center">
          <div class="col-md-7">
            <div class="project-img pr-md-5">
              <img class="w-100" src="<?php bloginfo('template_directory');?>/assets/img/proyecto-70w.png" alt="Desarrollo de sitio web inmobiliaria 70w">
            </div>
          </div>
          <div class="col-md-5">
            <div class="project-text pr-md-5">
                <h2 class="info-culture--title">
                    <span class="title-pre">Desarrollo de sitio web</span><br>
                    <span class="title-regular">Inmobiliaria 70w</span>
                </h2>
                <p>
                  Tiene más ideas de funciones geniales de las que puede pagar. Y seguirá teniendo nuevas ideas a lo largo de su proyecto de software.
                </p>
                <a href="https://www.70w.cl/" targrt="_blank" class="btn btn-sm btn-secondary">Ver proyecto</a>
            </div>
          </div>
        </div>
      
        <div class="item row align-items-center">
          <div class="col-md-7">
            <div class="project-img pr-md-5">
              <img class="w-100" src="<?php bloginfo('template_directory');?>/assets/img/proyecto-gsd.png" alt="Desarrollo de sitio web GSD00">
            </div>
          </div>
          <div class="col-md-5">
            <div class="project-text pr-md-5">
                <h2 class="info-culture--title">
                    <span class="title-pre">Desarrollo de sitio web</span><br>
                    <span class="title-regular">GSD00</span>
                </h2>
                <p>
                  Tiene más ideas de funciones geniales de las que puede pagar. Y seguirá teniendo nuevas ideas a lo largo de su proyecto de software.
                </p>
                <a href="https://gsd00.com/" targrt="_blank"  class="btn btn-sm btn-secondary">Ver proyecto</a>
            </div>
          </div>
        </div>

        <div class="item row align-items-center">
          <div class="col-md-7">
            <div class="project-img pr-md-5">
              <img class="w-100" src="<?php bloginfo('template_directory');?>/assets/img/proyecto-brick.png" alt="Desarrollo de sitio web inmobiliaria Brick">
            </div>
          </div>
          <div class="col-md-5">
            <div class="project-text pr-md-5">
                <h2 class="info-culture--title">
                    <span class="title-pre">Desarrollo de sitio web</span><br>
                    <span class="title-regular">Inmobiliaria Brick</span>
                </h2>
                <p>
                  Tiene más ideas de funciones geniales de las que puede pagar. Y seguirá teniendo nuevas ideas a lo largo de su proyecto de software.
                </p>
                <a href="https://ibrick.cl/" targrt="_blank" class="btn btn-sm btn-secondary">Ver proyecto</a>
            </div>
          </div>
        </div>

    </div>
</section>

<section class="cerebrollo container py-5 my-5">
  <div class="row align-items-center">
    <div class="col-md-6 order-md-2">
        <img class="w-100" src="<?php bloginfo('template_directory');?>/assets/img/banner-cerebrollo.jpg" alt="Cerebrollo">
    </div>
    <div class="col-md-6 mb-4 order-md-1">
      <div class="project-text">
          <h2 class="info-culture--title pb-4">
              <span class="title-pre">Conoce <a href="https://cerebrollo.guru/">Cerebrollo.guru</a></span><br>
              <span class="title-regular">¿Amor y odio es tu proceso creativo?</span>
          </h2>
          <p>
          Es un producto digital para personas que necesitan planificar, ordenar y comprender ideas, objetivos y tareas en el tiempo.
          </p>
          <p>
          a través de mentorías online para personas con problemas de gestión de tiempo y energía, dificultad para concretar ideas en acciones y tomar decisiones sobre sus proyectos. 
          </p>
          <a href="https://cerebrollo.guru/" class="btn btn-sm btn-secondary">ir a cerebrollo.guru</a>
      </div>
    </div>
  </div>
</section>

<?php 
    bk_main_after();
    get_template_part('includes/footer'); 
?>