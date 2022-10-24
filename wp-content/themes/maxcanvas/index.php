<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package maxcanvas
 */

get_header(); ?>

<main id="main" class="site-main blog" role="main">
  <div class='container'>
    <div class='row'>
      <div class="col-sm-9">

        <?php if ( have_posts() ) : ?>
          <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <?php
              /* Include the Post-Format-specific template for the content.
              * If you want to override this in a child theme, then include a file
              * called content-___.php (where ___ is the Post Format name) and that will be used instead.
              */
              get_template_part( 'templates/content/', 'post' );
              ?>
            <?php endwhile; ?>
            
            <?php get_template_part( 'templates/component/', 'pagination' ); ?>

        <?php else : ?>
          <?php get_template_part( 'templates/content/', 'none' ); ?>
        <?php endif; ?>

      </div><!-- #main -->

      <?php get_sidebar(); ?>

    </div>
  </div>
</main><!-- #main -->

<?php get_footer(); ?>
