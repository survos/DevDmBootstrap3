<?php
/**
 * Template Name: Full width template
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
    <div class="dmbs-content">


            <?php // theloop
            if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h2 class="page-header"><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
                <?php comments_template(); ?>

            <?php endwhile; ?>
            <?php else: ?>

                <?php get_404_template(); ?>

            <?php endif; ?>

    </div>
    <!-- end content container -->

<?php get_footer();
