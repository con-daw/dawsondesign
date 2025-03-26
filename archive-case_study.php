<?php get_header(); ?>

<div class="case-studies-archive">
    <h1>Case Studies</h1>

    <?php if (have_posts()) : ?>
        <div class="case-studies-list">
            <?php while (have_posts()) : the_post(); ?>
                <div class="case-study-item">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php endwhile; ?>
        </div>

        <?php
        // Pagination
        the_posts_pagination();
        ?>
    <?php else : ?>
        <p>No case studies found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
