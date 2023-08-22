<?php
get_header(); ?>
    <section class="blog_header">
        <div class="container">
            <div class="blog_title" >
                <h1 ><?php echo two_tone_title(get_the_title()); ?></h1>
            </div>
           <div>
                <h5 class="blog_date">Thought Leadership | <?php the_time(
                  "F j, Y"
                ); ?></h5>
           </div>
            

        </div>
            </section>

    <section class="blog">
        <div class="container container_blog blog_content">
        
                <?php the_content(); ?>
                
            
            
            <div class="blog_btn_container">
                <button class="blog_btn btn btn_clear btn_clear_secondary"><img class="blog_btn_img" src="<?php echo get_template_directory_uri() .
                  "/img/download.png"; ?>" alt="">Want to download this as a PDF? Click Here!</button>
            </div>
            
        </div>

            </section>

    <section class="">
        <div class="container">
            <h2 class="heading europa-thin"><span>More <span class="europa-bold">Thought Leaderships</span></span></h2>

        </div>
            </section>

    <section class="container">
        <div class="blog_more_studies_grid">
            <?php
            $args = [
              "post_type" => "thoughts",
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
        <div class="blog_more_studies_grid_btn">
            <button onclick="location.href='<?php the_permalink(142); ?>'" class="btn btn_clear btn_clear_secondary text-uppercase">View all Thought Leaderships</button>
        </div>
        </section>
    
    
    


<?php get_footer();
