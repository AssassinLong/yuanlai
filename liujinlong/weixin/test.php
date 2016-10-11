<?php
//include ('get_accesstoken.php');
//$access_token=get_accesstoken();
define('APPID','wxb4029a5fe21e76fc');
$redirect_uri='http://www.liujinlong.site/yuanlai';
$redirect_uri=urlencode($redirect_uri);
$scope='snsapi_userinfo';
$state='4444';

$url='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.APPID.'&redirect_uri='.$redirect_uri.'&response_type=code&scope='.$scope.'&state='.$state.'#wechat_redirect';

echo $url;