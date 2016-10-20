<?php

/* fossa_ta.html */
class __TwigTemplate_b2b81b92f8f84bd419bcd7744e3dfdf98b10622c70424f5b15b0d3f6ece432f9 extends Twig_Template
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
        <script src=\"web/js/min.js\"  ></script>
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


<title>个人资料</title>

</head>



\t<body class=\"backgroud-white\">

\t\t<div class=\"mui-content\">

\t\t\t<!-- 导航栏开始 -->

\t\t\t<header class=\"mui-bar mui-bar-nav nav-hide\">

\t\t\t\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
                <a href=\"?r=home/index\" class=\"mui-bar-nav-home link\"></a>

\t\t\t</header>

\t\t\t<!-- 导航栏结束 -->



\t\t\t<!-- 弹出层开始 -->
<!-- 
\t\t\t<div class=\"layer\">

\t\t\t\t<div class=\"layer-file-upload\">

\t\t\t\t\t<label class=\"layer-close\"><span class=\"mui-icon mui-icon-close\">X</span></label>

\t\t\t\t\t<img src=\"web/img/33.png\" />

\t\t\t\t\t<p class=\"title\">上传照片</p>

\t\t\t\t\t<p>95%的会员选择有照片的用户进行联系哦</p>

\t\t\t\t\t

\t\t\t\t</div>

\t\t\t</div> -->

\t\t\t<!-- 弹出层结束 -->



\t\t\t<!-- 个人标签卡开始 -->
          \t\t\t\t\t";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arras"]) ? $context["arras"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["vv"]) {
            // line 99
            echo "\t\t\t<div class=\"file-area\">

\t\t\t\t<div class=\"file-avatar\">


\t\t\t\t\t<div class=\"clip-bg do-avatar-upload\" style=\"\">
                        <img src=\"./web/upimg/1476874085(23).jpg\">
\t\t\t\t\t</div>

                    
\t\t\t\t\t<p>
\t\t\t\t\t\t<b>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "name", array()), "html", null, true);
            echo "</b>


\t\t\t\t\t\t<span class=\"ico ico-ident\"></span>




\t\t\t\t\t\t<span class=\"ico ico-msg\"></span>




\t\t\t\t\t\t<span class=\"ico ico-mobile-active\"></span>


\t\t\t\t\t\t<br />";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "age", array()), "html", null, true);
            echo " &nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "native", array()), "html", null, true);
            echo "
\t\t\t\t\t</p>
                     
                     ";
            // line 129
            if ((isset($context["aaa"]) ? $context["aaa"] : null)) {
                // line 130
                echo "
                           <button id=\"focus\" class=\"mui-btn mui-btn-warning mui-btn-outlined do-ajax\" type=\"button\" ajax-url=\"\" dialog=\"加关注成功\"><span class=\"ico ico-focus-on\"></span>已关注</button>
                     ";
            } else {
                // line 133
                echo "                     <div id=\"u\">
                    <button name=\"a\" id=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "u_id", array()), "html", null, true);
                echo "\" class=\"mui-btn mui-btn-warning mui-btn-outlined do-ajax\" type=\"button\" ajax-url=\"\" dialog=\"加关注成功\"><span class=\"ico ico-focus\"></span>加关注</button>
                    </div>
                    ";
            }
            // line 137
            echo "\t\t\t\t</div>

       

\t\t\t\t<img src=\"web/images/file-bg.png\" />



\t\t\t\t<div class=\"file-total\">

\t\t\t\t\t<ul class=\"mui-table-view mui-grid-view boder-none\">

\t\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4\">

\t\t\t\t\t\t\t<a href=\"#\"><b id=\"c\">";
            // line 151
            echo twig_escape_filter($this->env, (isset($context["data1"]) ? $context["data1"] : null), "html", null, true);
            echo "</b>关注

\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4\">

\t\t\t\t\t\t\t<a href=\"#\">

\t\t\t\t\t\t\t<b>

\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t</b>魅力</a>guan

\t\t\t\t\t\t\t<div></div>

\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4\">

\t\t\t\t\t\t\t<a href=\"#\"><b id=\"f\">";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["ar1"]) ? $context["ar1"] : null), "html", null, true);
            echo "</b>粉丝</a>

