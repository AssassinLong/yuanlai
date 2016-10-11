<?php

/* seek.html */
class __TwigTemplate_45ef0529240fbd719334cc724f8d98f1c351620b1d8138bbfabe496f7b130e42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout3.html", "seek.html", 1);
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
            \t<div class=\"pr per-top-nav fs12\">
            \t<div class=\"pa per-top-l\" onclick='document.location.href=history.go(-1);'></div>

\t\t\t\t<div class=\"pa per-top-r\"  onclick='document.location.href=\"?r=home/index\";' >
                \t<!--弹层--start-->
                    <div class=\"pa pla-pop clearfix dn\" >

                    </div>
                    <!--弹层--end-->
                </div>

                <p class=\"fs12\">搜索</p>

            </div>
            <!--顶部导航--end-->
<!--
\t\t\t\t\t\t\t<div class='' style=''><a href='#' style='color:red;text-decoration:underline;'><img src=\"img/0617_1.gif\" alt=\"loading\" border=\"0\" class=\"dpb\" /></a></div>
-->
\t\t\t            <!--主要部分--start-->
            <div class=\"\">
            \t                
                            \t<!--sousuotab--start-->
                                <ul class=\"clearfix jy-search\">
                \t<li ><a href=\"#\" class=\"fs12 co2\">条件搜索</a><span class=\"pa\"></span></li>
                    <li  id=\"kuaijie\">
                    <a href=\"javascript:\" class=\"fs12 co2\">快捷搜索</a><span class=\"pa\"></span>
                    
                    </li>

                    <li ><a href=\"#\" class=\"fs12 co2\">ID搜索</a><span class=\"pa\"></span></li>
                    <li ><a href=\"#\" class=\"fs12 co2\">昵称搜索</a><span class=\"pa\"></span></li>
                </ul>                <!--sousuotab--end-->
                                <div class=\"m-20-14 jy-pk-c clearfix mb20\">

                    <!--list--start-->
                    <div class=\"\">
                                        \t<!--个人信息--start-->
                                                <div class=\"pr clearfix pb10 bb1 min-h110\">
                                                    <div class=\"fl jy-today-fate\">
                                <a href='#'><img src=\"http://a1c.jyimg.com/25/1d/b776ab201ef2a057b126eef73784/avatar.jpg\" width=\"74\" height=\"90\" border=0 /></a>
                            </div>
                            <div class=\"fl ml10\">
                                <p class=\"fs12 co2 fwb\"><a class='co2' href='#'>人生没有“彩排”</a></p>
                                <p class=\"fs12 co3 mt8\"><span class=\"mr10\">北京</span>|<span class=\"mr10 ml10\">20岁</span>|<span class=\"mr10 ml10\">163厘米</span>|<span class=\"co3 ml10\">未婚</span></p>
                                <p class=\"fs12 mt6\"><span class=\"co3\">2000～5000元</span></p>
\t\t\t\t\t\t\t\t<p class=\"clearfix mt6\"><span class=\"fl fs12 co3\">已认证：</span><span class=\"fl ml6 per-rz rz2\"></span></p>
                            </div>
                            <div class=\"pa pk-btn-r\">
                            \t<ul class=\"clearfix per-btn\">
                               \t \t<li class=\"b2\">
                                        
                                \t\t<a href=\"#\" onclick=\"return JYWX_TOOL.say_hello(base_url, verify_str, 96498046, \$(this).parent('li'), '', 'gray','search-index');\">打招呼</a>
                                        
                                \t</li>
                                </ul>
                            </div>
                        </div>
                        <!--个人信息--end-->
                                         \t<!--个人信息--start-->
                                                <!--中间用的-->
                        <div class=\"pr clearfix pb10 mt30 bb1 min-h110\">
                                                    <div class=\"fl jy-today-fate\">
                                <a href='#'><img src=\"http://a1c.jyimg.com/31/88/834426277f347b1c89992d4ab834/avatar.jpg\" width=\"74\" height=\"90\"  border=0/></a>
                            </div>
                            <div class=\"fl ml10\">
                                <p class=\"fs12 co2 fwb\"><a class='co2' href='#'>奈菲尔塔利</a></p>
                                <p class=\"fs12 co3 mt8\"><span class=\"mr10\">北京</span>|<span class=\"mr10 ml10\">20岁</span>|<span class=\"mr10 ml10\">165厘米</span>|<span class=\"co3 ml10\">未婚</span></p>
                                <p class=\"fs12 mt6\"><span class=\"co3\">5000～10000元</span></p>
