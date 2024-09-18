<?php
/**
 * Plugin Name: Nextasee
 * Description: A plugin with Army, Talks, and Settings modules.
 * Version: 1.0.0
 * Author: Your Name
 * Text Domain: nextasee
 */

if (!defined('ABSPATH')) {
    exit;
}

define('NEXTASEE_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('NEXTASEE_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once NEXTASEE_PLUGIN_DIR . 'includes/class-nextasee.php';

function run_nextasee() {
    $plugin = new Nextasee();
    $plugin->run();
}

run_nextasee();