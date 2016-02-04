<?php foreach($child_terms as $grid_term): ?>
    <div class="columns small-12 medium-6 large-4">
        <?php print_r($grid_term); ?>

        <?php $term_image = wp_get_attachment_image( get_term_meta( $grid_term->term_id, '_product_type_image_id', 1 ), 'large' ); ?>
        <a href="<?php echo get_term_link($grid_term); ?>">
            <?php print_r($term_image); ?>
        </a>
        
    </div>
<?php endforeach; ?>
