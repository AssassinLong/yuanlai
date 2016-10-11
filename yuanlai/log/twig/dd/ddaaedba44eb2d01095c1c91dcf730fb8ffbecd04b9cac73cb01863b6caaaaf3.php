<?php

/* layout3.html */
class __TwigTemplate_f62d19e336b6f70ae33ea950bc839f19b3b44a1ba8ff632f5b06f95a4f1286a6 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <title>个人中心</title>
    <meta content=\"initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width\" name=\"viewport\" />
    <link rel=\"stylesheet\" href=\"./web/css/css.css\" />
    <link rel=\"stylesheet\" href=\"./web/css/list.css\" />
    <link rel=\"stylesheet\" href=\"./web/css/member.css\" />

</head>
<body>
";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "<div class=\"jy-fo\">
    <ul class=\"clearfix\">
        <li class=\"fl fo-l\"><a href=\"#\" class=\"fs12 co5\">触屏版</a></li>
        <li class=\"fl\"><span class=\"co3\">|</span></li>
        <li class=\"fl fo-r\"><a href=\"#\" class=\"fs12 co3\">彩版</a></li>
    </ul>
    <p class=\"tac co3 fs12 mt20\">缘来社交  请关注微信号公众号</p>
    <p class=\"tac co3 fs12 mt8\">红娘专线：13012151643</p>
</div>
<!--footer--end-->
<!--footer--end-->
</div>
</body> <script type=\"text/javascript\">
    /*20:3 创建于 2014-12-26*/
    var cpro_id = \"u1879755\";
</script>

</html>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout3.html";
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  58 => 13,  36 => 16,  34 => 13,  20 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <title>个人中心</title>
    <meta content=\"initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width\" name=\"viewport\" />
    <link rel=\"stylesheet\" href=\"./web/css/css.css\" />
    <link rel=\"stylesheet\" href=\"./web/css/list.css\" />
    <link rel=\"stylesheet\" href=\"./web/css/member.css\" />

</head>
<body>
{% block content %}

{% endblock %}
<div class=\"jy-fo\">
    <ul class=\"clearfix\">
        <li class=\"fl fo-l\"><a href=\"#\" class=\"fs12 co5\">触屏版</a></li>
        <li class=\"fl\"><span class=\"co3\">|</span></li>
        <li class=\"fl fo-r\"><a href=\"#\" class=\"fs12 co3\">彩版</a></li>
    </ul>
    <p class=\"tac co3 fs12 mt20\">缘来社交  请关注微信号公众号</p>
    <p class=\"tac co3 fs12 mt8\">红娘专线：13012151643</p>
</div>
<!--footer--end-->
<!--footer--end-->
</div>
</body> <script type=\"text/javascript\">
    /*20:3 创建于 2014-12-26*/
    var cpro_id = \"u1879755\";
</script>

</html>
";
    }
}
