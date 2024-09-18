<?php

class Nextasee {
    public function run() {
        $this->load_dependencies();
        $this->define_admin_hooks();
    }

    private function load_dependencies() {
        require_once NEXTASEE_PLUGIN_DIR . 'includes/class-nextasee-army.php';
        require_once NEXTASEE_PLUGIN_DIR . 'includes/class-nextasee-talks.php';
        require_once NEXTASEE_PLUGIN_DIR . 'includes/class-nextasee-settings.php';
    }

    private function define_admin_hooks() {
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_styles'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_action('wp_ajax_nextasee_load_module', array($this, 'ajax_load_module'));
    }

    public function add_admin_menu() {
        add_menu_page(
            'Nextasee',
            'Nextasee',
            'manage_options',
            'nextasee',
            array($this, 'display_admin_page'),
            'dashicons-admin-generic',
            30
        );
    }

    public function enqueue_styles() {
        wp_enqueue_style('nextasee-tailwind', NEXTASEE_PLUGIN_URL . 'assets/css/tailwind.min.css', array(), '1.0.0');
    }

    public function enqueue_scripts() {
        wp_enqueue_script('nextasee-admin', NEXTASEE_PLUGIN_URL . 'assets/js/admin.js', array('jquery'), '1.0.0', true);
        wp_localize_script('nextasee-admin', 'nextasee_ajax', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'plugin_url' => NEXTASEE_PLUGIN_URL
        ));
    }

    public function display_admin_page() {
        require_once NEXTASEE_PLUGIN_DIR . 'templates/admin-page.php';
    }

    public function ajax_load_module() {
        $module = isset($_POST['module']) ? sanitize_text_field($_POST['module']) : '';
        
        switch ($module) {
            case 'army':
                $instance = new Nextasee_Army();
                break;
            case 'talks':
                $instance = new Nextasee_Talks();
                break;
            case 'settings':
                $instance = new Nextasee_Settings();
                break;
            default:
                wp_die('Invalid module');
        }

        $instance->display();
        wp_die();
    }
}