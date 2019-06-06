<?php  
/**
 * Plugin Name: APnic virtual labs
 * Description: Display a list of virtual labs.
 * Version: 0.0.1
 * Author: Sofia Price
 **/

// Exit if accessed direcly.
if( !defined('ABSPATH') ) exit;


add_action('init', 'apnic_list_settings');

function apnic_list_settings(){
	//apnic_get_remote();	
}

function apnic_get_remote() {

	$url = 'https://academy.apnic.net/wp-json/academy/virtual-labs';
	
	$response = wp_remote_get( esc_url_raw( $url ) );

	$api_response = json_decode( wp_remote_retrieve_body( $response ), true );

	return $api_response;
	// $response = wp_remote_request( $url, array(
	//     'method' => 'GET',
	//     'headers' => array(	        
	//     ),
	//     'body' => array(	    	
	//     )
	// ) );

	// if ( is_array( $response ) && ! is_wp_error( $response ) ) {
 //    	$body = $response['body'];
    	// echo '<pre>';
    	// print_r($body);
    	// echo '</pre>';
    // 	return $body;
    // } else {
    // 	$error_message = $response->get_error_message();
    	// echo $error_message;
    // }

    // die();	
}
// this hook has to place after the function
add_action( 'wp_ajax_apnic_get_remote', 'apnic_get_remote' );