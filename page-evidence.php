<?php get_header(); ?>

    <section class="evidence-page-header">
        <div class="container">
            <h1 class="evidence-heading"><?php echo two_tone_title(
              get_the_title()
            ); ?></h1>

        </div>
    </section>

    <div class="page_grid">
		  <div class="container">
			  <div class="page_content">
				  <?php the_content(); ?>
        </div>  
		  </div>
	  </div>

    <section class="evidence-page">
        <div class="container">
            <div class="evidence-page_recent-blog">

                <?php
                $args = [
                  "post_type" => "post",
                  "posts_per_page" => 1,
                ];
                $blog = new WP_Query($args);

                while ($blog->have_posts()):
                  $blog->the_post(); ?>
                      <?php get_template_part("template-parts/evidence", "loop"); ?>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>

            </div>

            <div class="evidence-page_case-studies">

                <div>
                    <h2 class="heading heading_evidence">Case Studies</h2>

                    <?php
                    $args = [
                      "post_type" => "post",
                      "posts_per_page" => 1,
                    ];
                    $blog = new WP_Query($args);

                    while ($blog->have_posts()):
                      $blog->the_post(); ?>
                          <?php get_template_part("template-parts/evidenceCase", "loop"); ?>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                    
                    <button onclick="location.href='<?php echo get_permalink(97); ?>'" class="btn btn_gray">View More Case Studies</button>
                </div>

                <div>
                  <h2 class="heading heading_evidence heading_evidence_thought">Thought Leadership</h2>
                  <?php
                  $args = [
                    "post_type" => "thoughts",
                    "posts_per_page" => 1,
                  ];
                  $blog = new WP_Query($args);

                  while ($blog->have_posts()):
                    $blog->the_post(); ?>
                          <?php get_template_part("template-parts/evidenceThought", "loop"); ?>
                      <?php
                  endwhile;
                  wp_reset_postdata();
                  ?>
                  <button onclick="location.href='<?php echo get_permalink(142); ?>'" class="btn btn_gray">View More Thought Leadership</button>  
                </div>
            </div>
        </div>
    </section>
<?php 
stay_informed();
get_footer(); ?>
