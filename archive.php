<?php
    get_template_part('includes/header'); 
    bk_main_before();
?>


<section class=" container-fluid py-5 mb-4">
    <div class="container">


        <?php
    get_template_part('includes/loops/page-content');
?>

    </div>
</section>


<?php 
    bk_main_after();
    get_template_part('includes/footer'); 
?>