\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- 个人标签卡结束 -->



\t\t\t<!-- 个人照片开始 -->

\t\t\t<div class=\"file-photo\">

\t\t\t\t<ul class=\"mui-table-view mui-grid-view boder-none\">
                    ";
            // line 191
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["imgs"]) ? $context["imgs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                // line 192
                echo "                    <li  class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">

                        <img src=\"";
                // line 194
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "path", array()), "html", null, true);
                echo "\">

                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "\t\t\t\t\t<li  style=\"float: left\" class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">

\t\t\t\t\t\t<a href=\"javascript:;\" class=\"do-layer-file-upload\">

\t\t\t\t\t\t\t<img src=\"web/images/file-upload.png\" />

\t\t\t\t\t\t</a>

\t\t\t\t\t</li>

\t\t\t\t</ul>

\t\t\t</div>

\t\t\t<!-- 个人照片结束 -->



\t\t\t<!-- 个人资料开始 -->

\t\t\t<div class=\"file-list\">

\t\t\t\t<div>

\t\t\t\t\t<h4>

\t\t\t\t\t\t内心独白

\t\t\t\t\t\t<span class=\"dot dot-pink\"></span>

\t\t\t\t\t

\t\t\t\t\t</h4>

\t\t\t\t\t<p class=\"mui-text-left\">
                        ";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dubai"]) ? $context["dubai"] : null), "mono", array()), "html", null, true);
            echo "
\t\t\t\t\t</p>


\t\t\t\t\t<h4>基本资料<span class=\"dot dot-orange\"></span></h4>


                    ";
            // line 240
            if ($this->getAttribute($context["vv"], "age", array())) {
                // line 241
                echo "                    <p><font class=\"mui-pull-left\">年龄</font>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "age", array()), "html", null, true);
                echo "</p>
                    ";
            } else {
                // line 243
                echo "                    <p><font class=\"mui-pull-left\">年龄</font>未填写</p>
                    ";
            }
            // line 245
            echo "                    ";
            if ($this->getAttribute($context["vv"], "sex", array())) {
                // line 246
                echo "                    <p><font class=\"mui-pull-left\">性别</font>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "sex", array()), "html", null, true);
                echo "</p>
                    ";
            } else {
                // line 248
                echo "                    <p><font class=\"mui-pull-left\">性别</font>未填写</p>
                    ";
            }
            // line 250
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["vv"], "region", array())) {
                // line 251
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">地区</font>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "region", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t";
            } else {
                // line 253
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">地区</font>未填写</p>
\t\t\t\t\t";
            }
            // line 255
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["vv"], "pay", array())) {
                // line 256
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">月薪</font>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "pay", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t";
            } else {
                // line 258
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">月薪</font>未填写</p>
\t\t\t\t\t";
            }
            // line 260
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["vv"], "constellation", array())) {
                // line 261
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">星座</font>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "constellation", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t";
            } else {
                // line 263
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">星座</font>未填写</p>
\t\t\t\t\t";
            }
            // line 265
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["vv"], "native", array())) {
                // line 266
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">籍贯</font>

\t\t\t\t\t\t";
                // line 268
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "native", array()), "html", null, true);
                echo "

\t\t\t\t\t</p>
\t\t\t\t\t";
            } else {
                // line 272
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">籍贯</font>

\t\t\t\t\t\t未填写</p>
\t\t\t\t\t";
            }
            // line 276
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["vv"], "record", array())) {
                // line 277
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">学历</font>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "record", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t";
            } else {
                // line 279
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">学历</font>未填写</p>
\t\t\t\t\t";
            }
            // line 281
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["vv"], "marital", array())) {
                // line 282
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">婚姻状况</font>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "marital", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t";
            } else {
                // line 284
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">婚姻状况</font>未填写</p>

\t\t\t\t\t";
            }
            // line 287
            echo "                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo "



