<?php

define('APPID','wxb4029a5fe21e76fc');
define('APPSECRET','14943af63cafca6fcdba7733c0b35d98');

include ("get_accesstoken.php");
$access_token=get_accesstoken();

$url='https://api.weixin.qq.com/shakearound/account/register?access_token='.$access_token;


$data='"name": "zhang_san",
  "phone_number": "13012151643",
  "email": "1099587627@qq.com",
  "industry_id": "1024",
  "qualification_cert_urls": [
  ],
  "apply_reason": "test"';
$method="POST";
$file=curlPost($url,$data,$method);
$file=mb_convert_encoding($file,'UTF-8','GBK');
echo $file;

//echo file_get_contents($url);