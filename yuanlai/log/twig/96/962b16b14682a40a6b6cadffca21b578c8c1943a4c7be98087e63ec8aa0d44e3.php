<?php

/* index.html */
class __TwigTemplate_7990ee3a5368c7e6faa53c30d7b65fa61a8c2dd48b101486d82fe6554fd27262 extends Twig_Template
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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"./web/js/css.css\">
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

<title>缘来社交,琴瑟和鸣</title><meta content=\"交友网站,天下谁人不识君\" name=\"keywords\">
<meta content=\"\" name=\"description\">
</head>
\t<body>
\t\t<!-- 导航栏开始 -->
\t\t<header class=\"mui-bar mui-bar-nav index\">
\t\t\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
\t\t\t<h1 class=\"mui-title\">
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<img src=\"http://img.7799520.com/img/logo.png\">
\t\t\t\t</div>
\t\t\t</h1>
\t\t\t<a href=\"\" class=\"mui-btn-link mui-btn-nav mui-pull-right link\">
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t</a>
\t\t</header>
\t\t<!-- 导航栏结束 -->

\t\t<!-- 跟随内容开始 -->
\t\t<div class=\"fix\">
\t\t\t<!-- 在线咨询开始 -->
\t\t\t<div class=\"fix-team-msg\">
\t\t\t\t<a href=\"http://kefu5.kuaishang.cn/bs/im/67780/59167/602875.htm\" class=\"link\"></a>
\t\t\t</div>
\t\t\t<!-- 在线咨询结束 -->
\t\t</div>
\t\t<!-- 跟随内容结束 -->


\t\t<div id=\"pullrefresh\" class=\"mui-scroll-wrapper\">
\t\t\t<div class=\"mui-scroll\">
\t\t\t\t<!-- 图片轮播开始 -->
\t\t\t\t<div id=\"slider\" class=\"mui-slider\">
\t\t\t\t\t<div class=\"mui-slider-group mui-slider-loop\">

\t<!-- 额外增加的一个节点(循环轮播：第一个节点是最后一张轮播) -->

\t<div class=\"mui-slider-item mui-slider-item-duplicate\">

\t\t<a href=\"\" class=\"link\">

\t\t\t<img src=\"http://img.7799520.com/img/slide-sign.png\">
\t\t</a>

\t</div>



\t <div class=\"mui-slider-item\">
                <a href=\"\" class=\"link\">
                        <img src=\"http://img.7799520.com/tmp/top1.png\">
                </a>
        </div>


\t<div class=\"mui-slider-item\">
                <a href=\"\" class=\"link\">
\t\t\t<img src=\"http://img.7799520.com/img/slide-sign.png\">
                </a>
        </div>


        <!-- 额外增加的一个节点(循环轮播：最后一个节点是第一张轮播) -->
\t<div class=\"mui-slider-item mui-slider-item-duplicate\">
\t\t<a href=\"http://m.7799520.com/top\" class=\"link\">
\t\t\t<img src=\"http://img.7799520.com/tmp/top1.png\">
\t\t</a>
\t</div>


</div>

<div class=\"mui-slider-indicator\">

\t<div class=\"mui-indicator mui-active\"></div>

\t<div class=\"mui-indicator\"></div>

</div>
\t\t\t\t</div>
\t\t\t\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\t\t\tvar slider = mui(\"#slider\");
\t\t\t\t\tslider.slider({
\t\t\t\t\t\tinterval: 5000
\t\t\t\t\t});
\t\t\t\t</script>
\t\t\t\t<!-- 图片轮播结束 -->

\t\t\t\t<!-- 导航按钮开始 -->
\t\t\t\t<div class=\"index-ico\">
\t\t\t\t\t<ul class=\"mui-table-view mui-grid-view boder-none\">
\t<li class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">
\t\t<a href=\"\" class=\"link\">
\t\t\t<span class=\"icon-coffee\"></span>
\t\t\t<div class=\"mui-media-body\">同城交友</div>
\t\t</a>
\t</li>
\t<li class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">
\t\t<a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "suggest", array()), "html", null, true);
        echo "\" class=\"link\">
