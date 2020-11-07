<?php
    get_template_part('includes/header'); 
    bk_main_before();
?>
<div class="container mt-5">
  <div class="row">

    <div class="col-sm">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/index-loop'); ?>

      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</div><!-- /.container -->

<?php 
    bk_main_after();
    get_template_part('includes/footer'); 
?>
