<?php
/**
 * Plugin Name:     Client Customization
 * Plugin URI:      https://www.yogh.com.br/
 * Description:     Plugin to add custom content only in posts
 * Author:          Yogh Soluções
 * Author URI:      https://www.yogh.com.br/
 * Text Domain:     client-customization
 * Domain Path:     /languages
 * Version:         0.2.0
 *
 * @package         Client_Customization
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    die( 'not allowed' );
}

add_filter('the_content', function ( $content ) {
    // Verificar se está em um post individual
    if ( is_singular('post') ) {
        $message = '<p><b>This content is created by: ' . get_bloginfo( 'name' ) . ' (' . get_bloginfo( 'url' ) . ')</b></p>';
        return $content . $message;
    }
    // Retorna o conteúdo sem alterações para outros tipos de página
    return $content;
}, 10 );
