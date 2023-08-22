<?php

// Replace 'older/newer' post links with numbered navigation
require_once get_template_directory() . "/page-navi.php";

//****************************** REGISTERING MAIN MENU *************************************

function virtually_menus()
{
  register_nav_menus([
    "main-menu" => "Main Menu",
    "footer-menu" => "Footer Menu",
  ]);
}
add_action("init", "virtually_menus");

//****************************** REGISTERING CUSTOM LOGO SUPPORT *************************************
function virtually_custom_logo_setup()
{
  $defaults = [
    "height" => 100,
    "width" => 400,
    "flex-height" => true,
    "flex-width" => true,
    "header-text" => ["site-title", "site-description"],
    "unlink-homepage-logo" => true,
  ];

  add_theme_support("custom-logo", $defaults);
}
add_action("after_setup_theme", "virtually_custom_logo_setup");

//****************************** CUSTOM EXCERPT LENGTH *************************************

function custom_excerpt_length($length)
{
  return 15;
}
add_filter("excerpt_length", "custom_excerpt_length", 999);

//****************************** REGISTERING STYLESHEETS AND JS *************************************

function virtually_files()
{
  // CSS FILES
  // Main Stylesheet
  wp_enqueue_style(
    "virtually_main_styles",
    get_theme_file_uri("/build/style-index.css")
  );
  wp_enqueue_style(
    "virtually_extra_styles",
    get_theme_file_uri("/build/index.css")
  );

  //adobe font

  wp_enqueue_style( 'typekit-fonts', 'https://use.typekit.net/zbs3opu.css', array(), '', 'all' );

  //FONTAWESOME
  // wp_enqueue_style(
  //   "fontawesome",
  //   get_theme_file_uri() . "/css/fontawesome.scss",
  //   [],
  //   "5.15.4"
  // );

  // SPLIDE
  if (is_front_page()):
    wp_enqueue_style(
      "splide-css",
      get_theme_file_uri() . "/css/splide.min.css",
      [],
      "2.4.20"
    );
  endif;

  // JS FILES
  wp_enqueue_script("main-virtually-js", get_theme_file_uri("/build/index.js"), ["jquery"], "1.0", true);

  // SPLIDE

  if (is_front_page()):
    wp_enqueue_script("splide-js",  get_theme_file_uri() . "/src/modules/Splide.min.js", array('jquery'), "2.4.20", true);
  endif;

  if (is_front_page()):
    wp_enqueue_script("splideController-js",  get_theme_file_uri() . "/src/modules/SplideController.js", array('jquery'), "2.4.20", true);
  endif;
  
  //
  wp_localize_script("scripts", "scriptsData", [
    "root_url" => get_site_url(),
    "nonce" => wp_create_nonce("wp_rest"),
  ]);
}
add_action("wp_enqueue_scripts", "virtually_files");

//****************************** REGISTERING IMAGE SIZES *************************************

// Enable Feature images and other stuff
function virtually_setup()
{
  // Register new image size
  add_image_size("square", 350, 350, true);
  add_image_size("portrait", 350, 724, true);
  add_image_size("box", 400, 375, true);
  add_image_size("mediumSize", 700, 400, true);

  add_image_size("headerLogo", 116.5, 34, true);

  add_image_size("interiorContent", 444, 401, true);
  add_image_size("interiorBlogCategory", 260, 234, true);

  add_image_size("evidenceBlogTop", 475, 297, true);
  add_image_size("evidenceInterior", 350, 234, true);

  add_image_size("processImg", 443, 155, true);
  add_image_size("blogHeader", 904, 375, true);

  // Add featured image
  add_theme_support("post-thumbnails");

  // SEO Titles
  add_theme_support("title-tag");
}
add_action("after_setup_theme", "virtually_setup"); // When the theme is activated and ready!

//****************************** REGISTERING LARGE HERO IMAGE*************************************

/** Displays the Hero image on background of the front-page **/
function virtually_hero_image()
{
  $front_page_id = get_option("page_on_front");
  $image_id = get_field("hero_image", $front_page_id);

  $image = $image_id["url"];

  // Create a "FALSE" stylesheet
  wp_register_style("custom", false);
  wp_enqueue_style("custom");

  $featured_image_css = "
        body.home .site-header_hero {
          background-image: url( $image );  
          background-repeat: no-repeat;
          background-position: center;
          background-size: cover;
        }
    ";
  wp_add_inline_style("custom", $featured_image_css);
}
add_action("init", "virtually_hero_image");

//****************************** REGISTERING THOUGHT LEADERSHIP CUSTOM POST TYPE *************************************

function thought_leadership_post_types()
{
  register_post_type("thoughts", [
    "public" => true,
    "labels" => [
      "name" => "Thought Leadership",
    ],
    "menu_icon" => "dashicons-edit-large",
    "supports" => [
      "title",
      "editor",
      "thumbnail",
      "revisions",
      "custom-fields",
    ],
  ]);
}

add_filter("init", "thought_leadership_post_types");

//****************************** TWO TONE OR WEIGHT HEADING FONT *************************************

function two_tone_title($title)
{
  $title_array = explode(" ", $title);
  $title_length = count($title_array);
  $output = "";
  if ($title_length > 1) {
    $first = array_slice($title_array, 0, $title_length / 2);
    $second = array_slice($title_array, $title_length / 2);
    $output =
      "<span><span class=\"europa-thin\">" .
      implode(" ", $first) .
      "</span> " .
      implode(" ", $second) .
      "</span>";
  } else {
    $output = $title;
  }
  return $output;
}

//****************************** ACF PRO OPTIONS PAGE *************************************


if( function_exists('acf_add_options_page') ) {
	
  acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}

//****************************** REQUEST A DEMO SECTION *************************************

function request_a_demo() {
  ?>
  <section class="demo">
    <div class="container">
        <h1 class="heading heading_blue europa-thin"><span>Request a <span class="europa-bold">Demo</span></span></h1>

        <p class="demo_para">To learn more about VirtuAlly and our continious virtual monitoring solutions, contact us to speak to a representative and request a demo.</p>
        
        <button onclick="location.href='<?php the_permalink(
            16
        ); ?>'" class="btn">REQUEST A DEMO</button>
        
    </div>
</section>
<?php
}

//****************************** STAY INFORMED SECTION *************************************

function stay_informed() {
  ?>
  <section class="stay-informed">
    <div class="container">
        <h2 class="stay-informed-header europa-bold">Stay Informed</h2>
        <p class="stay-informed-para">Sign up for our newsletter for the latest post to be sent directly to you.</p>
        <div class="stay-informed_contact-form">
            <?php echo do_shortcode(
              '[gravityform id="3" title="false" description="false" ajax="true" tabindex="49" field_values="check=First Choice,Second Choice"]'
            ); ?>
        </div> 
    </div>
  </section>
  <?php
}