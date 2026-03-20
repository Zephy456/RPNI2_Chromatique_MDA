<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title>
        <?php bloginfo("name");
        if (is_home() || is_front_page()) { ?>
            | <?php bloginfo("description");
            } else { ?>
        <?php wp_title("|",  true, '');
            } ?>
    </title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/liaisons/css/styles.css?v=<?php echo rand(0,10000); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <header class="entete">
    <?php if (has_nav_menu("principal")) { ?>
        <nav class="navigation">
        <a href="<?php bloginfo("url"); ?>" title="<?php bloginfo("name"); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/logo_beige.png" alt="Logo">
        </a>
            <?php wp_nav_menu(array("theme_location" => "principal")); ?>
        </nav>
    <?php } ?>
        <!-- <h2 class="entete__slogan"><?php bloginfo("description"); ?></h2> -->
    </header>

    <div class="contenu">