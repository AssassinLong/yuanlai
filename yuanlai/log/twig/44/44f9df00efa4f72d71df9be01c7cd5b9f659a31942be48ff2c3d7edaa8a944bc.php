<?php

/* seek.html */
class __TwigTemplate_b4eaab7cf72cf78e4c41ed21e99d16161a07ad27153ff94f86439699004e33ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
 <!DOCTYPE html>
<html>
<head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
\t\t<!--标准mui.css-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"web/js/css.css\">
        <!--引用Jquery-->
        <script src=\"web/js/jquery.js\"></script>
        <script src=\"web/js/min.js\" ></script>
\t    <script src=\"web/js/core.js\" ></script>
        <script>
            \$(window).ready(function () {
                (function (\$) {
                    \$('body').on('tap', '.link', function (event) {
                    var url = this.getAttribute('href');
                    var blank = this.getAttribute('target');
                    if (blank == '_blank') {
                        window.open(url);
                    } else {
                        window.location.href = url;
                    }
                    });
                })(mui);
                var lab = document.getElementsByClassName('site-nav')[0];
                if (lab) {
                    var nav = getCookie('tab_item');
                    if (nav) {
                            var as = lab.getElementsByTagName('a');
                            for (var i; i < as.length; i++) {
                               as[i].className = 'link'
                            }
                            as[nav - 1].className = 'link mui-active'
                    }
                }
                function getCookie(name) {
                    var arr, reg = new RegExp(\"(^| )\" + name + \"=([^;]*)(;|\$)\");
                    if (arr = document.cookie.match(reg))
                        return unescape(arr[2]);
                    else
                        return null;
                }
            })
        </script>

<title>推荐会员-我主良缘：中国高端婚恋直营连锁创导者</title>
</head>
\t<body>
\t\t<!-- 导航栏开始 -->
\t\t<header class=\"mui-bar mui-bar-nav\">
\t\t\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
\t\t\t<h1 class=\"mui-title\">推荐会员</h1>
\t\t\t<a href=\"?r=home/shaixuan\" class=\"mui-btn-link mui-btn-nav mui-pull-right link\">筛选</a>
\t\t</header>
\t\t<!-- 导航栏结束 -->

\t\t<!-- 发信息开始 -->
\t\t<div class=\"layer\">
\t\t\t<div class=\"layer-message-add\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<span class=\"mui-icon mui-icon-closeempty mui-poppicker-btn-cancel mui-pull-left layer-close\"></span>
\t\t\t\t\t<p class=\"mui-ellipsis\">与<label id=\"\"></label>对话</p>
\t\t\t\t\t<span class=\"mui-icon mui-icon-checkmarkempty mui-poppicker-btn-ok mui-pull-right do-message-send\"></span>
\t\t\t\t</div>
\t\t\t\t<div class=\"upload\"></div>
\t\t\t\t<input name=\"send_id\" type=\"hidden\" value=\"\" />
\t\t\t\t<textarea name=\"content\" placeholder=\"请输入您想对TA说的话…\"></textarea>
\t\t\t</div>
\t\t</div>
\t\t<!-- 发信息结束 -->

\t\t<!-- 选项卡开始 -->
\t\t
</nav>\t\t<!-- 选项卡结束 -->

\t\t<div class=\"mui-content backgroud-none\" pull=\"recommend\" pull-obj=\"mui-table-view\">
\t\t\t<!-- banner开始 -->
\t\t\t<a href=\"http://m.7799520.com/self/1.html\" class=\"link\">
\t\t\t\t<div class=\"banner margin-none\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<!-- banner结束 -->

\t\t\t<!-- 会员推荐开始 -->
\t\t\t<div class=\"recommend-list\">
\t\t\t\t<ul class=\"mui-table-view\"></ul>
\t\t\t</div>
<div class=\"recommend-list\">
<ul class=\"mui-table-view\">
<li class=\"mui-table-view-cell mui-media\">
<div class=\"mui-pull-left mui-media-object clip-bg\" style=\"background: url(http://www.7799520.com/jiaoyou/data/attachment/avatar/201609/18/362485/avatar_big.jpg.thumb.jpg);\">
<a class=\"link\" href=\"http://m.7799520.com/user/362485.html\"></a>
</div>
<div class=\"mui-media-body\">
<a class=\"link\" href=\"http://m.7799520.com/user/362485.html\">
<b>搞什么</b>
<span>29岁，山东，170cm</span>
<p class=\"mui-ellipsis\">内心独白：相信有一个人能与我相携走过今生，给我你的坐标，让我们在人海中遇见！</p>
</a>
</div>
<div>
<a class=\"do-message-hi\" href=\"javascript:;\" objid=\"362485\">
<span class=\"ico ico-msg-hi\"></span>
打招呼
</a>
<a class=\"do-message-add\" href=\"javascript:;\" objid=\"362485\">
<span class=\"ico ico-msg-call\"></span>
发信息
</a>
</div>
</li>
</ul>
</div>


            <a href=\"?r=index/login\" ></a>
\t


</html>";
    }

    public function getTemplateName()
    {
        return "seek.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "
 <!DOCTYPE html>
<html>
<head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
\t\t<!--标准mui.css-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"web/js/css.css\">
        <!--引用Jquery-->
        <script src=\"web/js/jquery.js\"></script>
        <script src=\"web/js/min.js\" ></script>
\t    <script src=\"web/js/core.js\" ></script>
        <script>
            \$(window).ready(function () {
                (function (\$) {
                    \$('body').on('tap', '.link', function (event) {
                    var url = this.getAttribute('href');
                    var blank = this.getAttribute('target');
                    if (blank == '_blank') {
                        window.open(url);
                    } else {
                        window.location.href = url;
                    }
                    });
                })(mui);
                var lab = document.getElementsByClassName('site-nav')[0];
                if (lab) {
                    var nav = getCookie('tab_item');
                    if (nav) {
                            var as = lab.getElementsByTagName('a');
                            for (var i; i < as.length; i++) {
                               as[i].className = 'link'
                            }
                            as[nav - 1].className = 'link mui-active'
                    }
                }
                function getCookie(name) {
                    var arr, reg = new RegExp(\"(^| )\" + name + \"=([^;]*)(;|\$)\");
                    if (arr = document.cookie.match(reg))
                        return unescape(arr[2]);
                    else
                        return null;
                }
            })
        </script>

<title>推荐会员-我主良缘：中国高端婚恋直营连锁创导者</title>
</head>
\t<body>
\t\t<!-- 导航栏开始 -->
\t\t<header class=\"mui-bar mui-bar-nav\">
\t\t\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
\t\t\t<h1 class=\"mui-title\">推荐会员</h1>
\t\t\t<a href=\"?r=home/shaixuan\" class=\"mui-btn-link mui-btn-nav mui-pull-right link\">筛选</a>
\t\t</header>
\t\t<!-- 导航栏结束 -->

\t\t<!-- 发信息开始 -->
\t\t<div class=\"layer\">
\t\t\t<div class=\"layer-message-add\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<span class=\"mui-icon mui-icon-closeempty mui-poppicker-btn-cancel mui-pull-left layer-close\"></span>
\t\t\t\t\t<p class=\"mui-ellipsis\">与<label id=\"\"></label>对话</p>
\t\t\t\t\t<span class=\"mui-icon mui-icon-checkmarkempty mui-poppicker-btn-ok mui-pull-right do-message-send\"></span>
\t\t\t\t</div>
\t\t\t\t<div class=\"upload\"></div>
\t\t\t\t<input name=\"send_id\" type=\"hidden\" value=\"\" />
\t\t\t\t<textarea name=\"content\" placeholder=\"请输入您想对TA说的话…\"></textarea>
\t\t\t</div>
\t\t</div>
\t\t<!-- 发信息结束 -->

\t\t<!-- 选项卡开始 -->
\t\t
</nav>\t\t<!-- 选项卡结束 -->

\t\t<div class=\"mui-content backgroud-none\" pull=\"recommend\" pull-obj=\"mui-table-view\">
\t\t\t<!-- banner开始 -->
\t\t\t<a href=\"http://m.7799520.com/self/1.html\" class=\"link\">
\t\t\t\t<div class=\"banner margin-none\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<!-- banner结束 -->

\t\t\t<!-- 会员推荐开始 -->
\t\t\t<div class=\"recommend-list\">
\t\t\t\t<ul class=\"mui-table-view\"></ul>
\t\t\t</div>
<div class=\"recommend-list\">
<ul class=\"mui-table-view\">
<li class=\"mui-table-view-cell mui-media\">
<div class=\"mui-pull-left mui-media-object clip-bg\" style=\"background: url(http://www.7799520.com/jiaoyou/data/attachment/avatar/201609/18/362485/avatar_big.jpg.thumb.jpg);\">
<a class=\"link\" href=\"http://m.7799520.com/user/362485.html\"></a>
</div>
<div class=\"mui-media-body\">
<a class=\"link\" href=\"http://m.7799520.com/user/362485.html\">
<b>搞什么</b>
<span>29岁，山东，170cm</span>
<p class=\"mui-ellipsis\">内心独白：相信有一个人能与我相携走过今生，给我你的坐标，让我们在人海中遇见！</p>
</a>
</div>
<div>
<a class=\"do-message-hi\" href=\"javascript:;\" objid=\"362485\">
<span class=\"ico ico-msg-hi\"></span>
打招呼
</a>
<a class=\"do-message-add\" href=\"javascript:;\" objid=\"362485\">
<span class=\"ico ico-msg-call\"></span>
发信息
</a>
</div>
</li>
</ul>
</div>


            <a href=\"?r=index/login\" ></a>
\t


</html>";
    }
}
