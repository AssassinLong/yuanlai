<?php

/* add.html */
class __TwigTemplate_7b834c7fd2acb0d135e2322a7a30564580cc7d2e0e5db35db7dd69aab8557e3c extends Twig_Template
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
    <form action=\"/index/save\" method=\"post\">
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
    <form action=\"/index/save\" method=\"post\">
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
