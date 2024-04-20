<?php
/**
 * Plugin Name: Admin_notice 
 * Author: Rupom
 * Description: Plugin description
 * Version: 1.0
 */
function notice_callback(){
    if(!(isset($_COOKIE['nn-close']) && $_COOKIE['nn-close'] == 1)){
    ?>
    <div id="notice_ninja" class="notice notice-success is-dismissible">
        <h3>Info </h3>
        <p> hey here some information for you</p>
    </div>
    <!-- <div class="notice notice-error is-dismissible">
        <p>wrong information</p>
    </div>
    <div class="notice notice-warning is-dismissible">
        <p> fatal problem here</p>
    </div> -->
    <?php
        
    }
}
add_action( 'admin_notices', 'notice_callback');

function callback_enqueue_scripts(){
    wp_enqueue_script( 'main_js', plugin_dir_url( __FILE__ ).'/js/main.js',array('jquery'),time(),);
}
add_action( 'admin_enqueue_scripts','callback_enqueue_scripts');
?>