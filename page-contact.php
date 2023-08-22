<?php

get_header(); ?>

<section class="page_header">
    <div class="container">
        <h1 class="heading heading_white"><?php echo two_tone_title(
          get_the_title()
        ); ?></h1>
    </div>
</section>

<section class="page_contact_grid container">
    
        <div class="page_contact_content ">
            <p><?php the_field("contact_description"); ?></p>
            <?php
                $image = get_field("contact_image");

                if (!empty($image)): ?>

                    <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
                
            <?php endif; ?>
            
        </div>  
        <div class="page_contact_form">
            <?php the_content(); ?>
        
        </div>
    
    </section>

<?php get_footer();
