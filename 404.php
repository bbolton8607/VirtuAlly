<?php

get_header(); ?>


<div class="page_header">
    <div class="container">
        <h1 class="heading heading_white"><?php echo two_tone_title(
          "404 Not Found"
        ); ?></h1>
    </div>
</div>

<div class="page_grid">
    <div class="container">
        <div class="page_content page_content_404">
             <h2><?php _e(
               "This is somewhat embarrassing, isn’t it?",
               "twentythirteen"
             ); ?></h2>
					<p><?php _e(
       "It looks like nothing was found at this location. Maybe try a search?",
       "twentythirteen"
     ); ?></p> 
            <?php get_search_form(); ?>
        </div>  
    </div>
</div>


<?php get_footer();

?>
