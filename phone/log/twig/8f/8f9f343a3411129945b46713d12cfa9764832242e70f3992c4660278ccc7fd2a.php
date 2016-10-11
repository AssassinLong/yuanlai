<?php

/* layout.html */
class __TwigTemplate_fefa21605d23d58b4aa86cdf7dd3c660c8e7c26569ba81cf7a8cab24897e458e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"./web/jquery.mobile-1.4.5.min.css\">
    <script src=\"./web/jquery.1.10.1.min.js\"></script>
    <script src=\"./web/jquery.mobile-1.4.5.min.js\"></script>
</head>
<body>
    <div data-role=\"page\" id=\"pageone\">
        <content>
            <div data-role=\"main\" class=\"ui-content\">
                <div data-role=\"popup\" id=\"myPopup\" class=\"ui-content\" style=\"height: 400px;width: 300px;\">
                    <h3>欢迎登录</h3>
                    <center>
                    <form action=\"?index/login\" method=\"post\">
                    <table>
                        <tr>
                            <td>用户名:</td>
                            <td><input type=\"text\" name=\"name\"></td>
                        </tr>
                        <tr>
                            <td>密码:</td>
                            <td><input type=\"password\" name=\"pwd\"></td>
                        </tr>
                        <tr>
                            <td><input type=\"reset\" value=\"清空\"></td>
                            <td><input type=\"submit\" value=\"提交\"></td>
                        </tr>
                    </table>
                    </form>
                    </center>
                </div>
            </div>
        ";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "        </content>
        <div data-role=\"footer\" data-position=\"fixed\">
            <div data-role=\"navbar\">
                <ul>
                    <li><a href=\"?index/lists\">列表</a></li>
                    <li><a href=\"?index/index\">首页</a></li>
                    ";
        // line 44
        if ($this->getAttribute((isset($context["name"]) ? $context["name"] : null), "name", array())) {
            // line 45
            echo "                    <li><a href=\"?index/personal\">个人中心</a></li>
                    ";
        } else {
            // line 47
            echo "                    <li id=\"pop\"><a href=\"#myPopup\" data-rel=\"popup\" class=\"ui-btn ui-btn-inline ui-corner-all\">登录</a></li>
                    ";
        }
        // line 49
        echo "                </ul>
            </div>
        </div>
    </div>
</body>
</html>
";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        // line 36
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  86 => 35,  76 => 49,  72 => 47,  68 => 45,  66 => 44,  58 => 38,  56 => 35,  20 => 1,);
    }

    public function getSource()
    {
        return "
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"./web/jquery.mobile-1.4.5.min.css\">
    <script src=\"./web/jquery.1.10.1.min.js\"></script>
    <script src=\"./web/jquery.mobile-1.4.5.min.js\"></script>
</head>
<body>
    <div data-role=\"page\" id=\"pageone\">
        <content>
            <div data-role=\"main\" class=\"ui-content\">
                <div data-role=\"popup\" id=\"myPopup\" class=\"ui-content\" style=\"height: 400px;width: 300px;\">
                    <h3>欢迎登录</h3>
                    <center>
                    <form action=\"?index/login\" method=\"post\">
                    <table>
                        <tr>
                            <td>用户名:</td>
                            <td><input type=\"text\" name=\"name\"></td>
                        </tr>
                        <tr>
                            <td>密码:</td>
                            <td><input type=\"password\" name=\"pwd\"></td>
                        </tr>
                        <tr>
                            <td><input type=\"reset\" value=\"清空\"></td>
                            <td><input type=\"submit\" value=\"提交\"></td>
                        </tr>
                    </table>
                    </form>
                    </center>
                </div>
            </div>
        {% block content %}

    {% endblock %}
        </content>
        <div data-role=\"footer\" data-position=\"fixed\">
            <div data-role=\"navbar\">
                <ul>
                    <li><a href=\"?index/lists\">列表</a></li>
                    <li><a href=\"?index/index\">首页</a></li>
                    {% if( name.name ) %}
                    <li><a href=\"?index/personal\">个人中心</a></li>
                    {% else %}
                    <li id=\"pop\"><a href=\"#myPopup\" data-rel=\"popup\" class=\"ui-btn ui-btn-inline ui-corner-all\">登录</a></li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
";
    }
}
