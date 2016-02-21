<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php $product_type_args = array(
    'parent'        => 0,
    'hide_empty' => false
); ?>
<?php $product_type_terms = get_terms('product-types',$product_type_args ); ?>

<div id="page-full-width" role="main">

        <?php if(!empty($product_type_terms)): ?>

            <div class="row collapse">

                <?php include(locate_template('parts/product-type-term-loop.php')); ?>

            </div>

        <?php else : ?>

        		<?php get_template_part( 'content', 'none' ); ?>

        <?php endif; // End have_posts() check. ?>

</div>

<?php get_footer(); ?>
