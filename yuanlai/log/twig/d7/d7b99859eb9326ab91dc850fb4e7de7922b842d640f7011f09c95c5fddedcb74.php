<?php

/* advices.html */
class __TwigTemplate_8a0c64c57c349a7a55f05d38ae972e3a31f16e1d271402a0d19e559773cbd97e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout3.html", "advices.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout3.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "\t\t<div class=\"jy pr\">
        \t<!--顶部导航--start-->
            \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pr per-top-nav fs12\">
                    <div class=\"pa per-top-l\" onclick='document.location.href=history.go(-1);'></div>

                    <div class=\"pa per-top-r\"  onclick='document.location.href=\"?r=home/index\";' >
                \t<!--弹层--start-->
                    <div class=\"pa pla-pop clearfix dn\">
                        <ul class=\"fl\">
                            
                        </ul>   \t
                    </div>
                    <!--弹层--end-->
                </div>

                <p class=\"fs12\">收信箱</p>

            </div>
            <!--顶部导航--end-->
<!--
\t\t\t<div class='' style=''><a href='#' style='color:red;text-decoration:underline;'><img src=\"http://images1.jyimg.com/w4/wap/i/p/images/wtouch/b/0715_3.jpg\" alt=\"loading\" border=\"0\" class=\"dpb\" /></a></div>
-->
            <!--主要部分--start-->
            <div class=\"\">
\t\t\t\t<ul class=\"clearfix jy-pk-t pl40\">
\t<li class=\"mailbox cur\">
\t\t<a href=\"javascript:\" class=\"fs12 co2\">收信箱</a>
\t\t<span class=\"pa\"></span>
\t\t<div class=\"pa mailbox-pop\"></div>
\t</li>
\t<li><a href=\"#\" class=\"fs12 co2\">已发信件</a><span class=\"pa\"></span></li>
\t<li><a href=\"#\" class=\"fs12 co2\">模板箱</a><span class=\"pa\"></span></li>
</ul>                <div class=\"jy-pk-c\"> 
\t\t\t\t\t<!--收信箱--start-->
                    <div class=\"pr cur\">
\t\t\t\t\t\t<div class=\"pa bbw p10 mailbox-pop-con dn\">
\t\t<p class=\"fs12 co2\"><a href=\"#\">未读信件</a></p>
\t\t<p class=\"fs12 co2\"><a href=\"#\">未读免费信件</a></p>
\t\t<p class=\"fs12 co2\"><a href=\"#\">已读信件</a></p>
\t\t<p class=\"fs12 co10\"><a href=\"#\">按时间查看</a></p>
</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tac mt30\">
\t\t\t\t\t\t\t\t<p class=\"fs12 co2 mt20 mb20\">您的收信箱中暂无信件！</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class='mt20'>&nbsp;</div>
\t\t\t\t\t\t                    </div>
                    <!--收信箱--end-->
                </div>
            </div>
            <!--主要部分--end-->

                        <!--footer--start-->
            ";
    }

    public function getTemplateName()
    {
        return "advices.html";
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
        return "{% extends \"layout3.html\"%}
{% block content %}
\t\t<div class=\"jy pr\">
        \t<!--顶部导航--start-->
            \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pr per-top-nav fs12\">
                    <div class=\"pa per-top-l\" onclick='document.location.href=history.go(-1);'></div>

                    <div class=\"pa per-top-r\"  onclick='document.location.href=\"?r=home/index\";' >
                \t<!--弹层--start-->
                    <div class=\"pa pla-pop clearfix dn\">
                        <ul class=\"fl\">
                            
                        </ul>   \t
                    </div>
                    <!--弹层--end-->
                </div>

                <p class=\"fs12\">收信箱</p>

            </div>
            <!--顶部导航--end-->
<!--
\t\t\t<div class='' style=''><a href='#' style='color:red;text-decoration:underline;'><img src=\"http://images1.jyimg.com/w4/wap/i/p/images/wtouch/b/0715_3.jpg\" alt=\"loading\" border=\"0\" class=\"dpb\" /></a></div>
-->
            <!--主要部分--start-->
            <div class=\"\">
\t\t\t\t<ul class=\"clearfix jy-pk-t pl40\">
\t<li class=\"mailbox cur\">
\t\t<a href=\"javascript:\" class=\"fs12 co2\">收信箱</a>
\t\t<span class=\"pa\"></span>
\t\t<div class=\"pa mailbox-pop\"></div>
\t</li>
\t<li><a href=\"#\" class=\"fs12 co2\">已发信件</a><span class=\"pa\"></span></li>
\t<li><a href=\"#\" class=\"fs12 co2\">模板箱</a><span class=\"pa\"></span></li>
</ul>                <div class=\"jy-pk-c\"> 
\t\t\t\t\t<!--收信箱--start-->
                    <div class=\"pr cur\">
\t\t\t\t\t\t<div class=\"pa bbw p10 mailbox-pop-con dn\">
\t\t<p class=\"fs12 co2\"><a href=\"#\">未读信件</a></p>
\t\t<p class=\"fs12 co2\"><a href=\"#\">未读免费信件</a></p>
\t\t<p class=\"fs12 co2\"><a href=\"#\">已读信件</a></p>
\t\t<p class=\"fs12 co10\"><a href=\"#\">按时间查看</a></p>
</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tac mt30\">
\t\t\t\t\t\t\t\t<p class=\"fs12 co2 mt20 mb20\">您的收信箱中暂无信件！</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class='mt20'>&nbsp;</div>
\t\t\t\t\t\t                    </div>
                    <!--收信箱--end-->
                </div>
            </div>
            <!--主要部分--end-->

                        <!--footer--start-->
            {% endblock %}
";
    }
}
