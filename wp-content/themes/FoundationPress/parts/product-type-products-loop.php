<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
    <div class="columns small-12 medium-6 large-4">
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
            <?php $product_gallery = get_post_meta($post->ID, '_ad_products_gallery_images', true); ?>
            <?php print_r($product_gallery); ?>
        </a>
    </div>
<?php endwhile; ?>
