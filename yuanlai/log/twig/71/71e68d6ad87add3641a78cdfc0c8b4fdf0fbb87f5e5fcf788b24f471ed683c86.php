<?php

/* login.html */
class __TwigTemplate_ebe3a60c53c1f5ff78c4abdb7db6e9defe42698f7fd11cbaa79acffd99d05fff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html>

<head>

<title>缘来社交</title>

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;\" />

<meta content=\"yes\" name=\"apple-mobile-web-app-capable\" />

<link href=\"./web/styles/bootstrap.min.css\" rel=\"stylesheet\" />

<link href=\"./web/styles/NewGlobal.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"./web/jquery.1.10.1.min.js\"></script>

<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">

</head>

<body>

<div class=\"header\"> <a href=\"../../default.htm\" class=\"home\"> <span class=\"header-icon header-icon-home\"></span> <span class=\"header-name\">主页</span> </a>

  <div class=\"title\" id=\"titleString\">登录</div>

  <a href=\"javascript:history.go(-1);\" class=\"back\"> <span class=\"header-icon header-icon-return\"></span> <span class=\"header-name\">返回</span> </a> </div>

<div class=\"container width80 pt20\">

  <form name=\"myform\" method=\"post\" action=\"?r=index/login\" id=\"loginform\" class=\"form-horizontal\">

    <div class=\"control-group\">

      <input name=\"username\" type=\"text\" id=\"username\" class=\"input width100 \" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入手机号/Email/会员卡号\" />

    </div>

    <div class=\"control-group\">

      <input name=\"password\" type=\"password\" id=\"password\" class=\"width100 input\" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"持卡会员初次登录，密码为证件号后4位\" />

    </div>

    <div class=\"control-group\">

      <label class=\"checkbox fl\">

        <input name=\"remember\" type=\"checkbox\" id=\"ctl00_ContentPlaceHolder1_cbSaveCookie\" style=\"float: none;margin-left: 0px;\" />

        记住账号 </label>

      <a class=\"fr\" href=\"lostPassword.html\">忘记密码？</a> </div>

    <div class=\"control-group\"> <span id=\"loading\"></span> <span class=\"red\" id=\"tip\"></span> </div>

    <div class=\"control-group\">

      <input type=\"hidden\" name=\"ret\" value=\"\" id=\"ret\" >

      <button   id=\"btn_login\" class=\"btn-large purple button width100\">立即登录</button>

     

    </div>

    <div class=\"control-group\" style=\"font-size:12px;\">  还没账号？ <a href=\"?r=index/register\" class=\"ui-link\">立即免费注册</a><br>

      已在酒店官网注册/激活过的会员按原官网注册/激活信息登录。<br>

      持卡会员初次登录请使用手机号或卡号作为登录帐号，密码为身份证号后4位。

     </div>

  </form>

</div>

<script>

            \$('#btn_login').click(function(){

                \$('#tip').html('');

                if(\$('#username').val()==''){

                    \$('#tip').html('请输入账号');

                    return false;

                }

                if(\$('#password').val()==''){

                    \$('#tip').html('请输入密码');

                    return false;

                }

                \$('#loading').html('正在登录');

                \$('#btn_login').attr('disabled',true);

                \$.post('?index/login',

                {username:\$('#username').val(),password:\$('#password').val(),ret:\$('#ret').val()},
                function(data){

                    data=eval('('+data+')');
                    //alert('1');

                    if(data.status=='1'){

                        location.href=data.url;

                    }

                    else{

                        \$('#loading').html('');

                        //\$('#btn_login').attr('disabled',\"\");

                        document.getElementById('btn_login').disabled=false;

                        \$('#tip').html(data.info);
                    }
                },
                'JSON'

            );

                return false;

            });

        </script> 

<div class=\"footer\">

    <div class=\"gezifooter\">

        <a href=\"#\" class=\"ui-link\">酒店预订</a> <font color=\"#878787\">|</font>

                <a href=\"?r=index/login\" class=\"ui-link\">立即登录</a> <font color=\"#878787\">|</font>

        <a href=\"?r=index/register\" class=\"ui-link\">免费注册</a> <font color=\"#878787\">|</font>        <a href=\"#\" class=\"ui-link\">电脑版</a>

    </div>

    <div class=\"gezifooter\">

        <p style=\"color:#bbb;\">星波连锁酒店 &copy; 版权所有 2013</p>

    </div>

</div>

<div style=\"display:none;\"><script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cdiv id='cnzz_stat_icon_1000047539'%3E%3C/div%3E%3Cscript src='\" + cnzz_protocol + \"s22.cnzz.com/z_stat.php%3Fid%3D1000047539%26show%3Dpic' type='text/javascript'%3E%3C/script%3E\"));</script></div>

</body>

