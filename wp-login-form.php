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
        add_action('login_head', array($this, 'custom_login_text_function'));
        add_filter( 'login_headerurl', array($this, 'custom_login_url') );
        add_filter( 'login_headertitle', array($this, 'custom_login_title') );
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

    public function custom_login_text_function(){
        add_filter( 'gettext', 'custom_text_login_form', 10, 3);
        function custom_text_login_form($translated_text, $text_to_translate, $textdomain){
            if('Username or Email Address'==  $text_to_translate){
                $translated_text = __('Your Login key', 'wp-login-form');
            } elseif('Password'==  $text_to_translate){
                $translated_text = __('Passcode', 'wp-login-form');
            }
            return $translated_text;
        }
    }

    public function custom_login_url(){
        return home_url( );
    }

    public function custom_login_title(){
        return get_bloginfo( );
    }

 }
 new Wp_login_form();