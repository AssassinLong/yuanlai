<?php

/* xinqing.html */
class __TwigTemplate_a0910579662b44da75847699554e373a8881c47dad710b133c0a5efa6fa7efa8 extends Twig_Template
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
        echo "
 <!DOCTYPE html>
<html>
<head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\"  content=\"width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
\t\t<!--标准mui.css-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"web/js/css.css\">
        <!--引用Jquery-->
        <script src=\"web/js/jquery.js\"></script>
<<<<<<< HEAD
        <script src=\"web/js/min.js\" /></script>
\t    <script src=\"web/js/core.js\" /></script>
       
\t\t\t
=======
        <script src=\"web/js/min.js\" ></script>
\t    <script src=\"web/js/core.js\" ></script>
        <script>
            \$(window).ready(function () {
                (function (\$) {
                    \$('body').on('tap', '.link', function (event) {
                    var url = this.getAttribute('href');
                    var blank = this.getAttribute('target');
                    if (blank == '_blank') {
                        window.open(url);
                    } else {
                        window.location.href = url;
                    }
                    });
                })(mui);
                var lab = document.getElementsByClassName('site-nav')[0];
                if (lab) {
                    var nav = getCookie('tab_item');
                    if (nav) {
                            var as = lab.getElementsByTagName('a');
                            for (var i; i < as.length; i++) {
                               as[i].className = 'link'
                            }
                            as[nav - 1].className = 'link mui-active'
                    }
                }
                function getCookie(name) {
                    var arr, reg = new RegExp(\"(^| )\" + name + \"=([^;]*)(;|\$)\");
                    if (arr = document.cookie.match(reg))
                        return unescape(arr[2]);
                    else
                        return null;
                }
            })
        </script>
>>>>>>> b74d7ed842b86974f23b3d784436f5ad5308c438

<title></title>
</head>

\t<body>
\t\t<!-- 导航栏开始 -->
\t\t<header class=\"mui-bar mui-bar-nav\">
\t\t\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
\t\t\t<h1 class=\"mui-title\">心情微博</h1>
\t\t\t<a href=\"javascript:;\" class=\"mui-btn-link mui-btn-nav mui-pull-right do-weibo-add\">发布</a>
\t\t</header>
\t\t<!-- 导航栏结束 -->

\t\t<div class=\"layer\">
\t\t</div>
\t<!-- 选项卡结束 -->

\t\t<div class=\"mui-content backgroud-none\" pull=\"weibo-list\" pull-obj=\"weibo-list > .mui-table-view\">
\t\t\t<!-- 心情微博开始 -->
\t\t\t<div class=\"weibo-list\" id=\"userid\" userid=\"0\" >
\t\t\t\t<div class=\"tabs\">
\t\t\t\t\t<div class=\"mui-segmented-control normal\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<ul class=\"mui-table-view\"></ul>
\t\t\t</div>
\t\t\t<div class=\"make-upload\" object=\"weibo\" param=\"weibo\"></div>
\t\t\t<div id=\"userid\" class=\"weibo-list\" userid=\"0\">
\t\t\t
\t\t\t<div class=\"tabs\">
\t\t\t<ul class=\"mui-table-view\">
\t\t\t";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr"]) ? $context["arr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 90
            echo "\t\t\t<li class=\"mui-table-view-cell mui-media\">
\t\t\t<div class=\"mui-pull-left mui-media-object clip-bg\" style=\"background: url(http://www.7799520.com/jiaoyou/data/attachment/avatar/201610/06/374151/avatar_big.jpg);\">
\t\t\t<a class=\"link\" href=\"\"></a>
\t\t\t</div>
\t\t\t<div class=\"mui-media-body\">
\t\t\t<a class=\"link\" href=\"\">
\t\t\t<b>
\t\t\t<font>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "name", array()), "html", null, true);
            echo "</font>
\t\t\t</b>
\t\t\t<span>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "datatime", array()), "html", null, true);
            echo " . 浙江 杭州</span>
\t\t\t</a>
\t\t\t</div>
\t\t\t<div>
\t\t\t<a class=\"link\" href=\"\">
\t\t\t<p>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "text", array()), "html", null, true);
            echo "</p>
\t\t\t</a>
\t\t\t</div>
\t\t\t<div>
\t\t\t<a class=\"do-collect\" href=\"javascript:;\"  objid=\"7154\">
\t\t\t<span id=\"a\" rel=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "id", array()), "html", null, true);
            echo "\" class=\"ico ico-msg-heart\"></span>
\t\t\t<label>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "dian", array()), "html", null, true);
            echo "</label>
\t\t\t</a>
\t\t\t<a class=\"do-message-add\" href=\"javascript:;\" objid=\"374151\">

\t\t\t</a>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "\t\t\t</li>
\t\t\t</ul>
\t\t\t</div>
            
