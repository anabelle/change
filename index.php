<?php 

/* 
	Request Parameters 
	- Include your secrate keys and petition ID in config_sample.php
	- Rename config_sample.php to config.php
*/

require_once( 'config.php' );

$REQUEST_URL = 'https://api.change.org/v1/petitions/'.$PETITION_ID.'/signatures';

$parameters = array(
	'api_key' => $API_KEY,
	'page_size' => 100
);

$query_string = http_build_query($parameters);
$final_request_url = "$REQUEST_URL?$query_string";

/* Make request */
$response = file_get_contents($final_request_url);

/* Decode response */
$json_response = json_decode($response, true);

echo '<pre>';
print_r( $json_response );
echo '</pre>';

?>