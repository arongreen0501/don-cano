<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package don-cano
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="container">
					<h1>404</h1>
					<h2>Page could not be found</h2>
					<p>The page you were looking for appears to have been modified, deleted or does not exist</p>
					<a class="link" href="/">
							<span class="arrow"></span>
							<span class="link_text">Home</span>
						</a>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
