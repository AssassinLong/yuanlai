<?php

/* layout.html */
class __TwigTemplate_804f8817b52a0a7b85c1dafeb52e6be165713e41213880443c43f68c889f3309 extends Twig_Template
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

<html>

<head>

    <title>缘来社交</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;\" />

    <meta content=\"yes\" name=\"apple-mobile-web-app-capable\" />

    <link href=\"./web/styles/bootstrap.min.css\" rel=\"stylesheet\" />

    <link href=\"./web/styles/NewGlobal.css\" rel=\"stylesheet\" />
    <script type=\"text/javascript\" src=\"./web/jquery.1.10.1.min.js\"></script>

    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">

</head>

<body>

";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "</content>

<div class=\"footer\">

    <div class=\"gezifooter\">

        <a href=\"http://www.hotels.cn/jiu-dian-you-hui/globalgeneric-cn/?dateless=true&PSRC=SEMU&rffrid=sem.hcom.CN.baidu.003.00.03.1.kwrd%3DZzZz.17IC3AR7S.0.5361722491.10203p79948.d.c\" class=\"ui-link\">酒店预订</a> <font color=\"#878787\">|</font> 

            

        <a href=\"?index/register\"\" class=\"ui-link\">免费注册</a> <font color=\"#878787\">

    </div>

    <div class=\"gezifooter\">

        <p style=\"color:#bbb;\">缘来社交 &copy; 版权所有 2016</p>

    </div>

</div>

<div style=\"display:none;\"><script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cdiv id='cnzz_stat_icon_1000047539'%3E%3C/div%3E%3Cscript src='\" + cnzz_protocol + \"s22.cnzz.com/z_stat.php%3Fid%3D1000047539%26show%3Dpic' type='text/javascript'%3E%3C/script%3E\"));</script></div>

</body>

</html>";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  77 => 24,  47 => 27,  45 => 24,  20 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>

<html>

<head>

    <title>缘来社交</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;\" />

    <meta content=\"yes\" name=\"apple-mobile-web-app-capable\" />

    <link href=\"./web/styles/bootstrap.min.css\" rel=\"stylesheet\" />

    <link href=\"./web/styles/NewGlobal.css\" rel=\"stylesheet\" />
    <script type=\"text/javascript\" src=\"./web/jquery.1.10.1.min.js\"></script>

    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">

</head>

<body>

{% block content %}

{% endblock %}
</content>

<div class=\"footer\">

    <div class=\"gezifooter\">

        <a href=\"http://www.hotels.cn/jiu-dian-you-hui/globalgeneric-cn/?dateless=true&PSRC=SEMU&rffrid=sem.hcom.CN.baidu.003.00.03.1.kwrd%3DZzZz.17IC3AR7S.0.5361722491.10203p79948.d.c\" class=\"ui-link\">酒店预订</a> <font color=\"#878787\">|</font> 

            

        <a href=\"?index/register\"\" class=\"ui-link\">免费注册</a> <font color=\"#878787\">

    </div>

    <div class=\"gezifooter\">

        <p style=\"color:#bbb;\">缘来社交 &copy; 版权所有 2016</p>

    </div>

</div>

<div style=\"display:none;\"><script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cdiv id='cnzz_stat_icon_1000047539'%3E%3C/div%3E%3Cscript src='\" + cnzz_protocol + \"s22.cnzz.com/z_stat.php%3Fid%3D1000047539%26show%3Dpic' type='text/javascript'%3E%3C/script%3E\"));</script></div>

</body>

</html>";
    }
}
