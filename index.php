<?php
/*
Plugin Name: Kalkulator Eco Racing
Plugin URI: https://github.com/aangindra/kalkulator-eco-racing
Description: Plugin untuk menghitung pil Eco Racing.Tambahkan shortcode <strong>[kalkulator_eco/]</strong> di halaman Anda!
Version: 1.1.0
Author: Indra Aang Fanani
Author URI: https://github.com/aangindra
*/

// Register the script
wp_register_script('eco_js_script', plugins_url('/js/app.js', __FILE__ ));
wp_register_script( 'eco_bootstrap_js', plugins_url('/js/bootstrap.min.js', __FILE__ ));
wp_register_style( 'eco_bootstrap_css', plugins_url('/css/bootstrap.min.css', __FILE__ ));
wp_register_style('eco_css', plugins_url('/css/style.css', __FILE__ ));

function load()
{
  include( plugin_dir_path( __FILE__ ) . 'views/form.php');
}

wp_enqueue_script('jquery');
wp_enqueue_script('eco_js_script');
wp_enqueue_script('eco_bootstrap_js');
wp_enqueue_style('eco_css');
wp_enqueue_style('eco_bootstrap_css');

add_shortcode('kalkulator_eco', 'load');

?>