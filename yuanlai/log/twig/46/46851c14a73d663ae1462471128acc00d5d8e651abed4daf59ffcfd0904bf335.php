<?php

/* album.html */
class __TwigTemplate_a93618abf272aaaab69488d1f314f9daa55271cda69900153a0a17bb5e6fc65a extends Twig_Template
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
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
\t<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>缘来社交</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"Free HTML5 Template by FREEHTML5.CO\" />
\t<meta name=\"keywords\" content=\"free html5, free template, free bootstrap, html5, css3, mobile first, responsive\" />
\t<meta name=\"author\" content=\"FREEHTML5.CO\" />

  <!-- Facebook and Twitter integration -->
\t<meta property=\"og:title\" content=\"\"/>
\t<meta property=\"og:image\" content=\"\"/>
\t<meta property=\"og:url\" content=\"\"/>
\t<meta property=\"og:site_name\" content=\"\"/>
\t<meta property=\"og:description\" content=\"\"/>
\t<meta name=\"twitter:title\" content=\"\" />
\t<meta name=\"twitter:image\" content=\"\" />
\t<meta name=\"twitter:url\" content=\"\" />
\t<meta name=\"twitter:card\" content=\"\" />

\t<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
\t<link rel=\"shortcut icon\" href=\"favicon.ico\">

\t<!-- Google Webfonts -->


\t<!-- Animate.css -->
\t<link rel=\"stylesheet\" href=\"./web/css/animate.css\">
\t<!-- Icomoon Icon Fonts-->
\t<link rel=\"stylesheet\" href=\"./web/css/icomoon.css\">
\t<!-- Magnific Popup -->
\t<link rel=\"stylesheet\" href=\"./web/css/magnific-popup.css\">
\t<!-- Salvattore -->
\t<link rel=\"stylesheet\" href=\"./web/css/salvattore.css\">
\t<!-- Theme Style -->
\t<link rel=\"stylesheet\" href=\"./web/css/style.css\">
\t<!-- Modernizr JS -->
\t<script src=\"./web/js/modernizr-2.6.2.min.js\"></script>
\t<!-- FOR IE9 below -->
\t<!--[if lt IE 9]>
\t<script src=\"./web/js/respond.min.js\"></script>
\t<![endif]-->

\t</head>
\t<body>

\t<div id=\"fh5co-offcanvass\">
\t\t<a href=\"#\" class=\"fh5co-offcanvass-close js-fh5co-offcanvass-close\">关闭 <i class=\"icon-cross\"></i> </a>
\t\t<h1 class=\"fh5co-logo\"><a class=\"navbar-brand\" href=\"?r=home/index\">缘来社交</a></h1>
\t\t<ul>
\t\t\t<li class=\"active\"><a href=\"?r=home/index\">首页</a></li>
\t\t\t<li><a href=\"?r=home/fossa\">个人中心</a></li>
\t\t\t<li><a href=\"?r=home/suggest\">推荐会员</a></li>
\t\t\t<li><a href=\"?r=home/advices\">信箱</a></li>
\t\t</ul>
\t\t<h3 class=\"fh5co-footer\">缘来社交 缘来是你</h3>
\t</div>

\t<header id=\"fh5co-header\" role=\"banner\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<a href=\"#\" class=\"fh5co-menu-btn js-fh5co-menu-btn\">菜单 <i class=\"icon-menu\"></i></a>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kong"]) ? $context["kong"] : null), "username", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "username", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "u_name", array()), "html", null, true);
        echo "的相册</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
\t<!-- END .header -->




\t<div id=\"fh5co-main\">
\t\t<div class=\"container\">

\t\t\t<div class=\"row\">

        <div id=\"fh5co-board\" data-columns>
            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 87
            echo "            <div class=\"item\">
                <div class=\"animate-box\">
                    <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "path", array()), "html", null, true);
            echo "\" class=\"image-popup fh5co-board-img\" title=\"帅不帅\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "path", array()), "html", null, true);
            echo "\" alt=\"Free HTML5 Bootstrap template\"></a>
                </div>
                <div class=\"fh5co-desc\">上传日期:";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "date", array()), "html", null, true);
            echo "</div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        </div>
        </div>
       </div>
\t</div>

\t<footer id=\"fh5co-footer\">

\t\t<div class=\"container\">
\t\t\t<div class=\"row row-padded\">
\t\t\t\t<div class=\"col-md-12 text-center\">
                    缘来社区
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>


\t<!-- jQuery -->
\t<script src=\"./web/js/jquery.min.js\"></script>
\t<!-- jQuery Easing -->
\t<script src=\"./web/js/jquery.easing.1.3.js\"></script>
\t<!-- Bootstrap -->
\t<script src=\"./web/js/bootstrap.min.js\"></script>
\t<!-- Waypoints -->
\t<script src=\"./web/js/jquery.waypoints.min.js\"></script>
\t<!-- Magnific Popup -->
\t<script src=\"./web/js/jquery.magnific-popup.min.js\"></script>
\t<!-- Salvattore -->
\t<script src=\"./web/js/salvattore.min.js\"></script>
\t<!-- Main JS -->
\t<script src=\"./web/js/main.js\"></script>




