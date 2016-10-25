<?php

/* paihangbang.html */
class __TwigTemplate_c8713fbfd8a714209e9ed33882057b02c289df9f1deacf8c0e306b898cddff95 extends Twig_Template
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
<div class=\"mlph-wrap\" style=\"height: 3808px;\">
    <p class=\"mlph-tit\"></p>
    <!--<div class=\"mlph-btn-div\"><a href=\"#\" class=\"mlph-btn link\">获得魅力</a></div>-->
    <div class=\"mlph-tbbg\" style=\"height: 2302.93px; width: 1287.47px; top: 670.933px; left: 36.2667px;\">
        <ul>

            <li style=\"position: absolute; left: 33.33%; width: 33%; top: 0px; height: 21%; float: left;\">
                <p class=\"mlph-tb-icon\" style=\"float: none; width: 20%; height: 25%; top: 70%; left: 50%; background-color: transparent; background-image: url(&quot;http://m.7799520.com//img/mlph-ico1.png&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p>

                <a href=\"/user/332090.html\" class=\"link\" style=\"background-color: transparent; background-image: url(";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "head_img", array()), "html", null, true);
        echo "); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 70px; height: 70px; top: 50%; left: 50%; transform: translate(-50%, -50%);\"></a>

                <a href=\"?r=home/fossa/tid/";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "u_id", array()), "html", null, true);
        echo "\" class=\"link\" style=\"background-color: transparent; background-image: url(&quot;http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/29/332090/avatar_big.jpg.thumb.jpg&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 70px; height: 70px; top: 50%; left: 50%; transform: translate(-50%, -50%);\"></a>

                <p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 95%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "name", array()), "html", null, true);
        echo "</p>
                <p class=\"mlph-tb-p2\" style=\"float: none; top: 90%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "usercp", array()), "html", null, true);
        echo "</p>
            </li>
            <li style=\"position: absolute; left: 0px; width: 33%; top: 4.5%; height: 21%; float: left;\">
                <p class=\"mlph-tb-icon\" style=\"float: none; width: 16%; height: 20%; left: 48%; top: 52%; background-color: transparent; background-image: url(&quot;http://m.7799520.com//img/mlph-ico2.png&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p>

                <a href=\"/user/341981.html\" class=\"link\" style=\"background-color: transparent; background-image: url(";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s1"]) ? $context["s1"] : null), "head_img", array()), "html", null, true);
        echo "); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a>

                <a href=\"?r=home/fossa/tid/";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "u_id", array()), "html", null, true);
        echo "\" class=\"link\" style=\"background-color: transparent; background-image: url(&quot;http://www.7799520.com/jiaoyou/data/attachment/avatar/201609/30/341981/avatar_big.jpg&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a>

                <p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 75%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s1"]) ? $context["s1"] : null), "name", array()), "html", null, true);
        echo "</p>
                <p class=\"mlph-tb-p2\" style=\"float: none; top: 70%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s1"]) ? $context["s1"] : null), "usercp", array()), "html", null, true);
        echo "</p>
            </li>
            <li style=\"position: absolute; left: 66.66%; width: 33%; top: 4.5%; height: 21%; float: left;\">
                <p class=\"mlph-tb-icon\" style=\"float: none; width: 16%; height: 20%; left: 48%; top: 52%; background-color: transparent; background-image: url(&quot;http://m.7799520.com//img/mlph-ico3.png&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p>

                <a href=\"/user/321083.html\" class=\"link\" style=\"background-color: transparent; background-image: url(";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s2"]) ? $context["s2"] : null), "head_img", array()), "html", null, true);
        echo "); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a>

                <a href=\"?r=home/fossa/tid/";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "u_id", array()), "html", null, true);
        echo "\" class=\"link\" style=\"background-color: transparent; background-image: url(&quot;http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/08/321083/avatar_big.jpg.thumb.jpg&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a>

                <p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 75%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s2"]) ? $context["s2"] : null), "name", array()), "html", null, true);
        echo "</p>
                <p class=\"mlph-tb-p2\" style=\"float: none; top: 70%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s2"]) ? $context["s2"] : null), "usercp", array()), "html", null, true);
        echo "</p>
            </li>
            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aa"]) ? $context["aa"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["ww"]) {
            // line 95
            echo "            <li >
                <p class=\"mlph-tb-icon\">";
            // line 96
            echo twig_escape_filter($this->env, ($context["key"] + 4), "html", null, true);
            echo "</p>

                <a href=\"/user/330024.html\" class=\"link\" style=\"background:URL(";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["ww"], "head_img", array()), "html", null, true);
            echo ") center no-repeat;-webkit-Background-size:100%,100%;\"></a>

                <a href=\"?r=home/fossa/tid/";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["ww"], "u_id", array()), "html", null, true);
            echo "\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>

                <p class=\"mlph-tb-p1\">";
            // line 102
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
        // line 105
        echo "

        </ul>
     </div>
    <div class=\"mlph-fontbg\" style=\"height: 678.187px; width: 1220.37px; top: 3028.27px; left: 69.8133px;\">
    </div>
