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

	</main><!-- #content -->

	<footer id="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
		<div class="container">

			<?php 

				$image = get_field('logo_gray', 'option');

				if( !empty($image) ): ?>
					<div>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</div>

			<?php endif; ?>

			<div class="footer_content">
				<p class="footer_title"><?php the_field('general_site_title', 'option'); ?></p>
				<div class="footer_info">
					<p><?php the_field('info_street_address', 'option'); ?></p>
					<p><?php the_field('info_location', 'option'); ?></p>
				</div>
				<div class="footer_info">
					<p><?php the_field('info_phone_number', 'option'); ?></p>
					<p><a href="mailto:doncano&commat;doncano&period;is">doncano@doncano.is</a></p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Fira+Sans:100,200,300,400,500' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>

</body>
</html>