\t\t\t

</html>";
    }

    public function getTemplateName()
    {
        return "xinqing.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 117,  147 => 110,  143 => 109,  135 => 104,  127 => 99,  122 => 97,  113 => 90,  109 => 89,  19 => 1,);
    }

    public function getSource()
    {
        return "
 <!DOCTYPE html>
<html>
<head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\"  content=\"width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
\t\t<!--标准mui.css-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"web/js/css.css\">
        <!--引用Jquery-->
        <script src=\"web/js/jquery.js\"></script>
<<<<<<< HEAD
        <script src=\"web/js/min.js\" /></script>
\t    <script src=\"web/js/core.js\" /></script>
       
\t\t\t
=======
        <script src=\"web/js/min.js\" ></script>
\t    <script src=\"web/js/core.js\" ></script>
        <script>
            \$(window).ready(function () {
                (function (\$) {
                    \$('body').on('tap', '.link', function (event) {
                    var url = this.getAttribute('href');
                    var blank = this.getAttribute('target');
                    if (blank == '_blank') {
                        window.open(url);
                    } else {
                        window.location.href = url;
                    }
                    });
                })(mui);
                var lab = document.getElementsByClassName('site-nav')[0];
                if (lab) {
                    var nav = getCookie('tab_item');
                    if (nav) {
                            var as = lab.getElementsByTagName('a');
                            for (var i; i < as.length; i++) {
                               as[i].className = 'link'
                            }
                            as[nav - 1].className = 'link mui-active'
                    }
                }
                function getCookie(name) {
                    var arr, reg = new RegExp(\"(^| )\" + name + \"=([^;]*)(;|\$)\");
                    if (arr = document.cookie.match(reg))
                        return unescape(arr[2]);
                    else
                        return null;
                }
            })
        </script>
>>>>>>> b74d7ed842b86974f23b3d784436f5ad5308c438

<title></title>
</head>

\t<body>
\t\t<!-- 导航栏开始 -->
\t\t<header class=\"mui-bar mui-bar-nav\">
\t\t\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
\t\t\t<h1 class=\"mui-title\">心情微博</h1>
\t\t\t<a href=\"javascript:;\" class=\"mui-btn-link mui-btn-nav mui-pull-right do-weibo-add\">发布</a>
\t\t</header>
\t\t<!-- 导航栏结束 -->

\t\t<div class=\"layer\">
\t\t</div>
\t<!-- 选项卡结束 -->

\t\t<div class=\"mui-content backgroud-none\" pull=\"weibo-list\" pull-obj=\"weibo-list > .mui-table-view\">
\t\t\t<!-- 心情微博开始 -->
\t\t\t<div class=\"weibo-list\" id=\"userid\" userid=\"0\" >
\t\t\t\t<div class=\"tabs\">
\t\t\t\t\t<div class=\"mui-segmented-control normal\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<ul class=\"mui-table-view\"></ul>
\t\t\t</div>
\t\t\t<div class=\"make-upload\" object=\"weibo\" param=\"weibo\"></div>
\t\t\t<div id=\"userid\" class=\"weibo-list\" userid=\"0\">
\t\t\t
\t\t\t<div class=\"tabs\">
\t\t\t<ul class=\"mui-table-view\">
\t\t\t{% for v in arr %}
\t\t\t<li class=\"mui-table-view-cell mui-media\">
\t\t\t<div class=\"mui-pull-left mui-media-object clip-bg\" style=\"background: url(http://www.7799520.com/jiaoyou/data/attachment/avatar/201610/06/374151/avatar_big.jpg);\">
\t\t\t<a class=\"link\" href=\"\"></a>
\t\t\t</div>
\t\t\t<div class=\"mui-media-body\">
\t\t\t<a class=\"link\" href=\"\">
\t\t\t<b>
\t\t\t<font>{{v.name}}</font>
\t\t\t</b>
\t\t\t<span>{{ v.datatime }} . 浙江 杭州</span>
\t\t\t</a>
\t\t\t</div>
\t\t\t<div>
\t\t\t<a class=\"link\" href=\"\">
\t\t\t<p>{{v.text}}</p>
\t\t\t</a>
\t\t\t</div>
\t\t\t<div>
\t\t\t<a class=\"do-collect\" href=\"javascript:;\"  objid=\"7154\">
\t\t\t<span id=\"a\" rel=\"{{v.id}}\" class=\"ico ico-msg-heart\"></span>
\t\t\t<label>{{v.dian}}</label>
\t\t\t</a>
\t\t\t<a class=\"do-message-add\" href=\"javascript:;\" objid=\"374151\">

\t\t\t</a>
\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t</li>
\t\t\t</ul>
\t\t\t</div>
            
\t\t\t

</html>";
    }
}
