<?php

/**
 * [marketplace]
 * Imprime la aplicación marketplace
 */
function marketplace_shortcode( $atts, $content = null ) {
    global $marketplace_atts;
    $marketplace_atts = shortcode_atts( array(), $atts );
    $template = new MarketPlace_Template_Loader;
    ob_start();
    $template->get_template_part( 'marketplace-form' );
    return ob_get_clean();
}
add_shortcode( 'marketplace-form', 'marketplace_shortcode' );



function marketplace_resultados_shortcode( $atts, $content = null ) {
    global $marketplace_resultados_atts;
    $marketplace_resultados_atts = shortcode_atts( array(), $atts );
    $template = new MarketPlace_Template_Loader;
    ob_start();
    $template->get_template_part( 'marketplace-resultados' );
    return ob_get_clean();
}
add_shortcode( 'marketplace-resultados', 'marketplace_resultados_shortcode' );


function marketplace_business_shortcode( $atts, $content = null ) {
    global $marketplace_business_atts;
    $marketplace_business_atts = shortcode_atts( array(), $atts );
    $template = new MarketPlace_Template_Loader;
    ob_start();
    $template->get_template_part( 'marketplace-business' );
    return ob_get_clean();
}
add_shortcode( 'marketplace-business', 'marketplace_business_shortcode' );

function marketplace_dashboard_shortcode( $atts, $content = null ) {
    global $marketplace_dashboard_atts;
    $marketplace_dashboard_atts = shortcode_atts( array(), $atts );
    $template = new MarketPlace_Template_Loader;
    ob_start();
    $template->get_template_part( 'marketplace-dashboard' );
    return ob_get_clean();
}
add_shortcode( 'marketplace-dashboard', 'marketplace_dashboard_shortcode' );

function marketplace_register_shortcode( $atts, $content = null ) {
    global $marketplace_register_atts;
    $marketplace_register_atts = shortcode_atts( array(), $atts );
    $template = new MarketPlace_Template_Loader;
    ob_start();
    $template->get_template_part( 'marketplace-register' );
    return ob_get_clean();
}
add_shortcode( 'marketplace-register', 'marketplace_register_shortcode' );

function marketplace_login_shortcode( $atts, $content = null ) {
    global $marketplace_register_atts;
    $marketplace_register_atts = shortcode_atts( array(), $atts );
    $template = new MarketPlace_Template_Loader;
    ob_start();
    $template->get_template_part( 'marketplace-login' );
    return ob_get_clean();
}
add_shortcode( 'marketplace-login', 'marketplace_login_shortcode' );

function marketplace_login_only_shortcode( $atts, $content = null ) {
    global $marketplace_register_atts;
    $marketplace_register_atts = shortcode_atts( array(), $atts );
    $template = new MarketPlace_Template_Loader;
    ob_start();
    $template->get_template_part( 'marketplace-login-only' );
    return ob_get_clean();
}
add_shortcode( 'marketplace-login-only', 'marketplace_login_only_shortcode' );

function marketplace_logout_shortcode( $atts, $content = null ) {
    global $marketplace_register_atts;
    $marketplace_register_atts = shortcode_atts( array(), $atts );
    $template = new MarketPlace_Template_Loader;
    ob_start();
    $template->get_template_part( 'marketplace-logout' );
    return ob_get_clean();
}
add_shortcode( 'marketplace-logout', 'marketplace_logout_shortcode' );

function marketplace_product_edit_shortcode( $atts, $content = null ) {
    global $marketplace_register_atts;
    $marketplace_register_atts = shortcode_atts( array(), $atts );
    $template = new MarketPlace_Template_Loader;
    ob_start();
    $template->get_template_part( 'marketplace-product-edit' );
    return ob_get_clean();
}
add_shortcode( 'marketplace-product-edit', 'marketplace_product_edit_shortcode' );

function marketplace_email_shortcode( $atts, $content = null ) {
    global $marketplace_register_atts;
    $marketplace_register_atts = shortcode_atts( array(), $atts );
    $template = new MarketPlace_Template_Loader;
    ob_start();
    $template->get_template_part( 'marketplace-email' );
    return ob_get_clean();
}
add_shortcode( 'marketplace-email', 'marketplace_email_shortcode' );

function marketplace_notifications_number( $atts, $content = null ) {

    global $wpdb;

    $table_messages = $wpdb->prefix . "messages";
    $user = wp_get_current_user()->ID;
    $notification = "";

    $query = "select count(id) as noti_number from $table_messages  where user_in = $user and status=1 order by datecurrency desc";

    $result = $wpdb->get_results($query);

    if($result[0]->noti_number != '0'){
        $notification = "<span class='notification not-number'> ".$result[0]->noti_number."</span>";
    }

    return $notification;
}
add_shortcode( 'marketplace_notifications_number', 'marketplace_notifications_number_shortcode' );

function marketplace_last_notifications( $atts, $content = null ) {

    global $wpdb;

    $user = wp_get_current_user()->ID;
    $table_name = $wpdb->prefix . "messages";
    $table_business = $wpdb->prefix . "business";
    $list = '';

    $query = "select $table_business.name 
     from $table_name left join $table_business on $table_business.id_user = $table_name.user_out  where user_in = $user order by datecurrency desc limit 3";

    $result = $wpdb->get_results($query);

    foreach($result as $row){
        $list.= '<li>'. $row->name.' </li>';
    }

    return $list;
}
add_shortcode( 'marketplace_last_notifications', 'marketplace_last_notifications_shortcode' );