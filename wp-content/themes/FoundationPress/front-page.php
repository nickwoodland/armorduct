<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<?php get_template_part( 'parts/featured-image' ); ?>
<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
    <?php $grid_meta = get_post_meta($post->ID, 'grid_block_group', true); ?>

    <?php if(!empty($grid_meta)): ?>
        <div class="row collapse">
            <?php foreach($grid_meta as $grid_block): ?>
                <div class="columns small-12 medium-6 large-4">

                    <?php $block_title = $grid_block['title']; ?>
                    <?php $block_link = $grid_block['link']; ?>
                    <?php $block_image_id = $grid_block['image_id']; ?>
                    <?php $block_alt_text = $grid_block['alt_text']; ?>
                    
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
  </article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer(); ?>
