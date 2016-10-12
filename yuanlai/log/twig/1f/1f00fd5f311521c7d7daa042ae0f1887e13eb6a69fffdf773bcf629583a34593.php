<?php

/* fossa.html */
class __TwigTemplate_234b33468a7567cd63afd6421eaf8e8507bba67f0a0ee12b1798be4774534e84 extends Twig_Template
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
        <script src=\"web/js/min.js\" /></script>
\t    <script src=\"web/js/core.js\" /></script>
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


<title>个人资料</title>

</head>



\t<body class=\"backgroud-white\">

\t\t<div class=\"mui-content\">

\t\t\t<!-- 导航栏开始 -->

\t\t\t<header class=\"mui-bar mui-bar-nav nav-hide\">

\t\t\t\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>

\t\t\t</header>

\t\t\t<!-- 导航栏结束 -->



\t\t\t<!-- 弹出层开始 -->

\t\t\t<div class=\"layer\">

\t\t\t\t<div class=\"layer-file-upload\">

\t\t\t\t\t<label class=\"layer-close\"><span class=\"mui-icon mui-icon-close\"></span></label>

\t\t\t\t\t<img src=\"/img/upload.png\" />

\t\t\t\t\t<p class=\"title\">上传照片</p>

\t\t\t\t\t<p>95%的会员选择有照片的用户进行联系哦</p>

\t\t\t\t\t<button class=\"mui-btn do-upload\" type=\"button\">立即上传</button>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- 弹出层结束 -->



\t\t\t<!-- 个人标签卡开始 -->

\t\t\t<div class=\"file-area\">

\t\t\t\t<div class=\"file-avatar\">

\t\t\t\t\t
\t\t\t\t\t<div class=\"clip-bg do-avatar-upload\" style=\"background: 

\t\t\t\t\turl(/img/avata-1.png);\">

\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t<b>li李先森</b>

\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"ico ico-ident\"></span>

\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"ico ico-msg\"></span>

\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"ico ico-mobile-active\"></span>

\t\t\t\t\t\t
\t\t\t\t\t\t<br />21 &nbsp;北京北京 &nbsp;180CM
\t\t\t\t\t</p>

\t\t\t\t</div>



\t\t\t\t<img src=\"web/images/file-bg.png\" />



\t\t\t\t<div class=\"file-total\">

\t\t\t\t\t<ul class=\"mui-table-view mui-grid-view boder-none\">

\t\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4\">

\t\t\t\t\t\t\t<a href=\"#\"><b>0</b>微博

\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4\">

\t\t\t\t\t\t\t<a href=\"#\">

\t\t\t\t\t\t\t<b>

\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t</b>人气</a>

\t\t\t\t\t\t\t<div></div>

\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4\">

\t\t\t\t\t\t\t<a href=\"#\"><b>0</b>粉丝</a>

\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- 个人标签卡结束 -->



\t\t\t<!-- 个人照片开始 -->

\t\t\t<div class=\"file-photo\">

\t\t\t\t<ul class=\"mui-table-view mui-grid-view boder-none\">

\t\t\t\t\t
\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">

\t\t\t\t\t\t<a href=\"javascript:;\" class=\"do-layer-file-upload\">

\t\t\t\t\t\t\t<img src=\"web/images/file-upload.png\" />

\t\t\t\t\t\t</a>

\t\t\t\t\t</li>

\t\t\t\t</ul>

\t\t\t</div>

\t\t\t<!-- 个人照片结束 -->



\t\t\t<!-- 个人资料开始 -->

\t\t\t<div class=\"file-list\">

\t\t\t\t<div>\t\t\t\t\t\t

\t\t\t\t\t<h4>

\t\t\t\t\t\t内心独白

\t\t\t\t\t\t<span class=\"dot dot-pink\"></span>

\t\t\t\t\t\t<a href=\"http://m.7799520.com/edit/monolog\" class=\"link\">

\t\t\t\t\t\t\t<span class=\"mui-icon mui-icon-compose\"></span>

\t\t\t\t\t\t\t编辑独白

\t\t\t\t\t\t</a>

\t\t\t\t\t</h4>

\t\t\t\t\t<p class=\"mui-text-left\">

