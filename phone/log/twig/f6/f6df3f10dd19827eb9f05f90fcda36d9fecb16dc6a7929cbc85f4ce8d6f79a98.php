<?php

/* lists.html */
class __TwigTemplate_1bab814c3e5b595d447ba37ff620f79168bfddd385b27dd6228b676e96d8ea33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "lists.html", 1);
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
    <h1>文章展示</h1>
</div>
<a href=\"#\" data-role=\"button\" data-rel=\"back\" class=\"ui-btn ui-icon-arrow-l ui-btn-icon-notext\">上一页</a>
<button onclick=\"showBg()\" class=\"ui-btn\">添加</button>
<div class=\"ui-grid-b\">
    <div class=\"ui-block-a\">标题:</div>
    <div class=\"ui-block-b\">内容:</div>
    <div class=\"ui-block-b\">操作:</div>
</div>
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 14
            echo "<div class=\"ui-grid-b\">
    <div class=\"ui-block-a\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "name", array()), "html", null, true);
            echo "</div>
    <div class=\"ui-block-b\"><a href=\"?index/details/id/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "\">详情</a></div>
    <div class=\"ui-block-b\"><a href=\"?index/del/id/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "\">删除</a></div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "<style type=\"text/css\">
    body {
        font-family:Arial, Helvetica, sans-serif;
        font-size:12px;
        margin:0;
    }
    #main {
        height:1800px;
        padding-top:90px;
        text-align:center;
    }
    #fullbg {
        background-color:gray;
        left:0;
        opacity:0.5;
        position:absolute;
        top:0;
        z-index:3;
        filter:alpha(opacity=50);
        -moz-opacity:0.5;
        -khtml-opacity:0.5;
    }
    #dialog {
        background-color:#fff;
        border:5px solid rgba(0,0,0, 0.4);
        height:300px;
        left:63%;
        margin:-200px 0 0 -200px;
        padding:1px;
        position:fixed !important; /* 浮动对话框 */
        position:absolute;
        top:50%;
        width:300px;
        z-index:5;
        border-radius:5px;
        display:none;
    }
    #dialog p {
        margin:0 0 12px;
        height:20px;
        line-height:20px;
        background:#CCCCCC;
    }
    #dialog p.close {
        text-align:right;
        padding-right:10px;
    }
    #dialog p.close a {
        color:#fff;
        text-decoration:none;
    }

</style>

<script type=\"text/javascript\">
    //显示灰色 jQuery 遮罩层
    function showBg() {
        var bh = \$(\"body\").height();
        var bw = \$(\"body\").width();
        \$(\"#fullbg\").css({
            height:bh,
            width:bw,
            display:\"block\"
        });
        \$(\"#dialog\").show();
    }
    //关闭灰色 jQuery 遮罩
    function closeBg() {
        \$(\"#fullbg,#dialog\").hide();
    }
</script>
<div>
    <div id=\"fullbg\"></div>
    <div id=\"dialog\">
        <p class=\"close\"><a href=\"#\" onclick=\"closeBg();\">关闭</a></p>
        <div>
            <form action=\"?index/add\" method=\"post\">
                <ul data-role=\"listview\" data-theme=\"e\">
                    <label>标  题：</label>
                    <input type=\"text\" name=\"name\" required=\"required\">
                    <label>内  容：</label>
                    <textarea name=\"text\" required=\"required\"></textarea>
                    <center>
                        <div data-role=\"main\" class=\"ui-content\">
                            <input type=\"submit\" value=\"提交\">
                        </div>
                    </center>
                </ul>
            </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "lists.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  58 => 17,  54 => 16,  50 => 15,  47 => 14,  43 => 13,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\" %}
{% block content %}
<div data-role=\"header\">
    <h1>文章展示</h1>
</div>
<a href=\"#\" data-role=\"button\" data-rel=\"back\" class=\"ui-btn ui-icon-arrow-l ui-btn-icon-notext\">上一页</a>
<button onclick=\"showBg()\" class=\"ui-btn\">添加</button>
<div class=\"ui-grid-b\">
    <div class=\"ui-block-a\">标题:</div>
    <div class=\"ui-block-b\">内容:</div>
    <div class=\"ui-block-b\">操作:</div>
</div>
{% for val in data %}
<div class=\"ui-grid-b\">
    <div class=\"ui-block-a\">{{ val.name }}</div>
    <div class=\"ui-block-b\"><a href=\"?index/details/id/{{ val.id }}\">详情</a></div>
    <div class=\"ui-block-b\"><a href=\"?index/del/id/{{ val.id }}\">删除</a></div>
</div>
{% endfor %}
<style type=\"text/css\">
    body {
        font-family:Arial, Helvetica, sans-serif;
        font-size:12px;
        margin:0;
    }
    #main {
        height:1800px;
        padding-top:90px;
        text-align:center;
    }
    #fullbg {
        background-color:gray;
        left:0;
        opacity:0.5;
        position:absolute;
        top:0;
        z-index:3;
        filter:alpha(opacity=50);
        -moz-opacity:0.5;
        -khtml-opacity:0.5;
    }
    #dialog {
        background-color:#fff;
        border:5px solid rgba(0,0,0, 0.4);
        height:300px;
        left:63%;
        margin:-200px 0 0 -200px;
        padding:1px;
        position:fixed !important; /* 浮动对话框 */
        position:absolute;
        top:50%;
        width:300px;
        z-index:5;
        border-radius:5px;
        display:none;
    }
    #dialog p {
        margin:0 0 12px;
        height:20px;
        line-height:20px;
        background:#CCCCCC;
    }
    #dialog p.close {
        text-align:right;
        padding-right:10px;
    }
    #dialog p.close a {
        color:#fff;
        text-decoration:none;
    }

</style>

<script type=\"text/javascript\">
    //显示灰色 jQuery 遮罩层
    function showBg() {
        var bh = \$(\"body\").height();
        var bw = \$(\"body\").width();
        \$(\"#fullbg\").css({
            height:bh,
            width:bw,
            display:\"block\"
        });
        \$(\"#dialog\").show();
    }
    //关闭灰色 jQuery 遮罩
    function closeBg() {
        \$(\"#fullbg,#dialog\").hide();
    }
</script>
<div>
    <div id=\"fullbg\"></div>
    <div id=\"dialog\">
        <p class=\"close\"><a href=\"#\" onclick=\"closeBg();\">关闭</a></p>
        <div>
            <form action=\"?index/add\" method=\"post\">
                <ul data-role=\"listview\" data-theme=\"e\">
                    <label>标  题：</label>
                    <input type=\"text\" name=\"name\" required=\"required\">
                    <label>内  容：</label>
                    <textarea name=\"text\" required=\"required\"></textarea>
                    <center>
                        <div data-role=\"main\" class=\"ui-content\">
                            <input type=\"submit\" value=\"提交\">
                        </div>
                    </center>
                </ul>
            </form>
        </div>
    </div>
</div>
{% endblock %}";
    }
}
