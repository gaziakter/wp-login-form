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
        add_action('login_enqueue_scripts', array($this, 'custom_logoin_function'));
    }

    public function custom_logoin_function(){
        ?>
        <style type="text/css">
            #login h1 a,
            .login h1 a{
                background-image: url(<?php echo plugin_dir_url( __FILE__ ).'assets/images/gazi_akter.png' ?>);
                height: auto;
                width: 200px;
                background-size: 200px;
                background-repeat: no-repeat;
                padding-bottom: 30px;
            }
        </style>
        <?php
        
    }

 }
 new Wp_login_form();