\t\t\t\t\t\t我一直在这里，没有离开，我一直在等待，等着那个和我终生相伴相爱一生的你的出现。因缘而聚，我始终这样认为，所以觉得这里真的很好，美丽的缘分，也许就是给我的最美丽的暗示吧。</p>

\t\t\t\t\t</p>

\t\t\t\t\t

\t\t\t\t\t<h4>基本资料<span class=\"dot dot-orange\"></span><a class=\"link\" href=\"http://m.7799520.com/edit/baseInfo\"><span class=\"mui-icon mui-icon-compose\"></span>编辑资料</a></h4>

\t\t\t\t\t<p><font class=\"mui-pull-left\">身高</font>180CM</p>

\t\t\t\t\t<p><font class=\"mui-pull-left\">地区</font>北京-北京</p>

\t\t\t\t\t<p><font class=\"mui-pull-left\">月薪</font>2000-5000</p>

\t\t\t\t\t<p><font class=\"mui-pull-left\">星座</font>处女座</p>

\t\t\t\t\t<p><font class=\"mui-pull-left\">籍贯</font>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t未透露
\t\t\t\t\t\t
\t\t\t\t\t<p><font class=\"mui-pull-left\">学历</font>大专</p>

\t\t\t\t\t<p><font class=\"mui-pull-left\">婚姻状况</font>未婚</p>

\t\t\t\t\t

\t\t\t\t\t

\t\t\t\t\t<h4>详细资料<span class=\"dot dot-light-purple\"></span><a href=\"http://m.7799520.com/edit/particular\" class=\"link\"><span class=\"mui-icon mui-icon-compose\"></span>编辑资料</a></h4>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">生肖</font>狗
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">血型</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">民族</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">有无子女</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">购车情况</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">住房情况</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t

\t\t\t\t\t

\t\t\t\t\t<h4>生活描述<span class=\"dot dot-light-purple\"></span><a href=\"http://m.7799520.com/edit/live\" class=\"link\"><span class=\"mui-icon mui-icon-compose\"></span>编辑资料</a></h4>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">家中排行</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">最大消费</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否吸烟</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">锻炼习惯</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否喝酒</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">作息习惯</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">喜欢制造浪漫</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否要孩子</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">生活技能</font>

\t\t\t\t\t\t<em>未透露</em>
\t\t\t\t\t</p>

\t\t\t\t\t

\t\t\t\t\t<h4>兴趣爱好<span class=\"dot dot-cyan\"></span><a href=\"http://m.7799520.com/edit/hobbies\" class=\"link\"><span class=\"mui-icon mui-icon-compose\"></span>编辑资料</a></h4>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">喜欢的运动</font>

\t\t\t\t\t\t<em>未透露</em>
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">喜欢的电影</font>

\t\t\t\t\t\t<em>未透露</em>
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">喜欢的食物</font>

\t\t\t\t\t\t<em>未透露</em>


\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">喜欢的书籍</font>

\t\t\t\t\t\t<em>未透露</em>
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">业余爱好</font>

\t\t\t\t\t\t<em>未透露</em>
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">喜欢的旅游</font>

\t\t\t\t\t\t<em>未透露</em>
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">关注的节目</font>

\t\t\t\t\t\t<em>未透露</em>
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">娱乐休闲</font>

\t\t\t\t\t\t<em>未透露</em>
\t\t\t\t\t</p>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- 个人资料结束 -->

\t\t\t<div class=\"make-upload\" object=\"avatar\" param=\"avatar\"></div>

\t\t\t<div class=\"make-upload\" object=\"album\" param=\"album\"></div>



\t\t\t<script src=\"/js/upload.js\"></script>

\t\t\t<script type=\"text/javascript\">

