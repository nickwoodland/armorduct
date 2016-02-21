<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <div class="row collapse" data-equalizer data-equalize-on="large">
        <div class="columns xlarge-9 large-12" id="post-<?php the_ID(); ?>" data-equalizer-watch>
            <?php $grid_meta = get_post_meta($post->ID, 'grid_block_group', true); ?>

            <?php if(!empty($grid_meta)): ?>
                <div class="grid">
                    <div class="row collapse">
                        <?php foreach($grid_meta as $grid_block): ?>

                            <?php $block_title = $grid_block['title']; ?>
                            <?php $block_link = $grid_block['link']; ?>
                            <?php $block_image_id = $grid_block['image_id']; ?>
                            <?php $grid_interchange_string = grid_interchange_string($block_image_id); ?>

                            <div class="columns small-6 medium-4">
                                <article class="grid-block" data-interchange="<?php echo $grid_interchange_string; ?>">

                                    <div class="grid-block__inner">

                                        <a class="grid-block__link" href="<?php echo $block_link; ?>">
                                            <h3 class="grid-block__title grid-block__title--hidden"><?php echo $block_title; ?></h3>
                                        </a>

                                    </div>

                                </article>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="columns large-3 show-for-xlarge fp-flag__wrapper" data-equalizer-watch>
            <div class="fp-flag">
            </div>
            <?php $sidebar_img_1 = of_get_option('sidebar_img_1'); ?>
            <?php $sidebar_img_2 = of_get_option('sidebar_img_2'); ?>
            <?php $sidebar_img_3 = of_get_option('sidebar_img_3'); ?>

            <?php if($sidebar_img_1 || $sidebar_img_2 || $sidebar_img_3): ?>
                <div id="sidebar-carousel" class="sidebar-slider">
                    <?php if($sidebar_img_1): ?>
                        <div class=""><img src="<?php echo $sidebar_img_1; ?>" /></div>
                    <?php endif; ?>
                    <?php if($sidebar_img_2): ?>
                        <div class=""><img src="<?php echo $sidebar_img_2; ?>" /></div>
                    <?php endif; ?>
                    <?php if($sidebar_img_3): ?>
                        <div class=""><img src="<?php echo $sidebar_img_3; ?>" /></div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer(); ?>
