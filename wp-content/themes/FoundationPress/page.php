<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<?php get_template_part( 'parts/featured-image' ); ?>

<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <div class="row collapse" data-equalizer data-equalize-on="large">
        <div class="page-flag-sidebar columns xlarge-9 large-12" id="post-<?php the_ID(); ?>" data-equalizer-watch>
            <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
              <header>
                  <h1 class="entry-title"><?php the_title(); ?></h1>
              </header>
              <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
              <div class="entry-content">
                  <?php the_content(); ?>
              </div>
              <footer>
                  <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
                  <p><?php the_tags(); ?></p>
              </footer>
              <?php do_action( 'foundationpress_page_before_comments' ); ?>
              <?php comments_template(); ?>
              <?php do_action( 'foundationpress_page_after_comments' ); ?>
            </article>
        </div>
        <div class="columns large-3 show-for-xlarge fp-flag__wrapper" data-equalizer-watch>
            <div class="fp-flag">
            </div>
        </div>
    </div>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer(); ?>
