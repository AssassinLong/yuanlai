<?php

/* xiangxiziliao.html */
class __TwigTemplate_54681a761f26f31bd0782a48fc84e84e19f3d9f7135cac4e0c7c68fcf5e37f8c extends Twig_Template
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
\t    <link rel=\"stylesheet\" href=\"http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css\">  
\t    <script src=\"http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js\"></script>
\t    <script src=\"http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
       
<title>编辑详细资料</title>
</head>

\t<body class=\"backgroud-white\">
\t\t<!-- 导航栏开始 -->
\t\t<header class=\"mui-bar mui-bar-nav\">
\t\t\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
\t\t\t<h1 class=\"mui-title\">详细资料</h1>
\t\t\t
\t\t</header>
\t\t<!-- 导航栏结束 -->

\t\t<div class=\"mui-content\">
\t\t\t<!-- 详细资料开始 -->
\t\t\t<form action=\"?r=fossa/xiang_add\" method=\"post\">
\t\t    ";
        // line 34
        if ((isset($context["re"]) ? $context["re"] : null)) {
            // line 35
            echo "\t\t\t  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["re"]) ? $context["re"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 36
                echo "\t\t\t\t<span class=\"input-group-addon\">生肖</span>
\t\t\t    <input type=\"text\" name=\"nature\" class=\"form-control\" value=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "nature", array()), "html", null, true);
                echo "\">
\t\t\t    <span class=\"input-group-addon\">血型</span>
\t\t\t    <input type=\"text\" name=\"bloodtype\" class=\"form-control\" value=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "bloodtype", array()), "html", null, true);
                echo "\">
\t\t\t    <span class=\"input-group-addon\">民族</span>
\t\t\t    <input type=\"text\" name=\"nation\" class=\"form-control\" value=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "nation", array()), "html", null, true);
                echo "\">
\t\t\t    <span class=\"input-group-addon\">有无子女</span>
\t\t\t    <input type=\"text\" name=\"children\" class=\"form-control\" value=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "children", array()), "html", null, true);
                echo "\">
\t\t\t    <span class=\"input-group-addon\">购车情况</span>
\t\t\t    <input type=\"text\" name=\"vehicle\" class=\"form-control\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "vehicle", array()), "html", null, true);
                echo "\">
                <span class=\"input-group-addon\">住房情况</span>
\t\t\t    <input type=\"text\" name=\"house\" class=\"form-control\" value=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "house", array()), "html", null, true);
                echo "\">
                <center>
\t\t\t    <input type=\"submit\" value=\"完成\">
\t\t\t    </center>
\t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t  
               ";
        } else {
            // line 54
            echo "                <span class=\"input-group-addon\">生肖</span>
\t\t\t    <input type=\"text\" name=\"nature\" class=\"form-control\" placeholder=\"\">
\t\t\t    <span class=\"input-group-addon\">血型</span>
\t\t\t    <input type=\"text\" name=\"bloodtype\" class=\"form-control\" placeholder=\"\">
\t\t\t    <span class=\"input-group-addon\">民族</span>
\t\t\t    <input type=\"text\" name=\"nation\" class=\"form-control\" placeholder=\"\">
\t\t\t    <span class=\"input-group-addon\">有无子女</span>
\t\t\t    <input type=\"text\" name=\"children\" class=\"form-control\" placeholder=\"\">
\t\t\t    <span class=\"input-group-addon\">购车情况</span>
\t\t\t    <input type=\"text\" name=\"vehicle\" class=\"form-control\" placeholder=\"\">
                <span class=\"input-group-addon\">住房情况</span>
\t\t\t    <input type=\"text\" name=\"house\" class=\"form-control\" placeholder=\"\">
                <center>
\t\t\t    <input type=\"submit\" value=\"完成\">
\t\t\t    </center>
\t\t\t ";
        }
        // line 70
        echo "\t\t\t</form>

\t\t\t
\t\t\t<!-- 详细资料结束 -->
\t\t</div>
\t\t<!-- CNZZ代码 -->
\t<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=http%3A%2F%2Fm.7799520.com%2Fself%2F377537.html&rnd=1481080925\" width=\"0\" height=\"0\"/>\t</body>
\t<!--引用自定义脚本-->
\t<script src=\"web/js/core1.js\"></script> 
\t<!--引用自定义脚本-->
\t


