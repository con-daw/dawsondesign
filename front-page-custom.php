<?php
/**
 * Template Name: Custom Front Page
 *
 * This template displays a custom front page with ACF fields (free version).
 */

get_header();

// Check if ACF is active
if (function_exists('get_field')) {

    // ACF fields (replace with your actual field names)
    $hero_title = get_field('hero_title');
    $hero_content = get_field('hero_content');
    $hero_image = get_field('hero_image');
    $section_one_title = get_field('section_one_title');
    $section_one_content = get_field('section_one_content');

    // Hero Section
    if ($hero_title || $hero_content || $hero_image) {
        ?>
        <section class="hero">
            <?php if ($hero_image) { ?>
                <div class="hero-image" style="background-image: url('<?php echo esc_url($hero_image['url']); ?>');"></div>
            <?php } ?>
            <div class="hero-content">
                <?php if ($hero_title) { ?>
                    <h1><?php echo esc_html($hero_title); ?></h1>
                <?php } ?>
                <?php if ($hero_content) { ?>
                    <p><?php echo esc_html($hero_content); ?></p>
                <?php } ?>
            </div>
        </section>
        <?php
    }

    // Section One
    if ($section_one_title || $section_one_content) {
        ?>
        <section class="section-one">
            <div class="container">
                <?php if ($section_one_title) { ?>
                    <h2><?php echo esc_html($section_one_title); ?></h2>
                <?php } ?>
                <?php if ($section_one_content) { ?>
                    <p><?php echo esc_html($section_one_content); ?></p>
                <?php } ?>
            </div>
        </section>
        <?php
    }

} else {
    echo '<p>Advanced Custom Fields plugin is not active. Please install and activate it to use this template.</p>';
}

get_footer();
?>