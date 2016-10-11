<?php
include ("get_accesstoken.php");
$access_token=get_accesstoken();
$type='image';
$url='https://api.weixin.qq.com/cgi-bin/media/upload?access_token='.$access_token.'&type='.$type;

$data=array('media'=>'@img/01.png');
$method="POST";
$file=curlPost($url,$data,$method);
$file=mb_convert_encoding($file,'UTF-8','GBK');
echo $file;

