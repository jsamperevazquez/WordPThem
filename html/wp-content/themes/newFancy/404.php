<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
    <div id="Gcontainer" class="principal">
        <h1>RECURSO NO ENCONTRADO</h1>
        <div id="container" >
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pagina404.png ">
            <br>
        </div>
        <div id="buscar">
            <br>
            <p>Porfavor busque otro recurso</p>
            <?php
            get_search_form(
                array(
                    'aria_label' => __( '404 not found', 'twentytwenty' ),
                )
            );
            ?>
        </div>
    </div>
<?php


get_footer();