\t\t\t\t\t";
        // line 292
        if ((isset($context["re"]) ? $context["re"] : null)) {
            // line 293
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["re"]) ? $context["re"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 294
                echo "\t\t\t\t\t<h4>详细资料<span class=\"dot dot-light-purple\"></span></h4>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">生肖</font>";
                // line 298
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "nature", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">血型</font>";
                // line 303
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "bloodtype", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">民族</font>";
                // line 308
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "nation", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">有无子女</font>";
                // line 313
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "children", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">购车情况</font>";
                // line 318
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "vehicle", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">住房情况</font>";
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "house", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            echo "\t\t\t\t\t";
        } else {
            // line 327
            echo "
\t\t\t\t\t <h4>详细资料<span class=\"dot dot-light-purple\"></span></h4>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">生肖</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">血型</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">民族</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">有无子女</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">购车情况</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">住房情况</font>未填写
\t\t\t\t\t</p>

                    ";
        }
        // line 361
        echo "


                    ";
        // line 364
        if ((isset($context["sheng"]) ? $context["sheng"] : null)) {
            // line 365
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sheng"]) ? $context["sheng"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 366
                echo "                      <h4>生活描述<span class=\"dot dot-light-purple\"></span></h4>





\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否吸烟</font>";
                // line 374
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "smoke", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否喝酒</font>";
                // line 379
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "drink", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否锻炼</font>";
                // line 384
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "fitness", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">作息习惯</font>";
                // line 389
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "rest", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">喜欢制造浪漫</font>";
                // line 394
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "askchild", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">生活技能</font>";
                // line 399
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "lifeskill", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 403
            echo "\t\t\t\t\t";
        } else {
            // line 404
            echo "\t\t\t\t\t<h4>生活描述<span class=\"dot dot-light-purple\"></span></h4>





\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否吸烟</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否喝酒</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否锻炼</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">作息习惯</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">喜欢制造浪漫</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">生活技能</font>未填写
\t\t\t\t\t</p>




                    ";
        }
        // line 444
        echo "
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- 个人资料结束 -->

\t\t\t<div class=\"make-upload\" object=\"avatar\" param=\"avatar\"></div>

\t\t\t<div class=\"make-upload\" object=\"album\" param=\"album\"></div>



\t\t\t<script src=\"web/js/uplod.js\"></script>

\t\t\t<script type=\"text/javascript\">

\t\t\t\t\$(function() {

\t\t\t\t\t//判断照片是否超过10张

\t\t\t\t\tif(\$('.do-layer-file-upload').parents('ul').find('li').size() > 4) {

\t\t\t\t\t\t\$('.do-layer-file-upload').hide();

\t\t\t\t\t}
\t\t\t\t\t//上传头像

\t\t\t\t\t/*\$('.file-avatar').on('tap', '.do-avatar-upload', function(event) {

\t\t\t\t\t\t\$('.make-upload').eq(0).find('input').click();

\t\t\t\t\t});*/

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
/
\t

\t\t\t\t\$('.layer-close').click(function() {

\t\t\t\t\t\t\$('.layer').fadeOut(300);

\t\t\t\t\t});

\t\t\t\t});

\t\t\t</script>

           <script>

                   \$('button[name=a]').click(function(){

                           var u_id=\$('button').attr('id');
                           \$.ajax({
\t\t\t\t\t\t\t   type: \"POST\",
\t\t\t\t\t\t\t   url: \"?r=home/guan\",
\t\t\t\t\t\t\t   data: {'u_id':u_id},
\t\t\t\t\t\t\t   success: function(msg){
\t\t\t\t\t\t\t      if(msg!==0){
                                       
                                        var html = '<button name=\"b\" id=\"";
        // line 564
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vv"]) ? $context["vv"] : null), "u_id", array()), "html", null, true);
        echo "\" class=\"mui-btn mui-btn-warning mui-btn-outlined do-ajax\" type=\"button\" ajax-url=\"?r=home/qu\" dialog=\"加关注成功\"><span class=\"ico ico-focus-on\"></span>已关注</button>';

\t\t\t\t\t\t\t\t           \$('#u').html(html);
\t\t\t\t\t\t\t\t           \$('#f').html(msg);
\t\t\t\t\t\t\t      }
\t\t\t\t\t\t\t      
\t\t\t\t\t\t\t   }
\t\t\t\t\t\t\t});
                   });
           </script>

\t\t\t<script src=\"web/js/mui.zoom.js\"></script>

\t\t\t<script src=\"web/js/previewimage.js\"></script>

\t\t</div>

\t






