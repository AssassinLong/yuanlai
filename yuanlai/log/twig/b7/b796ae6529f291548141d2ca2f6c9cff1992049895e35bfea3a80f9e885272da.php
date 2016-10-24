<?php

/* xinqing.html */
class __TwigTemplate_e50851490d3a1e1f05d5fadead2ebe0259c3b8e54fee833570513bae0126e9a0 extends Twig_Template
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
        <script src=\"web/js/min.js\"  ></script>
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
<title></title>
</head>

\t<body>
\t\t<!-- 导航栏开始 -->
\t\t<header class=\"mui-bar mui-bar-nav\">
\t\t\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
\t\t\t<h1 class=\"mui-title\">心情微博</h1>
\t\t\t<a href=\"?r=home/fossa\" class=\"mui-btn-link mui-btn-nav mui-pull-right \">发布</a>
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


\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<ul class=\"mui-table-view\"></ul>
\t\t\t</div>
\t\t\t<div class=\"make-upload\" object=\"weibo\" param=\"weibo\"></div>
\t\t\t<div id=\"userid\" class=\"weibo-list\" userid=\"0\">

\t\t\t<div class=\"tabs\">
\t\t\t<ul class=\"mui-table-view\">
\t\t\t";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr"]) ? $context["arr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 83
            echo "\t\t\t<li class=\"mui-table-view-cell mui-media\">
\t\t\t<div class=\"mui-pull-left mui-media-object clip-bg\" style=\"background: url(./web/upimg/147703271252.png);\">
\t\t\t<a class=\"link\" href=\"\"></a>
\t\t\t</div>
\t\t\t<div class=\"mui-media-body\">
\t\t\t<a class=\"link\" href=\"\">
\t\t\t<b>
\t\t\t<font>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "name", array()), "html", null, true);
            echo "</font>
\t\t\t</b>
\t\t\t<span>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "datatime", array()), "html", null, true);
            echo "</span>
\t\t\t</a>
\t\t\t</div>
\t\t\t<div>
\t\t\t<a class=\"link\" href=\"\">
\t\t\t<p>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "text", array()), "html", null, true);
            echo "</p>
\t\t\t</a>
\t\t\t</div>
\t\t\t<div>
\t\t\t<a class=\"do-collect\" href=\"javascript:;\"  objid=\"7154\">
\t\t\t<span id=\"a\" rel=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "id", array()), "html", null, true);
            echo "\" class=\"ico ico-msg-heart\"></span>
\t\t\t<label>";
            // line 103
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
        // line 110
        echo "\t\t\t</li>
\t\t\t</ul>
\t\t\t</div>

\t\t\t</body>

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
        return array (  153 => 110,  140 => 103,  136 => 102,  128 => 97,  120 => 92,  115 => 90,  106 => 83,  102 => 82,  19 => 1,);
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
        <script src=\"web/js/min.js\"  ></script>
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
<title></title>
</head>

\t<body>
\t\t<!-- 导航栏开始 -->
\t\t<header class=\"mui-bar mui-bar-nav\">
\t\t\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
\t\t\t<h1 class=\"mui-title\">心情微博</h1>
\t\t\t<a href=\"?r=home/fossa\" class=\"mui-btn-link mui-btn-nav mui-pull-right \">发布</a>
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


\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<ul class=\"mui-table-view\"></ul>
\t\t\t</div>
\t\t\t<div class=\"make-upload\" object=\"weibo\" param=\"weibo\"></div>
\t\t\t<div id=\"userid\" class=\"weibo-list\" userid=\"0\">

\t\t\t<div class=\"tabs\">
\t\t\t<ul class=\"mui-table-view\">
\t\t\t{% for v in arr %}
\t\t\t<li class=\"mui-table-view-cell mui-media\">
\t\t\t<div class=\"mui-pull-left mui-media-object clip-bg\" style=\"background: url(./web/upimg/147703271252.png);\">
\t\t\t<a class=\"link\" href=\"\"></a>
\t\t\t</div>
\t\t\t<div class=\"mui-media-body\">
\t\t\t<a class=\"link\" href=\"\">
\t\t\t<b>
\t\t\t<font>{{v.name}}</font>
\t\t\t</b>
\t\t\t<span>{{ v.datatime }}</span>
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

\t\t\t</body>

</html>";
    }
}