\t\t\t<span class=\"icon-heart\"></span>
\t\t\t<div class=\"mui-media-body\">推荐会员</div>
\t\t</a>
\t</li>
\t<li class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">
        <a href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "advices", array()), "html", null, true);
        echo "\" class=\"link\">
            <span class=\"icon-heart\"></span>
            <div class=\"mui-media-body\">天涯知己</div>
\t\t</a>
\t</li>
\t<li class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">
\t\t<a href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "fossa", array()), "html", null, true);
        echo "\" class=\"link\">
\t\t\t<span class=\"icon-team\"></span>
\t\t\t<div class=\"mui-media-body\">个人中心</div>
\t\t</a>
\t</li>
\t<li class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">
\t\t<a href=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "xinqing", array()), "html", null, true);
        echo "\" class=\"link\">
\t\t\t<span class=\"icon-vip\"></span>
\t\t\t<div class=\"mui-media-body\">心情微博</div>
\t\t</a>
\t</li>
\t<li class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">
\t\t<a href=\"#\" class=\"link\">
\t\t\t<span class=\"icon-skirt\"></span>
\t\t\t<div class=\"mui-media-body\">成功故事</div>
\t\t</a>
\t</li>
\t<li class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">
\t\t<a href=\"?r=home/suggest\" class=\"link\">
\t\t\t<span class=\"icon-brand\"></span>
\t\t\t<div class=\"mui-media-body\">品牌荣耀</div>
\t\t</a>
\t</li>
\t<li class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">
\t\t<a href=\"#\" class=\"link\">
\t\t\t<span class=\"icon-locate\"></span>
\t\t\t<div class=\"mui-media-body\">门店地址</div>
\t\t</a>
\t</li>
</ul>\t\t\t\t</div>
\t\t\t\t<!-- 导航按钮结束 -->

\t\t\t\t<!-- banner开始 -->
\t\t\t\t<div class=\"banner\">
\t\t\t\t\t<a href=\"http://m.7799520.com/recommend\" class=\"link\">
\t\t\t\t\t\t<img src=\"http://img.7799520.com/img/banner1.png\" />
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<!-- banner结束 -->

\t\t\t\t<!-- 会员开始 -->
\t\t\t\t<div class=\"index-member\">

\t\t<div class=\"tabs\">

</div>
<!-- 切换标签结束 -->









\t\t\t\t<!-- 文字内容开始 -->
\t\t\t\t<div class=\"index-summary\">
\t<p>
\t\t服务<b>9</b>个城市 超过<b>900</b>万认证会员 成就<b>200</b>万情侣
\t</p>
\t<p class=\"hotline\">
\t\t联系人热线：15201595926
\t</p>
\t<p>
\t\t<a href=\"http://m.7799520.com/about\" class=\"link\">关于我们</a>|<a href=\"http://m.7799520.com/invite\" class=\"link\">人才招聘</a>|<a href=\"http://kefu5.kuaishang.cn/bs/im/67780/59167/602875.htm\" class=\"link\">帮助中心</a>|<a href=\"\">客户端</a>
\t</p>
\t<p>
\t\t缘来社交 版权所有
\t</p>
</div>\t\t\t\t<!-- 文字内容结束 -->
\t\t\t</div>
\t\t</div>

\t\t<style type=\"text/css\">
\t\t\t.mui-pull {
\t\t\t\tdisplay: none;
\t\t\t}
\t\t</style>
\t\t<!-- <script src=\"/js/??/core-pull.js,lazyload.js,index.js\"></script> -->
\t<!--引用自定义脚本-->

