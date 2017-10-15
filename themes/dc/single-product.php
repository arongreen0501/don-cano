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

                <img src="<?php echo $hero_image['url']; ?>" alt="" /> 

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
                        <div class="col-6 info_img">
                            <img class="lazyload" data-src="<?php echo $info_image['url']; ?>" alt="" /> 
                        </div>
                        <div class="col-6">
                            <p><?php the_field('info_description') ?></p>
                            <strong><?php the_field('info_type') ?></strong>
                            <div class="price_size">
                                <div class="price">
                                    <p>Price: <span><?php the_field('info_price') ?> kr.</span></p>

                                    <div class="colors">
                                        <p>Color:</p>
                                        <?php

                                            if ( have_rows( 'info_colors' ) ):
                                                $i = 1;

                                                // Loop through the rows of data
                                                while ( have_rows( 'info_colors' ) ) : the_row(); ?>

                                                    <?php 
                                                        $color = get_sub_field('info_color'); 
                                                    ?>

                                                    <div class="color" style="background-color: <?php echo $color; ?>"></div>
                                                
                                                    <?php 
                                                    $i++; 
                                                
                                                endwhile; 
                                            
                                            endif;
                                                
                                        ?>

                                    </div>
                                </div>

                                <div class="info_table">
                                    <p>Size: </p>
                                    <span class="convert_sizes">Inches</span>

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
                            
                            <div class="qualities">
                            <?php

                                if ( have_rows( 'info_qualities' ) ):
                                    $i = 1;

                                    echo '<ul>';

                                    // Loop through the rows of data
                                    while ( have_rows( 'info_qualities' ) ) : the_row(); ?>

                                        <li>
                                            <span><?php the_sub_field('quality_item'); ?></span>
                                        </li>
                                    
                                        <?php 
                                        $i++; 
                                    
                                    endwhile;

                                    echo '</ul>';
                                
                                endif;
                                    
                                ?>

                                <p>Where can I buy this item?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product_details">
                        <div class="container">
                            <div class="row">
                                <?php

                                    if ( have_rows( 'details_content' ) ):
                                        $i = 1;

                                        // Loop through the rows of data
                                        while ( have_rows( 'details_content' ) ) : the_row(); ?>

                                            <?php $details_image = get_sub_field('details_image'); ?>

                                                <div class="item col-6">
                                                    <p><?php the_sub_field('details_description'); ?></p>
                                                    <img class="lazyload" data-src="<?php echo $details_image['url']; ?>" alt="" />
                                                </div>
                                        
                                            <?php 
                                            $i++; 
                                        
                                        endwhile; 
                                    
                                    endif;
                                    
                                ?>
                            </div>
                        </div>
                    </div>
            </section>
            <section class="location">
                <div id="map"></div>
                <div class="location_details">
                
                <?php 
				$logo_gold = get_field('logo_gold', 'option');

				if( !empty($logo_gold) ): ?>

					<div class="location_logo">
						<img src="<?php echo $logo_gold['url']; ?>" alt="Don Cano" />
					</div>
                    <div class="location_place">
                        <p>Laugavegur 26 <span>101 - Reykjavík</span></p>
                    </div>
                    <div class="location_other">
                        <ul>
                            <li>Opnunartímar</li>
                            <li>Mán - Fös: 9-21</li>
                            <li>Laug: 9-21</li>
                            <li>Sun: 10-21</li>
                        </ul>
                        <ul>
                            <li>Hafa samband</li>
                            <li>+354 535 6670</li>
                            <li>66north@66north.is</li>
                        </ul>
                    </div>

			    <?php endif; ?>

                </div>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUHUjQmZM37DQjqDK-45nd4VsdE1Ry_8E&callback=initMap"></script>
            </section>

		<?php endwhile; endif; // End of the loop. ?>

	</div><!-- #primary -->

    <style>
       #map {
        height: 565px;
        width: 100%;
       }
    </style>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUHUjQmZM37DQjqDK-45nd4VsdE1Ry_8E" async defer></script> -->

<?php
get_footer();
