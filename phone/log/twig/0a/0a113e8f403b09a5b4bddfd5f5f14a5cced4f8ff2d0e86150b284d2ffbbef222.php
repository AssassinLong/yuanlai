<?php

/* index.php */
class __TwigTemplate_49c8799b9977b948a733c453b1248765415d8c1bd21706ad48fd61ce97d5c292 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.php", 1);
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
        echo "<div data-role=\"page\" id=\"pageone\">
    <div data-role=\"header\">
        <h1>欢迎登录幻想嘉年华</h1>
    </div>
    <div data-role=\"main\" class=\"ui-content\">
        <p>你想明白生命的真正意义吗？你想真正的......活着吗?</p>
        <div data-role=\"popup\" id=\"myPopup\">
            <div data-role=\"content\">
                <h2>有序列表：</h2>
                <ol data-role=\"listview\">
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 14
            echo "                    <li><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "name", array()), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                </ol>
            </div>
        </div>
    </div>
    <div data-role=\"footer\">
        <div data-role=\"navbar\">
            <ul>
                <li><a href=\"#myPopup\" data-rel=\"popup\" class=\"ui-btn ui-btn-inline ui-corner-all\" >列表</a></li>
                <li><a href=\"#\">空白</a></li>
                <li><a href=\"#\">个人中心</a></li>
            </ul>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  47 => 14,  43 => 13,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\" %}
{% block content %}
<div data-role=\"page\" id=\"pageone\">
    <div data-role=\"header\">
        <h1>欢迎登录幻想嘉年华</h1>
    </div>
    <div data-role=\"main\" class=\"ui-content\">
        <p>你想明白生命的真正意义吗？你想真正的......活着吗?</p>
        <div data-role=\"popup\" id=\"myPopup\">
            <div data-role=\"content\">
                <h2>有序列表：</h2>
                <ol data-role=\"listview\">
                    {% for val in data %}
                    <li><a href=\"#\">{{ val.name }}</a></li>
                    {% endfor %}
                </ol>
            </div>
        </div>
    </div>
    <div data-role=\"footer\">
        <div data-role=\"navbar\">
            <ul>
                <li><a href=\"#myPopup\" data-rel=\"popup\" class=\"ui-btn ui-btn-inline ui-corner-all\" >列表</a></li>
                <li><a href=\"#\">空白</a></li>
                <li><a href=\"#\">个人中心</a></li>
            </ul>
        </div>
    </div>
</div>
{% endblock %}
";
    }
}
