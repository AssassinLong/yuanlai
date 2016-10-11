<?php

/* layout2.html */
class __TwigTemplate_3c9ac1649e0db786fd3f8011fa22f78a803ebbe29eac9eb81cf1221ccb42e526 extends Twig_Template
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
    <title>
        缘来交友
    </title>
    <meta content=\"initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width\"
          name=\"viewport\" />
    <link rel=\"stylesheet\" href=\"./web/css/css.css\" />
    <link rel=\"stylesheet\" href=\"./web/css/jy.css\" />
</head>

<body>
<div class=\"jy\">
    <p class=\"jy-sy-top lh30 fs12 co13\">
                <span class=\"channel_29\">
                    <a class=\"fs12 co13\" href=\"#\">
                        你没有照片,征友成功率会降低.立即上传
                    </a>
                </span>
    </p>
    <img src=\"http://images1c.jyimg.com/w4/wap/i/m/2013/04/top-img.jpg\" width=\"320\"
         class='dpb' />
    <!--nav--start-->
    <ul class=\"jy-nav clearfix\">
        <li class=\"current\">
            <a href=\"?r=home/index\">
                首页
            </a>
        </li>
        <li>
            <a href=\"?r=home/seek\">
                搜索
            </a>
        </li>
        <li>
            <a href=\"?r=home/advices\">
                消息
            </a>
        </li>
        <li>
            <a href=\"?r=home/gift\" readonly=\"readonly\">
                礼物
            </a>
        </li>
        <li>
            <a href=\"?r=home/forum\">
                论坛
            </a>
        </li>
        <li>
            <a href=\"?r=home/fossa\">
                个人中心
            </a>
        </li>
    </ul>

    ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "    <div class=\"jy-fo\">
        <ul class=\"clearfix\">
            <li class=\"fl fo-l\">
                <a href=\"#\" class=\"fs12 co5\">
                    触屏版
                </a>
            </li>
            <li class=\"fl\">
                            <span class=\"co3\">
                                |
                            </span>
            </li>
            <li class=\"fl fo-r\">
                <a href=\"#\" class=\"fs12 co3\">
                    彩版
                </a>
            </li>
        </ul>
        <p class=\"tac co3 fs12 mt20\">
            缘来社交 请关注微信公众号
        </p>
        <p class=\"tac co3 fs12 mt8\">
            红娘专线：13012151643
        </p>
    </div>
    <!--footer--end-->
    <!--top--start-->
    <!--<a href=\"#\" class=\"jy-top\"></a>-->
    <!--top--end-->
</div>
<!--<script type=\"text/javascript\">
    /*20:3 创建于 2014-12-26*/
    var cpro_id = \"u1879755\";
</script>
<script src=\"http://cpro.baidustatic.com/cpro/ui/cm.js\" type=\"text/javascript\">
</script>-->
</body>

</html>";
    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
        // line 61
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layout2.html";
    }

    public function getDebugInfo()
    {
        return array (  128 => 61,  125 => 60,  83 => 63,  81 => 60,  20 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <title>
        缘来交友
    </title>
    <meta content=\"initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width\"
          name=\"viewport\" />
    <link rel=\"stylesheet\" href=\"./web/css/css.css\" />
    <link rel=\"stylesheet\" href=\"./web/css/jy.css\" />
</head>

<body>
<div class=\"jy\">
    <p class=\"jy-sy-top lh30 fs12 co13\">
                <span class=\"channel_29\">
                    <a class=\"fs12 co13\" href=\"#\">
                        你没有照片,征友成功率会降低.立即上传
                    </a>
                </span>
    </p>
    <img src=\"http://images1c.jyimg.com/w4/wap/i/m/2013/04/top-img.jpg\" width=\"320\"
         class='dpb' />
    <!--nav--start-->
    <ul class=\"jy-nav clearfix\">
        <li class=\"current\">
            <a href=\"?r=home/index\">
                首页
            </a>
        </li>
        <li>
            <a href=\"?r=home/seek\">
                搜索
            </a>
        </li>
        <li>
            <a href=\"?r=home/advices\">
                消息
            </a>
        </li>
        <li>
            <a href=\"?r=home/gift\" readonly=\"readonly\">
                礼物
            </a>
        </li>
        <li>
            <a href=\"?r=home/forum\">
                论坛
            </a>
        </li>
        <li>
            <a href=\"?r=home/fossa\">
                个人中心
            </a>
        </li>
    </ul>

    {% block content %}

    {% endblock %}
    <div class=\"jy-fo\">
        <ul class=\"clearfix\">
            <li class=\"fl fo-l\">
                <a href=\"#\" class=\"fs12 co5\">
                    触屏版
                </a>
            </li>
            <li class=\"fl\">
                            <span class=\"co3\">
                                |
                            </span>
            </li>
            <li class=\"fl fo-r\">
                <a href=\"#\" class=\"fs12 co3\">
                    彩版
                </a>
            </li>
        </ul>
        <p class=\"tac co3 fs12 mt20\">
            缘来社交 请关注微信公众号
        </p>
        <p class=\"tac co3 fs12 mt8\">
            红娘专线：13012151643
        </p>
    </div>
    <!--footer--end-->
    <!--top--start-->
    <!--<a href=\"#\" class=\"jy-top\"></a>-->
    <!--top--end-->
</div>
<!--<script type=\"text/javascript\">
    /*20:3 创建于 2014-12-26*/
    var cpro_id = \"u1879755\";
</script>
<script src=\"http://cpro.baidustatic.com/cpro/ui/cm.js\" type=\"text/javascript\">
</script>-->
</body>

</html>";
    }
}
