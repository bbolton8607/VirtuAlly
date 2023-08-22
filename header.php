<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo("description"); ?>" />
    <title><?php
    bloginfo("name");
    wp_title();
    ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo get_site_icon_url(); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<header class="site-header">
    <div class="container_nav-bar">
        <div class="nav-bar">

            <div class="site-header__menu-icon">
                <div class="site-header__menu-icon__middle"></div>
            </div>

            <div class="site-header__logo custom-logo">
                <a href="<?php echo home_url(); ?>">
                    <?php if (function_exists("the_custom_logo")) {
                      the_custom_logo("headerLogo");
                    } ?>
                </a>
            </div>

            <nav class="nav-bar__main-menu">
                <?php
                $args = [
                  "theme_location" => "main-menu",
                ];
                wp_nav_menu($args);
                ?>
            
                <div class="site-header__search">
                    <a class="search-icon"><img class="search-icon-img" src="<?php echo get_template_directory_uri() .
                        "/img/Virtually_SearchIcon.png"; ?>" alt=""><a>
                    <div class="search-bar">
                        <?php echo get_search_form(); ?>
                    </div> 
                </div>
            </nav>
        </div> 
    </div> 
</header>



    
