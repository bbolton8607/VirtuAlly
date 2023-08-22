<?php get_header(); ?>

<!--************************************* HERO IMAGE *******************************************--->

<section class="site-header_hero">
  <div class="container">
    <div class="site-header_hero-grid">
      <div class="site-header_hero_tagline">
        <h1 class="europa-thin"><span><?php the_field("hero_tagline"); ?><br><span class="europa-bold"><?php the_field("hero_tagline_2"); ?></span></span></h1>
        <p  class="europa-regular"><?php the_field("hero_content"); ?></p>
        <button onclick="location.href='<?php the_permalink(16); ?>'" class="btn btn_shadow"><?php the_field("hero_button_text"); ?></button>
      </div>
    </div> 
  </div>
</section>


<!--************************************* SYSTEM SECTION *******************************************--->

  <section class="system">
    <div class="container">
      <h2 class="heading heading_blue europa-thin"><span><?php the_field("system_title_thin"); ?> <span class="europa-bold"><?php the_field("system_title_bold"); ?></span></span></h2>

      <div class="system_content">
        <?php
        $image = get_field("system_image");

        if (!empty($image)): ?>

            <img src="<?php echo esc_url(
              $image["url"]
            ); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
        
        <?php endif;
        ?>
        
        <div class="system_grid">
          <div class="system_grid_card-1">
            <?php the_field('system_content_1'); ?>
          </div>
          <div class="system_grid_card-2">
            <h3><?php the_field('system_content_2'); ?></h3>
          </div>
          <div class="system_grid_card-3">
            <h3><?php the_field('system_content_3'); ?></h3>
          </div>
        </div>
      </div>
    </div>
  </section>

<!--************************************* REMOTE CARE SECTION *******************************************--->


    <section class="about text-center">
        <div class="container">
            <h2 class="heading europa-bold"><span><?php the_field("about_title_bold"); ?> <br> <span class="europa-thin"><?php the_field(
"about_title_thin"); ?></span></span></h2>
            <p class=""><?php the_field("about_info"); ?></p>
        </div>
</section>

<!--************************************* HOW IT WORKS *******************************************--->

    <section class="process container">
        <h2 class="heading heading_blue europa-thin"><span><?php the_field("process_title_thin"); ?> <span class="europa-bold"><?php the_field("process_title_bold"); ?></span></span></h2>
        
        <div class="process_content">

            <div class="process_container">
                <div class="process_grid">
                    <p class="process_grid_number europa-thin">1</p>
                    <div class="process_grid_header">
                        <h2><?php the_field("process_header_1"); ?></h2> 
                    </div>
                    <div class="process_grid_li">
                        <?php the_field("process_info_1"); ?>
                    </div>
                    <div class="process_grid_img">
                        <?php
                        $image = get_field("process_image_1");

                        if (!empty($image)): ?>

                          <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
                    
                        <?php endif;
                        ?>
                    </div>
                </div>
            </div>

            <div class="process_container">
                <div class="process_grid">
                    <p class="process_grid_number europa-thin">2</p>
                    <div class="process_grid_header">
                      <h2><?php the_field("process_header_2"); ?></h2> 
                    </div>
                    <div class="process_grid_li">
                      <?php the_field("process_info_2"); ?>
                    </div>
                    <div class="process_grid_img">
                        <?php
                        $image = get_field("process_image_2");

                        if (!empty($image)): ?>

                          <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
                    
                        <?php endif;
                        ?>
                    </div>
                </div>
            </div>

            <div class="process_container">
                <div class="process_grid">
                    <p class="process_grid_number europa-thin">3</p>
                    <div class="process_grid_header">
                      <h2><?php the_field("process_header_3"); ?></h2> 
                    </div>
                    <div class="process_grid_li">
                      <?php the_field("process_info_3"); ?>   
                    </div>
                    <div class="process_grid_img">
                        <?php
                        $image = get_field("process_image_3");

                        if (!empty($image)): ?>

                          <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
                    
                        <?php endif;
                        ?>
                    </div>
                </div>
            </div>

            <div class="process_container">
              <div class="process_grid-footer">
                <div class="process_grid_btn">
                  <button onclick="location.href='<?php the_permalink(116); ?>'" class="btn btn_gray"><?php the_field("process_button_text"); ?></button>
                </div>
                
              </div>
            </div>
        </div>
    </section>

