<?php

/* jibenziliao.html */
class __TwigTemplate_fb3a92399359229e85518ae337fd1fd74cde46ef54767e0a24272961e2fdce4f extends Twig_Template
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
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
\t\t<!--标准mui.css-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"web/js/css.css\">
        <!--引用Jquery-->
        <script src=\"web/js/jquery.js\"></script>
        <script src=\"web/js/min.js\" /></script>
\t    <script src=\"web/js/core.js\" /></script>
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

<title>编辑基本资料</title>
</head>

\t<body class=\"backgroud-white\">
\t\t<!-- 导航栏开始 -->
\t\t<header class=\"mui-bar mui-bar-nav\">
\t\t\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
\t\t\t<h1 class=\"mui-title\">基本资料</h1>
\t\t\t<a href=\"javascript:;\" class=\"mui-btn-link mui-btn-nav mui-pull-right do-submit\" ajax-url=\"\" href-url=\"\" dialog=\"保存成功\">保存</a>
\t\t</header>
\t\t<!-- 导航栏结束 -->

\t\t<div class=\"mui-content\">
\t\t\t<!-- 基本资料开始 -->
\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t<div class=\"form form-search\">
\t\t\t\t\t<div class=\"padding form-list\">
\t\t\t\t\t\t<div class=\"mui-input-row\">
\t\t\t\t\t\t\t<label>身高</label>
\t\t\t\t\t\t\t<font class=\"mui-pull-right\">180CM</font>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"CityPicker\" class=\"mui-input-row\">
\t\t\t\t\t\t\t<label>地区</label>
\t\t\t\t\t\t\t<font class=\"mui-pull-right\">北京 - 北京</font>
\t\t\t\t\t\t\t<input name=\"provinceid\" type=\"hidden\" value=\"\" />
\t\t\t\t\t\t\t<input name=\"cityid\" type=\"hidden\" value=\"\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"SalaryPicker\" class=\"mui-input-row\">
\t\t\t\t\t\t\t<label>月薪</label>
\t\t\t\t\t\t\t<font class=\"mui-pull-right\">2000-5000</font>
\t\t\t\t\t\t\t<input name=\"salary\" type=\"hidden\" value=\"\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"AstroPicker\" class=\"mui-input-row\">
\t\t\t\t\t\t\t<label>星座</label>
\t\t\t\t\t\t\t<font class=\"mui-pull-right\">处女座</font>
\t\t\t\t\t\t\t<input name=\"astro\" type=\"hidden\" value=\"\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"NationPicker\" class=\"mui-input-row\">
\t\t\t\t\t\t\t<label>籍贯</label>
\t\t\t\t\t\t\t<font class=\"mui-pull-right\">-</font>
\t\t\t\t\t\t\t<input name=\"nationprovinceid\" type=\"hidden\" value=\"\" />
\t\t\t\t\t\t\t<input name=\"nationcityid\" type=\"hidden\" value=\"\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mui-input-row\">
\t\t\t\t\t\t\t<label>学历</label>
\t\t\t\t\t\t\t<font class=\"mui-pull-right\">初中</font>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"MarryPicker\" class=\"mui-input-row\">
\t\t\t\t\t\t\t<label>婚姻状况</label>
\t\t\t\t\t\t\t<font class=\"mui-pull-right\">未婚</font>
\t\t\t\t\t\t\t<input name=\"marrystatus\" type=\"hidden\" value=\"\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>

\t\t\t
\t\t\t
\t\t\t<!-- 基本资料结束 -->
\t\t</div>
\t\t<!-- CNZZ代码 -->
\t<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=http%3A%2F%2Fm.7799520.com%2Fself%2F377537.html&rnd=1671377287\" width=\"0\" height=\"0\"/>\t</body>
\t<!--引用自定义脚本-->
\t<script src=\"js/core1.js\"></script> 
\t<!--引用自定义脚本-->
\t


</html>";
    }

    public function getTemplateName()
    {
        return "jibenziliao.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "
 <!DOCTYPE html>
<html>
<head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
\t\t<!--标准mui.css-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"web/js/css.css\">
        <!--引用Jquery-->
        <script src=\"web/js/jquery.js\"></script>
        <script src=\"web/js/min.js\" /></script>
\t    <script src=\"web/js/core.js\" /></script>
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

<title>编辑基本资料</title>
</head>

\t<body class=\"backgroud-white\">
\t\t<!-- 导航栏开始 -->
\t\t<header class=\"mui-bar mui-bar-nav\">
\t\t\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
\t\t\t<h1 class=\"mui-title\">基本资料</h1>
\t\t\t<a href=\"javascript:;\" class=\"mui-btn-link mui-btn-nav mui-pull-right do-submit\" ajax-url=\"\" href-url=\"\" dialog=\"保存成功\">保存</a>
\t\t</header>
\t\t<!-- 导航栏结束 -->

\t\t<div class=\"mui-content\">
\t\t\t<!-- 基本资料开始 -->
\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t<div class=\"form form-search\">
\t\t\t\t\t<div class=\"padding form-list\">
\t\t\t\t\t\t<div class=\"mui-input-row\">
\t\t\t\t\t\t\t<label>身高</label>
\t\t\t\t\t\t\t<font class=\"mui-pull-right\">180CM</font>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"CityPicker\" class=\"mui-input-row\">
\t\t\t\t\t\t\t<label>地区</label>
\t\t\t\t\t\t\t<font class=\"mui-pull-right\">北京 - 北京</font>
\t\t\t\t\t\t\t<input name=\"provinceid\" type=\"hidden\" value=\"\" />
\t\t\t\t\t\t\t<input name=\"cityid\" type=\"hidden\" value=\"\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"SalaryPicker\" class=\"mui-input-row\">
\t\t\t\t\t\t\t<label>月薪</label>
\t\t\t\t\t\t\t<font class=\"mui-pull-right\">2000-5000</font>
\t\t\t\t\t\t\t<input name=\"salary\" type=\"hidden\" value=\"\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"AstroPicker\" class=\"mui-input-row\">
\t\t\t\t\t\t\t<label>星座</label>
\t\t\t\t\t\t\t<font class=\"mui-pull-right\">处女座</font>
\t\t\t\t\t\t\t<input name=\"astro\" type=\"hidden\" value=\"\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"NationPicker\" class=\"mui-input-row\">
\t\t\t\t\t\t\t<label>籍贯</label>
\t\t\t\t\t\t\t<font class=\"mui-pull-right\">-</font>
\t\t\t\t\t\t\t<input name=\"nationprovinceid\" type=\"hidden\" value=\"\" />
\t\t\t\t\t\t\t<input name=\"nationcityid\" type=\"hidden\" value=\"\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mui-input-row\">
\t\t\t\t\t\t\t<label>学历</label>
\t\t\t\t\t\t\t<font class=\"mui-pull-right\">初中</font>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"MarryPicker\" class=\"mui-input-row\">
\t\t\t\t\t\t\t<label>婚姻状况</label>
\t\t\t\t\t\t\t<font class=\"mui-pull-right\">未婚</font>
\t\t\t\t\t\t\t<input name=\"marrystatus\" type=\"hidden\" value=\"\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>

\t\t\t
\t\t\t
\t\t\t<!-- 基本资料结束 -->
\t\t</div>
\t\t<!-- CNZZ代码 -->
\t<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=http%3A%2F%2Fm.7799520.com%2Fself%2F377537.html&rnd=1671377287\" width=\"0\" height=\"0\"/>\t</body>
\t<!--引用自定义脚本-->
\t<script src=\"js/core1.js\"></script> 
\t<!--引用自定义脚本-->
\t


</html>";
    }
}
