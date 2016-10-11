<?php

/* fossa.html */
class __TwigTemplate_8c4b39236ca340f0969dafd6e2a2d807f58e1aea9db3506aa8f77bf48a411f29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout3.html", "fossa.html", 1);
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
        echo "
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

                <p class=\"fs12\">个人中心</p>

            </div>
            <!--顶部导航--end-->
            <!--主要部分--start-->
            <div class=\"\">
            \t<!--个人信息--start-->
                <div class=\"clearfix m-20-14\">
                    <div class=\"fl jy-today-fate\">
                        <img src=\"http://images1.jyimg.com/w4/global/i/nopic_m_t.jpg\" width=\"74\" height=\"90\" />
                    </div>
                    <div class=\"fl ml10\">
                        <p class=\"fs12 co2 fwb\">懒人模板</p>
                        <p class=\"fs12 co3 mt8\">佳缘ID: 97389349</p>
                        <p class=\"fs12 co3 mt8\"><span class=\"mr10\">北京</span>|<span class=\"mr10 ml10\">23岁</span>|<span class=\"mr10 ml10\">170厘米</span>|<span class=\"co3 ml10\">未婚</span></p>
                        <p class=\"fs12 mt6\"><span class=\"co3\">5000～10000元</span></p>
                        <p class=\"clearfix mt5\">
                            <span class=\"fs12 co3 fl lh20 mr10\">会员身份:</span><span class=\"fl jy-me-sh ms3-g mr4\" onclick=\"window.location.href='http://m.jiayuan.com/payment/index.php?pin=97389349_110110240_1374084157_61e68572f0c658fbaadebf5f3f030fe3a458beb4&v=6&action=product&function=category&category=zshy&s=ee5e6b';return false;\"></span><span class=\"fl jy-me-sh ms7-g mr4\" onclick=\"window.location.href='http://m.jiayuan.com/payment/index.php?pin=97389349_110110240_1374084157_61e68572f0c658fbaadebf5f3f030fe3a458beb4&v=6&action=product&function=category&category=fxby&s=ee5e6b';return false;\"></span><span class=\"fl jy-me-sh ms2-g\" onclick=\"window.location.href='http://m.jiayuan.com/payment/index.php?pin=97389349_110110240_1374084157_61e68572f0c658fbaadebf5f3f030fe3a458beb4&v=6&action=product&function=category&category=kxby&s=ee5e6b';return false;\"></span>
                        </p>
                    </div>
                </div>
\t\t\t\t<div class='fs12 mt10' style=''><a href='#' style='color:red;text-decoration:underline;'>收到[1]位美女关注哦</a></div>
                <!--个人信息--end-->
                <div class=\"pt1 bt1 mt20\">