<!--************************************* KNOW? Who knows what it will be next. SECTION *******************************************--->
<section class="know">
  <div class="container">
    <?php the_field("know_title"); ?>
    <p class="europa-thin"><?php the_field("know_info"); ?></p>
    <button onclick="location.href='<?php the_permalink(24); ?>'" class="btn btn_white text-uppercase"><?php the_field("know_btn_text"); ?></button>
                          
  </div>
</section>

<!--************************************* GETTING STARTED?? SECTION *******************************************--->
<section class="start">
  <div class="container">
    <h2><?php the_field("start_header"); ?></h2>
    <div class="start_content">
      <div class="start_grid">
      <?php
        $image = get_field("start_img");

        if (!empty($image)): ?>

          <img class="start_grid-img" src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
    
        <?php endif;?>

        <div class="start_grid-content">
        <p><?php the_field("start_info"); ?></p>
        <?php the_field("start_list"); ?>
        <div>
          <button onclick="location.href='<?php the_permalink(180); ?>'" class="btn btn_gray"><?php the_field("start_btn_text"); ?></button>

        </div>
        </div>
        

      </div>
    </div>
  </div>
</section>

<!--************************************* TESTIMONIALS SECTION *******************************************--->

    <section class="testimonials">
        <div class="container">
        <h2><?php the_field("testimonial_header"); ?></h2>

            <div class="testimonials_grid">
              
                <div class="testimonials_grid_testimonials">
                  <h3 class="testimonials_grid_testimonials-header text-uppercase europa-bold">High Praise From Our Customers</h3>
                    <div id="testimonial-splide" class="splide">
                    <div class="splide__arrows">
                        
                    </div>
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <p class="testimonials_grid_testimonials-comment text-black"><?php the_field("testimonial_comment_1"); ?></p>
                                    <p class="testimonials_grid_testimonials-author">— <?php the_field("testimonial_author_1"); ?></p>
                                </li>
                                <li class="splide__slide">
                                    <p class="testimonials_grid_testimonials-comment text-black"><?php the_field("testimonial_comment_2"); ?></p>
                                    <p class="testimonials_grid_testimonials-author">— <?php the_field("testimonial_author_2"); ?></p>
                                </li>
                                <li class="splide__slide">
                                    <p class="testimonials_grid_testimonials-comment text-black"><?php the_field("testimonial_comment_3"); ?></p>
                                    <p class="testimonials_grid_testimonials-author">— <?php the_field("testimonial_author_3"); ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="testimonials_grid_content">
                    <div class="testimonials_grid_clients ">
                        <h3 class="europa-thin"><?php the_field("testimonial_client_1"); ?></h3>
                        <h3 class="europa-thin"><?php the_field("testimonial_client_2"); ?></h3>
                        <h3 class="europa-thin"><?php the_field("testimonial_client_3"); ?></h3>
                        <h3 class="europa-thin"><?php the_field("testimonial_client_4"); ?></h3>
                        <h3 class="europa-thin"><?php the_field("testimonial_client_5"); ?></h3>
                    </div>
                    <div>
                      <button onclick="location.href='<?php the_permalink(184); ?>'" class="btn btn_clear">LEARN MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--************************************* EVIDENCE SECTION *******************************************--->

    <!-- <section class="evidence container">
        <h2 class="heading europa-thin"><span><?php the_field("evidence_title_thin"); ?> <span class="europa-bold"><?php the_field("evidence_title_bold"); ?></h2>

        <div class="evidence_grid">

            <?php
            $args = [
              "post_type" => "post",
              "posts_per_page" => 3,
            ];
            $blog = new WP_Query($args);

            while ($blog->have_posts()):
              $blog->the_post(); ?>
                    <?php get_template_part("template-parts/blog", "loop"); ?>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>

        </div>
    </section>   -->

<?php get_footer(); ?>