\t\t\t\t\t\t\t\t<p class=\"clearfix mt6\"><span class=\"fl fs12 co3\">已认证：</span><span class=\"fl ml6 per-rz rz7\"></span><span class=\"fl ml6 per-rz rz2\"></span></p>
                            </div>
                            <div class=\"pa pk-btn-r\">
                            \t<ul class=\"clearfix per-btn\">
                               \t \t<li class=\"b2\">
                                        
                                \t\t<a href=\"#\" onclick=\"return JYWX_TOOL.say_hello(base_url, verify_str, 93946734, \$(this).parent('li'), '', 'gray','search-index');\">打招呼</a>
                                        
                                \t</li>
                                </ul>
                            </div>
                        </div>
                        <!--个人信息--end-->
                                         \t<!--个人信息--start-->
                                                <!--中间用的-->
                        <div class=\"pr clearfix pb10 mt30 bb1 min-h110\">
                                                    <div class=\"fl jy-today-fate\">
                                <a href='#'><img src=\"http://a1c.jyimg.com/51/11/fa9ed97a71b50105175e0ab15434/avatar.jpg\" width=\"74\" height=\"90\" border=0/></a>
                            </div>
                            <div class=\"fl ml10\">
                                <p class=\"fs12 co2 fwb\"><a class='co2' href='#'>紫希</a></p>
                                <p class=\"fs12 co3 mt8\"><span class=\"mr10\">北京</span>|<span class=\"mr10 ml10\">23岁</span>|<span class=\"mr10 ml10\">153厘米</span>|<span class=\"co3 ml10\">未婚</span></p>
                                <p class=\"fs12 mt6\"><span class=\"co3\">2000～5000元</span></p>
\t\t\t\t\t\t\t\t<p class=\"clearfix mt6\"><span class=\"fl fs12 co3\">已认证：</span><span class=\"fl ml6 per-rz rz2\"></span></p>
                            </div>
                            <div class=\"pa pk-btn-r\">
                            \t<ul class=\"clearfix per-btn\">
                               \t \t<li class=\"b2\">
                                        
                                \t\t<a href=\"#\" onclick=\"return JYWX_TOOL.say_hello(base_url, verify_str, 75576679, \$(this).parent('li'), '', 'gray','search-index');\">打招呼</a>
                                        
                                \t</li>
                                </ul>
                            </div>
                        </div>
                        <!--个人信息--end-->
                                         \t<!--个人信息--start-->
                                                <!--中间用的-->
                        <div class=\"pr clearfix pb10 mt30 bb1 min-h110\">
                                                    <div class=\"fl jy-today-fate\">
                                <a href='#'><img src=\"http://a2c.jyimg.com/e1/62/d164b22a431fa0faec29ccc600e6/avatar.jpg\" width=\"74\" height=\"90\" border=0/></a>
                            </div>
                            <div class=\"fl ml10\">
                                <p class=\"fs12 co2 fwb\"><a class='co2' href='#'>没有昵称</a></p>
                                <p class=\"fs12 co3 mt8\"><span class=\"mr10\">北京</span>|<span class=\"mr10 ml10\">21岁</span>|<span class=\"mr10 ml10\">168厘米</span>|<span class=\"co3 ml10\">未婚</span></p>
                                <p class=\"fs12 mt6\"><span class=\"co3\">2000～5000元</span></p>