</html> <script type=\"text/javascript\">/*20:3 创建于 2014-12-26*/var cpro_id = \"u1879755\";</script><script src=\"http://cpro.baidustatic.com/cpro/ui/cm.js\" type=\"text/javascript\"></script>";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html><html><head><title>缘来社交</title><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;\" /><meta content=\"yes\" name=\"apple-mobile-web-app-capable\" /><link href=\"./web/styles/bootstrap.min.css\" rel=\"stylesheet\" /><link href=\"./web/styles/NewGlobal.css\" rel=\"stylesheet\" /><script type=\"text/javascript\" src=\"./web/jquery.1.10.1.min.js\"></script><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"></head><body><div class=\"header\"> <a href=\"../../default.htm\" class=\"home\"> <span class=\"header-icon header-icon-home\"></span> <span class=\"header-name\">主页</span> </a>  <div class=\"title\" id=\"titleString\">登录</div>  <a href=\"javascript:history.go(-1);\" class=\"back\"> <span class=\"header-icon header-icon-return\"></span> <span class=\"header-name\">返回</span> </a> </div><div class=\"container width80 pt20\">  <form name=\"myform\" method=\"post\" action=\"?r=index/login\" id=\"loginform\" class=\"form-horizontal\">    <div class=\"control-group\">      <input name=\"username\" type=\"text\" id=\"username\" class=\"input width100 \" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入手机号/Email/会员卡号\" />    </div>    <div class=\"control-group\">      <input name=\"password\" type=\"password\" id=\"password\" class=\"width100 input\" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"持卡会员初次登录，密码为证件号后4位\" />    </div>    <div class=\"control-group\">      <label class=\"checkbox fl\">        <input name=\"remember\" type=\"checkbox\" id=\"ctl00_ContentPlaceHolder1_cbSaveCookie\" style=\"float: none;margin-left: 0px;\" />        记住账号 </label>      <a class=\"fr\" href=\"lostPassword.html\">忘记密码？</a> </div>    <div class=\"control-group\"> <span id=\"loading\"></span> <span class=\"red\" id=\"tip\"></span> </div>    <div class=\"control-group\">      <input type=\"hidden\" name=\"ret\" value=\"\" id=\"ret\" >      <button   id=\"btn_login\" class=\"btn-large purple button width100\">立即登录</button>         </div>    <div class=\"control-group\" style=\"font-size:12px;\">  还没账号？ <a href=\"?r=index/register\" class=\"ui-link\">立即免费注册</a><br>      已在酒店官网注册/激活过的会员按原官网注册/激活信息登录。<br>      持卡会员初次登录请使用手机号或卡号作为登录帐号，密码为身份证号后4位。     </div>  </form></div><script>            \$('#btn_login').click(function(){                \$('#tip').html('');                if(\$('#username').val()==''){                    \$('#tip').html('请输入账号');                    return false;                }                if(\$('#password').val()==''){                    \$('#tip').html('请输入密码');                    return false;                }                \$('#loading').html('正在登录');                \$('#btn_login').attr('disabled',true);                \$.post('?index/login',                {username:\$('#username').val(),password:\$('#password').val(),ret:\$('#ret').val()},                function(data){                    data=eval('('+data+')');                    //alert('1');                    if(data.status=='1'){                        location.href=data.url;                    }                    else{                        \$('#loading').html('');                        //\$('#btn_login').attr('disabled',\"\");                        document.getElementById('btn_login').disabled=false;                        \$('#tip').html(data.info);                    }                },                'JSON'            );                return false;            });        </script> <div class=\"footer\">    <div class=\"gezifooter\">        <a href=\"#\" class=\"ui-link\">酒店预订</a> <font color=\"#878787\">|</font>                <a href=\"?r=index/login\" class=\"ui-link\">立即登录</a> <font color=\"#878787\">|</font>        <a href=\"?r=index/register\" class=\"ui-link\">免费注册</a> <font color=\"#878787\">|</font>        <a href=\"#\" class=\"ui-link\">电脑版</a>    </div>    <div class=\"gezifooter\">        <p style=\"color:#bbb;\">星波连锁酒店 &copy; 版权所有 2013</p>    </div></div><div style=\"display:none;\"><script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cdiv id='cnzz_stat_icon_1000047539'%3E%3C/div%3E%3Cscript src='\" + cnzz_protocol + \"s22.cnzz.com/z_stat.php%3Fid%3D1000047539%26show%3Dpic' type='text/javascript'%3E%3C/script%3E\"));</script></div></body></html> <script type=\"text/javascript\">/*20:3 创建于 2014-12-26*/var cpro_id = \"u1879755\";</script><script src=\"http://cpro.baidustatic.com/cpro/ui/cm.js\" type=\"text/javascript\"></script>";
    }
}
