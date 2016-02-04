<div class="row">
    <?php foreach($accessories_meta as $accessory): ?>

        <?php $accessory_post = get_post($accessory); ?>

        <?php if($accessory_post): ?>

            <?php $post = $accessory_post; ?>
            <?php setup_postdata($post); ?>

            <?php $prefix = '_ad_products_'; ?>
            <?php $accessory_gallery_meta = get_post_meta($post->ID, $prefix.'gallery_images', true); ?>
            <?php $accessory_thumb = array_keys(array_slice($accessory_gallery_meta, 0, 1, true)); ?>

            <?php $accessory_interchange_string = grid_interchange_string($accessory_thumb[0]); ?>

            <div class="columns medium-4">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    <img data-interchange="<?php echo $gallery_interchange_string; ?>" />
                </a>
            </div>

            <?php wp_reset_postdata(); ?>

        <?php endif; ?>

    <?php endforeach; ?>
</div>
