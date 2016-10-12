<?php

/* personal.html */
class __TwigTemplate_0971ab4ba1a9a5ded0af1eff96de9feaa677c047d21ba6b4956d32c353c7390e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "personal.html", 1);
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
    <h1>修改信息</h1>
</div>
<div data-role=\"main\" class=\"ui-content\">
    <a href=\"#\" data-role=\"button\" data-rel=\"back\" class=\"ui-btn ui-icon-arrow-l ui-btn-icon-notext\">上一页</a>
    <div class=\"ui-grid-b\"><input type=\"hidden\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["onep"]) ? $context["onep"] : null), "id", array()), "html", null, true);
        echo "\">
        <div class=\"ui-block-b\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["onep"]) ? $context["onep"] : null), "imgpath", array()), "html", null, true);
        echo "\" alt=\"Paris\" width=\"200\" height=\"150\"></div>
    </div>
    <div class=\"ui-grid-b\">
    <div class=\"ui-block-a\">姓名:</div>
    <div class=\"ui-block-b\"><span>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["onep"]) ? $context["onep"] : null), "name", array()), "html", null, true);
        echo "</span></div>
    </div>
    <div class=\"ui-grid-b\">
        <div class=\"ui-block-a\">手机号:</div>
        <div class=\"ui-block-b\"><span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["onep"]) ? $context["onep"] : null), "phones", array()), "html", null, true);
        echo "</span></div>
    </div>
    <div class=\"ui-grid-b\">
        <div class=\"ui-block-a\">地址:</div>
        <div class=\"ui-block-b\"><span>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["onep"]) ? $context["onep"] : null), "site", array()), "html", null, true);
        echo "</span></div>
    </div>
</div>
<script type=\"text/javascript\">
        \$(document).on('click', 'span', function () {
            var old_val = \$(this).text();
            \$(this).parent().html(\"<input type='text' value=\" + old_val + \">\");
            \$('input').focus();
        });
        \$(document).on('blur','input',function () {
            var is=\$(this);
            var val=\$(this).val();
            var id=\$('input[type=\"hidden\"]').val();
            //alert(id);
            if(val.match('^[\\u4e00-\\u9fa5]{4,17}\$')){
                var site=val;
                var str=val;
            }else if(val.match('^[0-9]*\$')){
                var phones=val;
                var str=val;
            }else{
                var name=val;
                var str=val;
            }
            //alert(site);die;
            \$.ajax({
                type:'post',
                url:'?index/save',
                data:{
                    id:id,
                    name:name,
                    phones:phones,
                    site:site
                },
                success:function(msg){
                    //alert(msg);
                    if(msg=='1'){
                        is.parent().html(\"<span>\"+str+\"</span>\");
                        \$('input').focus();
                    }
                }
            });
        });
</script>
";
    }

    public function getTemplateName()
    {
        return "personal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  56 => 17,  49 => 13,  42 => 9,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\" %}
{% block content %}
<div data-role=\"header\">
    <h1>修改信息</h1>
</div>
<div data-role=\"main\" class=\"ui-content\">
    <a href=\"#\" data-role=\"button\" data-rel=\"back\" class=\"ui-btn ui-icon-arrow-l ui-btn-icon-notext\">上一页</a>
    <div class=\"ui-grid-b\"><input type=\"hidden\" value=\"{{ onep.id }}\">
        <div class=\"ui-block-b\"><img src=\"{{ onep.imgpath }}\" alt=\"Paris\" width=\"200\" height=\"150\"></div>
    </div>
    <div class=\"ui-grid-b\">
    <div class=\"ui-block-a\">姓名:</div>
    <div class=\"ui-block-b\"><span>{{ onep.name }}</span></div>
    </div>
    <div class=\"ui-grid-b\">
        <div class=\"ui-block-a\">手机号:</div>
        <div class=\"ui-block-b\"><span>{{ onep.phones }}</span></div>
    </div>
    <div class=\"ui-grid-b\">
        <div class=\"ui-block-a\">地址:</div>
        <div class=\"ui-block-b\"><span>{{ onep.site }}</span></div>
    </div>
</div>
<script type=\"text/javascript\">
        \$(document).on('click', 'span', function () {
            var old_val = \$(this).text();
            \$(this).parent().html(\"<input type='text' value=\" + old_val + \">\");
            \$('input').focus();
        });
        \$(document).on('blur','input',function () {
            var is=\$(this);
            var val=\$(this).val();
            var id=\$('input[type=\"hidden\"]').val();
            //alert(id);
            if(val.match('^[\\u4e00-\\u9fa5]{4,17}\$')){
                var site=val;
                var str=val;
            }else if(val.match('^[0-9]*\$')){
                var phones=val;
                var str=val;
            }else{
                var name=val;
                var str=val;
            }
            //alert(site);die;
            \$.ajax({
                type:'post',
                url:'?index/save',
                data:{
                    id:id,
                    name:name,
                    phones:phones,
                    site:site
                },
                success:function(msg){
                    //alert(msg);
                    if(msg=='1'){
                        is.parent().html(\"<span>\"+str+\"</span>\");
                        \$('input').focus();
                    }
                }
            });
        });
</script>
{% endblock %}";
    }
}
