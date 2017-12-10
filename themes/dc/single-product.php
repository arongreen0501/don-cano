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
                $buy_link = get_field('hero_buy_link');
            ?>

            <section class="hero single_hero" style="background-color: <?php the_field('hero_color') ?>">

                <img src="<?php echo $hero_image['url']; ?>" alt="" /> 

                <div class="row">
                    <div class="offset-left-1 offset-right-1">

                        <h1><?php the_field('hero_product_number'); echo ' '; the_field('hero_title'); ?></h1>
                        <h2><?php the_field('hero_subtitle'); ?></h2>

                        <?php if ( !empty($buy_link) ) : ?>
                            <a href="<?php the_field('hero_buy_link'); ?>" class="btn-buy">Buy</a>
                        <?php endif; ?>

                    </div>
                </div>

            </section>

            <section class="product_info">

            <?php if ( !is_single('accessories') ) : ?>

                <?php
                    $info_image = get_field( 'info_image' );
                ?>
                
                <div class="container">
                    <div class="row">
                        <div class="col-6 info_img">
                            <img class="lazyload" data-src="<?php echo $info_image['url']; ?>" alt="" /> 
                        </div>
                        <div class="col-6">
                            <div class="info_description">
                                <p><?php the_field('info_description') ?></p>
                            </div>
                            <strong class="info_type"><?php the_field('info_type') ?></strong>
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

                            <?php
                                global $wp;
                            ?>
                            <div style="margin-top: 16px; cursor: pointer;" class="social-icon facebook_icon" onClick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('<?php echo home_url( $wp->request ) ?>'),'facebook-share-dialog','width=626,height=436'); return false;">
                                <svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs></defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Desktop" transform="translate(-49.000000, -285.000000)">
                                            <g id="fb-icon" transform="translate(43.000000, 286.000000)">
                                                <g id="fb">
                                                    <g id="fb-icon" transform="translate(7.000000, 0.000000)">
                                                        <circle id="Oval" fill="#4167b2" stroke-width="2" cx="12" cy="12" r="12"></circle>
                                                        <path d="M13.1428571,20 L13.1428571,13.3333045 L15.4285714,13.3333045 L16,10.5555363 L13.1428571,10.5555363 L13.1428571,9.44442907 C13.1428571,8.3333218 13.7154067,7.77776817 14.8571429,7.77776817 L16,7.77776817 L16,5 C15.4285714,5 14.7199573,5 13.7142857,5 C11.614279,5 10.2857143,6.60054457 10.2857143,8.88887543 L10.2857143,10.5555363 L8,10.5555363 L8,13.3333045 L10.2857143,13.3333045 L10.2857143,19.9999481 L13.1428571,20 L13.1428571,20 Z" id="f_9_" fill="#FFFFFF" fill-rule="nonzero"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            </div>
                            <!-- <div class="fb-share-button" data-href data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href=""></a></div> -->
                        </div>
                    </div>
                </div>

            <?php endif; ?>

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
            <section id="location" class="location">
                <div id="map"></div>
                <div class="location_details">
                
                <?php 
				$logo_gold = get_field('logo_gold', 'option');

				if( !empty($logo_gold) ): ?>

					<div class="location_logo">
						<img src="<?php echo $logo_gold['url']; ?>" alt="Don Cano" />
					</div>
                    <div class="location_place">
                        <p>Fiskislóð 45 <span>101 - Reykjavík</span></p>
                    </div>
                    <div class="location_other">
                        <ul>
                            <li class="reset-anchor"><?php the_field('info_phone_number', 'option'); ?></li>
                            <li>doncano@doncano.is</li>
                        </ul>
                    </div>

			    <?php endif; ?>

                </div>
                <iframe src="https://snazzymaps.com/embed/27677" width="100%" height="600px" style="border:none;"></iframe>
            </section>

		<?php endwhile; endif; // End of the loop. ?>

	</div><!-- #primary -->

    <style>
       /* #map {
        height: 565px;
        width: 100%;
       } */
    </style>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUHUjQmZM37DQjqDK-45nd4VsdE1Ry_8E" async defer></script> -->

<?php
get_footer();
