<?php get_header(); ?>

    <section class="thought-page-header">
        <div class="container">
            <h1 class="thought-heading"><?php echo two_tone_title( get_the_title() ); ?></h1>
        </div>
        </section>

    <section class="case">
        <div class="container">
            

            <?php
            $paged = get_query_var("paged") ? get_query_var("paged") : 1;

            $args = [
              "post_type" => "thoughts",
              "posts_per_page" => 8,
              "paged" => $paged,
            ];
            $blog = new WP_Query($args);
            if ($blog->have_posts()): ?>
                        <div class="case_grid">
                    <?php while ($blog->have_posts()):
                      $blog->the_post(); ?>
                        <?php get_template_part(
                          "template-parts/case",
                          "loop"
                        ); ?>
                    <?php
                    endwhile; ?>
                </div>

                    
                    <div class="cell post-nav">
                        <?php joints_page_navi("", "", $args); ?>
                    </div>
                    <?php endif;
            wp_reset_postdata();
            ?>

          
        </div>
    </section>

<?php 
stay_informed();
get_footer(); ?>
