<?php

/* forum.html */
class __TwigTemplate_3c19606562191b30a25489176420e2e10e4c016d1c18476d44651574a91544a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout3.html", "forum.html", 1);
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
            \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pr per-top-nav fs12\">
                <div class=\"pa per-top-l\" onclick='document.location.href=history.go(-1);'></div>

                <div class=\"pa per-top-r\"  onclick='document.location.href=\"?r=home/index\";' >

\t\t\t\t<!--<div class=\"pa per-top-r\">
                \t&lt;!&ndash;弹层--start&ndash;&gt;
                    <div class=\"pa pla-pop clearfix dn\">
                        <ul class=\"fl\">
                            <li><a href=\"#\">首页</a></li>
                            <li><a href=\"#\">搜索</a></li>
                            <li><a href=\"#\">邮箱</a></li>
                        </ul> 
                        <ul class=\"fl\">
                            <li><a href=\"#\">购买</a></li>
                            <li class=\"cur\"><a href=\"#\">佳缘广场</a></li>
                            <li><a href=\"#\">个人中心</a></li>
                        </ul>   \t
                    </div>
                    &lt;!&ndash;弹层--end&ndash;&gt;
                </div>-->

                <p class=\"fs12\">佳缘广场</p>

            </div>
            <!--顶部导航--end-->
            <!--主要部分--start-->
            <div class=\"main-bg pt1 bt1\">
\t\t\t\t<ul class=\"clearfix jy-pla\">
                \t<li class=\"b1\">
                    \t<div><a href=\"#\" class=\"a1\"></a></div>
                        <p class=\"fs12 co2 lh30\">缘分</p>
                    </li>
                    <li class=\"b2\">
                    \t<div><a href=\"#\" class=\"a2\"></a></div>
                        <p class=\"fs12 co2 lh30\">丘比特</p>
                    </li>
                    <li class=\"b3\">
                    \t<div><a href=\"#\" class=\"a3\"></a></div>
                        <p class=\"fs12 co2 lh30\">猜猜看</p>
                    </li>
                    <li class=\"b4\">
                    \t<div><a href=\"#\" class=\"a4\"></a></div>
                        <p class=\"fs12 co2 lh30\">触电</p>
                    </li>
                    
                    <li class=\"b5\">
                    \t<div><a href=\"#\" class=\"a1\"></a></div>
                        <p class=\"fs12 co2 lh30\">姻缘配对</p>
                    </li>
                    <li class=\"b6\">
                    \t<div><a href=\"#\" class=\"a2\"></a></div>
                        <p class=\"fs12 co2 lh30\">非诚勿入</p>
                    </li>
                    <li class=\"b7\">
                    \t<div><a href=\"#\" class=\"a3\"></a></div>
                        <p class=\"fs12 co2 lh30\">星座速配</p>
                    </li>
                    <li class=\"b8\">
                    \t<div><a href=\"#\" class=\"a4\"></a></div>
                        <p class=\"fs12 co2 lh30\">PK大赛</p>
                    </li>
                    
                    <li class=\"b9\">
                    \t<div><a href=\"#\" class=\"a1\"></a></div>
                        <p class=\"fs12 co2 lh30\">说媒</p>
                    </li>
                    <li class=\"b10\">
                    \t<div><a href=\"#\" class=\"a2\"></a></div>
                        <p class=\"fs12 co2 lh30\">附近的人</p>
                    </li>
                    <li class=\"b11\">
                    \t<div><a href=\"#\" class=\"a3\"></a></div>
                        <p class=\"fs12 co2 lh30\">夫妻相</p>
                    </li>
                    <li class=\"b12\">
                    \t<div><a href=\"#\" class=\"a4\"></a></div>
                        <p class=\"fs12 co2 lh30\">关注</p>
                    </li>
                </ul>
            </div>
            <!--主要部分--end-->
                        <!--footer--start-->
            ";
    }

    public function getTemplateName()
    {
        return "forum.html";
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
            \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pr per-top-nav fs12\">
                <div class=\"pa per-top-l\" onclick='document.location.href=history.go(-1);'></div>

                <div class=\"pa per-top-r\"  onclick='document.location.href=\"?r=home/index\";' >

\t\t\t\t<!--<div class=\"pa per-top-r\">
                \t&lt;!&ndash;弹层--start&ndash;&gt;
                    <div class=\"pa pla-pop clearfix dn\">
                        <ul class=\"fl\">
                            <li><a href=\"#\">首页</a></li>
                            <li><a href=\"#\">搜索</a></li>
                            <li><a href=\"#\">邮箱</a></li>
                        </ul> 
                        <ul class=\"fl\">
                            <li><a href=\"#\">购买</a></li>
                            <li class=\"cur\"><a href=\"#\">佳缘广场</a></li>
                            <li><a href=\"#\">个人中心</a></li>
                        </ul>   \t
                    </div>
                    &lt;!&ndash;弹层--end&ndash;&gt;
                </div>-->

                <p class=\"fs12\">佳缘广场</p>

            </div>
            <!--顶部导航--end-->
            <!--主要部分--start-->
            <div class=\"main-bg pt1 bt1\">
\t\t\t\t<ul class=\"clearfix jy-pla\">
                \t<li class=\"b1\">
                    \t<div><a href=\"#\" class=\"a1\"></a></div>
                        <p class=\"fs12 co2 lh30\">缘分</p>
                    </li>
                    <li class=\"b2\">
                    \t<div><a href=\"#\" class=\"a2\"></a></div>
                        <p class=\"fs12 co2 lh30\">丘比特</p>
                    </li>
                    <li class=\"b3\">
                    \t<div><a href=\"#\" class=\"a3\"></a></div>
                        <p class=\"fs12 co2 lh30\">猜猜看</p>
                    </li>
                    <li class=\"b4\">
                    \t<div><a href=\"#\" class=\"a4\"></a></div>
                        <p class=\"fs12 co2 lh30\">触电</p>
                    </li>
                    
                    <li class=\"b5\">
                    \t<div><a href=\"#\" class=\"a1\"></a></div>
                        <p class=\"fs12 co2 lh30\">姻缘配对</p>
                    </li>
                    <li class=\"b6\">
                    \t<div><a href=\"#\" class=\"a2\"></a></div>
                        <p class=\"fs12 co2 lh30\">非诚勿入</p>
                    </li>
                    <li class=\"b7\">
                    \t<div><a href=\"#\" class=\"a3\"></a></div>
                        <p class=\"fs12 co2 lh30\">星座速配</p>
                    </li>
                    <li class=\"b8\">
                    \t<div><a href=\"#\" class=\"a4\"></a></div>
                        <p class=\"fs12 co2 lh30\">PK大赛</p>
                    </li>
                    
                    <li class=\"b9\">
                    \t<div><a href=\"#\" class=\"a1\"></a></div>
                        <p class=\"fs12 co2 lh30\">说媒</p>
                    </li>
                    <li class=\"b10\">
                    \t<div><a href=\"#\" class=\"a2\"></a></div>
                        <p class=\"fs12 co2 lh30\">附近的人</p>
                    </li>
                    <li class=\"b11\">
                    \t<div><a href=\"#\" class=\"a3\"></a></div>
                        <p class=\"fs12 co2 lh30\">夫妻相</p>
                    </li>
                    <li class=\"b12\">
                    \t<div><a href=\"#\" class=\"a4\"></a></div>
                        <p class=\"fs12 co2 lh30\">关注</p>
                    </li>
                </ul>
            </div>
            <!--主要部分--end-->
                        <!--footer--start-->
            {% endblock %}
";
    }
}
