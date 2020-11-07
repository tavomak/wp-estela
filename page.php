<?php
    get_template_part('includes/header'); 
    bk_main_before();
?>

<?php get_template_part('loops/page-content'); ?>

<?php get_sidebar(); ?>
    

<?php 
    bk_main_after();
    get_template_part('includes/footer'); 
?>
