<?php

ini_set('display_errors', 1);
error_reporting(~0);

include_once "library/OAuthStore.php";
include_once "library/OAuthRequester.php";

$key = 'johndeere-3DKKoHO4Etz2GuuJEC0anB3y';
$secret = 'e138a99dc47227218ec04bede033e099d7561a4c';
$url = "https://apicert.soa-proxy.deere.com/platform/";

$options = array('consumer_key' => $key, 'consumer_secret' => $secret);

OAuthStore::instance("2Leg", $options);

$method = "GET";
$params = null;

try
{
	// Obtain a request object for the request we want to make
	$request = new OAuthRequester($url, $method, $params);

	// Sign the request, perform a curl request and return the results, 
	// throws OAuthException2 exception on an error
	// $result is an array of the form: array ('code'=>int, 'headers'=>array(), 'body'=>string)
	$result = $request->doRequest();
	
	$response = $result['body'];
	echo $response;
}
catch(OAuthException2 $e)
{
	echo $e;
}

?>