</div>



<script src=\"web/js/top.js\"></script>
</body><!--引用自定义脚本--></html>
";
    }

    public function getTemplateName()
    {
        return "paihangbang.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 105,  172 => 102,  167 => 100,  162 => 98,  157 => 96,  154 => 95,  150 => 94,  145 => 92,  141 => 91,  136 => 89,  131 => 87,  123 => 82,  119 => 81,  114 => 79,  109 => 77,  101 => 72,  97 => 71,  92 => 69,  87 => 67,  19 => 1,);
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
<div class=\"mlph-wrap\" style=\"height: 3808px;\">
    <p class=\"mlph-tit\"></p>
    <!--<div class=\"mlph-btn-div\"><a href=\"#\" class=\"mlph-btn link\">获得魅力</a></div>-->
    <div class=\"mlph-tbbg\" style=\"height: 2302.93px; width: 1287.47px; top: 670.933px; left: 36.2667px;\">
        <ul>

            <li style=\"position: absolute; left: 33.33%; width: 33%; top: 0px; height: 21%; float: left;\">
                <p class=\"mlph-tb-icon\" style=\"float: none; width: 20%; height: 25%; top: 70%; left: 50%; background-color: transparent; background-image: url(&quot;http://m.7799520.com//img/mlph-ico1.png&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p>

                <a href=\"/user/332090.html\" class=\"link\" style=\"background-color: transparent; background-image: url({{ s.head_img }}); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 70px; height: 70px; top: 50%; left: 50%; transform: translate(-50%, -50%);\"></a>

                <a href=\"?r=home/fossa/tid/{{s.u_id}}\" class=\"link\" style=\"background-color: transparent; background-image: url(&quot;http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/29/332090/avatar_big.jpg.thumb.jpg&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 70px; height: 70px; top: 50%; left: 50%; transform: translate(-50%, -50%);\"></a>

                <p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 95%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">{{s.name}}</p>
                <p class=\"mlph-tb-p2\" style=\"float: none; top: 90%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">{{s.usercp}}</p>
            </li>
            <li style=\"position: absolute; left: 0px; width: 33%; top: 4.5%; height: 21%; float: left;\">
                <p class=\"mlph-tb-icon\" style=\"float: none; width: 16%; height: 20%; left: 48%; top: 52%; background-color: transparent; background-image: url(&quot;http://m.7799520.com//img/mlph-ico2.png&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p>

                <a href=\"/user/341981.html\" class=\"link\" style=\"background-color: transparent; background-image: url({{ s1.head_img }}); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a>

                <a href=\"?r=home/fossa/tid/{{s.u_id}}\" class=\"link\" style=\"background-color: transparent; background-image: url(&quot;http://www.7799520.com/jiaoyou/data/attachment/avatar/201609/30/341981/avatar_big.jpg&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a>

                <p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 75%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">{{s1.name}}</p>
                <p class=\"mlph-tb-p2\" style=\"float: none; top: 70%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">{{s1.usercp}}</p>
            </li>
            <li style=\"position: absolute; left: 66.66%; width: 33%; top: 4.5%; height: 21%; float: left;\">
                <p class=\"mlph-tb-icon\" style=\"float: none; width: 16%; height: 20%; left: 48%; top: 52%; background-color: transparent; background-image: url(&quot;http://m.7799520.com//img/mlph-ico3.png&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p>

                <a href=\"/user/321083.html\" class=\"link\" style=\"background-color: transparent; background-image: url({{ s2.head_img }}); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a>

                <a href=\"?r=home/fossa/tid/{{s.u_id}}\" class=\"link\" style=\"background-color: transparent; background-image: url(&quot;http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/08/321083/avatar_big.jpg.thumb.jpg&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a>

                <p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 75%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">{{s2.name}}</p>
                <p class=\"mlph-tb-p2\" style=\"float: none; top: 70%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">{{s2.usercp}}</p>
            </li>
            {% for key,ww in aa %}
            <li >
                <p class=\"mlph-tb-icon\">{{key+4}}</p>

                <a href=\"/user/330024.html\" class=\"link\" style=\"background:URL({{ ww.head_img }}) center no-repeat;-webkit-Background-size:100%,100%;\"></a>

                <a href=\"?r=home/fossa/tid/{{ww.u_id}}\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a>

                <p class=\"mlph-tb-p1\">{{ww.name}}</p><p class=\"mlph-tb-p2\">{{ww.usercp}}</p>
            </li>
            {%endfor%}


        </ul>
     </div>
    <div class=\"mlph-fontbg\" style=\"height: 678.187px; width: 1220.37px; top: 3028.27px; left: 69.8133px;\">
    </div>
</div>



<script src=\"web/js/top.js\"></script>
</body><!--引用自定义脚本--></html>
";
    }
}
