<?php

/* shenghuomiaoshu.html */
class __TwigTemplate_bc367682af5620c2c88c860b61a62d38f355670f482916208f5d3ef86240173c extends Twig_Template
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
        <script src=\"web/js/mui.js\" ></script>
\t    <script src=\"web/js/core.js\" ></script>
        <link rel=\"stylesheet\" href=\"http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css\">  
\t    <script src=\"http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js\"></script>
\t    <script src=\"http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

<title>编辑生活描述</title>
</head>

\t<body class=\"backgroud-white\">
\t\t<!-- 导航栏开始 -->
\t\t<header class=\"mui-bar mui-bar-nav\">
            <a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
\t\t\t<h1 class=\"mui-title\">生活描述</h1>
\t\t\t
\t\t</header>
\t\t<!-- 导航栏结束 -->

\t\t<div class=\"mui-content\">
\t\t\t<!-- 生活描述开始 -->
\t\t\t<form action=\"?r=fossa/sheng_add\" method=\"post\">
\t\t\t";
        // line 34
        if ((isset($context["re"]) ? $context["re"] : null)) {
            // line 35
            echo "\t\t\t   ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["re"]) ? $context["re"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 36
                echo "\t\t\t    <span class=\"input-group-addon\">是否吸烟</span>
\t\t\t    <input type=\"text\" name=\"smoke\" class=\"form-control\" value=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "smoke", array()), "html", null, true);
                echo "\">
\t\t\t    <span class=\"input-group-addon\">是否喝酒</span>
\t\t\t    <input type=\"text\" name=\"drink\" class=\"form-control\" value=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "drink", array()), "html", null, true);
                echo "\">
\t\t\t    <span class=\"input-group-addon\">锻炼习惯</span>
\t\t\t    <input type=\"text\" name=\"fitness\" class=\"form-control\" value=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "fitness", array()), "html", null, true);
                echo "\">
                <span class=\"input-group-addon\">作息习惯</span>
\t\t\t    <input type=\"text\" name=\"rest\" class=\"form-control\" value=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "rest", array()), "html", null, true);
                echo "\">
\t\t\t\t<span class=\"input-group-addon\">是否喜爱浪漫</span>
\t\t\t    <input type=\"text\" name=\"askchild\" class=\"form-control\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "askchild", array()), "html", null, true);
                echo "\">
\t\t\t    <span class=\"input-group-addon\">生活技能</span>
\t\t\t    <input type=\"text\" name=\"lifeskill\" class=\"form-control\" value=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "lifeskill", array()), "html", null, true);
                echo "\">
                <center>
\t\t\t    <input type=\"submit\" value=\"完成\">
\t\t\t    </center>
\t\t\t     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t   ";
        } else {
            // line 53
            echo "
                 <span class=\"input-group-addon\">是否吸烟</span>
\t\t\t    <input type=\"text\" name=\"smoke\" class=\"form-control\" value=\"\">
\t\t\t    <span class=\"input-group-addon\">是否喝酒</span>
\t\t\t    <input type=\"text\" name=\"drink\" class=\"form-control\" value=\"\">
\t\t\t    <span class=\"input-group-addon\">锻炼习惯</span>
\t\t\t    <input type=\"text\" name=\"fitness\" class=\"form-control\" value=\"\">
                <span class=\"input-group-addon\">作息习惯</span>
\t\t\t    <input type=\"text\" name=\"rest\" class=\"form-control\" value=\"\">
\t\t\t\t<span class=\"input-group-addon\">是否喜爱浪漫</span>
\t\t\t    <input type=\"text\" name=\"askchild\" class=\"form-control\" value=\"\">
\t\t\t    <span class=\"input-group-addon\">生活技能</span>
\t\t\t    <input type=\"text\" name=\"lifeskill\" class=\"form-control\" value=\"\">
                <center>
\t\t\t    <input type=\"submit\" value=\"完成\">
\t\t\t    </center> 
\t\t\t   ";
        }
        // line 70
        echo "\t\t\t</form>

\t\t\t
\t\t\t<!-- 生活描述结束 -->
\t\t</div>
\t\t<!-- CNZZ代码 -->
\t<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=http%3A%2F%2Fm.7799520.com%2Fself%2F377537.html&rnd=1526688109\" width=\"0\" height=\"0\"/>\t</body>
\t<!--引用自定义脚本-->
\t<script src=\"/js/core.js\"></script> 
\t<!--引用自定义脚本-->
\t


