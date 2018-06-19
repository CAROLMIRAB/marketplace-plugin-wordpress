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

    $query = "select count(id) from $table_messages  where user_in = $user and status=1 order by datecurrency desc";

    $result = $wpdb->get_results($query);

    return $result;
}
add_shortcode( 'marketplace_notifications_number', 'marketplace_notifications_number_shortcode' );