\t\t\t\t\t\t\t\t<p class=\"clearfix mt6\"><span class=\"fl fs12 co3\">已认证：</span><span class=\"fl ml6 per-rz rz2\"></span></p>
                            </div>
                            <div class=\"pa pk-btn-r\">
                            \t<ul class=\"clearfix per-btn\">
                               \t \t<li class=\"b2\">
                                        
                                \t\t<a href=\"#\" onclick=\"return JYWX_TOOL.say_hello(base_url, verify_str, 94584802, \$(this).parent('li'), '', 'gray','search-index');\">打招呼</a>
                                        
                                \t</li>
                                </ul>
                            </div>
                        </div>
                        <!--个人信息--end-->
                                         \t<!--个人信息--start-->
                                                <div class=\"pr clearfix pb10 mt30 min-h110\">
                                                    <div class=\"fl jy-today-fate\">
                                <a href='#'><img src=\"http://a2c.jyimg.com/b8/53/61b9f34b6b04075558caabf87fe6/avatar.jpg\" width=\"74\" height=\"90\" border=0/></a>
                            </div>
                            <div class=\"fl ml10\">
                                <p class=\"fs12 co2 fwb\"><a class='co2' href='#'>Daisy丶</a></p>
                                <p class=\"fs12 co3 mt8\"><span class=\"mr10\">北京</span>|<span class=\"mr10 ml10\">22岁</span>|<span class=\"mr10 ml10\">180厘米</span>|<span class=\"co3 ml10\">未婚</span></p>
                                <p class=\"fs12 mt6\"><span class=\"co3\">2000～5000元</span></p>
\t\t\t\t\t\t\t\t<p class=\"clearfix mt6\"><span class=\"fl fs12 co3\">已认证：</span><span class=\"fl ml6 per-rz rz1\"></span><span class=\"fl ml6 per-rz rz3\"></span><span class=\"fl ml6 per-rz rz2\"></span></p>
                            </div>
                            <div class=\"pa pk-btn-r\">
                            \t<ul class=\"clearfix per-btn\">
                               \t \t<li class=\"b2\">
                                        
                                \t\t<a href=\"#\" onclick=\"return JYWX_TOOL.say_hello(base_url, verify_str, 84531996, \$(this).parent('li'), '', 'gray','search-index');\">打招呼</a>
                                        
                                \t</li>
                                </ul>
                            </div>
                        </div>
                        <!--个人信息--end-->
                                             
                        <!--翻页--start-->
                        \t\t\t<!--翻页--start-->
\t\t\t<div class=\"fs12 jy-pk-page mt30 mb20\">
\t\t\t\t<ul class=\"clearfix ml25\">
\t\t\t\t\t<li class=\"page-prev\"><a href=\"#\" class=\"co3\">上一页</a><span class=\"pa\"></span></li>
\t\t\t\t\t<li class=\"page-drop\"><select name=\"page\" onchange=\"document.location.href='./?pin=97389349_110110240_1374081288_12620e965cb9129f5c9ced5683fa2d565475ce14&amp;v=6&amp;page='+this.value;\"><option value=\"1\" selected=\"selected\">1</option><option value=\"2\">2</option><option value=\"3\">3</option><option value=\"4\">4</option><option value=\"5\">5</option><option value=\"6\">6</option><option value=\"7\">7</option><option value=\"8\">8</option><option value=\"9\">9</option><option value=\"10\">10</option><option value=\"11\">11</option><option value=\"12\">12</option><option value=\"13\">13</option><option value=\"14\">14</option><option value=\"15\">15</option><option value=\"16\">16</option><option value=\"17\">17</option><option value=\"18\">18</option><option value=\"19\">19</option><option value=\"20\">20</option></select>\t\t\t\t\t</li>
\t\t\t\t\t


