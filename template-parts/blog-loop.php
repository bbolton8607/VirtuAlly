<div class="evidence_grid_content">
        <?php the_post_thumbnail("evidenceInterior"); ?>
        <h3 onclick="location.href='<?php the_permalink(); ?>'" class="cursor-pointer evidence_grid_content_title"><?php the_title(); ?></h3>
        <p onclick="location.href='<?php the_permalink(); ?>'" class="cursor-pointer evidence_grid_content_desc"><?php the_excerpt(); ?></p>
        <button onclick="location.href='<?php the_permalink(); ?>'" class="btn btn_gray">Read More</button>
</div>