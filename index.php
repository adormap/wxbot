<?php

$input 		= file_get_contents('php://input');
$data  		= json_decode($input);
$chat_id 	= $data->message->chat->id;
$text    	= $data->message->text;
$api		= "5286849026:AAH_y_m55CFZMK3wHxR2sMIwox-Ub_MTzow";



if(isset($text["Hi"])) {
	$txt = $text." Hello";
} else {
	$txt = $text." Other";
}


$url 		= "https://api.telegram.org/bot$api/sendMessage?chat_id=$chat_id&text=$txt";

file_get_contents($url);


?>