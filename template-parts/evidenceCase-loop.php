<button onclick="location.href='<?php the_permalink(); ?>'" class="cursor-pointer"><?php the_post_thumbnail(); ?></button>

<h3 onclick="location.href='<?php the_permalink(); ?>'" class="evidence-page_case-studies-title cursor-pointer"><?php the_title(); ?></h3>
<h4 class="evidence-page_case-studies-date"><?php the_time('F j, Y'); ?></h4>
<?php the_excerpt(); ?>