<?php 
	define('URL_API_JIVOCHAT',      'https://api.jivosite.com/web/integration');

	$params['email'] = 'jonas339@gmail.com';
	$params['siteUrl'] = 'www.exemple.com';
	$params['userDisplayName'] =  'Antonio';
	$params['userPassword'] =  'Senha12345';
	$params['partnerId'] =  'Montink';
	$params['partnerSecret'] =  'b_96XnsT!R';
	$params['authToken'] =  substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 30); //Aqui vc pode gerar seu token como quiser;
	$params['lang'] = 'en';

	$url = URL_API_JIVOCHAT."/install?".http_build_query($params);

	$ch0 = curl_init();
	curl_setopt($ch0, CURLOPT_URL, $url);
	curl_setopt($ch0, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch0, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch0, CURLOPT_SSL_VERIFYHOST, 0);

	$headers = [];
	$headers[] = 'Content-Type: application/json';
	curl_setopt($ch0, CURLOPT_HTTPHEADER, $headers);

	$result0 = curl_exec($ch0);
	echo $result0;
	curl_close($ch0);
 ?>