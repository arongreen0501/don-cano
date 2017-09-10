<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package don-cano
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
		<div class="container">
			<?php 

				$image = get_field('logo_gray', 'option');

				if( !empty($image) ): ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>
			
			<p><?php the_field('general_site_title', 'option'); ?></p>
			<p><?php the_field('info_street_address', 'option'); ?></p>
			<p><?php the_field('info_location', 'option'); ?></p>
			<p><?php the_field('info_phone_number', 'option'); ?></p>
			<p><?php the_field('info_mail', 'option'); ?></p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
