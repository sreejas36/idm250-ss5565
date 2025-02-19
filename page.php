<?php get_header(); ?>

<div class="wrapper">
    <!-- Page Title -->
    <h1 class="page-header">
        <?php echo get_the_title(); ?>
    </h1>

    <!-- Featured Image -->
    <?php if (has_post_thumbnail()) : ?>
        <div class="featured-image">
        <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>

    <!-- Page Content -->
    <?php get_template_part('dist/components/content'); ?>
</div>

<?php get_footer(); ?>
