<?php
/*
Plugin Name: Slab &mdash; Updater
Plugin URI: http://www.wp-slab.com/components/updater
Description: The Slab Updater component. Automatically update your WordPress plugins from GitHub.
Version: 1.0.0
Author: Slab
Author URI: http://www.wp-slab.com
Created: 2015-08-08
Updated: 2015-08-08
Repo URI: github.com/wp-slab/slab-updater
Requires: slab-core
*/


// Define
define('SLAB_UPDATER_INIT', true);
define('SLAB_UPDATER_DIR', plugin_dir_path(__FILE__));
define('SLAB_UPDATER_URL', plugin_dir_url(__FILE__));


// Includes
include SLAB_UPDATER_DIR . 'functions.php';


// Hooks
add_action('slab_init', 'Slab\Updater\slab_updater_init');