\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!--翻页--end-->
                        <!--翻页--end-->
                    </div>
                    <!--list--end-->
                </div>
            </div>

            <!--主要部分--end-->
            <!--footer--start-->

                            <!--footer--start-->
            ";
    }

    public function getTemplateName()
    {
        return "seek.html";
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
            \t<div class=\"pr per-top-nav fs12\">
            \t<div class=\"pa per-top-l\" onclick='document.location.href=history.go(-1);'></div>

\t\t\t\t<div class=\"pa per-top-r\"  onclick='document.location.href=\"?r=home/index\";' >
                \t<!--弹层--start-->
                    <div class=\"pa pla-pop clearfix dn\" >

                    </div>
                    <!--弹层--end-->
                </div>

                <p class=\"fs12\">搜索</p>

            </div>
            <!--顶部导航--end-->
<!--
\t\t\t\t\t\t\t<div class='' style=''><a href='#' style='color:red;text-decoration:underline;'><img src=\"img/0617_1.gif\" alt=\"loading\" border=\"0\" class=\"dpb\" /></a></div>
-->
\t\t\t            <!--主要部分--start-->
            <div class=\"\">
            \t                
                            \t<!--sousuotab--start-->
                                <ul class=\"clearfix jy-search\">
                \t<li ><a href=\"#\" class=\"fs12 co2\">条件搜索</a><span class=\"pa\"></span></li>
                    <li  id=\"kuaijie\">
                    <a href=\"javascript:\" class=\"fs12 co2\">快捷搜索</a><span class=\"pa\"></span>
                    
                    </li>

                    <li ><a href=\"#\" class=\"fs12 co2\">ID搜索</a><span class=\"pa\"></span></li>
                    <li ><a href=\"#\" class=\"fs12 co2\">昵称搜索</a><span class=\"pa\"></span></li>
                </ul>                <!--sousuotab--end-->
                                <div class=\"m-20-14 jy-pk-c clearfix mb20\">

                    <!--list--start-->
                    <div class=\"\">
                                        \t<!--个人信息--start-->
                                                <div class=\"pr clearfix pb10 bb1 min-h110\">
                                                    <div class=\"fl jy-today-fate\">
                                <a href='#'><img src=\"http://a1c.jyimg.com/25/1d/b776ab201ef2a057b126eef73784/avatar.jpg\" width=\"74\" height=\"90\" border=0 /></a>
                            </div>
                            <div class=\"fl ml10\">
                                <p class=\"fs12 co2 fwb\"><a class='co2' href='#'>人生没有“彩排”</a></p>
                                <p class=\"fs12 co3 mt8\"><span class=\"mr10\">北京</span>|<span class=\"mr10 ml10\">20岁</span>|<span class=\"mr10 ml10\">163厘米</span>|<span class=\"co3 ml10\">未婚</span></p>
                                <p class=\"fs12 mt6\"><span class=\"co3\">2000～5000元</span></p>
\t\t\t\t\t\t\t\t<p class=\"clearfix mt6\"><span class=\"fl fs12 co3\">已认证：</span><span class=\"fl ml6 per-rz rz2\"></span></p>
                            </div>
                            <div class=\"pa pk-btn-r\">
                            \t<ul class=\"clearfix per-btn\">
                               \t \t<li class=\"b2\">
                                        
                                \t\t<a href=\"#\" onclick=\"return JYWX_TOOL.say_hello(base_url, verify_str, 96498046, \$(this).parent('li'), '', 'gray','search-index');\">打招呼</a>
                                        
                                \t</li>
                                </ul>
                            </div>
                        </div>
                        <!--个人信息--end-->
                                         \t<!--个人信息--start-->
                                                <!--中间用的-->
                        <div class=\"pr clearfix pb10 mt30 bb1 min-h110\">
                                                    <div class=\"fl jy-today-fate\">
                                <a href='#'><img src=\"http://a1c.jyimg.com/31/88/834426277f347b1c89992d4ab834/avatar.jpg\" width=\"74\" height=\"90\"  border=0/></a>
                            </div>
                            <div class=\"fl ml10\">
                                <p class=\"fs12 co2 fwb\"><a class='co2' href='#'>奈菲尔塔利</a></p>
                                <p class=\"fs12 co3 mt8\"><span class=\"mr10\">北京</span>|<span class=\"mr10 ml10\">20岁</span>|<span class=\"mr10 ml10\">165厘米</span>|<span class=\"co3 ml10\">未婚</span></p>
                                <p class=\"fs12 mt6\"><span class=\"co3\">5000～10000元</span></p>
\t\t\t\t\t\t\t\t<p class=\"clearfix mt6\"><span class=\"fl fs12 co3\">已认证：</span><span class=\"fl ml6 per-rz rz7\"></span><span class=\"fl ml6 per-rz rz2\"></span></p>
                            </div>
                            <div class=\"pa pk-btn-r\">
                            \t<ul class=\"clearfix per-btn\">
                               \t \t<li class=\"b2\">
                                        
                                \t\t<a href=\"#\" onclick=\"return JYWX_TOOL.say_hello(base_url, verify_str, 93946734, \$(this).parent('li'), '', 'gray','search-index');\">打招呼</a>
                                        
                                \t</li>
                                </ul>
                            </div>
                        </div>
                        <!--个人信息--end-->
                                         \t<!--个人信息--start-->
                                                <!--中间用的-->
                        <div class=\"pr clearfix pb10 mt30 bb1 min-h110\">
                                                    <div class=\"fl jy-today-fate\">
                                <a href='#'><img src=\"http://a1c.jyimg.com/51/11/fa9ed97a71b50105175e0ab15434/avatar.jpg\" width=\"74\" height=\"90\" border=0/></a>
                            </div>
                            <div class=\"fl ml10\">
                                <p class=\"fs12 co2 fwb\"><a class='co2' href='#'>紫希</a></p>
                                <p class=\"fs12 co3 mt8\"><span class=\"mr10\">北京</span>|<span class=\"mr10 ml10\">23岁</span>|<span class=\"mr10 ml10\">153厘米</span>|<span class=\"co3 ml10\">未婚</span></p>
                                <p class=\"fs12 mt6\"><span class=\"co3\">2000～5000元</span></p>
\t\t\t\t\t\t\t\t<p class=\"clearfix mt6\"><span class=\"fl fs12 co3\">已认证：</span><span class=\"fl ml6 per-rz rz2\"></span></p>
                            </div>
                            <div class=\"pa pk-btn-r\">
                            \t<ul class=\"clearfix per-btn\">
                               \t \t<li class=\"b2\">
                                        
                                \t\t<a href=\"#\" onclick=\"return JYWX_TOOL.say_hello(base_url, verify_str, 75576679, \$(this).parent('li'), '', 'gray','search-index');\">打招呼</a>
                                        
                                \t</li>
                                </ul>
                            </div>
                        </div>
                        <!--个人信息--end-->
                                         \t<!--个人信息--start-->
                                                <!--中间用的-->
                        <div class=\"pr clearfix pb10 mt30 bb1 min-h110\">
                                                    <div class=\"fl jy-today-fate\">
                                <a href='#'><img src=\"http://a2c.jyimg.com/e1/62/d164b22a431fa0faec29ccc600e6/avatar.jpg\" width=\"74\" height=\"90\" border=0/></a>
                            </div>
                            <div class=\"fl ml10\">
                                <p class=\"fs12 co2 fwb\"><a class='co2' href='#'>没有昵称</a></p>
                                <p class=\"fs12 co3 mt8\"><span class=\"mr10\">北京</span>|<span class=\"mr10 ml10\">21岁</span>|<span class=\"mr10 ml10\">168厘米</span>|<span class=\"co3 ml10\">未婚</span></p>
                                <p class=\"fs12 mt6\"><span class=\"co3\">2000～5000元</span></p>
\t\t\t\t\t\t\t\t<p class=\"clearfix mt6\"><span class=\"fl fs12 co3\">已认证：</span><span class=\"fl ml6 per-rz rz2\"></span></p>
                            </div>
                            <div class=\"pa pk-btn-r\">
                            \t<ul class=\"clearfix per-btn\">
                               \t \t<li class=\"b2\">
                                        
                                \t\t<a href=\"#\" onclick=\"return JYWX_TOOL.say_hello(base_url, verify_str, 94584802, \$(this).parent('li'), '', 'gray','search-index');\">打招呼</a>
                                        
                                \t</li>
                                </ul>
                            </div>
                        </div>
                        <!--个人信息--end-->
                                         \t<!--个人信息--start-->
                                                <div class=\"pr clearfix pb10 mt30 min-h110\">
                                                    <div class=\"fl jy-today-fate\">
                                <a href='#'><img src=\"http://a2c.jyimg.com/b8/53/61b9f34b6b04075558caabf87fe6/avatar.jpg\" width=\"74\" height=\"90\" border=0/></a>
                            </div>
                            <div class=\"fl ml10\">
                                <p class=\"fs12 co2 fwb\"><a class='co2' href='#'>Daisy丶</a></p>
                                <p class=\"fs12 co3 mt8\"><span class=\"mr10\">北京</span>|<span class=\"mr10 ml10\">22岁</span>|<span class=\"mr10 ml10\">180厘米</span>|<span class=\"co3 ml10\">未婚</span></p>
                                <p class=\"fs12 mt6\"><span class=\"co3\">2000～5000元</span></p>
\t\t\t\t\t\t\t\t<p class=\"clearfix mt6\"><span class=\"fl fs12 co3\">已认证：</span><span class=\"fl ml6 per-rz rz1\"></span><span class=\"fl ml6 per-rz rz3\"></span><span class=\"fl ml6 per-rz rz2\"></span></p>
                            </div>
                            <div class=\"pa pk-btn-r\">
                            \t<ul class=\"clearfix per-btn\">
                               \t \t<li class=\"b2\">
                                        
                                \t\t<a href=\"#\" onclick=\"return JYWX_TOOL.say_hello(base_url, verify_str, 84531996, \$(this).parent('li'), '', 'gray','search-index');\">打招呼</a>
                                        
                                \t</li>
                                </ul>
                            </div>
                        </div>
                        <!--个人信息--end-->
                                             
                        <!--翻页--start-->
                        \t\t\t<!--翻页--start-->
\t\t\t<div class=\"fs12 jy-pk-page mt30 mb20\">
\t\t\t\t<ul class=\"clearfix ml25\">
\t\t\t\t\t<li class=\"page-prev\"><a href=\"#\" class=\"co3\">上一页</a><span class=\"pa\"></span></li>
\t\t\t\t\t<li class=\"page-drop\"><select name=\"page\" onchange=\"document.location.href='./?pin=97389349_110110240_1374081288_12620e965cb9129f5c9ced5683fa2d565475ce14&amp;v=6&amp;page='+this.value;\"><option value=\"1\" selected=\"selected\">1</option><option value=\"2\">2</option><option value=\"3\">3</option><option value=\"4\">4</option><option value=\"5\">5</option><option value=\"6\">6</option><option value=\"7\">7</option><option value=\"8\">8</option><option value=\"9\">9</option><option value=\"10\">10</option><option value=\"11\">11</option><option value=\"12\">12</option><option value=\"13\">13</option><option value=\"14\">14</option><option value=\"15\">15</option><option value=\"16\">16</option><option value=\"17\">17</option><option value=\"18\">18</option><option value=\"19\">19</option><option value=\"20\">20</option></select>\t\t\t\t\t</li>
\t\t\t\t\t


\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!--翻页--end-->
                        <!--翻页--end-->
                    </div>
                    <!--list--end-->
                </div>
            </div>

            <!--主要部分--end-->
            <!--footer--start-->

                            <!--footer--start-->
            {% endblock %}";
    }
}