\t\t<!-- CNZZ代码 -->
\t<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=&rnd=1919918879\" width=\"0\" height=\"0\"/>\t</body>
\t<!--引用自定义脚本-->
\t<script src=\"web/js/core1.js\"></script>



</html>";
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
        return array (  194 => 165,  185 => 159,  176 => 153,  167 => 147,  19 => 1,);
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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"./web/js/css.css\">
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

<title>缘来社交,琴瑟和鸣</title><meta content=\"交友网站,天下谁人不识君\" name=\"keywords\">
<meta content=\"\" name=\"description\">
</head>
\t<body>
\t\t<!-- 导航栏开始 -->
\t\t<header class=\"mui-bar mui-bar-nav index\">
\t\t\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
\t\t\t<h1 class=\"mui-title\">
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<img src=\"http://img.7799520.com/img/logo.png\">
\t\t\t\t</div>
\t\t\t</h1>
\t\t\t<a href=\"\" class=\"mui-btn-link mui-btn-nav mui-pull-right link\">
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t</a>
\t\t</header>
\t\t<!-- 导航栏结束 -->

\t\t<!-- 跟随内容开始 -->
\t\t<div class=\"fix\">
\t\t\t<!-- 在线咨询开始 -->
\t\t\t<div class=\"fix-team-msg\">
\t\t\t\t<a href=\"http://kefu5.kuaishang.cn/bs/im/67780/59167/602875.htm\" class=\"link\"></a>
\t\t\t</div>
\t\t\t<!-- 在线咨询结束 -->
\t\t</div>
\t\t<!-- 跟随内容结束 -->


\t\t<div id=\"pullrefresh\" class=\"mui-scroll-wrapper\">
\t\t\t<div class=\"mui-scroll\">
\t\t\t\t<!-- 图片轮播开始 -->
\t\t\t\t<div id=\"slider\" class=\"mui-slider\">
\t\t\t\t\t<div class=\"mui-slider-group mui-slider-loop\">

\t<!-- 额外增加的一个节点(循环轮播：第一个节点是最后一张轮播) -->

\t<div class=\"mui-slider-item mui-slider-item-duplicate\">

\t\t<a href=\"\" class=\"link\">

\t\t\t<img src=\"http://img.7799520.com/img/slide-sign.png\">
\t\t</a>

\t</div>



\t <div class=\"mui-slider-item\">
                <a href=\"\" class=\"link\">
                        <img src=\"http://img.7799520.com/tmp/top1.png\">
                </a>
        </div>


\t<div class=\"mui-slider-item\">
                <a href=\"\" class=\"link\">
\t\t\t<img src=\"http://img.7799520.com/img/slide-sign.png\">
                </a>
        </div>


        <!-- 额外增加的一个节点(循环轮播：最后一个节点是第一张轮播) -->
\t<div class=\"mui-slider-item mui-slider-item-duplicate\">
\t\t<a href=\"http://m.7799520.com/top\" class=\"link\">
\t\t\t<img src=\"http://img.7799520.com/tmp/top1.png\">
\t\t</a>
\t</div>


</div>

<div class=\"mui-slider-indicator\">

\t<div class=\"mui-indicator mui-active\"></div>

\t<div class=\"mui-indicator\"></div>

