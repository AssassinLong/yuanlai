<?php

/* login.html */
class __TwigTemplate_ebe3a60c53c1f5ff78c4abdb7db6e9defe42698f7fd11cbaa79acffd99d05fff extends Twig_Template
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
        echo "<div class=\"header\"> <a href=\"?r=home/index\" class=\"home\"> <span class=\"header-icon header-icon-home\"></span> <span class=\"header-name\">主页</span> </a>

  <div class=\"title\" id=\"titleString\">登录</div>

  <a href=\"javascript:history.go(-1);\" class=\"back\"> <span class=\"header-icon header-icon-return\"></span> <span class=\"header-name\">返回</span> </a> </div>

<div class=\"container width80 pt20\">

  <form name=\"myform\" method=\"post\" action=\"?r=index/login_in\" id=\"loginform\" class=\"form-horizontal\">

    <div class=\"control-group\">

      <input name=\"username\" autocomplete=\"off\" type=\"text\" id=\"username\" class=\"input width100 \" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入手机号/Email/会员卡号\" />

    </div>

    <div class=\"control-group\">

      <input name=\"password\" autocomplete=\"off\" type=\"password\" id=\"password\" class=\"width100 input\" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"持卡会员初次登录，密码为证件号后4位\" />

    </div>

    <div class=\"control-group\">

      <label class=\"checkbox fl\">

        <input name=\"remember\" type=\"checkbox\" id=\"ctl00_ContentPlaceHolder1_cbSaveCookie\" style=\"float: none;margin-left: 0px;\" />

        七天免登陆 </label>

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
            });
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
        return "{% extends \"layout.html\"%}{% block content %}<div class=\"header\"> <a href=\"?r=home/index\" class=\"home\"> <span class=\"header-icon header-icon-home\"></span> <span class=\"header-name\">主页</span> </a>  <div class=\"title\" id=\"titleString\">登录</div>  <a href=\"javascript:history.go(-1);\" class=\"back\"> <span class=\"header-icon header-icon-return\"></span> <span class=\"header-name\">返回</span> </a> </div><div class=\"container width80 pt20\">  <form name=\"myform\" method=\"post\" action=\"?r=index/login_in\" id=\"loginform\" class=\"form-horizontal\">    <div class=\"control-group\">      <input name=\"username\" autocomplete=\"off\" type=\"text\" id=\"username\" class=\"input width100 \" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入手机号/Email/会员卡号\" />    </div>    <div class=\"control-group\">      <input name=\"password\" autocomplete=\"off\" type=\"password\" id=\"password\" class=\"width100 input\" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"持卡会员初次登录，密码为证件号后4位\" />    </div>    <div class=\"control-group\">      <label class=\"checkbox fl\">        <input name=\"remember\" type=\"checkbox\" id=\"ctl00_ContentPlaceHolder1_cbSaveCookie\" style=\"float: none;margin-left: 0px;\" />        七天免登陆 </label>      <a class=\"fr\" href=\"lostPassword.html\">忘记密码？</a> </div>    <div class=\"control-group\"> <span id=\"loading\"></span> <span class=\"red\" id=\"tip\"></span> </div>    <div class=\"control-group\">      <input type=\"hidden\" name=\"ret\" value=\"\" id=\"ret\" >      <button   id=\"btn_login\" class=\"btn-large purple button width100\">立即登录</button>         </div>    <div class=\"control-group\" style=\"font-size:12px;\">  还没账号？ <a href=\"?r=index/register\" class=\"ui-link\">立即免费注册</a><br>      已在酒店官网注册/激活过的会员按原官网注册/激活信息登录。<br>      持卡会员初次登录请使用手机号或卡号作为登录帐号，密码为身份证号后4位。     </div>  </form></div><script>            \$('#btn_login').click(function(){                \$('#tip').html('');                if(\$('#username').val()==''){                    \$('#tip').html('请输入账号');                    return false;                }                if(\$('#password').val()==''){                    \$('#tip').html('请输入密码');                    return false;                }            });        </script>{% endblock %}";
    }
}
