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

	<div class="history">

		<section class="hero" style="background-image: url(<?php echo $hero_image['url']; ?>)">
			<div class="container">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1><?php the_field('hero_title'); ?></h1>
				<h2><?php the_field('hero_subtitle'); ?></h2>
			
			<?php endwhile; endif; ?>

			</div>
		</section>

		<section class="content">

			<div class="container">
				<div class="row">
					<div class="offset-left-1 offset-right-1 history_teaser">
						<p><?php the_field('teaser_description') ?></p>
					</div>
				</div>
			</div>

		<?php

			// check if the flexible content field has rows of data
			if( have_rows('history_content') ): while ( have_rows('history_content') ) : the_row();

				if( get_row_layout() == 'content_block' ): ?>
						
					<?php $content_image = get_sub_field('content_block_image'); ?>
					<?php $bg = get_sub_field('content_block_background'); ?>
					<?php $align = get_sub_field('content_block_align'); ?>

					<div class="content_block <?php if ( $bg == 1 ) echo 'bg_color'; ?>">
						<div class="container">
							<div class="row">
								<div class="col-6">
									<img class="lazyload" data-src="<?php echo $content_image['url']; ?>" alt="" />
								</div>
								
								<div class="col-6 text <?php if ( $align == 'Center' ) echo 'center'; ?>">

									<?php the_sub_field('content_block_title'); ?>
									<?php the_sub_field('content_block_text'); ?>

								</div>
							</div>
						</div>
					</div>

					<?php elseif( get_row_layout() == 'full_height' ): ?>
							
						<?php $full_height_image = get_sub_field('full_height_image'); ?>

							<div class="full_height">
								<img src="<?php echo $full_height_image['url']; ?>" alt="">
								<div class="container">
									<div class="row">
										<div class="col">
											<h3><?php the_sub_field('full_height_title'); ?></h3>
											<p><?php the_sub_field('full_height_text'); ?></p>
										</div>
									</div>
								</div>
							</div>

					<?php elseif( get_row_layout() == 'quote_block' ): ?>
							
						<?php $full_height_image = get_sub_field('quote_block_text'); ?>

							<div class="quote_block">
								<div class="container">
									<div class="row">
										<div class="col-6">
											<?php the_sub_field('quote_block_text'); ?>
										</div>
										<div class="col-6 quote">
											<p><?php the_sub_field('quote_block_quote'); ?></p>
										</div>
									</div>
								</div>
							</div>

					<?php endif; ?>

				<?php endwhile; endif; ?>

				<div class="container">
					<div class="row">
						<div class="offset-left-2 offset-right-2 history_final">
							<p><?php the_field('final_description') ?></p>
						</div>
					</div>
				</div>
		
		</section>

	</div>


    
<?php get_footer(); ?>