\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "album.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 94,  126 => 91,  119 => 89,  115 => 87,  111 => 86,  90 => 70,  19 => 1,);
    }

    public function getSource()
    {
        return "
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
\t<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>缘来社交</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"Free HTML5 Template by FREEHTML5.CO\" />
\t<meta name=\"keywords\" content=\"free html5, free template, free bootstrap, html5, css3, mobile first, responsive\" />
\t<meta name=\"author\" content=\"FREEHTML5.CO\" />

  <!-- Facebook and Twitter integration -->
\t<meta property=\"og:title\" content=\"\"/>
\t<meta property=\"og:image\" content=\"\"/>
\t<meta property=\"og:url\" content=\"\"/>
\t<meta property=\"og:site_name\" content=\"\"/>
\t<meta property=\"og:description\" content=\"\"/>
\t<meta name=\"twitter:title\" content=\"\" />
\t<meta name=\"twitter:image\" content=\"\" />
\t<meta name=\"twitter:url\" content=\"\" />
\t<meta name=\"twitter:card\" content=\"\" />

\t<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
\t<link rel=\"shortcut icon\" href=\"favicon.ico\">

\t<!-- Google Webfonts -->


\t<!-- Animate.css -->
\t<link rel=\"stylesheet\" href=\"./web/css/animate.css\">
\t<!-- Icomoon Icon Fonts-->
\t<link rel=\"stylesheet\" href=\"./web/css/icomoon.css\">
\t<!-- Magnific Popup -->
\t<link rel=\"stylesheet\" href=\"./web/css/magnific-popup.css\">
\t<!-- Salvattore -->
\t<link rel=\"stylesheet\" href=\"./web/css/salvattore.css\">
\t<!-- Theme Style -->
\t<link rel=\"stylesheet\" href=\"./web/css/style.css\">
\t<!-- Modernizr JS -->
\t<script src=\"./web/js/modernizr-2.6.2.min.js\"></script>
\t<!-- FOR IE9 below -->
\t<!--[if lt IE 9]>
\t<script src=\"./web/js/respond.min.js\"></script>
\t<![endif]-->

\t</head>
\t<body>

\t<div id=\"fh5co-offcanvass\">
\t\t<a href=\"#\" class=\"fh5co-offcanvass-close js-fh5co-offcanvass-close\">关闭 <i class=\"icon-cross\"></i> </a>
\t\t<h1 class=\"fh5co-logo\"><a class=\"navbar-brand\" href=\"?r=home/index\">缘来社交</a></h1>
\t\t<ul>
\t\t\t<li class=\"active\"><a href=\"?r=home/index\">首页</a></li>
\t\t\t<li><a href=\"?r=home/fossa\">个人中心</a></li>
\t\t\t<li><a href=\"?r=home/suggest\">推荐会员</a></li>
\t\t\t<li><a href=\"?r=home/advices\">信箱</a></li>
\t\t</ul>
\t\t<h3 class=\"fh5co-footer\">缘来社交 缘来是你</h3>
\t</div>

\t<header id=\"fh5co-header\" role=\"banner\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<a href=\"#\" class=\"fh5co-menu-btn js-fh5co-menu-btn\">菜单 <i class=\"icon-menu\"></i></a>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\">{{ kong.username }}{{ data[0].username }}{{ data[0].u_name }}的相册</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
\t<!-- END .header -->




\t<div id=\"fh5co-main\">
\t\t<div class=\"container\">

\t\t\t<div class=\"row\">

        <div id=\"fh5co-board\" data-columns>
            {% for val in data %}
            <div class=\"item\">
                <div class=\"animate-box\">
                    <a href=\"{{ val.path }}\" class=\"image-popup fh5co-board-img\" title=\"帅不帅\"><img src=\"{{val.path }}\" alt=\"Free HTML5 Bootstrap template\"></a>
                </div>
                <div class=\"fh5co-desc\">上传日期:{{ val.date }}</div>
            </div>
            {% endfor %}
        </div>
        </div>
       </div>
\t</div>

\t<footer id=\"fh5co-footer\">

\t\t<div class=\"container\">
\t\t\t<div class=\"row row-padded\">
\t\t\t\t<div class=\"col-md-12 text-center\">
                    缘来社区
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>


\t<!-- jQuery -->
\t<script src=\"./web/js/jquery.min.js\"></script>
\t<!-- jQuery Easing -->
\t<script src=\"./web/js/jquery.easing.1.3.js\"></script>
\t<!-- Bootstrap -->
\t<script src=\"./web/js/bootstrap.min.js\"></script>
\t<!-- Waypoints -->
\t<script src=\"./web/js/jquery.waypoints.min.js\"></script>
\t<!-- Magnific Popup -->
\t<script src=\"./web/js/jquery.magnific-popup.min.js\"></script>
\t<!-- Salvattore -->
\t<script src=\"./web/js/salvattore.min.js\"></script>
\t<!-- Main JS -->
\t<script src=\"./web/js/main.js\"></script>




\t</body>
</html>
";
    }
}
