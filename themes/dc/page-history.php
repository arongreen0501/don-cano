<?php
/*
    Template Name: History Page
*/
?>
<?php get_header(); ?>

	<?php
		$hero_image = get_field( 'hero_image' );
		$size = 'hero-size';
		$thumb = $image[ 'sizes' ][ $size ];
	?>

	<section class="hero align-items-center align-items-md-end" style="background-image: url(<?php echo $hero_image['url']; ?>)">
		<div class="container-fluid">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><?php the_field('hero_title'); ?></h1>
			<h2><?php the_field('hero_subtitle'); ?></h2>
		
		<?php endwhile; endif; ?>

		</div>
	</section>
    
<?php get_footer(); ?>