</div>
\t\t\t\t</div>
\t\t\t\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\t\t\tvar slider = mui(\"#slider\");
\t\t\t\t\tslider.slider({
\t\t\t\t\t\tinterval: 5000
\t\t\t\t\t});
\t\t\t\t</script>
\t\t\t\t<!-- 图片轮播结束 -->

\t\t\t\t<!-- 导航按钮开始 -->
\t\t\t\t<div class=\"index-ico\">
\t\t\t\t\t<ul class=\"mui-table-view mui-grid-view boder-none\">
\t<li class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">
\t\t<a href=\"\" class=\"link\">
\t\t\t<span class=\"icon-coffee\"></span>
\t\t\t<div class=\"mui-media-body\">同城交友</div>
\t\t</a>
\t</li>
\t<li class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">
\t\t<a href=\"{{ url.suggest }}\" class=\"link\">
\t\t\t<span class=\"icon-heart\"></span>
\t\t\t<div class=\"mui-media-body\">推荐会员</div>
\t\t</a>
\t</li>
\t<li class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">
        <a href=\"{{ url.advices }}\" class=\"link\">
            <span class=\"icon-heart\"></span>
            <div class=\"mui-media-body\">天涯知己</div>
\t\t</a>
\t</li>
\t<li class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">
\t\t<a href=\"{{ url.fossa }}\" class=\"link\">
\t\t\t<span class=\"icon-team\"></span>
\t\t\t<div class=\"mui-media-body\">个人中心</div>
\t\t</a>
\t</li>
\t<li class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">
\t\t<a href=\"{{ url.xinqing }}\" class=\"link\">
\t\t\t<span class=\"icon-vip\"></span>
\t\t\t<div class=\"mui-media-body\">心情微博</div>
\t\t</a>
\t</li>
\t<li class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">
\t\t<a href=\"#\" class=\"link\">
\t\t\t<span class=\"icon-skirt\"></span>
\t\t\t<div class=\"mui-media-body\">成功故事</div>
\t\t</a>
\t</li>
\t<li class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">
\t\t<a href=\"?r=home/suggest\" class=\"link\">
\t\t\t<span class=\"icon-brand\"></span>
\t\t\t<div class=\"mui-media-body\">品牌荣耀</div>
\t\t</a>
\t</li>
\t<li class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">
\t\t<a href=\"#\" class=\"link\">
\t\t\t<span class=\"icon-locate\"></span>
\t\t\t<div class=\"mui-media-body\">门店地址</div>
\t\t</a>
\t</li>
</ul>\t\t\t\t</div>
\t\t\t\t<!-- 导航按钮结束 -->

\t\t\t\t<!-- banner开始 -->
\t\t\t\t<div class=\"banner\">
\t\t\t\t\t<a href=\"http://m.7799520.com/recommend\" class=\"link\">
\t\t\t\t\t\t<img src=\"http://img.7799520.com/img/banner1.png\" />
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<!-- banner结束 -->

\t\t\t\t<!-- 会员开始 -->
\t\t\t\t<div class=\"index-member\">

\t\t<div class=\"tabs\">

</div>
<!-- 切换标签结束 -->









\t\t\t\t<!-- 文字内容开始 -->
\t\t\t\t<div class=\"index-summary\">
\t<p>
\t\t服务<b>9</b>个城市 超过<b>900</b>万认证会员 成就<b>200</b>万情侣
\t</p>
\t<p class=\"hotline\">
\t\t联系人热线：15201595926
\t</p>
\t<p>
\t\t<a href=\"http://m.7799520.com/about\" class=\"link\">关于我们</a>|<a href=\"http://m.7799520.com/invite\" class=\"link\">人才招聘</a>|<a href=\"http://kefu5.kuaishang.cn/bs/im/67780/59167/602875.htm\" class=\"link\">帮助中心</a>|<a href=\"\">客户端</a>
\t</p>
\t<p>
\t\t缘来社交 版权所有
\t</p>
</div>\t\t\t\t<!-- 文字内容结束 -->
\t\t\t</div>
\t\t</div>

\t\t<style type=\"text/css\">
\t\t\t.mui-pull {
\t\t\t\tdisplay: none;
\t\t\t}
\t\t</style>
\t\t<!-- <script src=\"/js/??/core-pull.js,lazyload.js,index.js\"></script> -->
\t<!--引用自定义脚本-->

\t\t<!-- CNZZ代码 -->
\t<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=&rnd=1919918879\" width=\"0\" height=\"0\"/>\t</body>
\t<!--引用自定义脚本-->
\t<script src=\"web/js/core1.js\"></script>



</html>";
    }
}
