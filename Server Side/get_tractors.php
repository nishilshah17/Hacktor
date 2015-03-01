<?php

	ini_set('display_errors', 1);
	error_reporting(~0);

	$key = 'johndeere-3DKKoHO4Etz2GuuJEC0anB3y';
	$token = 'ba6950a0-5512-49fb-a98b-92d15d9a29a1'; //Secret: 'e138a99dc47227218ec04bede033e099d7561a4c';
	$url = "https://api.deere.com/platform/clients";

    $headers = array( 	'Accept: application/vnd.deere.axiom.v3+json',
                        'Authorization: OAuth realm="",oauth_timestamp="1425151137",oauth_nonce="ig1Jkm",oauth_consumer_key= 
"'.$key.'":oauth_token="'.$token.'",oauth_version="1.0",oauth_signature_method="HMAC-SHA1",oauth_signature="MvovVtXryv5ux67ku6522fiLL2Q%3D"'
                    );

	echo $headers[0]."<br>".$headers[1];

    $ch = curl_init();

	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	curl_setopt_array($ch, array(
    	CURLOPT_RETURNTRANSFER => 1,
    	CURLOPT_URL => $url,
    	CURLOPT_USERAGENT => 'Codular Sample cURL Request'
	));

    $result = curl_exec( $ch );

    if ( curl_errno( $ch ) ) {
        echo 'Error: ' . curl_error( $ch );
    }

    curl_close( $ch );

    echo $result;

?>