\t\t\t\t\$(function() {

\t\t\t\t\t//判断照片是否超过10张

\t\t\t\t\tif(\$('.do-layer-file-upload').parents('ul').find('li').size() > 10) {

\t\t\t\t\t\t\$('.do-layer-file-upload').hide();

\t\t\t\t\t}

\t\t\t\t\t//上传头像

\t\t\t\t\t\$('.file-avatar').on('tap', '.do-avatar-upload', function(event) {

\t\t\t\t\t\t\$('.make-upload').eq(0).find('input').click();

\t\t\t\t\t});

\t\t\t\t\t//上传背景

\t\t\t\t\t\$('.file-area').on('tap', 'img', function(event) {

\t\t\t\t\t\treturn false;

\t\t\t\t\t});

\t\t\t\t\t//变更背景

\t\t\t\t\t\$('.file-total input').change(function() {

\t\t\t\t\t\t//文件上传判断

\t\t\t\t\t\tvar chk = checkImgType(this);

\t\t\t\t\t\tif (!chk) {

\t\t\t\t\t\t\treturn false;

\t\t\t\t\t\t}

\t\t\t\t\t\t\$('.file-area img').attr('src', '/tmp/file-bg-1.png');

\t\t\t\t\t});

\t\t\t\t\t//弹窗

\t\t\t\t\t\$('.do-layer-file-upload').click(function() {

\t\t\t\t\t\t\$('.layer').fadeIn();

\t\t\t\t\t});

\t\t\t\t\t//本地上传

\t\t\t\t\t\$('.do-upload').click(function() {

\t\t\t\t\t\t\$('.make-upload').eq(1).find('input').click();

\t\t\t\t\t});

\t\t\t\t\t//导航栏显示/隐藏

\t\t\t\t\t\$(window).scroll(function() {

\t\t\t\t\t\tvar h = \$(window).scrollTop();

\t\t\t\t\t\tif (h > \$(window).height() / 2) {

\t\t\t\t\t\t\t\$('header').removeClass('nav-hide');

\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\$('header').addClass('nav-hide');

\t\t\t\t\t\t}

\t\t\t\t\t});

\t\t\t\t\t//关闭弹窗

\t\t\t\t\t\$('.layer-close').click(function() {

\t\t\t\t\t\t\$('.layer').fadeOut(300);

\t\t\t\t\t});

\t\t\t\t});

\t\t\t</script>



\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/mui.previewimage.css\" />

\t\t\t<script src=\"/js/mui.zoom.js\"></script>

\t\t\t<script src=\"/js/mui.previewimage.js\"></script>

\t\t\t<script>

\t\t\t\tmui.previewImage();

\t\t\t</script>

\t\t</div>

\t\t<!-- CNZZ代码 -->
\t<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=http%3A%2F%2Fm.7799520.com%2Fself&rnd=69160430\" width=\"0\" height=\"0\"/>\t</body>
\t<!--引用自定义脚本-->
\t<script src=\"/js/core.js\"></script> 


\t<!--引用自定义脚本-->

\t




