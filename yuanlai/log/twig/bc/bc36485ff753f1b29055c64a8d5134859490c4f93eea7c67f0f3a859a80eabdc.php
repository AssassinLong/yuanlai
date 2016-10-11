<?php

/* index.html */
class __TwigTemplate_185e0e83a9006c8f42b21f5e2f5cf56f71acb009f7418e6e66256b510fd807ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout2.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout2.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
        <!--今日速配--end-->
        <!--谁看过我--start-->
        <!--谁看过我--end-->
        <!--首页产品--end-->
        <!--footer--start-->
        ";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout2.html\"%}
{% block content %}

        <!--今日速配--end-->
        <!--谁看过我--start-->
        <!--谁看过我--end-->
        <!--首页产品--end-->
        <!--footer--start-->
        {% endblock %}";
    }
}
