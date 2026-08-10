<?php
/**
 * Plugin Name:       Brian Blocks
 * Description:       A collection of custom Gutenberg blocks by Brian Azukaeme.
 * Version:           1.0.0
 * Requires at least: 6.8
 * Requires PHP:      7.4
 * Author:            Brian Azukaeme
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       brian-blocks
 *
 * @package BrianBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function brian_blocks_init() {
    wp_register_block_types_from_metadata_collection(
        __DIR__ . '/build',
        __DIR__ . '/build/blocks-manifest.php'
    );
}
add_action( 'init', 'brian_blocks_init' );
