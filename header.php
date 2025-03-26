<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <nav class="flex justify-between items-center p-[15px] ">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo">
        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
    </nav>
</header>