\t\t\t\t\t<div class=\"main-bg p-20-14 pr\">
                        <ul class=\"pa bbw jy-per-cen-n clearfix\">
                        \t<li class=\"\"><img src=\"http://images1c.jyimg.com/w4/wap/i/m/2013/04/per-cen/new1.jpg\" /></li>
                            <li class=\"lh24 ml10\"><span class=\"fs12 co10\">0张</span></li>
                            <li class=\"\"><img src=\"http://images1c.jyimg.com/w4/wap/i/m/2013/04/per-cen/new2.jpg\" /></li>
                            <li class=\"lh24 ml10\"><span class=\"fs12 co8\">0张</span></li>
                            <li class=\"\"><img src=\"http://images1c.jyimg.com/w4/wap/i/m/2013/04/per-cen/new3.jpg\" /></li>
                            <li class=\"lh24 ml10\"><span class=\"fs12 co13\">1张</span></li>
                        </ul>
                        <div class=\"pa bbw cen-n-n1\"></div>
                        <div class=\"pa bbw cen-n-n2\"></div>
                        <ul class=\"bbw p10 jy-per-cen mt50\">
                           <li class=\"t6 bb1\"><a href=\"#\" class=\"fs12 co2\">购买邮票</a></li>
                           <li class=\"t7\"><a href=\"#\" class=\"fs12 co2\">购买服务</a></li>
                           <!--<li class=\"t8\"><a href=\"#\" class=\"fs12 co2\">优惠频道</a></li>-->
                        </ul>
                    \t<ul class=\"bbw p10 jy-per-cen mt20\">
                           <li class=\"t1 bb1\"><a href=\"#\" class=\"fs12 co2\">我的相册</a></li>
                           <li class=\"t2 bb1\"><a href=\"#\" class=\"fs12 co2\">修改资料</a></li>
                           <li class=\"t3 bb1\"><a href=\"#\" class=\"fs12 co2\">择偶条件</a></li>
                           <li class=\"t4\"><a href=\"#\" class=\"fs12 co2\">征友状态</a></li>
                        </ul>
                        <ul class=\"bbw p10 mt20 jy-per-cen\">
                           <li class=\"t5 bb1\"><a href=\"#\" class=\"fs12 co2\">我的评价</a></li>
                           <li class=\"t5\"><a href=\"#\" class=\"fs12 co2\">意见反馈</a></li>
                        </ul>
                        <div class=\"mt20\">
                            <div class=\"jy-btn-d\">
                                <a class=\"jy-btn\" href=\"#\">切换/退出帐户</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--主要部分--end-->
            <!--footer--start-->
                        <!--footer--start-->
            ";
    }

    public function getTemplateName()
    {
        return "fossa.html";
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

                <p class=\"fs12\">个人中心</p>

            </div>
            <!--顶部导航--end-->
            <!--主要部分--start-->
            <div class=\"\">
            \t<!--个人信息--start-->
                <div class=\"clearfix m-20-14\">
                    <div class=\"fl jy-today-fate\">
                        <img src=\"http://images1.jyimg.com/w4/global/i/nopic_m_t.jpg\" width=\"74\" height=\"90\" />
                    </div>
                    <div class=\"fl ml10\">
                        <p class=\"fs12 co2 fwb\">懒人模板</p>
                        <p class=\"fs12 co3 mt8\">佳缘ID: 97389349</p>
                        <p class=\"fs12 co3 mt8\"><span class=\"mr10\">北京</span>|<span class=\"mr10 ml10\">23岁</span>|<span class=\"mr10 ml10\">170厘米</span>|<span class=\"co3 ml10\">未婚</span></p>
                        <p class=\"fs12 mt6\"><span class=\"co3\">5000～10000元</span></p>
                        <p class=\"clearfix mt5\">
                            <span class=\"fs12 co3 fl lh20 mr10\">会员身份:</span><span class=\"fl jy-me-sh ms3-g mr4\" onclick=\"window.location.href='http://m.jiayuan.com/payment/index.php?pin=97389349_110110240_1374084157_61e68572f0c658fbaadebf5f3f030fe3a458beb4&v=6&action=product&function=category&category=zshy&s=ee5e6b';return false;\"></span><span class=\"fl jy-me-sh ms7-g mr4\" onclick=\"window.location.href='http://m.jiayuan.com/payment/index.php?pin=97389349_110110240_1374084157_61e68572f0c658fbaadebf5f3f030fe3a458beb4&v=6&action=product&function=category&category=fxby&s=ee5e6b';return false;\"></span><span class=\"fl jy-me-sh ms2-g\" onclick=\"window.location.href='http://m.jiayuan.com/payment/index.php?pin=97389349_110110240_1374084157_61e68572f0c658fbaadebf5f3f030fe3a458beb4&v=6&action=product&function=category&category=kxby&s=ee5e6b';return false;\"></span>
                        </p>
                    </div>
                </div>
\t\t\t\t<div class='fs12 mt10' style=''><a href='#' style='color:red;text-decoration:underline;'>收到[1]位美女关注哦</a></div>
                <!--个人信息--end-->
                <div class=\"pt1 bt1 mt20\">
\t\t\t\t\t<div class=\"main-bg p-20-14 pr\">
                        <ul class=\"pa bbw jy-per-cen-n clearfix\">
                        \t<li class=\"\"><img src=\"http://images1c.jyimg.com/w4/wap/i/m/2013/04/per-cen/new1.jpg\" /></li>
                            <li class=\"lh24 ml10\"><span class=\"fs12 co10\">0张</span></li>
                            <li class=\"\"><img src=\"http://images1c.jyimg.com/w4/wap/i/m/2013/04/per-cen/new2.jpg\" /></li>
                            <li class=\"lh24 ml10\"><span class=\"fs12 co8\">0张</span></li>
                            <li class=\"\"><img src=\"http://images1c.jyimg.com/w4/wap/i/m/2013/04/per-cen/new3.jpg\" /></li>
                            <li class=\"lh24 ml10\"><span class=\"fs12 co13\">1张</span></li>
                        </ul>
                        <div class=\"pa bbw cen-n-n1\"></div>
                        <div class=\"pa bbw cen-n-n2\"></div>
                        <ul class=\"bbw p10 jy-per-cen mt50\">
                           <li class=\"t6 bb1\"><a href=\"#\" class=\"fs12 co2\">购买邮票</a></li>
                           <li class=\"t7\"><a href=\"#\" class=\"fs12 co2\">购买服务</a></li>
                           <!--<li class=\"t8\"><a href=\"#\" class=\"fs12 co2\">优惠频道</a></li>-->
                        </ul>
                    \t<ul class=\"bbw p10 jy-per-cen mt20\">
                           <li class=\"t1 bb1\"><a href=\"#\" class=\"fs12 co2\">我的相册</a></li>
                           <li class=\"t2 bb1\"><a href=\"#\" class=\"fs12 co2\">修改资料</a></li>
                           <li class=\"t3 bb1\"><a href=\"#\" class=\"fs12 co2\">择偶条件</a></li>
                           <li class=\"t4\"><a href=\"#\" class=\"fs12 co2\">征友状态</a></li>
                        </ul>
                        <ul class=\"bbw p10 mt20 jy-per-cen\">
                           <li class=\"t5 bb1\"><a href=\"#\" class=\"fs12 co2\">我的评价</a></li>
                           <li class=\"t5\"><a href=\"#\" class=\"fs12 co2\">意见反馈</a></li>
                        </ul>
                        <div class=\"mt20\">
                            <div class=\"jy-btn-d\">
                                <a class=\"jy-btn\" href=\"#\">切换/退出帐户</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--主要部分--end-->
            <!--footer--start-->
                        <!--footer--start-->
            {% endblock %}
";
    }
}
