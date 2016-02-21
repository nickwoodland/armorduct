<?php
/*
Template Name: Full Width
*/
get_header(); ?>
<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
        <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <div class="row row--flush">
            <div class="columns medium-6">
                <div class="contact__address">
    				<?php if("" != $post->post_content): ?>
    					<?php the_content(); ?>
    				<?php endif; ?>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2429.310154994168!2d-2.1055500841462504!3d52.49162504608415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487090b93460ebef%3A0x1f49dda87c2e024c!2sArmorduct+Systems!5e0!3m2!1sen!2suk!4v1455129830362" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="form-wrapper columns medium-6">
                <div class="form__inner">
                    <?php gravity_form( 'Contact', false, false, false, null, false); ?>
                </div>
            </div>
		</div>
    </article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer(); ?>
