<?php
get_header();
?>

<div class="page_header">
    <div class="container">
        <h1 class="heading heading_white"><?php echo two_tone_title(get_the_title()); ?></h1>
    </div>
</div>

<div class="page_grid">
    <div class="container">
        <div class="page_content">
            <?php the_content(); ?> 
        </div>  
    </div>
</div>



<?php
stay_informed();
get_footer();