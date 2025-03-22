<?php get_header(); ?>
<!-- 
    <h1>
    <?php 
    echo get_the_title();
    ?>
    </h1> -->

    <div>
        <div class="main-content">
            <?php 
            echo get_the_content();
            ?>
        </div>

        <div>
            <?php get_template_part('components/latest-projects'); ?>
        </div>

    </div>
    
<!-- 
    <div class="wrapper">
    <?php if (have_posts()) : ?>
    <h1><?php the_archive_title(); ?></h1>

    <ul class="3-column-grid">
        <?php
    while (have_posts()) : the_post(); ?>
        <div class="grid-item">
        <?php get_template_part('components/blog-card'); ?>
        </div>

        <?php endwhile; ?>
    </ul>

    <?php the_posts_pagination(); ?>

    <?php else : ?>
    <p>No posts found.</p>
    <?php endif; ?>
</div> -->

    
<?php get_footer(); ?>