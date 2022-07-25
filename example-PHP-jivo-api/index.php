<?php 
	define('URL_API_JIVOCHAT',      'https://api.jivosite.com/web/integration');

	$params['email'] = 'client_email_example@gmail.com'; //Your customer's email address that will be used to log in the JivoChat app
	$params['siteUrl'] = 'www.example.com'; //The address of your client’s site. They could change it in the future. If a site with the same name already exists in the client’s account, you will receive a widget ID for this site, otherwise, a new one will be created.
	$params['userDisplayName'] =  'Jhon Example Name'; //Customer’s real name to be displayed in chat. He will be able to change it in the future.
	$params['userPassword'] =  'PasswordExample12345'; //Your customer's password for JivoChat, will be used to log in to JivoChat agent app. Must contain at least 6 characters, at least one number and a capital letter
	$params['partnerId'] =  'YOURPARTNERID'; //We generate it for you
	$params['partnerSecret'] =  'YOURPARTNERSECRET'; //We generate it for you
	$params['authToken'] =  substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 30); //Here you can generate your token however you want
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