</html>";
    }

    public function getTemplateName()
    {
        return "shenghuomiaoshu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 70,  103 => 53,  100 => 52,  89 => 47,  84 => 45,  79 => 43,  74 => 41,  69 => 39,  64 => 37,  61 => 36,  56 => 35,  54 => 34,  19 => 1,);
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
        <script src=\"web/js/mui.js\" ></script>
\t    <script src=\"web/js/core.js\" ></script>
        <link rel=\"stylesheet\" href=\"http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css\">  
\t    <script src=\"http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js\"></script>
\t    <script src=\"http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

<title>编辑生活描述</title>
</head>

\t<body class=\"backgroud-white\">
\t\t<!-- 导航栏开始 -->
\t\t<header class=\"mui-bar mui-bar-nav\">
            <a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
\t\t\t<h1 class=\"mui-title\">生活描述</h1>
\t\t\t
\t\t</header>
\t\t<!-- 导航栏结束 -->

\t\t<div class=\"mui-content\">
\t\t\t<!-- 生活描述开始 -->
\t\t\t<form action=\"?r=fossa/sheng_add\" method=\"post\">
\t\t\t{% if re %}
\t\t\t   {% for v in re %}
\t\t\t    <span class=\"input-group-addon\">是否吸烟</span>
\t\t\t    <input type=\"text\" name=\"smoke\" class=\"form-control\" value=\"{{ v.smoke }}\">
\t\t\t    <span class=\"input-group-addon\">是否喝酒</span>
\t\t\t    <input type=\"text\" name=\"drink\" class=\"form-control\" value=\"{{ v.drink }}\">
\t\t\t    <span class=\"input-group-addon\">锻炼习惯</span>
\t\t\t    <input type=\"text\" name=\"fitness\" class=\"form-control\" value=\"{{ v.fitness }}\">
                <span class=\"input-group-addon\">作息习惯</span>
\t\t\t    <input type=\"text\" name=\"rest\" class=\"form-control\" value=\"{{ v.rest }}\">
\t\t\t\t<span class=\"input-group-addon\">是否喜爱浪漫</span>
\t\t\t    <input type=\"text\" name=\"askchild\" class=\"form-control\" value=\"{{ v.askchild }}\">
\t\t\t    <span class=\"input-group-addon\">生活技能</span>
\t\t\t    <input type=\"text\" name=\"lifeskill\" class=\"form-control\" value=\"{{ v.lifeskill }}\">
                <center>
\t\t\t    <input type=\"submit\" value=\"完成\">
\t\t\t    </center>
\t\t\t     {% endfor %}
\t\t\t   {% else %}

                 <span class=\"input-group-addon\">是否吸烟</span>
\t\t\t    <input type=\"text\" name=\"smoke\" class=\"form-control\" value=\"\">
\t\t\t    <span class=\"input-group-addon\">是否喝酒</span>
\t\t\t    <input type=\"text\" name=\"drink\" class=\"form-control\" value=\"\">
\t\t\t    <span class=\"input-group-addon\">锻炼习惯</span>
\t\t\t    <input type=\"text\" name=\"fitness\" class=\"form-control\" value=\"\">
                <span class=\"input-group-addon\">作息习惯</span>
\t\t\t    <input type=\"text\" name=\"rest\" class=\"form-control\" value=\"\">
\t\t\t\t<span class=\"input-group-addon\">是否喜爱浪漫</span>
\t\t\t    <input type=\"text\" name=\"askchild\" class=\"form-control\" value=\"\">
\t\t\t    <span class=\"input-group-addon\">生活技能</span>
\t\t\t    <input type=\"text\" name=\"lifeskill\" class=\"form-control\" value=\"\">
                <center>
\t\t\t    <input type=\"submit\" value=\"完成\">
\t\t\t    </center> 
\t\t\t   {% endif %}
\t\t\t</form>

\t\t\t
\t\t\t<!-- 生活描述结束 -->
\t\t</div>
\t\t<!-- CNZZ代码 -->
\t<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=http%3A%2F%2Fm.7799520.com%2Fself%2F377537.html&rnd=1526688109\" width=\"0\" height=\"0\"/>\t</body>
\t<!--引用自定义脚本-->
\t<script src=\"/js/core.js\"></script> 
\t<!--引用自定义脚本-->
\t


</html>";
    }
}
