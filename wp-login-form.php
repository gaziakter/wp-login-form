<?php
/**
 * Plugin Name: Wp Login Form
 * Description: Wp Login Form for custom login form
 * Version:           1.0.0
 * Plugin URI: https://www.gaziakter.com/plugin/wp-login-form/
 * Author Name: Gazi Akter
 * Author URI: https://www.gaziakter.com/
 * Text Domain: wp-login-form
 * Domain Path: /languages
 * 
 */

 Class Wp_login_form{
    public function __construct() {
        add_action('init', array($this, 'custom_logoin_function'));
    }


 }
 new Wp_login_form();