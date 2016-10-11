<?php

/* layout.html */
class __TwigTemplate_dd2799c886f5e89e1b76e3b73262b6b1f2f607586036db6335d637c93e9777f3 extends Twig_Template
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
<body>

<header>留言板</header>
<content>
    ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 10
        echo "</content>

<footer><a href=\"/index/add\">添加留言</a></footer>
<footer><a href=\"/index/index\">展示留言</a></footer>
</body>
</html>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  40 => 7,  30 => 10,  28 => 7,  20 => 1,);
    }

    public function getSource()
    {
        return "
<html>
<body>

<header>留言板</header>
<content>
    {% block content %}

    {% endblock %}
</content>

<footer><a href=\"/index/add\">添加留言</a></footer>
<footer><a href=\"/index/index\">展示留言</a></footer>
</body>
</html>
";
    }
}
