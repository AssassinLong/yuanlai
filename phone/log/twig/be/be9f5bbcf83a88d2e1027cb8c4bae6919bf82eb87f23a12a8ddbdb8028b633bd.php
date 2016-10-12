<?php

/* index.html */
class __TwigTemplate_c849be8db52f508064c21ce60ec81f468cbf66b3d2783e2a8f75af746abe5a23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
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
        echo "    <div data-role=\"header\">
        <!--";
        // line 4
        if ($this->getAttribute((isset($context["name"]) ? $context["name"] : null), "name", array())) {
            // line 5
            echo "        ";
        } else {
            // line 6
            echo "        <a href=\"#myPopup\" data-rel=\"popup\" class=\"ui-btn ui-btn-inline ui-corner-all\">登录</a>
        ";
        }
        // line 7
        echo "-->
        <h1>欢迎登录幻想嘉年华</h1>
    </div>
    <div data-role=\"main\" class=\"ui-content\">
        <p>你想明白生命的真正意义吗？你想真正的......活着吗?</p>
    </div>
<script>
    \$(document).ready(function(){
        var pop=\$('#pop').text();
        if(pop!=''){
            //location.replace(location.href);
            }else{

            }
            //alert(pop);
        });
</script>
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
        return array (  43 => 7,  39 => 6,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\" %}
{% block content %}
    <div data-role=\"header\">
        <!--{% if( name.name ) %}
        {% else %}
        <a href=\"#myPopup\" data-rel=\"popup\" class=\"ui-btn ui-btn-inline ui-corner-all\">登录</a>
        {% endif %}-->
        <h1>欢迎登录幻想嘉年华</h1>
    </div>
    <div data-role=\"main\" class=\"ui-content\">
        <p>你想明白生命的真正意义吗？你想真正的......活着吗?</p>
    </div>
<script>
    \$(document).ready(function(){
        var pop=\$('#pop').text();
        if(pop!=''){
            //location.replace(location.href);
            }else{

            }
            //alert(pop);
        });
</script>
{% endblock %}

";
    }
}
