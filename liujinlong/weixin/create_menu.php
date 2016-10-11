<?php

include ("get_accesstoken.php");
$access_token=get_accesstoken();
//echo $access_token;

//创建菜单;
$url='https://api.weixin.qq.com/cgi-bin/menu/create?access_token='.$access_token;
$data=' {
     "button":[
     {
          "type":"click",
          "name":"首页",
          "key":"V1001_TODAY_MUSIC"
      },
      {
           "name":"菜单",
           "sub_button":[
           {
               "type":"view",
               "name":"登录",
               "url":"https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxb4029a5fe21e76fc&redirect_uri=http%3A%2F%2Fwww.liujinlong.site%2Fyuanlai&response_type=code&scope=snsapi_userinfo&state=4444#wechat_redirect"
            },
            {
               "type":"view",
               "name":"第三方",
               "url":"https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxb4029a5fe21e76fc&redirect_uri=http%3A%2F%2Fwww.liujinlong.site%2Fliujinlong%2Fweixin%2Fuser.php&response_type=code&scope=snsapi_userinfo&state=4444#wechat_redirect"
            },
            {
               "type":"click",
               "name":"赞一下我们",
               "key":"V1001_GOOD"
            }]
       }]
 }';
$method="POST";
$file=curlPost($url,$data,$method);
$file=mb_convert_encoding($file,'UTF-8','GBK');
echo $file;
echo $data;

