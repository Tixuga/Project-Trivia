@extends('master.main')

@section('content')
    @component('components.gamePages.littleTitle')
    @endcomponent
	<?php

$curl = curl_init();
$certificate_location = '/usr/local/openssl-0.9.8/certs/cacert.pem';
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, $certificate_location);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, $certificate_location);

curl_setopt_array($curl, [
	CURLOPT_URL => "https://opentdb.com/api.php?amount=10",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET"
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}?>
@endsection
