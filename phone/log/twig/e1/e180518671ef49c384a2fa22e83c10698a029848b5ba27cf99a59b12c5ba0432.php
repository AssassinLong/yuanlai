<?php

/* details.html */
class __TwigTemplate_63a9ec06350d214c33cb44f44c7943afa6cc48ed176ffe78c946eea1b8727f46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "details.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div data-role=\"header\">
    <h1>正在查看文章:<span style=\"color: red;\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oned"]) ? $context["oned"] : null), "name", array()), "html", null, true);
        echo "</span></h1>
</div>
<h5 style=\"float:right;\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oned"]) ? $context["oned"] : null), "datetime", array()), "html", null, true);
        echo "</h5>
<a href=\"#\" data-role=\"button\" data-rel=\"back\" class=\"ui-btn ui-icon-arrow-l ui-btn-icon-notext\">上一页</a>
<div data-role=\"main\" class=\"ui-content\">
    <center>
    <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oned"]) ? $context["oned"] : null), "text", array()), "html", null, true);
        echo "</p>
    </center>
</div>
";
    }

    public function getTemplateName()
    {
        return "details.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  39 => 6,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\" %}
{% block content %}
<div data-role=\"header\">
    <h1>正在查看文章:<span style=\"color: red;\">{{ oned.name }}</span></h1>
</div>
<h5 style=\"float:right;\">{{ oned.datetime }}</h5>
<a href=\"#\" data-role=\"button\" data-rel=\"back\" class=\"ui-btn ui-icon-arrow-l ui-btn-icon-notext\">上一页</a>
<div data-role=\"main\" class=\"ui-content\">
    <center>
    <p>{{ oned.text }}</p>
    </center>
</div>
{% endblock %}

";
    }
}