</html>";
    }

    public function getTemplateName()
    {
        return "fossa_ta.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  768 => 564,  646 => 444,  604 => 404,  601 => 403,  591 => 399,  583 => 394,  575 => 389,  567 => 384,  559 => 379,  551 => 374,  541 => 366,  536 => 365,  534 => 364,  529 => 361,  493 => 327,  490 => 326,  481 => 323,  473 => 318,  465 => 313,  457 => 308,  449 => 303,  441 => 298,  435 => 294,  430 => 293,  428 => 292,  422 => 288,  416 => 287,  411 => 284,  405 => 282,  402 => 281,  398 => 279,  392 => 277,  389 => 276,  383 => 272,  376 => 268,  372 => 266,  369 => 265,  365 => 263,  359 => 261,  356 => 260,  352 => 258,  346 => 256,  343 => 255,  339 => 253,  333 => 251,  330 => 250,  326 => 248,  320 => 246,  317 => 245,  313 => 243,  307 => 241,  305 => 240,  295 => 233,  258 => 198,  248 => 194,  244 => 192,  240 => 191,  218 => 172,  194 => 151,  178 => 137,  172 => 134,  169 => 133,  164 => 130,  162 => 129,  154 => 126,  135 => 110,  122 => 99,  118 => 98,  19 => 1,);
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
        <script src=\"web/js/min.js\"  ></script>
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


<title>个人资料</title>

</head>



\t<body class=\"backgroud-white\">

\t\t<div class=\"mui-content\">

\t\t\t<!-- 导航栏开始 -->

\t\t\t<header class=\"mui-bar mui-bar-nav nav-hide\">

\t\t\t\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
                <a href=\"?r=home/index\" class=\"mui-bar-nav-home link\"></a>

\t\t\t</header>

\t\t\t<!-- 导航栏结束 -->



\t\t\t<!-- 弹出层开始 -->
<!-- 
\t\t\t<div class=\"layer\">

\t\t\t\t<div class=\"layer-file-upload\">

\t\t\t\t\t<label class=\"layer-close\"><span class=\"mui-icon mui-icon-close\">X</span></label>

\t\t\t\t\t<img src=\"web/img/33.png\" />

\t\t\t\t\t<p class=\"title\">上传照片</p>

\t\t\t\t\t<p>95%的会员选择有照片的用户进行联系哦</p>

\t\t\t\t\t

\t\t\t\t</div>

\t\t\t</div> -->

\t\t\t<!-- 弹出层结束 -->



\t\t\t<!-- 个人标签卡开始 -->
          \t\t\t\t\t{% for vv in arras %}
\t\t\t<div class=\"file-area\">

\t\t\t\t<div class=\"file-avatar\">


\t\t\t\t\t<div class=\"clip-bg do-avatar-upload\" style=\"\">
                        <img src=\"./web/upimg/1476874085(23).jpg\">
\t\t\t\t\t</div>

                    
\t\t\t\t\t<p>
\t\t\t\t\t\t<b>{{vv.name}}</b>


\t\t\t\t\t\t<span class=\"ico ico-ident\"></span>




\t\t\t\t\t\t<span class=\"ico ico-msg\"></span>




\t\t\t\t\t\t<span class=\"ico ico-mobile-active\"></span>


\t\t\t\t\t\t<br />{{vv.age}} &nbsp;{{vv.native}}
\t\t\t\t\t</p>
                     
                     {% if aaa %}

                           <button id=\"focus\" class=\"mui-btn mui-btn-warning mui-btn-outlined do-ajax\" type=\"button\" ajax-url=\"\" dialog=\"加关注成功\"><span class=\"ico ico-focus-on\"></span>已关注</button>
                     {% else %}
                     <div id=\"u\">
                    <button name=\"a\" id=\"{{vv.u_id}}\" class=\"mui-btn mui-btn-warning mui-btn-outlined do-ajax\" type=\"button\" ajax-url=\"\" dialog=\"加关注成功\"><span class=\"ico ico-focus\"></span>加关注</button>
                    </div>
                    {% endif %}
\t\t\t\t</div>

       

\t\t\t\t<img src=\"web/images/file-bg.png\" />



\t\t\t\t<div class=\"file-total\">

\t\t\t\t\t<ul class=\"mui-table-view mui-grid-view boder-none\">

\t\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4\">

\t\t\t\t\t\t\t<a href=\"#\"><b id=\"c\">{{data1}}</b>关注

\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4\">

\t\t\t\t\t\t\t<a href=\"#\">

\t\t\t\t\t\t\t<b>

\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t</b>魅力</a>guan

\t\t\t\t\t\t\t<div></div>

\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4\">

\t\t\t\t\t\t\t<a href=\"#\"><b id=\"f\">{{ar1}}</b>粉丝</a>

\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- 个人标签卡结束 -->



\t\t\t<!-- 个人照片开始 -->

\t\t\t<div class=\"file-photo\">

\t\t\t\t<ul class=\"mui-table-view mui-grid-view boder-none\">
                    {% for val in imgs %}
                    <li  class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">

                        <img src=\"{{ val.path }}\">

                    </li>
                    {% endfor %}
\t\t\t\t\t<li  style=\"float: left\" class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">

\t\t\t\t\t\t<a href=\"javascript:;\" class=\"do-layer-file-upload\">

\t\t\t\t\t\t\t<img src=\"web/images/file-upload.png\" />

\t\t\t\t\t\t</a>

\t\t\t\t\t</li>

\t\t\t\t</ul>

\t\t\t</div>

\t\t\t<!-- 个人照片结束 -->



\t\t\t<!-- 个人资料开始 -->

\t\t\t<div class=\"file-list\">

\t\t\t\t<div>

\t\t\t\t\t<h4>

\t\t\t\t\t\t内心独白

\t\t\t\t\t\t<span class=\"dot dot-pink\"></span>

\t\t\t\t\t

\t\t\t\t\t</h4>

\t\t\t\t\t<p class=\"mui-text-left\">
                        {{ dubai.mono }}
\t\t\t\t\t</p>


\t\t\t\t\t<h4>基本资料<span class=\"dot dot-orange\"></span></h4>


                    {% if vv.age %}
                    <p><font class=\"mui-pull-left\">年龄</font>{{ vv.age }}</p>
                    {% else %}
                    <p><font class=\"mui-pull-left\">年龄</font>未填写</p>
                    {% endif %}
                    {% if vv.sex %}
                    <p><font class=\"mui-pull-left\">性别</font>{{ vv.sex }}</p>
                    {% else %}
                    <p><font class=\"mui-pull-left\">性别</font>未填写</p>
                    {% endif %}
\t\t\t\t\t{% if vv.region %}
\t\t\t\t\t<p><font class=\"mui-pull-left\">地区</font>{{ vv.region }}</p>
\t\t\t\t\t{% else %}
\t\t\t\t\t<p><font class=\"mui-pull-left\">地区</font>未填写</p>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if vv.pay %}
\t\t\t\t\t<p><font class=\"mui-pull-left\">月薪</font>{{ vv.pay }}</p>
\t\t\t\t\t{% else %}
\t\t\t\t\t<p><font class=\"mui-pull-left\">月薪</font>未填写</p>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if vv.constellation %}
\t\t\t\t\t<p><font class=\"mui-pull-left\">星座</font>{{ vv.constellation }}</p>
\t\t\t\t\t{% else %}
\t\t\t\t\t<p><font class=\"mui-pull-left\">星座</font>未填写</p>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if vv.native %}
\t\t\t\t\t<p><font class=\"mui-pull-left\">籍贯</font>

\t\t\t\t\t\t{{ vv.native }}

\t\t\t\t\t</p>
\t\t\t\t\t{% else %}
\t\t\t\t\t<p><font class=\"mui-pull-left\">籍贯</font>

\t\t\t\t\t\t未填写</p>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if vv.record %}
\t\t\t\t\t<p><font class=\"mui-pull-left\">学历</font>{{ vv.record }}</p>
\t\t\t\t\t{% else %}
\t\t\t\t\t<p><font class=\"mui-pull-left\">学历</font>未填写</p>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if vv.marital %}
\t\t\t\t\t<p><font class=\"mui-pull-left\">婚姻状况</font>{{ vv.marital }}</p>
\t\t\t\t\t{% else %}
\t\t\t\t\t<p><font class=\"mui-pull-left\">婚姻状况</font>未填写</p>

