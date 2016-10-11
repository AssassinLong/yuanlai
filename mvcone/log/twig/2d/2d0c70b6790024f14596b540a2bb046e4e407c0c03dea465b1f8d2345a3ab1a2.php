<?php

/* index.html */
class __TwigTemplate_0afa790f298f7d6ca270302f6981debe928dbbd5dca9bf6c1e56c048eb0c070e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "index.html", 2);
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
    <form>
        <table>
            <tr>
                <td>姓名</td>
                <td>留言内容</td>
                <td>留言时间</td>
                <td>操作</td>
            </tr>
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "text", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "datatime", array()), "html", null, true);
            echo "</td>
                <td><a href=\"/index/del/id/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "\">删除</a></td>
            </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </table>
    </form>
</center>
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
        return array (  70 => 21,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  46 => 14,  42 => 13,  31 => 4,  28 => 3,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"layout.html\" %}
{% block content %}
<center>
    <form>
        <table>
            <tr>
                <td>姓名</td>
                <td>留言内容</td>
                <td>留言时间</td>
                <td>操作</td>
            </tr>
{% for val in data %}
            <tr>
                <td>{{ val.name }}</td>
                <td>{{ val.text }}</td>
                <td>{{ val.datatime }}</td>
                <td><a href=\"/index/del/id/{{ val.id }}\">删除</a></td>
            </tr>
{% endfor %}
    </table>
    </form>
</center>
{% endblock %}
";
    }
}
