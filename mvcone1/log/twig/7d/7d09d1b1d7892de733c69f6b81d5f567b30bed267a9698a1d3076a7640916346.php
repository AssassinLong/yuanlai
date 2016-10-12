<?php

/* add.html */
class __TwigTemplate_a681d0bf90271cc658800311aa7831ec036da4c5c5254d52d7e42e00ea496638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "add.html", 2);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<center>
    <form action=\"?index/save\" method=\"post\">
        <table>
            <tr>
                <td>留言</td>
                <td><input type=\"text\" name=\"text\" placeholder=\"请留言\"></td>
            </tr>
            <tr>
                <td><input type=\"reset\" value=\"清空\"></td>
                <td><input type=\"submit\" value=\"提交\"></td>
            </tr>
        </table>
    </form>
</center>
";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"layout.html\" %}
{% block content %}
<center>
    <form action=\"?index/save\" method=\"post\">
        <table>
            <tr>
                <td>留言</td>
                <td><input type=\"text\" name=\"text\" placeholder=\"请留言\"></td>
            </tr>
            <tr>
                <td><input type=\"reset\" value=\"清空\"></td>
                <td><input type=\"submit\" value=\"提交\"></td>
            </tr>
        </table>
    </form>
</center>
{% endblock %}
";
    }
}