\t\t\t\t\t{% endif%}
                   {% endfor %}




\t\t\t\t\t{% if re %}
                    {% for v in re %}
\t\t\t\t\t<h4>详细资料<span class=\"dot dot-light-purple\"></span></h4>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">生肖</font>{{ v.nature }}
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">血型</font>{{ v.bloodtype }}
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">民族</font>{{ v.nation }}
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">有无子女</font>{{ v.children }}
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">购车情况</font>{{ v.vehicle }}
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">住房情况</font>{{ v.house }}
\t\t\t\t\t</p>
                    {% endfor %}
\t\t\t\t\t{% else %}

\t\t\t\t\t <h4>详细资料<span class=\"dot dot-light-purple\"></span></h4>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">生肖</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">血型</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">民族</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">有无子女</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">购车情况</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">住房情况</font>未填写
\t\t\t\t\t</p>

                    {% endif %}



                    {% if sheng %}
                    {% for v in sheng %}
                      <h4>生活描述<span class=\"dot dot-light-purple\"></span></h4>





\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否吸烟</font>{{ v.smoke }}
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否喝酒</font>{{ v.drink }}
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否锻炼</font>{{ v.fitness }}
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">作息习惯</font>{{ v.rest }}
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">喜欢制造浪漫</font>{{ v.askchild }}
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">生活技能</font>{{ v.lifeskill }}
\t\t\t\t\t</p>

                    {% endfor %}
