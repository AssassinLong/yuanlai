<?php

/* a.html */
class __TwigTemplate_14d933a72d7f201270d55b1bdf5fed70f325b81947ab501eac2f1abe94318840 extends Twig_Template
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
        echo "<html class=\"sign-record-body\"><head>
    <meta charset=\"UTF-8\">
    <!-- 优先调用ie,谷歌内核 -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no\">
    <!-- ios页面标题 -->
    <meta name=\"apple-mobile-web-app-title\" content=\"魅力排行\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <!-- 防止手机号码,email格式被点击 -->
    <meta name=\"format-detection\" content=\"telphone=no, email=no\">
    <!-- 360浏览器调用webkit模式 -->
    <meta name=\"renderer\" content=\"webkit\">
    <!-- JQ调用-->
    <script src=\"http://img.7799520.com/js/jquery.min.js\"></script>
    <!-- mui框架调用 -->
    <script src=\"http://img.7799520.com/js/mui.min.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"web/css/mui.min.css\">
    <!-- <link rel=\"stylesheet\" href=\"css/mui.picker.min.css\" />
    <script src=\"js/mui.picker.min.js\"></script> -->
    <!-- 阿里自适应框架调用 -->
    <!-- <script src=\"http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js\"></script> -->
    <!-- 自定义css调用 -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"web/css/core.css\">
    <title>魅力排行</title>
    <script>
        \$(window).ready(function() {
            (function(\$) {
                \$('body').on('tap', '.link', function(event) {
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
</head>

<body>
<header class=\"mui-bar mui-bar-nav mlph-headerctrl\">
    <a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
    <h1 class=\"mui-title\">魅力排行</h1>
</header>
<div class=\"mlph-wrap\" style=\"height: 3808px;\">
    <p class=\"mlph-tit\"></p>
    <!--<div class=\"mlph-btn-div\"><a href=\"#\" class=\"mlph-btn link\">获得魅力</a></div>-->
    <div class=\"mlph-tbbg\" style=\"height: 2302.93px; width: 1287.47px; top: 670.933px; left: 36.2667px;\"><ul><li style=\"position: absolute; left: 33.33%; width: 33%; top: 0px; height: 21%; float: left;\"><p class=\"mlph-tb-icon\" style=\"float: none; width: 20%; height: 25%; top: 70%; left: 50%; background-color: transparent; background-image: url(&quot;/img/mlph-ico1.png&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p><a href=\"/user/332090.html\" class=\"link\" style=\"background-color: transparent; background-image: url(&quot;http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/29/332090/avatar_big.jpg.thumb.jpg&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 70px; height: 70px; top: 50%; left: 50%; transform: translate(-50%, -50%);\"></a><p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 95%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">小瑶瑶</p><p class=\"mlph-tb-p2\" style=\"float: none; top: 90%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">6230</p></li><li style=\"position: absolute; left: 0px; width: 33%; top: 4.5%; height: 21%; float: left;\"><p class=\"mlph-tb-icon\" style=\"float: none; width: 16%; height: 20%; left: 48%; top: 52%; background-color: transparent; background-image: url(&quot;/img/mlph-ico2.png&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p><a href=\"/user/341981.html\" class=\"link\" style=\"background-color: transparent; background-image: url(&quot;http://www.7799520.com/jiaoyou/data/attachment/avatar/201609/30/341981/avatar_big.jpg&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a><p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 75%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">唐老师</p><p class=\"mlph-tb-p2\" style=\"float: none; top: 70%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">5970</p></li><li style=\"position: absolute; left: 66.66%; width: 33%; top: 4.5%; height: 21%; float: left;\"><p class=\"mlph-tb-icon\" style=\"float: none; width: 16%; height: 20%; left: 48%; top: 52%; background-color: transparent; background-image: url(&quot;/img/mlph-ico3.png&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p><a href=\"/user/321083.html\" class=\"link\" style=\"background-color: transparent; background-image: url(&quot;http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/08/321083/avatar_big.jpg.thumb.jpg&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a><p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 75%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">寂寞浪子</p><p class=\"mlph-tb-p2\" style=\"float: none; top: 70%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">5720</p></li><li style=\"margin-top: 46%;\"><p class=\"mlph-tb-icon\">4</p><a href=\"/user/330024.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a><p class=\"mlph-tb-p1\">林君研</p><p class=\"mlph-tb-p2\">5500</p></li><li><p class=\"mlph-tb-icon\">5</p><a href=\"/user/286780.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201608/16/286780/avatar_big.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a><p class=\"mlph-tb-p1\">timeover</p><p class=\"mlph-tb-p2\">5130</p></li><li><p class=\"mlph-tb-icon\">6</p><a href=\"/user/254992.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201604/01/254992/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a><p class=\"mlph-tb-p1\">林娜敏</p><p class=\"mlph-tb-p2\">4650</p></li><li><p class=\"mlph-tb-icon\">7</p><a href=\"/user/307404.html\" class=\"link\" style=\"background:URL(http://img.7799520.com/img/avata-1.png) center no-repeat;-webkit-Background-size:100%,100%;\"></a><p class=\"mlph-tb-p1\">雨中的飞鱼</p><p class=\"mlph-tb-p2\">4340</p></li><li><p class=\"mlph-tb-icon\">8</p><a href=\"/user/362184.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201609/17/362184/avatar_big.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a><p class=\"mlph-tb-p1\">mei5201314</p><p class=\"mlph-tb-p2\">4060</p></li><li><p class=\"mlph-tb-icon\">9</p><a href=\"/user/345333.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201609/28/345333/avatar_big.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a><p class=\"mlph-tb-p1\">孤心泪</p><p class=\"mlph-tb-p2\">3940</p></li><li><p class=\"mlph-tb-icon\">10</p><a href=\"/user/318199.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/02/318199/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a><p class=\"mlph-tb-p1\">飞向大海</p><p class=\"mlph-tb-p2\">3550</p></li></ul></div>
    <div class=\"mlph-fontbg\" style=\"height: 678.187px; width: 1220.37px; top: 3028.27px; left: 69.8133px;\">
    </div>
</div>


<script src=\"/js/sign/top.js\"></script>

</body><!--引用自定义脚本--></html>";
    }

    public function getTemplateName()
    {
        return "a.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<html class=\"sign-record-body\"><head>
    <meta charset=\"UTF-8\">
    <!-- 优先调用ie,谷歌内核 -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no\">
    <!-- ios页面标题 -->
    <meta name=\"apple-mobile-web-app-title\" content=\"魅力排行\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <!-- 防止手机号码,email格式被点击 -->
    <meta name=\"format-detection\" content=\"telphone=no, email=no\">
    <!-- 360浏览器调用webkit模式 -->
    <meta name=\"renderer\" content=\"webkit\">
    <!-- JQ调用-->
    <script src=\"http://img.7799520.com/js/jquery.min.js\"></script>
    <!-- mui框架调用 -->
    <script src=\"http://img.7799520.com/js/mui.min.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"web/css/mui.min.css\">
    <!-- <link rel=\"stylesheet\" href=\"css/mui.picker.min.css\" />
    <script src=\"js/mui.picker.min.js\"></script> -->
    <!-- 阿里自适应框架调用 -->
    <!-- <script src=\"http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js\"></script> -->
    <!-- 自定义css调用 -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"web/css/core.css\">
    <title>魅力排行</title>
    <script>
        \$(window).ready(function() {
            (function(\$) {
                \$('body').on('tap', '.link', function(event) {
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
</head>

<body>
<header class=\"mui-bar mui-bar-nav mlph-headerctrl\">
    <a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
    <h1 class=\"mui-title\">魅力排行</h1>
</header>
<div class=\"mlph-wrap\" style=\"height: 3808px;\">
    <p class=\"mlph-tit\"></p>
    <!--<div class=\"mlph-btn-div\"><a href=\"#\" class=\"mlph-btn link\">获得魅力</a></div>-->
    <div class=\"mlph-tbbg\" style=\"height: 2302.93px; width: 1287.47px; top: 670.933px; left: 36.2667px;\"><ul><li style=\"position: absolute; left: 33.33%; width: 33%; top: 0px; height: 21%; float: left;\"><p class=\"mlph-tb-icon\" style=\"float: none; width: 20%; height: 25%; top: 70%; left: 50%; background-color: transparent; background-image: url(&quot;/img/mlph-ico1.png&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p><a href=\"/user/332090.html\" class=\"link\" style=\"background-color: transparent; background-image: url(&quot;http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/29/332090/avatar_big.jpg.thumb.jpg&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 70px; height: 70px; top: 50%; left: 50%; transform: translate(-50%, -50%);\"></a><p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 95%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">小瑶瑶</p><p class=\"mlph-tb-p2\" style=\"float: none; top: 90%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">6230</p></li><li style=\"position: absolute; left: 0px; width: 33%; top: 4.5%; height: 21%; float: left;\"><p class=\"mlph-tb-icon\" style=\"float: none; width: 16%; height: 20%; left: 48%; top: 52%; background-color: transparent; background-image: url(&quot;/img/mlph-ico2.png&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p><a href=\"/user/341981.html\" class=\"link\" style=\"background-color: transparent; background-image: url(&quot;http://www.7799520.com/jiaoyou/data/attachment/avatar/201609/30/341981/avatar_big.jpg&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a><p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 75%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">唐老师</p><p class=\"mlph-tb-p2\" style=\"float: none; top: 70%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">5970</p></li><li style=\"position: absolute; left: 66.66%; width: 33%; top: 4.5%; height: 21%; float: left;\"><p class=\"mlph-tb-icon\" style=\"float: none; width: 16%; height: 20%; left: 48%; top: 52%; background-color: transparent; background-image: url(&quot;/img/mlph-ico3.png&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: 0% 0%; background-size: 100% auto, auto auto; z-index: 3;\"></p><a href=\"/user/321083.html\" class=\"link\" style=\"background-color: transparent; background-image: url(&quot;http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/08/321083/avatar_big.jpg.thumb.jpg&quot;); background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: center center; background-size: 100% auto, 100% auto; width: 60px; height: 60px; top: 33%; left: 50%; transform: translate(-50%, -50%);\"></a><p class=\"mlph-tb-p1\" style=\"width: 100%; float: none; top: 75%; left: 50%; transform: translate(-50%, 0px); text-align: center;\">寂寞浪子</p><p class=\"mlph-tb-p2\" style=\"float: none; top: 70%; left: 50%; width: 100%; transform: translate(-50%, -50%); text-align: center;\">5720</p></li><li style=\"margin-top: 46%;\"><p class=\"mlph-tb-icon\">4</p><a href=\"/user/330024.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/27/330024/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a><p class=\"mlph-tb-p1\">林君研</p><p class=\"mlph-tb-p2\">5500</p></li><li><p class=\"mlph-tb-icon\">5</p><a href=\"/user/286780.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201608/16/286780/avatar_big.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a><p class=\"mlph-tb-p1\">timeover</p><p class=\"mlph-tb-p2\">5130</p></li><li><p class=\"mlph-tb-icon\">6</p><a href=\"/user/254992.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201604/01/254992/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a><p class=\"mlph-tb-p1\">林娜敏</p><p class=\"mlph-tb-p2\">4650</p></li><li><p class=\"mlph-tb-icon\">7</p><a href=\"/user/307404.html\" class=\"link\" style=\"background:URL(http://img.7799520.com/img/avata-1.png) center no-repeat;-webkit-Background-size:100%,100%;\"></a><p class=\"mlph-tb-p1\">雨中的飞鱼</p><p class=\"mlph-tb-p2\">4340</p></li><li><p class=\"mlph-tb-icon\">8</p><a href=\"/user/362184.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201609/17/362184/avatar_big.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a><p class=\"mlph-tb-p1\">mei5201314</p><p class=\"mlph-tb-p2\">4060</p></li><li><p class=\"mlph-tb-icon\">9</p><a href=\"/user/345333.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201609/28/345333/avatar_big.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a><p class=\"mlph-tb-p1\">孤心泪</p><p class=\"mlph-tb-p2\">3940</p></li><li><p class=\"mlph-tb-icon\">10</p><a href=\"/user/318199.html\" class=\"link\" style=\"background:URL(http://www.7799520.com/jiaoyou/data/attachment/avatar/201607/02/318199/avatar_big.jpg.thumb.jpg) center no-repeat;-webkit-Background-size:100%,100%;\"></a><p class=\"mlph-tb-p1\">飞向大海</p><p class=\"mlph-tb-p2\">3550</p></li></ul></div>
    <div class=\"mlph-fontbg\" style=\"height: 678.187px; width: 1220.37px; top: 3028.27px; left: 69.8133px;\">
    </div>
</div>


<script src=\"/js/sign/top.js\"></script>

</body><!--引用自定义脚本--></html>";
    }
}