<?php

/* paihangbang.html */
class __TwigTemplate_072853e4ad296aea3dea5b510155421d9cababb78515d6ba2417381195b69d00 extends Twig_Template
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
<html class=\"sign-record-body\">
<head>
<meta charset=\"UTF-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
<meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no\">
<meta name=\"apple-mobile-web-app-title\" content=\"魅力排行\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"format-detection\" content=\"telphone=no, email=no\">
<meta name=\"renderer\" content=\"webkit\">
<script src=\"./web/js/jquery.min.js\"></script>
<script src=\"./web/js/mui.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"./web/css/yin.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"./web/css/core.css\">
<title>魅力排行</title>
<script>
    \$(window).ready(function() {
        (function(\$) {
            \$('body').on('tap', '.link', function(event) {
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
</head>
<body>
<header class=\"mui-bar mui-bar-nav mlph-headerctrl\">
<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
<h1 class=\"mui-title\">魅力排行</h1>
</header>
<<<<<<< HEAD
<div class=\"mlph-wrap\" style=\"height: 3824.8px;\">
<p class=\"mlph-tit\"></p>
<div class=\"mlph-tbbg\" style=\"height: 2313.09px; width: 1293.15px; top: 673.893px; left: 36.4267px;\">
<ul>
<li style=\"position: absolute; left: 33.33%; width: 33%; top: 0px; height: 21%; float: left;\">
<p class=\"mlph-tb-icon\" style=\"float: none; width: 20%; height: 25%; top: 70%; left: 50%; background-color: transparent; background-image: url(\"http://www.lixiansen.site/yuanlai/yuanlai/web/img/mlph-ico1.png\"); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p>
<a class=\"link\" href=\"\" style=\"background-color: transparent; background-image: url(\"\"); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 70px; height: 70px; top: 50%; left: 50%; transform: translate(-50%, -50%);\"></a>
<p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 95%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">小瑶瑶</p>
<p class=\"mlph-tb-p2\" style=\"float: none; top: 90%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">6230</p>
</li>
<li style=\"position: absolute; left: 0px; width: 33%; top: 4.5%; height: 21%; float: left;\">
<p class=\"mlph-tb-icon\" style=\"float: none; width: 16%; height: 20%; left: 48%; top: 52%; background-color: transparent; background-image: url(\"http://www.lixiansen.site/yuanlai/yuanlai/web/img/mlph-ico2.png\"); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p>
<a class=\"link\" href=\"\" style=\"background-color: transparent; background-image: url(\"\"); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a>
<p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 75%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">唐老师</p>
<p class=\"mlph-tb-p2\" style=\"float: none; top: 70%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">5970</p>
</li>
<li style=\"position: absolute; left: 66.66%; width: 33%; top: 4.5%; height: 21%; float: left;\">
<p class=\"mlph-tb-icon\" style=\"float: none; width: 16%; height: 20%; left: 48%; top: 52%; background-color: transparent; background-image: url(\"http://www.lixiansen.site/yuanlai/yuanlai/web/img/mlph-ico3.png\"); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p>
<a class=\"link\" href=\"\" style=\"background-color: transparent; background-image: url(\"\"); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a>
<p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 75%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">寂寞浪子</p>
<p class=\"mlph-tb-p2\" style=\"float: none; top: 70%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">5820</p>
</li>
<li style=\"margin-top: 46%;\">
<p class=\"mlph-tb-icon\">4</p>
<a class=\"link\" href=\"/user/330024.html\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>
<p class=\"mlph-tb-p1\">林君研</p>
<p class=\"mlph-tb-p2\">5500</p>
</li>
<li>
<p class=\"mlph-tb-icon\">5</p>
<a class=\"link\" href=\"/user/286780.html\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201608/16/286780/avatar_big.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>
<p class=\"mlph-tb-p1\">timeover</p>
<p class=\"mlph-tb-p2\">5130</p>
</li>
<li>
<p class=\"mlph-tb-icon\">6</p>
<a class=\"link\" href=\"/user/254992.html\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201604/01/254992/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>
<p class=\"mlph-tb-p1\">林娜敏</p>
<p class=\"mlph-tb-p2\">4650</p>
</li>
<li>
<p class=\"mlph-tb-icon\">7</p>
<a class=\"link\" href=\"/user/307404.html\" style=\"background:URL(http://img.7799520.com/img/avata-1.png) center no-repeat;-webkit-Background-size:100%,100%;\"></a>
<p class=\"mlph-tb-p1\">雨中的飞鱼</p>
<p class=\"mlph-tb-p2\">4340</p>
</li>
<li>
<p class=\"mlph-tb-icon\">8</p>
<a class=\"link\" href=\"/user/362184.html\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201609/17/362184/avatar_big.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>
<p class=\"mlph-tb-p1\">mei5201314</p>
<p class=\"mlph-tb-p2\">4210</p>
</li>
<li>
<p class=\"mlph-tb-icon\">9</p>
<a class=\"link\" href=\"/user/345333.html\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201609/28/345333/avatar_big.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>
<p class=\"mlph-tb-p1\">孤心泪</p>
<p class=\"mlph-tb-p2\">3940</p>
</li>
<li>
<p class=\"mlph-tb-icon\">10</p>
<a class=\"link\" href=\"/user/318199.html\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/02/318199/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>
<p class=\"mlph-tb-p1\">飞向大海</p>
<p class=\"mlph-tb-p2\">3560</p>
</li>
</ul>
</div>
<div class=\"mlph-fontbg\" style=\"height: 681.179px; width: 1225.76px; top: 3041.63px; left: 70.1213px;\"> </div>
</div>
<script src=\"web/js/top.js\"></script>
</body>
</html>";
=======
<div class=\"mlph-wrap\" style=\"height: 3808px;\">
    <p class=\"mlph-tit\"></p>
    <!--<div class=\"mlph-btn-div\"><a href=\"#\" class=\"mlph-btn link\">获得魅力</a></div>-->
    <div class=\"mlph-tbbg\" style=\"height: 2302.93px; width: 1287.47px; top: 670.933px; left: 36.2667px;\">
        <ul>

            <li style=\"position: absolute; left: 33.33%; width: 33%; top: 0px; height: 21%; float: left;\">
                <p class=\"mlph-tb-icon\" style=\"float: none; width: 20%; height: 25%; top: 70%; left: 50%; background-color: transparent; background-image: url(&quot;http://m.7799520.com//img/mlph-ico1.png&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p>
                <a href=\"/user/332090.html\" class=\"link\" style=\"background-color: transparent; background-image: url(&quot;http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/29/332090/avatar_big.jpg.thumb.jpg&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 70px; height: 70px; top: 50%; left: 50%; transform: translate(-50%, -50%);\"></a>
                <p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 95%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "name", array()), "html", null, true);
        echo "</p>
                <p class=\"mlph-tb-p2\" style=\"float: none; top: 90%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "usercp", array()), "html", null, true);
        echo "</p>
            </li>
            <li style=\"position: absolute; left: 0px; width: 33%; top: 4.5%; height: 21%; float: left;\">
                <p class=\"mlph-tb-icon\" style=\"float: none; width: 16%; height: 20%; left: 48%; top: 52%; background-color: transparent; background-image: url(&quot;http://m.7799520.com//img/mlph-ico2.png&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p>
                <a href=\"/user/341981.html\" class=\"link\" style=\"background-color: transparent; background-image: url(&quot;http://www.7799520.com/jiaoyou/data/attachment/avatar/201609/30/341981/avatar_big.jpg&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a>
                <p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 75%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s1"]) ? $context["s1"] : null), "name", array()), "html", null, true);
        echo "</p>
                <p class=\"mlph-tb-p2\" style=\"float: none; top: 70%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s1"]) ? $context["s1"] : null), "usercp", array()), "html", null, true);
        echo "</p>
            </li>
            <li style=\"position: absolute; left: 66.66%; width: 33%; top: 4.5%; height: 21%; float: left;\">
                <p class=\"mlph-tb-icon\" style=\"float: none; width: 16%; height: 20%; left: 48%; top: 52%; background-color: transparent; background-image: url(&quot;http://m.7799520.com//img/mlph-ico3.png&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p>
                <a href=\"/user/321083.html\" class=\"link\" style=\"background-color: transparent; background-image: url(&quot;http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/08/321083/avatar_big.jpg.thumb.jpg&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a>
                <p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 75%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s2"]) ? $context["s2"] : null), "name", array()), "html", null, true);
        echo "</p>
                <p class=\"mlph-tb-p2\" style=\"float: none; top: 70%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s2"]) ? $context["s2"] : null), "usercp", array()), "html", null, true);
        echo "</p>
            </li>
            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aa"]) ? $context["aa"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["ww"]) {
            // line 61
            echo "            <li >
                <p class=\"mlph-tb-icon\">";
            // line 62
            echo twig_escape_filter($this->env, ($context["key"] + 4), "html", null, true);
            echo "</p>
                <a href=\"/user/330024.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>
                <p class=\"mlph-tb-p1\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["ww"], "name", array()), "html", null, true);
            echo "</p><p class=\"mlph-tb-p2\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ww"], "usercp", array()), "html", null, true);
            echo "</p>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['ww'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            <!--<li>-->
                <!--<p class=\"mlph-tb-icon\">5</p>-->
                <!--<a href=\"/user/330024.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>-->
                <!--<p class=\"mlph-tb-p1\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s4"]) ? $context["s4"] : null), "name", array()), "html", null, true);
        echo "</p><p class=\"mlph-tb-p2\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s4"]) ? $context["s4"] : null), "usercp", array()), "html", null, true);
        echo "</p>-->
            <!--</li>-->
            <!--<li>-->
                <!--<p class=\"mlph-tb-icon\">6</p>-->
                <!--<a href=\"/user/330024.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>-->
                <!--<p class=\"mlph-tb-p1\">";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s5"]) ? $context["s5"] : null), "name", array()), "html", null, true);
        echo "</p><p class=\"mlph-tb-p2\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s5"]) ? $context["s5"] : null), "usercp", array()), "html", null, true);
        echo "</p>-->
            <!--</li>-->
            <!--<li>-->
                <!--<p class=\"mlph-tb-icon\">7</p>-->
                <!--<a href=\"/user/330024.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>-->
                <!--<p class=\"mlph-tb-p1\">";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s6"]) ? $context["s6"] : null), "name", array()), "html", null, true);
        echo "</p><p class=\"mlph-tb-p2\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s6"]) ? $context["s6"] : null), "usercp", array()), "html", null, true);
        echo "</p>-->
            <!--</li>-->
            <!--<li>-->
                <!--<p class=\"mlph-tb-icon\">8</p>-->
                <!--<a href=\"/user/330024.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>-->
                <!--<p class=\"mlph-tb-p1\">";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s7"]) ? $context["s7"] : null), "name", array()), "html", null, true);
        echo "</p><p class=\"mlph-tb-p2\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s7"]) ? $context["s7"] : null), "usercp", array()), "html", null, true);
        echo "</p>-->
            <!--</li>-->
            <!--<li >-->
                <!--<p class=\"mlph-tb-icon\">9</p>-->
                <!--<a href=\"/user/330024.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>-->
                <!--<p class=\"mlph-tb-p1\">";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s8"]) ? $context["s8"] : null), "name", array()), "html", null, true);
        echo "</p><p class=\"mlph-tb-p2\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s8"]) ? $context["s8"] : null), "usercp", array()), "html", null, true);
        echo "</p>-->
            <!--</li>-->
            <!--<li >-->
                <!--<p class=\"mlph-tb-icon\">10</p>-->
                <!--<a href=\"/user/330024.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>-->
                <!--<p class=\"mlph-tb-p1\">";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s9"]) ? $context["s9"] : null), "name", array()), "html", null, true);
        echo "</p><p class=\"mlph-tb-p2\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s9"]) ? $context["s9"] : null), "usercp", array()), "html", null, true);
        echo "</p>-->
            <!--</li>-->


        </ul>
     </div>
    <div class=\"mlph-fontbg\" style=\"height: 678.187px; width: 1220.37px; top: 3028.27px; left: 69.8133px;\">
    </div>
