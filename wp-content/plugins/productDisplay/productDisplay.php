<?php


/** ===============================================================================
  Plugin Name: Products Display
  Description: Permet d'afficher les produits que vous souhaitez afficher   
  Author:  Dorique Jean Willy
  ================================================================================ */

//[shortcode]


add_shortcode( 'show_products', 'showProducts' );
function showProducts( $atts ){
    $var = $atts['number'];
    if(isset($var) && is_numeric($var) ){
         // The Query
            $the_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => $var ) );
        // The Loop
            if ( $the_query->have_posts() ) {
                echo '<ul class="productlink">';
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    $content = get_the_content();
                    $content = preg_replace( '/<img[^>]+./', '', $content );
                    echo '<li>';
                    echo '<a class=productIMG href="'. get_permalink() .'">' . get_the_post_thumbnail() . '</a>';
                    echo '<div class=productText>';
                    echo '<p class=productDescription>' . $content . '</p>';
                    echo '</div>';
                    echo '</li>';
                }
                echo '</ul>';
        /* Restore original Post Data */
            wp_reset_postdata();
            } else {
                echo "<p>Il n'y a pas d'articles</p>";
            }
        }
    else { 
        echo "<h1>Attention le Shortcode n'est pas bien utilisé</h1>";
    } 
}

add_shortcode( 'show_productshomepage', 'showProductsHomePage' );
function showProductsHomePage( $atts ){
    $var = $atts['number'];
    if(isset($var) && is_numeric($var) ){
         // The Query
            $the_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => $var ) );
        // The Loop
            if ( $the_query->have_posts() ) {
                echo '<div class="producthomepage">';
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    echo '<div class="productcardhomepage">';
                    echo '<a class=productTitle href="'. get_permalink() .'">' . get_the_post_thumbnail() . '</a>';
                    echo '<p>' . get_the_title() . '</p>';
                    echo '</div>';
                }
                echo '</div>';
        /* Restore original Post Data */
            wp_reset_postdata();
            } else {
                echo "<p>Il n'y a pas d'articles</p>";
            }
        }
    else { 
        echo "<h1>Attention le Shortcode n'est pas bien utilisé</h1>";
    } 
}

