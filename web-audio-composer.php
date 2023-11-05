<?php 
/*
 * Plugin Name:       Web Audio Composer
 * Plugin URI:        https://me.habibnote.com
 * Description:       This is a Web Audio Composer plugin.
 * Version:           0.0.1
 * Requires at least: 5.2
 * Requires PHP:      7
 * Author:            Md. Habib
 * Author URI:        https://me.habibnote.com/contact/
*/

namespace WAC;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

//load autoloader
require_once "vendor/autoload.php";

/**
 * Plugin Main class
 */
final class WAC {
    
    static $instance = false;

    function __construct() {

        //load all hooks
        $this->hooks();
    }

    /**
     * All hooks
     */
    public function hooks() {

        //load all assets
        add_action( 'wp_enqueue_scripts', [$this, 'load_front_assets'] );
        add_action( 'wp admin_enqueue_scripts', [$this, 'load_admin_enqueue_script'] );

        new Inc\Shortcode();
    }

    /**
     * Load Front Assets
     */
    function load_front_assets() {

        if( ! is_admin() ) {

            //load all css
            wp_enqueue_style( 'oswald-font', 'http://fonts.googleapis.com/css?family=Oswald:700' );
            wp_enqueue_style( 'Open-sans-font', 'http://fonts.googleapis.com/css?family=Open+Sans:400,700' );
            wp_enqueue_style( 'wac-front-css',  plugins_url( '/assets/front/css/front.css', __FILE__ ), '', time(), 'all' );

            //load all js
            wp_enqueue_script( 'create-js', plugins_url( 'assets/front/js/create.js', __FILE__ ), [], '0.0.1', true );
            wp_enqueue_script( 'wac-create-js', plugins_url( 'assets/front/js/createjs-2013.12.12.min.js', __FILE__ ), [], '0.0.1', true );
            wp_enqueue_script( 'wac-front-js', plugins_url( 'assets/front/js/front.js', __FILE__ ), [], '0.0.1', true );

            wp_localize_script('wac-front-js', 'tashbox', array('image' => 'http://localhost:10024/wp-content/uploads/2023/11/trashbox.png'));
        } 

    }

    /**
     * Singleton Instance
     */
    static function get_wac() {
        
        if( ! self::$instance ) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

/**
 * Cick off the plugin
 */
WAC::get_wac();