</div>



<script src=\"web/js/top.js\"></script>
</body><!--引用自定义脚本--></html>";
>>>>>>> 8fc9bfec602efd3054da933eb24a2d85b0911bc1
    }

    public function getTemplateName()
    {
        return "paihangbang.html";
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  19 => 1,);
=======
        return array (  176 => 95,  166 => 90,  156 => 85,  146 => 80,  136 => 75,  126 => 70,  121 => 67,  110 => 64,  105 => 62,  102 => 61,  98 => 60,  93 => 58,  89 => 57,  81 => 52,  77 => 51,  69 => 46,  65 => 45,  19 => 1,);
>>>>>>> 8fc9bfec602efd3054da933eb24a2d85b0911bc1
    }

    public function getSource()
    {
        return "
<!DOCTYPE html>
<html class=\"sign-record-body\">
<head>
<meta charset=\"UTF-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
<meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no\">
<meta name=\"apple-mobile-web-app-title\" content=\"魅力排行\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"format-detection\" content=\"telphone=no, email=no\">
<meta name=\"renderer\" content=\"webkit\">
<script src=\"./web/js/jquery.min.js\"></script>
<script src=\"./web/js/mui.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"./web/css/yin.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"./web/css/core.css\">
<title>魅力排行</title>
<script>
    \$(window).ready(function() {
        (function(\$) {
            \$('body').on('tap', '.link', function(event) {
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
</head>
<body>
<header class=\"mui-bar mui-bar-nav mlph-headerctrl\">
<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
<h1 class=\"mui-title\">魅力排行</h1>
</header>
<<<<<<< HEAD
<div class=\"mlph-wrap\" style=\"height: 3824.8px;\">
<p class=\"mlph-tit\"></p>
<div class=\"mlph-tbbg\" style=\"height: 2313.09px; width: 1293.15px; top: 673.893px; left: 36.4267px;\">
<ul>
<li style=\"position: absolute; left: 33.33%; width: 33%; top: 0px; height: 21%; float: left;\">
<p class=\"mlph-tb-icon\" style=\"float: none; width: 20%; height: 25%; top: 70%; left: 50%; background-color: transparent; background-image: url(\"http://www.lixiansen.site/yuanlai/yuanlai/web/img/mlph-ico1.png\"); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p>
<a class=\"link\" href=\"\" style=\"background-color: transparent; background-image: url(\"\"); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 70px; height: 70px; top: 50%; left: 50%; transform: translate(-50%, -50%);\"></a>
<p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 95%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">小瑶瑶</p>
<p class=\"mlph-tb-p2\" style=\"float: none; top: 90%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">6230</p>
</li>
<li style=\"position: absolute; left: 0px; width: 33%; top: 4.5%; height: 21%; float: left;\">
<p class=\"mlph-tb-icon\" style=\"float: none; width: 16%; height: 20%; left: 48%; top: 52%; background-color: transparent; background-image: url(\"http://www.lixiansen.site/yuanlai/yuanlai/web/img/mlph-ico2.png\"); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p>
<a class=\"link\" href=\"\" style=\"background-color: transparent; background-image: url(\"\"); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a>
<p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 75%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">唐老师</p>
<p class=\"mlph-tb-p2\" style=\"float: none; top: 70%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">5970</p>
</li>
<li style=\"position: absolute; left: 66.66%; width: 33%; top: 4.5%; height: 21%; float: left;\">
<p class=\"mlph-tb-icon\" style=\"float: none; width: 16%; height: 20%; left: 48%; top: 52%; background-color: transparent; background-image: url(\"http://www.lixiansen.site/yuanlai/yuanlai/web/img/mlph-ico3.png\"); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p>
<a class=\"link\" href=\"\" style=\"background-color: transparent; background-image: url(\"\"); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a>
<p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 75%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">寂寞浪子</p>
<p class=\"mlph-tb-p2\" style=\"float: none; top: 70%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">5820</p>
</li>
<li style=\"margin-top: 46%;\">
<p class=\"mlph-tb-icon\">4</p>
<a class=\"link\" href=\"/user/330024.html\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>
<p class=\"mlph-tb-p1\">林君研</p>
<p class=\"mlph-tb-p2\">5500</p>
</li>
<li>
<p class=\"mlph-tb-icon\">5</p>
<a class=\"link\" href=\"/user/286780.html\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201608/16/286780/avatar_big.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>
<p class=\"mlph-tb-p1\">timeover</p>
<p class=\"mlph-tb-p2\">5130</p>
</li>
<li>
<p class=\"mlph-tb-icon\">6</p>
<a class=\"link\" href=\"/user/254992.html\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201604/01/254992/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>
<p class=\"mlph-tb-p1\">林娜敏</p>
<p class=\"mlph-tb-p2\">4650</p>
</li>
<li>
<p class=\"mlph-tb-icon\">7</p>
<a class=\"link\" href=\"/user/307404.html\" style=\"background:URL(http://img.7799520.com/img/avata-1.png) center no-repeat;-webkit-Background-size:100%,100%;\"></a>
<p class=\"mlph-tb-p1\">雨中的飞鱼</p>
<p class=\"mlph-tb-p2\">4340</p>
</li>
<li>
<p class=\"mlph-tb-icon\">8</p>
<a class=\"link\" href=\"/user/362184.html\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201609/17/362184/avatar_big.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>
<p class=\"mlph-tb-p1\">mei5201314</p>
<p class=\"mlph-tb-p2\">4210</p>
</li>
<li>
<p class=\"mlph-tb-icon\">9</p>
<a class=\"link\" href=\"/user/345333.html\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201609/28/345333/avatar_big.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>
<p class=\"mlph-tb-p1\">孤心泪</p>
<p class=\"mlph-tb-p2\">3940</p>
</li>
<li>
<p class=\"mlph-tb-icon\">10</p>
<a class=\"link\" href=\"/user/318199.html\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/02/318199/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>
<p class=\"mlph-tb-p1\">飞向大海</p>
<p class=\"mlph-tb-p2\">3560</p>
</li>
</ul>
</div>
<div class=\"mlph-fontbg\" style=\"height: 681.179px; width: 1225.76px; top: 3041.63px; left: 70.1213px;\"> </div>
</div>
<script src=\"web/js/top.js\"></script>
</body>
</html>";
=======
<div class=\"mlph-wrap\" style=\"height: 3808px;\">
    <p class=\"mlph-tit\"></p>
    <!--<div class=\"mlph-btn-div\"><a href=\"#\" class=\"mlph-btn link\">获得魅力</a></div>-->
    <div class=\"mlph-tbbg\" style=\"height: 2302.93px; width: 1287.47px; top: 670.933px; left: 36.2667px;\">
        <ul>

            <li style=\"position: absolute; left: 33.33%; width: 33%; top: 0px; height: 21%; float: left;\">
                <p class=\"mlph-tb-icon\" style=\"float: none; width: 20%; height: 25%; top: 70%; left: 50%; background-color: transparent; background-image: url(&quot;http://m.7799520.com//img/mlph-ico1.png&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p>
                <a href=\"/user/332090.html\" class=\"link\" style=\"background-color: transparent; background-image: url(&quot;http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/29/332090/avatar_big.jpg.thumb.jpg&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 70px; height: 70px; top: 50%; left: 50%; transform: translate(-50%, -50%);\"></a>
                <p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 95%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">{{s.name}}</p>
                <p class=\"mlph-tb-p2\" style=\"float: none; top: 90%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">{{s.usercp}}</p>
            </li>
            <li style=\"position: absolute; left: 0px; width: 33%; top: 4.5%; height: 21%; float: left;\">
                <p class=\"mlph-tb-icon\" style=\"float: none; width: 16%; height: 20%; left: 48%; top: 52%; background-color: transparent; background-image: url(&quot;http://m.7799520.com//img/mlph-ico2.png&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p>
                <a href=\"/user/341981.html\" class=\"link\" style=\"background-color: transparent; background-image: url(&quot;http://www.7799520.com/jiaoyou/data/attachment/avatar/201609/30/341981/avatar_big.jpg&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a>
                <p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 75%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">{{s1.name}}</p>
                <p class=\"mlph-tb-p2\" style=\"float: none; top: 70%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">{{s1.usercp}}</p>
            </li>
            <li style=\"position: absolute; left: 66.66%; width: 33%; top: 4.5%; height: 21%; float: left;\">
                <p class=\"mlph-tb-icon\" style=\"float: none; width: 16%; height: 20%; left: 48%; top: 52%; background-color: transparent; background-image: url(&quot;http://m.7799520.com//img/mlph-ico3.png&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p>
                <a href=\"/user/321083.html\" class=\"link\" style=\"background-color: transparent; background-image: url(&quot;http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/08/321083/avatar_big.jpg.thumb.jpg&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a>
                <p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 75%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">{{s2.name}}</p>
                <p class=\"mlph-tb-p2\" style=\"float: none; top: 70%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">{{s2.usercp}}</p>
            </li>
            {% for key,ww in aa %}
            <li >
                <p class=\"mlph-tb-icon\">{{key+4}}</p>
                <a href=\"/user/330024.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>
                <p class=\"mlph-tb-p1\">{{ww.name}}</p><p class=\"mlph-tb-p2\">{{ww.usercp}}</p>
            </li>
            {%endfor%}
            <!--<li>-->
                <!--<p class=\"mlph-tb-icon\">5</p>-->
                <!--<a href=\"/user/330024.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>-->
                <!--<p class=\"mlph-tb-p1\">{{s4.name}}</p><p class=\"mlph-tb-p2\">{{s4.usercp}}</p>-->
            <!--</li>-->
            <!--<li>-->
                <!--<p class=\"mlph-tb-icon\">6</p>-->
                <!--<a href=\"/user/330024.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>-->
                <!--<p class=\"mlph-tb-p1\">{{s5.name}}</p><p class=\"mlph-tb-p2\">{{s5.usercp}}</p>-->
            <!--</li>-->
            <!--<li>-->
                <!--<p class=\"mlph-tb-icon\">7</p>-->
                <!--<a href=\"/user/330024.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>-->
                <!--<p class=\"mlph-tb-p1\">{{s6.name}}</p><p class=\"mlph-tb-p2\">{{s6.usercp}}</p>-->
            <!--</li>-->
            <!--<li>-->
                <!--<p class=\"mlph-tb-icon\">8</p>-->
                <!--<a href=\"/user/330024.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>-->
                <!--<p class=\"mlph-tb-p1\">{{s7.name}}</p><p class=\"mlph-tb-p2\">{{s7.usercp}}</p>-->
            <!--</li>-->
            <!--<li >-->
                <!--<p class=\"mlph-tb-icon\">9</p>-->
                <!--<a href=\"/user/330024.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>-->
                <!--<p class=\"mlph-tb-p1\">{{s8.name}}</p><p class=\"mlph-tb-p2\">{{s8.usercp}}</p>-->
            <!--</li>-->
            <!--<li >-->
                <!--<p class=\"mlph-tb-icon\">10</p>-->
                <!--<a href=\"/user/330024.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>-->
                <!--<p class=\"mlph-tb-p1\">{{s9.name}}</p><p class=\"mlph-tb-p2\">{{s9.usercp}}</p>-->
            <!--</li>-->


        </ul>
     </div>
    <div class=\"mlph-fontbg\" style=\"height: 678.187px; width: 1220.37px; top: 3028.27px; left: 69.8133px;\">
    </div>
</div>



<script src=\"web/js/top.js\"></script>
</body><!--引用自定义脚本--></html>";
>>>>>>> 8fc9bfec602efd3054da933eb24a2d85b0911bc1
    }
}
