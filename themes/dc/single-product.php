<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package don-cano
 */

get_header(); ?>

	<div class="single_product">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
            <?php
                $hero_image = get_field( 'hero_image' );
            ?>

            <section class="hero single_hero" style="background-color: <?php the_field('hero_color') ?>">

                <img class="lazyload" data-src="<?php echo $hero_image['url']; ?>" alt="" /> 

                <div class="row">
                    <div class="offset-left-1 offset-right-1">

                        <h1><?php the_field('hero_title'); ?></h1>
                        <h2><?php the_field('hero_description'); ?></h2>

                    </div>
                </div>

            </section>

            <section class="product_info">

                <?php
                    $info_image = get_field( 'info_image' );
                ?>

                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <img class="lazyload" data-src="<?php echo $info_image['url']; ?>" alt="" /> 
                        </div>
                        <div class="col-6">
                            <p><?php the_field('info_description') ?></p>
                            <strong><?php the_field('info_type') ?></strong>
                            <div class="price_size">
                                <div class="price">
                                    <p>Price: <span><?php the_field('info_price') ?> kr.</span></p>
                                </div>
                                <div class="info_table">

                                    <?php
                                    
                                        $table = get_field( 'size' );

                                        if ( $table ) {

                                            echo '<table class="table">';

                                                if ( $table['header'] ) {

                                                    echo '<thead>';

                                                        echo '<tr>';

                                                            foreach ( $table['header'] as $th ) {

                                                                echo '<th>';
                                                                    echo $th['c'];
                                                                echo '</th>';
                                                            }

                                                        echo '</tr>';

                                                    echo '</thead>';
                                                }

                                                echo '<tbody>';

                                                    foreach ( $table['body'] as $tr ) {

                                                        echo '<tr>';

                                                            foreach ( $tr as $td ) {

                                                                echo '<td>';
                                                                    echo $td['c'];
                                                                echo '</td>';
                                                            }

                                                        echo '</tr>';
                                                    }

                                                echo '</tbody>';

                                            echo '</table>';
                                        }

                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

		<?php endwhile; endif; // End of the loop. ?>

	</div><!-- #primary -->

<?php
get_footer();
