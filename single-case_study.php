<?php get_header(); ?>

<div class="case-study-wrapper">
    <h1 class="case-study-title"><?php the_title(); ?></h1>

    <div class="case-study-content">
        <?php
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        ?>
    </div>

    <div class="case-study-meta">
        <p>Published on: <?php echo get_the_date(); ?></p>
        <p>Author: <?php the_author(); ?></p>
    </div>

    <!-- Optional: Add custom fields or extra details -->
    <div class="case-study-extra">
        <p><?php the_field('custom_field_name'); ?></p>
    </div>
</div>

<?php get_footer(); ?>
