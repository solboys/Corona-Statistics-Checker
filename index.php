<?php

# Author: Hafiz Tahir
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

if(isset($_GET['country']) && !empty($_GET['country'])) {

	curl_setopt($ch, CURLOPT_URL, 'https://covid19.mathdro.id/api/countries/' . urlencode($_GET['country']));
	$result = curl_exec($ch);
	$data = json_decode($result, true);

	curl_setopt($ch, CURLOPT_URL, 'https://covid19.mathdro.id/api');
	$MainApi = curl_exec($ch);
	$totalStatistics = json_decode($MainApi, true);

}

?>