</html>";
    }

    public function getTemplateName()
    {
        return "fossa.html";
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
        <script src=\"web/js/min.js\" /></script>
\t    <script src=\"web/js/core.js\" /></script>
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


<title>个人资料</title>

</head>



\t<body class=\"backgroud-white\">

\t\t<div class=\"mui-content\">

\t\t\t<!-- 导航栏开始 -->

\t\t\t<header class=\"mui-bar mui-bar-nav nav-hide\">

\t\t\t\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>

\t\t\t</header>

\t\t\t<!-- 导航栏结束 -->



\t\t\t<!-- 弹出层开始 -->

\t\t\t<div class=\"layer\">

\t\t\t\t<div class=\"layer-file-upload\">

\t\t\t\t\t<label class=\"layer-close\"><span class=\"mui-icon mui-icon-close\"></span></label>

\t\t\t\t\t<img src=\"/img/upload.png\" />

\t\t\t\t\t<p class=\"title\">上传照片</p>

\t\t\t\t\t<p>95%的会员选择有照片的用户进行联系哦</p>

\t\t\t\t\t<button class=\"mui-btn do-upload\" type=\"button\">立即上传</button>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- 弹出层结束 -->



\t\t\t<!-- 个人标签卡开始 -->

\t\t\t<div class=\"file-area\">

\t\t\t\t<div class=\"file-avatar\">

\t\t\t\t\t
\t\t\t\t\t<div class=\"clip-bg do-avatar-upload\" style=\"background: 

\t\t\t\t\turl(/img/avata-1.png);\">

\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t<b>li李先森</b>

\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"ico ico-ident\"></span>

\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"ico ico-msg\"></span>

\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"ico ico-mobile-active\"></span>

\t\t\t\t\t\t
\t\t\t\t\t\t<br />21 &nbsp;北京北京 &nbsp;180CM
\t\t\t\t\t</p>

\t\t\t\t</div>



\t\t\t\t<img src=\"web/images/file-bg.png\" />



\t\t\t\t<div class=\"file-total\">

\t\t\t\t\t<ul class=\"mui-table-view mui-grid-view boder-none\">

\t\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4\">

\t\t\t\t\t\t\t<a href=\"#\"><b>0</b>微博

\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4\">

\t\t\t\t\t\t\t<a href=\"#\">

\t\t\t\t\t\t\t<b>

\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t</b>人气</a>

\t\t\t\t\t\t\t<div></div>

\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4\">

\t\t\t\t\t\t\t<a href=\"#\"><b>0</b>粉丝</a>

\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- 个人标签卡结束 -->



\t\t\t<!-- 个人照片开始 -->

\t\t\t<div class=\"file-photo\">

\t\t\t\t<ul class=\"mui-table-view mui-grid-view boder-none\">

\t\t\t\t\t
\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">

\t\t\t\t\t\t<a href=\"javascript:;\" class=\"do-layer-file-upload\">

\t\t\t\t\t\t\t<img src=\"web/images/file-upload.png\" />

\t\t\t\t\t\t</a>

\t\t\t\t\t</li>

\t\t\t\t</ul>

\t\t\t</div>

\t\t\t<!-- 个人照片结束 -->



\t\t\t<!-- 个人资料开始 -->

\t\t\t<div class=\"file-list\">

\t\t\t\t<div>\t\t\t\t\t\t

\t\t\t\t\t<h4>

\t\t\t\t\t\t内心独白

\t\t\t\t\t\t<span class=\"dot dot-pink\"></span>

\t\t\t\t\t\t<a href=\"http://m.7799520.com/edit/monolog\" class=\"link\">

\t\t\t\t\t\t\t<span class=\"mui-icon mui-icon-compose\"></span>

\t\t\t\t\t\t\t编辑独白

\t\t\t\t\t\t</a>

\t\t\t\t\t</h4>

\t\t\t\t\t<p class=\"mui-text-left\">

\t\t\t\t\t\t我一直在这里，没有离开，我一直在等待，等着那个和我终生相伴相爱一生的你的出现。因缘而聚，我始终这样认为，所以觉得这里真的很好，美丽的缘分，也许就是给我的最美丽的暗示吧。</p>

\t\t\t\t\t</p>

\t\t\t\t\t

\t\t\t\t\t<h4>基本资料<span class=\"dot dot-orange\"></span><a class=\"link\" href=\"http://m.7799520.com/edit/baseInfo\"><span class=\"mui-icon mui-icon-compose\"></span>编辑资料</a></h4>

\t\t\t\t\t<p><font class=\"mui-pull-left\">身高</font>180CM</p>

\t\t\t\t\t<p><font class=\"mui-pull-left\">地区</font>北京-北京</p>

\t\t\t\t\t<p><font class=\"mui-pull-left\">月薪</font>2000-5000</p>

\t\t\t\t\t<p><font class=\"mui-pull-left\">星座</font>处女座</p>

\t\t\t\t\t<p><font class=\"mui-pull-left\">籍贯</font>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t未透露
\t\t\t\t\t\t
\t\t\t\t\t<p><font class=\"mui-pull-left\">学历</font>大专</p>

\t\t\t\t\t<p><font class=\"mui-pull-left\">婚姻状况</font>未婚</p>

\t\t\t\t\t

\t\t\t\t\t

\t\t\t\t\t<h4>详细资料<span class=\"dot dot-light-purple\"></span><a href=\"http://m.7799520.com/edit/particular\" class=\"link\"><span class=\"mui-icon mui-icon-compose\"></span>编辑资料</a></h4>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">生肖</font>狗
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">血型</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">民族</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">有无子女</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">购车情况</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">住房情况</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t

\t\t\t\t\t

\t\t\t\t\t<h4>生活描述<span class=\"dot dot-light-purple\"></span><a href=\"http://m.7799520.com/edit/live\" class=\"link\"><span class=\"mui-icon mui-icon-compose\"></span>编辑资料</a></h4>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">家中排行</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">最大消费</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否吸烟</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">锻炼习惯</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否喝酒</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">作息习惯</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">喜欢制造浪漫</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否要孩子</font>未透露
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">生活技能</font>

\t\t\t\t\t\t<em>未透露</em>
\t\t\t\t\t</p>

\t\t\t\t\t

\t\t\t\t\t<h4>兴趣爱好<span class=\"dot dot-cyan\"></span><a href=\"http://m.7799520.com/edit/hobbies\" class=\"link\"><span class=\"mui-icon mui-icon-compose\"></span>编辑资料</a></h4>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">喜欢的运动</font>

\t\t\t\t\t\t<em>未透露</em>
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">喜欢的电影</font>

\t\t\t\t\t\t<em>未透露</em>
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">喜欢的食物</font>

\t\t\t\t\t\t<em>未透露</em>


\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">喜欢的书籍</font>

\t\t\t\t\t\t<em>未透露</em>
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">业余爱好</font>

\t\t\t\t\t\t<em>未透露</em>
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">喜欢的旅游</font>

\t\t\t\t\t\t<em>未透露</em>
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">关注的节目</font>

\t\t\t\t\t\t<em>未透露</em>
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">娱乐休闲</font>

\t\t\t\t\t\t<em>未透露</em>
\t\t\t\t\t</p>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- 个人资料结束 -->

\t\t\t<div class=\"make-upload\" object=\"avatar\" param=\"avatar\"></div>

\t\t\t<div class=\"make-upload\" object=\"album\" param=\"album\"></div>



\t\t\t<script src=\"/js/upload.js\"></script>

\t\t\t<script type=\"text/javascript\">

\t\t\t\t\$(function() {

\t\t\t\t\t//判断照片是否超过10张

\t\t\t\t\tif(\$('.do-layer-file-upload').parents('ul').find('li').size() > 10) {

\t\t\t\t\t\t\$('.do-layer-file-upload').hide();

\t\t\t\t\t}

\t\t\t\t\t//上传头像

\t\t\t\t\t\$('.file-avatar').on('tap', '.do-avatar-upload', function(event) {

\t\t\t\t\t\t\$('.make-upload').eq(0).find('input').click();

\t\t\t\t\t});

\t\t\t\t\t//上传背景

\t\t\t\t\t\$('.file-area').on('tap', 'img', function(event) {

\t\t\t\t\t\treturn false;

\t\t\t\t\t});

\t\t\t\t\t//变更背景

\t\t\t\t\t\$('.file-total input').change(function() {

\t\t\t\t\t\t//文件上传判断

\t\t\t\t\t\tvar chk = checkImgType(this);

\t\t\t\t\t\tif (!chk) {

\t\t\t\t\t\t\treturn false;

\t\t\t\t\t\t}

\t\t\t\t\t\t\$('.file-area img').attr('src', '/tmp/file-bg-1.png');

\t\t\t\t\t});

\t\t\t\t\t//弹窗

\t\t\t\t\t\$('.do-layer-file-upload').click(function() {

\t\t\t\t\t\t\$('.layer').fadeIn();

\t\t\t\t\t});

\t\t\t\t\t//本地上传

\t\t\t\t\t\$('.do-upload').click(function() {

\t\t\t\t\t\t\$('.make-upload').eq(1).find('input').click();

\t\t\t\t\t});

\t\t\t\t\t//导航栏显示/隐藏

\t\t\t\t\t\$(window).scroll(function() {

\t\t\t\t\t\tvar h = \$(window).scrollTop();

\t\t\t\t\t\tif (h > \$(window).height() / 2) {

\t\t\t\t\t\t\t\$('header').removeClass('nav-hide');

\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\$('header').addClass('nav-hide');

\t\t\t\t\t\t}

\t\t\t\t\t});

\t\t\t\t\t//关闭弹窗

\t\t\t\t\t\$('.layer-close').click(function() {

\t\t\t\t\t\t\$('.layer').fadeOut(300);

\t\t\t\t\t});

\t\t\t\t});

\t\t\t</script>



\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/mui.previewimage.css\" />

\t\t\t<script src=\"/js/mui.zoom.js\"></script>

\t\t\t<script src=\"/js/mui.previewimage.js\"></script>

\t\t\t<script>

\t\t\t\tmui.previewImage();

\t\t\t</script>

\t\t</div>

\t\t<!-- CNZZ代码 -->
\t<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=http%3A%2F%2Fm.7799520.com%2Fself&rnd=69160430\" width=\"0\" height=\"0\"/>\t</body>
\t<!--引用自定义脚本-->
\t<script src=\"/js/core.js\"></script> 


\t<!--引用自定义脚本-->

\t




</html>";
    }
}
