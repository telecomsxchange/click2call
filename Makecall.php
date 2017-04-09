<?php


include 'auth.php';

include 'carrier.php';  // import carrier i_connection ids by name


	//leg A parameters

	$cld1 = "Enter your Office Number";  //Your call center number
	$cli1 = "";  // Caller ID to show first number
	$i_connection1 = $TATA;  // Carrier to use is TATA Communications

	//leg B parameters
	$cld2 = $_POST['customer_phone']; //Second number to dial
	$cli2 = "cld1"; //Caller ID to show destination number
	$i_connection2 = $IBASIS;  // Carrier to use is IBASIS (KPN)

	$ts = time();   // Get Current Time Stamp

	$check_uri = "/api/callback/initiate/$login/$i_account/$cld1/$cli1/$i_connection1/$cld2/$cli2/$i_connection2/$ts/";

	// Signing the API key for better security

	$sign = hash('sha256',$check_uri . $api_key);

	// initiate the call from your script using PHP curl 

	$handle=curl_init( $tcxc_host . $check_uri . $sign );

	curl_setopt($handle, CURLOPT_VERBOSE, true);
	curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);

	$content = curl_exec($handle);

	echo $content;  // EXECUTE THE CODE

	echo "<br>";
	echo "Calling $cld2 now....Redirecting in 10 seconds";


require 'redirect.php';


