<?php

/* login.html */
class __TwigTemplate_6868a0d31a0d793d751b9a665fb05723c7d78cb0c4c2f4ff880a95eace9cf190 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "login.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"header\"> <a href=\"../../default.htm\" class=\"home\"> <span class=\"header-icon header-icon-home\"></span> <span class=\"header-name\">主页</span> </a>

  <div class=\"title\" id=\"titleString\">登录</div>

  <a href=\"javascript:history.go(-1);\" class=\"back\"> <span class=\"header-icon header-icon-return\"></span> <span class=\"header-name\">返回</span> </a> </div>

<div class=\"container width80 pt20\">

  <form name=\"myform\" method=\"post\" action=\"?index/login_in\" id=\"loginform\" class=\"form-horizontal\">

    <div class=\"control-group\">

      <input name=\"username\" type=\"text\" id=\"username\" class=\"input width100 \" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入账号/手机号/邮箱\" />

    </div>

    <div class=\"control-group\">

      <input name=\"password\" type=\"password\" id=\"password\" class=\"width100 input\" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入会员密码\" />

    </div>

    <div class=\"control-group\">

      <label class=\"checkbox fl\">

        <input name=\"remember\" type=\"checkbox\" id=\"ctl00_ContentPlaceHolder1_cbSaveCookie\" style=\"float: none;margin-left: 0px;\" />

        记住账号 </label>

      <a class=\"fr\" href=\"lostPassword.html\">忘记密码？</a> </div>

    <div class=\"control-group\"> <span id=\"loading\"></span> <span class=\"red\" id=\"tip\"></span> </div>

    <div class=\"control-group\">

      <input type=\"hidden\" name=\"ret\" value=\"\" id=\"ret\" >

     
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input id=\"btn_login\" class=\"btn-large purple button width100\" type=\"submit\" value=\"立即登陆\">
     

    </div>

    <div class=\"control-group\" style=\"font-size:12px;\">  还没账号？ <a href=\"?index/register\" class=\"ui-link\">立即免费注册</a><br>

      已在本网注册/激活过的会员按原官网注册/激活信息登录。<br>

      未注册用户，情点击上方的立即注册进行注册账号，感谢您的光临。

     </div>

  </form>

</div>

<script>

            

</script> 



";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\"%}{% block content %}<div class=\"header\"> <a href=\"../../default.htm\" class=\"home\"> <span class=\"header-icon header-icon-home\"></span> <span class=\"header-name\">主页</span> </a>  <div class=\"title\" id=\"titleString\">登录</div>  <a href=\"javascript:history.go(-1);\" class=\"back\"> <span class=\"header-icon header-icon-return\"></span> <span class=\"header-name\">返回</span> </a> </div><div class=\"container width80 pt20\">  <form name=\"myform\" method=\"post\" action=\"?index/login_in\" id=\"loginform\" class=\"form-horizontal\">    <div class=\"control-group\">      <input name=\"username\" type=\"text\" id=\"username\" class=\"input width100 \" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入账号/手机号/邮箱\" />    </div>    <div class=\"control-group\">      <input name=\"password\" type=\"password\" id=\"password\" class=\"width100 input\" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入会员密码\" />    </div>    <div class=\"control-group\">      <label class=\"checkbox fl\">        <input name=\"remember\" type=\"checkbox\" id=\"ctl00_ContentPlaceHolder1_cbSaveCookie\" style=\"float: none;margin-left: 0px;\" />        记住账号 </label>      <a class=\"fr\" href=\"lostPassword.html\">忘记密码？</a> </div>    <div class=\"control-group\"> <span id=\"loading\"></span> <span class=\"red\" id=\"tip\"></span> </div>    <div class=\"control-group\">      <input type=\"hidden\" name=\"ret\" value=\"\" id=\"ret\" >           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input id=\"btn_login\" class=\"btn-large purple button width100\" type=\"submit\" value=\"立即登陆\">         </div>    <div class=\"control-group\" style=\"font-size:12px;\">  还没账号？ <a href=\"?index/register\" class=\"ui-link\">立即免费注册</a><br>      已在本网注册/激活过的会员按原官网注册/激活信息登录。<br>      未注册用户，情点击上方的立即注册进行注册账号，感谢您的光临。     </div>  </form></div><script>            </script> {% endblock %}";
    }
}