</html>";
    }

    public function getTemplateName()
    {
        return "xiangxiziliao.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 70,  104 => 54,  100 => 52,  89 => 47,  84 => 45,  79 => 43,  74 => 41,  69 => 39,  64 => 37,  61 => 36,  56 => 35,  54 => 34,  19 => 1,);
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
\t    <link rel=\"stylesheet\" href=\"http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css\">  
\t    <script src=\"http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js\"></script>
\t    <script src=\"http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
       
<title>编辑详细资料</title>
</head>

\t<body class=\"backgroud-white\">
\t\t<!-- 导航栏开始 -->
\t\t<header class=\"mui-bar mui-bar-nav\">
\t\t\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
\t\t\t<h1 class=\"mui-title\">详细资料</h1>
\t\t\t
\t\t</header>
\t\t<!-- 导航栏结束 -->

\t\t<div class=\"mui-content\">
\t\t\t<!-- 详细资料开始 -->
\t\t\t<form action=\"?r=fossa/xiang_add\" method=\"post\">
\t\t    {% if re %}
\t\t\t  {% for v in re %}
\t\t\t\t<span class=\"input-group-addon\">生肖</span>
\t\t\t    <input type=\"text\" name=\"nature\" class=\"form-control\" value=\"{{ v.nature }}\">
\t\t\t    <span class=\"input-group-addon\">血型</span>
\t\t\t    <input type=\"text\" name=\"bloodtype\" class=\"form-control\" value=\"{{ v.bloodtype }}\">
\t\t\t    <span class=\"input-group-addon\">民族</span>
\t\t\t    <input type=\"text\" name=\"nation\" class=\"form-control\" value=\"{{ v.nation }}\">
\t\t\t    <span class=\"input-group-addon\">有无子女</span>
\t\t\t    <input type=\"text\" name=\"children\" class=\"form-control\" value=\"{{ v.children }}\">
\t\t\t    <span class=\"input-group-addon\">购车情况</span>
\t\t\t    <input type=\"text\" name=\"vehicle\" class=\"form-control\" value=\"{{ v.vehicle }}\">
                <span class=\"input-group-addon\">住房情况</span>
\t\t\t    <input type=\"text\" name=\"house\" class=\"form-control\" value=\"{{ v.house }}\">
                <center>
\t\t\t    <input type=\"submit\" value=\"完成\">
\t\t\t    </center>
\t\t\t    {% endfor %}
\t\t\t  
               {% else %}
                <span class=\"input-group-addon\">生肖</span>
\t\t\t    <input type=\"text\" name=\"nature\" class=\"form-control\" placeholder=\"\">
\t\t\t    <span class=\"input-group-addon\">血型</span>
\t\t\t    <input type=\"text\" name=\"bloodtype\" class=\"form-control\" placeholder=\"\">
\t\t\t    <span class=\"input-group-addon\">民族</span>
\t\t\t    <input type=\"text\" name=\"nation\" class=\"form-control\" placeholder=\"\">
\t\t\t    <span class=\"input-group-addon\">有无子女</span>
\t\t\t    <input type=\"text\" name=\"children\" class=\"form-control\" placeholder=\"\">
\t\t\t    <span class=\"input-group-addon\">购车情况</span>
\t\t\t    <input type=\"text\" name=\"vehicle\" class=\"form-control\" placeholder=\"\">
                <span class=\"input-group-addon\">住房情况</span>
\t\t\t    <input type=\"text\" name=\"house\" class=\"form-control\" placeholder=\"\">
                <center>
\t\t\t    <input type=\"submit\" value=\"完成\">
\t\t\t    </center>
\t\t\t {% endif %}
\t\t\t</form>

\t\t\t
\t\t\t<!-- 详细资料结束 -->
\t\t</div>
\t\t<!-- CNZZ代码 -->
\t<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=http%3A%2F%2Fm.7799520.com%2Fself%2F377537.html&rnd=1481080925\" width=\"0\" height=\"0\"/>\t</body>
\t<!--引用自定义脚本-->
\t<script src=\"web/js/core1.js\"></script> 
\t<!--引用自定义脚本-->
\t


</html>";
    }
}
