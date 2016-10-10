<?php

/* register.html */
class __TwigTemplate_b24f907d502bc11e422ddc81c95c370e96393ef2d355ded01a9d53bda058046c extends Twig_Template
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

<div class=\"header\">

 <a href=\"../../default.htm\" class=\"home\">

            <span class=\"header-icon header-icon-home\"></span>

            <span class=\"header-name\">主页</span>

</a>

<div class=\"title\" id=\"titleString\">免费注册</div>

<a href=\"javascript:history.go(-1);\" class=\"back\">

            <span class=\"header-icon header-icon-return\"></span>

            <span class=\"header-name\">返回</span>

  </a>

 </div>



        

     <div class=\"container width80 pt20\">

 <form name=\"myform\" method=\"post\" action=\"?r=index/register\" id=\"myform\" class=\"form-horizontal\" data-validate=\"parsley\">

  <div class=\"control-group\">

      <input required=\"required\" name=\"data[phone]\" type=\"text\" id=\"mobile\" class=\"width100 input parsley-validated parsley-error\" style=\"background:#F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入您的手机号码作为登陆名\" />

  </div>   

  <div class=\"control-group\">

      <input required=\"required\" name=\"data[name]\" type=\"text\" id=\"name\" class=\"input width100 \" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入您的姓名\" />

  </div>

  <div class=\"control-group\">

      <input required=\"required\" name=\"data[password]\" type=\"password\" id=\"password\" class=\"width100 input\" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入您的密码\" />

  </div>

   <div class=\"control-group\">

      <input required=\"required\" name=\"data[password2]\" type=\"password\" id=\"password2\" class=\"width100 input\" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请重复输入您的密码\" />

  </div>

   <div class=\"control-group\">

       <span class=\"red\" id=\"tip\"></span>

   </div>
     <div class=\"control-group\"> </div>
  <div class=\"control-group\">

      <button id=\"ctl00_ContentPlaceHolder1_btnOK\" class=\"btn-large purple button width100\" type=\"submit\">立即注册</button>

  </div>

    <div class=\"control-group\">

         已在官网注册/激活的会员，请<a href=\"?r=index/login\">立即登陆</a>

  </div>

</form>

</div>



  <div class=\"footer\">

    <div class=\"gezifooter\">

        <a href=\"#\" class=\"ui-link\">酒店预订</a> <font color=\"#878787\">|</font>

                <a href=\"?r=index/login\" class=\"ui-link\">立即登录</a> <font color=\"#878787\">|</font>

        <a href=\"?r=index/register\" class=\"ui-link\">免费注册</a> <font color=\"#878787\">|</font>
        <a href=\"#\" class=\"ui-link\">电脑版</a>

    </div>

    <div class=\"gezifooter\">

        <p style=\"color:#bbb;\">缘来社交 &copy; 版权所有 2013</p>

    </div>

</div>
<script>
    \$('#btn_login').click(function() {
        \$('#tip').html('');

        if (\$('#username').val() == '') {

            \$('#tip').html('请输入账号');
            return false;

        }
        if(\$('#username').val()){

        }
        if (\$('#password').val() == '') {

            \$('#tip').html('请输入密码');

            return false;

        }
    });
</script>

<div style=\"display:none;\"><script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cdiv id='cnzz_stat_icon_1000047539'%3E%3C/div%3E%3Cscript src='\" + cnzz_protocol + \"s22.cnzz.com/z_stat.php%3Fid%3D1000047539%26show%3Dpic' type='text/javascript'%3E%3C/script%3E\"));</script></div>

  

</body>

</html> <script type=\"text/javascript\">/*20:3 创建于 2014-12-26*/var cpro_id = \"u1879755\";</script><script src=\"http://cpro.baidustatic.com/cpro/ui/cm.js\" type=\"text/javascript\"></script>";
    }

    public function getTemplateName()
    {
        return "register.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html><html><head><title>缘来社交</title><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;\" /><meta content=\"yes\" name=\"apple-mobile-web-app-capable\" /><link href=\"./web/styles/bootstrap.min.css\" rel=\"stylesheet\" /><link href=\"./web/styles/NewGlobal.css\" rel=\"stylesheet\" /><script type=\"text/javascript\" src=\"./web/jquery.1.10.1.min.js\"></script><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"></head><body><div class=\"header\"> <a href=\"../../default.htm\" class=\"home\">            <span class=\"header-icon header-icon-home\"></span>            <span class=\"header-name\">主页</span></a><div class=\"title\" id=\"titleString\">免费注册</div><a href=\"javascript:history.go(-1);\" class=\"back\">            <span class=\"header-icon header-icon-return\"></span>            <span class=\"header-name\">返回</span>  </a> </div>             <div class=\"container width80 pt20\"> <form name=\"myform\" method=\"post\" action=\"?r=index/register\" id=\"myform\" class=\"form-horizontal\" data-validate=\"parsley\">  <div class=\"control-group\">      <input required=\"required\" name=\"data[phone]\" type=\"text\" id=\"mobile\" class=\"width100 input parsley-validated parsley-error\" style=\"background:#F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入您的手机号码作为登陆名\" />  </div>     <div class=\"control-group\">      <input required=\"required\" name=\"data[name]\" type=\"text\" id=\"name\" class=\"input width100 \" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入您的姓名\" />  </div>  <div class=\"control-group\">      <input required=\"required\" name=\"data[password]\" type=\"password\" id=\"password\" class=\"width100 input\" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入您的密码\" />  </div>   <div class=\"control-group\">      <input required=\"required\" name=\"data[password2]\" type=\"password\" id=\"password2\" class=\"width100 input\" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请重复输入您的密码\" />  </div>   <div class=\"control-group\">       <span class=\"red\" id=\"tip\"></span>   </div>     <div class=\"control-group\"> </div>  <div class=\"control-group\">      <button id=\"ctl00_ContentPlaceHolder1_btnOK\" class=\"btn-large purple button width100\" type=\"submit\">立即注册</button>  </div>    <div class=\"control-group\">         已在官网注册/激活的会员，请<a href=\"?r=index/login\">立即登陆</a>  </div></form></div>  <div class=\"footer\">    <div class=\"gezifooter\">        <a href=\"#\" class=\"ui-link\">酒店预订</a> <font color=\"#878787\">|</font>                <a href=\"?r=index/login\" class=\"ui-link\">立即登录</a> <font color=\"#878787\">|</font>        <a href=\"?r=index/register\" class=\"ui-link\">免费注册</a> <font color=\"#878787\">|</font>        <a href=\"#\" class=\"ui-link\">电脑版</a>    </div>    <div class=\"gezifooter\">        <p style=\"color:#bbb;\">缘来社交 &copy; 版权所有 2013</p>    </div></div><script>    \$('#btn_login').click(function() {        \$('#tip').html('');        if (\$('#username').val() == '') {            \$('#tip').html('请输入账号');            return false;        }        if(\$('#username').val()){        }        if (\$('#password').val() == '') {            \$('#tip').html('请输入密码');            return false;        }    });</script><div style=\"display:none;\"><script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cdiv id='cnzz_stat_icon_1000047539'%3E%3C/div%3E%3Cscript src='\" + cnzz_protocol + \"s22.cnzz.com/z_stat.php%3Fid%3D1000047539%26show%3Dpic' type='text/javascript'%3E%3C/script%3E\"));</script></div>  </body></html> <script type=\"text/javascript\">/*20:3 创建于 2014-12-26*/var cpro_id = \"u1879755\";</script><script src=\"http://cpro.baidustatic.com/cpro/ui/cm.js\" type=\"text/javascript\"></script>";
    }
}
