<?php
/*
    Template Name: History Page
*/
?>
<?php get_header(); ?>

	<section id="history">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>
                <?php the_content(); ?>

			<?php endwhile; endif; ?>

	</section><!-- #primary -->
    
<?php get_footer(); ?>