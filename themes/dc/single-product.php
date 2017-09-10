<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package don-cano
 */

get_header(); ?>

	<div class="parka">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <section class="top" style="background-color: <?php the_field('hero_color') ?>">

                <img class="my_class" <?php dc_responsive_image(get_field( 'hero_image' ),'thumb-640','640px'); ?>  alt="text" /> 

                <div class="container">
                    <h2><?php the_field('hero_title') ?></h2>
                    <p><?php the_field('hero_description') ?></p>
                </div>

            </section>

            <section class="produt_info">
                <div class="container">
                    <p><?php the_field('info_description') ?></p>
                    <strong><?php the_field('info_type') ?></strong>
                </div>
            </section>

		<?php endwhile; endif; // End of the loop. ?>

	</div><!-- #primary -->

<?php
get_footer();
