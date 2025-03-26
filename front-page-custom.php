<?php
/**
 * Template Name: Custom Front Page
 *
 * This template displays a custom front page with ACF fields.
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
        <section class="bg-black text-[#f8f8f8] flex flex-col items-center justify-center min-h-screen relative">
            <?php if ($hero_image) { ?>
                <div class="hero-image absolute inset-0 bg-cover bg-center opacity-80" style="background-image: url('<?php echo esc_url($hero_image['url']); ?>');"></div>
            <?php } ?>
            <div class="max-w-[500px] text-left relative z-10 text-center p-4">
                <?php if ($hero_title) { ?>
                    <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white"><?php echo esc_html($hero_title); ?></h1>
                <?php } ?>
                <?php if ($hero_content) { ?>
                    <p class="text-lg md:text-xl text-gray-300"><?php echo esc_html($hero_content); ?></p>
                <?php } ?>
            </div>
        </section>
        <?php
    }?>
    <div class="wrapper">
        <div class="card">
            <div class="upper">
                <img src="https://images.unsplash.com/photo-1617599137346-98e7c279ebe6?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3NDE3OTY2Mzh8&ixlib=rb-4.0.3&q=85" alt="">
            </div>
            <div class="lower">
                <img src="https://images.unsplash.com/photo-1617541016107-b62971c6e27f?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3NDE3OTY2Mzh8&ixlib=rb-4.0.3&q=85" alt="">
            </div>
        </div>
        <div class="card">
            <div class="upper">
                <img src="https://images.unsplash.com/photo-1687763792429-6a5894f1730e?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3NDE3OTY0Mzh8&ixlib=rb-4.0.3&q=85" alt="">
            </div>
            <div class="lower">
                <img src="https://images.unsplash.com/photo-1656321320937-47b7d8464b28?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3NDE3OTY0Mzh8&ixlib=rb-4.0.3&q=85" alt="">
            </div>
        </div>
        <div class="card">
            <div class="upper">
                <img src="https://images.unsplash.com/photo-1581937019650-bb34507b7d64?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3NDE3OTY1NzF8&ixlib=rb-4.0.3&q=85" alt="">
            </div>
            <div class="lower">
                <img src="https://images.unsplash.com/photo-1519010470956-6d877008eaa4?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3NDE3OTY1MjJ8&ixlib=rb-4.0.3&q=85" alt="">
            </div>
        </div>
    </div>
   <?php
    // Section One
    if ($section_one_title || $section_one_content) {
        ?>
        <section class="section-one bg-gray-900 text-white py-16">
            <div class="container mx-auto px-4 text-center">
                <?php if ($section_one_title) { ?>
                    <h2 class="text-3xl font-semibold mb-8 text-white"><?php echo esc_html($section_one_title); ?></h2>
                <?php } ?>
                <?php if ($section_one_content) { ?>
                    <p class="text-lg text-gray-300"><?php echo esc_html($section_one_content); ?></p>
                <?php } ?>
            </div>
        </section>
        <?php
    }

} else {
    echo '<p class="bg-red-800 text-white p-4">Advanced Custom Fields plugin is not active. Please install and activate it to use this template.</p>';
}

get_footer();
?>