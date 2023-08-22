<?php

get_header(); ?>
    <section class="evidence-page-header">
        <div class="container">
            <h1 class="heading heading_page "><?php echo two_tone_title(
              "Search Results"
            ); ?>
            
            </h1>
        </div>
        </section>

    <section id="search-archive" class="search">
        <div class="container">
                <?php if (have_posts()): ?> 
                 <div class="search_grid">

                <?php while (have_posts()):
                  the_post(); ?>

                    
                <div class="search_grid_results">
                    <?php get_template_part(
                      "template-parts/archive",
                      "grid"
                    ); ?>
                </div>
                    
                <?php
                endwhile; ?>
            </div>
                    
                    <div class="cell post-nav">
                        <?php joints_page_navi(); ?>
                    </div>

                <?php else: ?>

                    <div class="cell missing">
                        <?php get_template_part(
                          "template-parts/content",
                          "missing"
                        ); ?>
                    </div>

                <?php endif; ?>
           

        </div>
    </section>


<?php get_footer();
