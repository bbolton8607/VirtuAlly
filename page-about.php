<?php

get_header(); ?>

<section class="page_header">
    <div class="container">
        <h1 class="heading heading_white"><?php echo two_tone_title(get_the_title()); ?></h1>
    </div>
</section>

<section class="page_grid">
    <div class="container">
        <div class="page_content">
            <?php the_content(); ?>   
        </div>  
    </div>
</section>

<section class="about_icons">
    <div class="container">
        <div class="about_icons_grid">
            <div>
                <?php
                $image = get_field("icon_1");

                if (!empty($image)): ?>

                    <img src="<?php echo esc_url(
                      $image["url"]
                    ); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
                
                <?php endif;
                ?>
                <h2 class="europa-bold"><?php the_field("heading_1"); ?></h2>
                <p><?php the_field("description_1"); ?></p>
            </div>
            
            <div>
                <?php
                $image = get_field("icon_2");

                if (!empty($image)): ?>

                    <img src="<?php echo esc_url(
                      $image["url"]
                    ); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
                
                <?php endif;
                ?>
                <h2 class="europa-bold"><?php the_field("heading_2"); ?></h2>
                <p><?php the_field("description_2"); ?></p>
            </div> 

            <div>
                <?php
                $image = get_field("icon_3");

                if (!empty($image)): ?>

                    <img src="<?php echo esc_url(
                      $image["url"]
                    ); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
                
                <?php endif;
                ?>
                <h2 class="europa-bold"><?php the_field("heading_3"); ?></h2>
                <p><?php the_field("description_3"); ?></p>
            </div> 

            <div>
                <?php
                $image = get_field("icon_4");

                if (!empty($image)): ?>

                    <img src="<?php echo esc_url(
                      $image["url"]
                    ); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
                
                <?php endif;
                ?>
                <h2 class="europa-bold"><?php the_field("heading_4"); ?></h2>
                <p><?php the_field("description_4"); ?></p>
            </div> 
        </div>
    </div>
</section>

<?php 
request_a_demo();
get_footer();
