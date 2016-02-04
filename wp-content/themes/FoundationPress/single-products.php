<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php $prefix = '_ad_products_'; ?>

<?php $finishes_meta = get_post_meta($post->ID, $prefix.'finishes', true); ?>
<?php $gallery_meta = get_post_meta($post->ID, $prefix.'gallery_images', true); ?>
<?php $table_meta = get_post_meta($post->ID, $prefix.'table_dropdown', true); ?>
<?php $accessories_meta = get_post_meta($post->ID, $prefix.'select_accessory', true); ?>
<?php $tech_spec_meta = get_post_meta($post->ID, 'tech_spec_group', true); ?>

<div id="page-full-width" role="main">
	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">

			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>

			<div class="row">
				<header class="columns medium-3">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<div class="columns medium-9">
					<?php if($finishes_meta != false): ?>
						<div class="product-finishes__wrapper">
							<?php foreach($finishes_meta as $finish): ?>
								<div class="product-finish">
									<? $finish_details_array = finishes_lookup($finish); ?>
									<img src="<?php echo $finish_details_array['img']; ?>" alt="icon for <?php echo $finish_details_array['title']; ?>"/>
									<h4><?php echo $finish_details_array['title']; ?></h4>
								</div>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<div class="row">
				<div class="columns medium-3">
					<?php if($gallery_meta != false): ?>
						<div class="product-gallery__wrapper">
							<?php include(locate_template('parts/product-gallery.php')); ?>
						</div>
					<?php endif;?>
				</div>
				<div class="columns medium-9">
					<?php if($table_meta != false): ?>
						<?php include(locate_template('parts/product-table-loop.php')); ?>
					<?php endif;?>
				</div>
			</div>

			<?php if($accessories_meta != false): ?>
				<div class="product-accessories__wrapper">
					<?php include(locate_template('parts/product-accessories-loop.php')); ?>
				</div>
			<?php endif; ?>

			<?php if($tech_spec_meta != false): ?>
				<div class="product-tech-spec__wrapper">
					<?php include(locate_template('parts/product-tech-spec-loop.php')); ?>
				</div>
			<?php endif; ?>

			<div class="row">
				<div class="columns small-12">
					<div class="product-enquiry__wrapper">
						<?php gravity_form( 1, true, false, false, null, false); ?>
					</div>
				</div>
			</div>

			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			</footer>

		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer(); ?>
