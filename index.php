<?php

$text    = "https://www.cpc.ncep.noaa.gov/products/precip/CWlink/MJO/ensplume_full.gif";
$chat_id = "1398584321";
$api     = "5286849026:AAH_y_m55CFZMK3wHxR2sMIwox-Ub_MTzow";

$url= "https://api.telegram.org/bot$api/sendMessage?chat_id=$chat_id&text=$text&pars";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

$result = json_decode($result, true);

if(isset($result['ok'])){

	if(isset($result['result'])){
		echo "Done";
	} else {
		echo $result['description'];
	}

} else {
	echo "<pre>";
	print_r($result);
	echo "Somethings went wrong!";
}


?>