\t\t\t\t\t{% else %}
\t\t\t\t\t<h4>生活描述<span class=\"dot dot-light-purple\"></span></h4>





\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否吸烟</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否喝酒</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否锻炼</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">作息习惯</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">喜欢制造浪漫</font>未填写
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">生活技能</font>未填写
\t\t\t\t\t</p>




                    {% endif %}

\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- 个人资料结束 -->

\t\t\t<div class=\"make-upload\" object=\"avatar\" param=\"avatar\"></div>

\t\t\t<div class=\"make-upload\" object=\"album\" param=\"album\"></div>



\t\t\t<script src=\"web/js/uplod.js\"></script>

\t\t\t<script type=\"text/javascript\">

\t\t\t\t\$(function() {

\t\t\t\t\t//判断照片是否超过10张

\t\t\t\t\tif(\$('.do-layer-file-upload').parents('ul').find('li').size() > 4) {

\t\t\t\t\t\t\$('.do-layer-file-upload').hide();

\t\t\t\t\t}
\t\t\t\t\t//上传头像

\t\t\t\t\t/*\$('.file-avatar').on('tap', '.do-avatar-upload', function(event) {

\t\t\t\t\t\t\$('.make-upload').eq(0).find('input').click();

\t\t\t\t\t});*/

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
/
\t

\t\t\t\t\$('.layer-close').click(function() {

\t\t\t\t\t\t\$('.layer').fadeOut(300);

\t\t\t\t\t});

\t\t\t\t});

\t\t\t</script>

           <script>

                   \$('button[name=a]').click(function(){

                           var u_id=\$('button').attr('id');
                           \$.ajax({
\t\t\t\t\t\t\t   type: \"POST\",
\t\t\t\t\t\t\t   url: \"?r=home/guan\",
\t\t\t\t\t\t\t   data: {'u_id':u_id},
\t\t\t\t\t\t\t   success: function(msg){
\t\t\t\t\t\t\t      if(msg!==0){
                                       
                                        var html = '<button name=\"b\" id=\"{{vv.u_id}}\" class=\"mui-btn mui-btn-warning mui-btn-outlined do-ajax\" type=\"button\" ajax-url=\"?r=home/qu\" dialog=\"加关注成功\"><span class=\"ico ico-focus-on\"></span>已关注</button>';

\t\t\t\t\t\t\t\t           \$('#u').html(html);
\t\t\t\t\t\t\t\t           \$('#f').html(msg);
\t\t\t\t\t\t\t      }
\t\t\t\t\t\t\t      
\t\t\t\t\t\t\t   }
\t\t\t\t\t\t\t});
                   });
           </script>

\t\t\t<script src=\"web/js/mui.zoom.js\"></script>

\t\t\t<script src=\"web/js/previewimage.js\"></script>

\t\t</div>

\t






</html>";
    }
}
