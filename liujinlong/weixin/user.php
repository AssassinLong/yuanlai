<?php
header('content-type:text/html;charset=utf-8');

define('APPID','wxb4029a5fe21e76fc');
define('APPSECRET','14943af63cafca6fcdba7733c0b35d98');

//echo "你好,人类".'<br>';

$url='https://api.weixin.qq.com/sns/oauth2/access_token?appid='.APPID.'&secret='.APPSECRET.'&code='.$_GET['code'].'&grant_type=authorization_code';
$file=file_get_contents($url);
//echo $_GET['code'];
//echo $file;
$arr=json_decode($file,true);
$access_token=$arr['access_token'];
$openid=$arr['openid'];

$url4='https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';
$file4=file_get_contents($url4);
//echo $file4;
$arr4=json_decode($file4,true);
var_dump($arr4);
$headimgurl=$arr4['headimgurl'];
echo $headimgurl;
echo "<img src='$headimgurl'/>";