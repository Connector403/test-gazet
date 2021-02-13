<?php 

	// current weather data for any location on Earth including over 200,000 cities! 
	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.openweathermap.org/data/2.5/weather?q=" . $_REQUEST['capital'] . "&appid=c753d57dc3a0b0b4c436e87d74c1e171",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET"
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		echo "cURL Error #:" . $err;
	} else {
		echo $response;
	}