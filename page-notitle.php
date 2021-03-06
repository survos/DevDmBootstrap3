<?php
/**
 * Template Name: Default - no title
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage DevDmBootstrap3-master
 */

get_header();
?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

    <!-- start content container -->
    <div class="row dmbs-content">

        <?php //left sidebar ?>
        <?php get_sidebar('left'); ?>

        <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

            <?php // theloop
            if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
                <?php comments_template(); ?>

            <?php endwhile; ?>
            <?php else: ?>

                <?php get_404_template(); ?>

            <?php endif; ?>

        </div>

        <?php //get the right sidebar ?>
        <?php get_sidebar('right'); ?>

    </div>
    <!-- end content container -->

<?php get_footer();
