<?php
/**
 * 🧩 Blog Card Component
 * -------------------------------------------------
 * ✅ **Purpose:**
 * - This reusable component displays a single blog post preview (card style).
 * - Commonly used in blog listings, archives, home pages, and related post sections.
 *
 * 🎯 **What It Displays:**
 * - Featured image (if available)
 * - Post publication date
 * - First category (if assigned)
 * - Post title linked to the full post
 * - Shortened excerpt (20 words)
 *
 */
?>
<article class="blog-card">
    <a href="<?php the_permalink(); ?>" class="blog-card__link">
    <?php if (has_post_thumbnail()) : ?>
    <div class="blog-card__image-wrapper">
        <?php the_post_thumbnail('large', ['class' => 'blog-card__image']); ?>
    </div>
    <?php endif; ?>

    <div class="blog-card__content">
        <div class="blog-card__meta">
        <time datetime="<?php echo get_the_date('c'); ?>" class="blog-card__date">
            <?php echo get_the_date(); ?>
        </time>
        <?php
        $categories = get_the_category();
if (!empty($categories)) :
    ?>
        <a href="<?php echo get_category_link($categories[0]->term_id); ?>" class="blog-card__category">
            <?php echo $categories[0]->name; ?>
        </a>
        <?php endif; ?>
        </div>

        <h3 class="blog-card__title"><?php the_title(); ?></h3>
        <p class="blog-card__excerpt">
        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
        </p>
    </div>
    </a>
</article>