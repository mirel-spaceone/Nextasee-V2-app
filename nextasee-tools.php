<?php
/*
Plugin Name: Nextasee Tools
Description: A simple plugin with Army, Talks, and Settings modules.
Version: 1.0
Author: Your Name
*/

// Enqueue Tailwind CSS
function nextasee_tools_enqueue_styles() {
    wp_enqueue_style('tailwind', 'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
}
add_action('admin_enqueue_scripts', 'nextasee_tools_enqueue_styles');

// Add menu items
function nextasee_tools_menu() {
    add_menu_page('Nextasee Tools', 'Nextasee Tools', 'manage_options', 'nextasee-tools', 'nextasee_tools_army_page', 'dashicons-admin-tools');
    add_submenu_page('nextasee-tools', 'Army', 'Army', 'manage_options', 'nextasee-tools', 'nextasee_tools_army_page');
    add_submenu_page('nextasee-tools', 'Talks', 'Talks', 'manage_options', 'nextasee-tools-talks', 'nextasee_tools_talks_page');
    add_submenu_page('nextasee-tools', 'Settings', 'Settings', 'manage_options', 'nextasee-tools-settings', 'nextasee_tools_settings_page');
}
add_action('admin_menu', 'nextasee_tools_menu');

// Army page
function nextasee_tools_army_page() {
    echo '<div class="wrap"><h1 class="text-3xl font-bold mb-4">Army Module</h1><p class="text-lg">Content for the Army module goes here.</p></div>';
}

// Talks page
function nextasee_tools_talks_page() {
    echo '<div class="wrap"><h1 class="text-3xl font-bold mb-4">Talks Module</h1><p class="text-lg">Content for the Talks module goes here.</p></div>';
}

// Settings page
function nextasee_tools_settings_page() {
    echo '<div class="wrap"><h1 class="text-3xl font-bold mb-4">Settings Module</h1><p class="text-lg">Content for the Settings module goes here.</p></div>';
}