

<div class="evidence-page_recent-blog_content">
    <h2 class="evidence-page_recent-blog_content_header"><?php the_title(); ?></h2>
    <p class="evidence-page_recent-blog_content_date">Case Study | <?php the_time(
      "F j, Y"
    ); ?></p>
    <p class="evidence-page_recent-blog_content_para"><?php the_excerpt(); ?></p>
    <button onclick="location.href='<?php the_permalink(); ?>'" class="btn btn_gray evidence-page_recent-blog_content_btn">Read More</button>
</div>
<div class="evidence-page_recent-blog_content_img">
    <?php the_post_thumbnail("evidenceBlogTop"); ?>
</div>