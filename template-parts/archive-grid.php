<?php
$post_id = get_the_ID();
$post_link = get_the_permalink();
$title = get_the_title();
$excerpt = the_excerpt();
$featured_image = get_the_post_thumbnail($post_id, "full");
if (empty($featured_image)) {
  $default_image = get_field("default_post_thumbnail", "options");
  $featured_image = wp_get_attachment_image($default_image, "full", false);
}

// $excerpt = "";
// if( $postCount === 1 ) { $excerpt = get_custom_excerpt(); }
// ?>

<article id="post-<?php the_ID(); ?>" class="resource text-center" role="article" data-equalizer-watch="post-wrap">

	<?php if (!empty($post_link)) {
   echo '<div style="cursor:pointer;" onclick="location.href=\'' .
     $post_link .
     '\'">';
 } ?>
	
		 <?php if ($excerpt) {
    echo '<div class="resource__excerpt">' . $excerpt . "</div>";
  } 
  ?>
		
			
		<div class="resource__content">
			<?php if ($title) {
     echo '<h4 class="resource__title">' . $title . "</h4>";
   } ?>
			<?php
if($excerpt) echo '<div class="resource__excerpt">' . $excerpt . '</div>';
?>
			<?php if (false && !is_archive("treatment") && !empty($post_link)) {
     echo '<a href="' . $post_link . '" class="read-more">Read >></a>';
   } ?>
		</div>

	<?php if (!empty($post_link)) {
   echo "</div>";
 } ?>


</article>
