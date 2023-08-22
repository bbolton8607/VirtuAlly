    
<div class="case_content">
    <button onclick="location.href='<?php the_permalink(); ?>'" class="cursor-pointer"><?php the_post_thumbnail("interiorBlogCategory"); ?></button>
    <h3 onclick="location.href='<?php the_permalink(); ?>'" class="case_content_title cursor-pointer"><?php the_title(); ?></h3>
    <?php the_excerpt(); ?>
    <button onclick="location.href='<?php the_permalink(); ?>'" class="btn btn_gray case_content_btn">Read More</button>
</div>