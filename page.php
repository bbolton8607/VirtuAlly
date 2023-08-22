<?php

get_header(); ?>

<section class="page_header">
    <div class="container">
        <h1 class="heading heading_white"><span><?php echo two_tone_title(get_the_title()); ?></span></h1>
    </div>
</section>

<section class="page_grid">
    <div class="container">
        <div class="page_content">
            <?php the_content(); ?>
        </div>    
    </div>
</section>


<?php 
request_a_demo(); 
get_footer();
