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
                echo "\t\t\t\t\t<div id=\"u\">
                           <button id=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "u_id", array()), "html", null, true);
                echo "\" onclick=\"check_a()\"  name=\"a\"   class=\"mui-btn mui-btn-warning mui-btn-outlined do-ajax\" type=\"button\" ajax-url=\"\" dialog=\"加关注成功\"><span class=\"ico ico-focus-on\" ></span>已关注</button>
\t\t\t\t\t</div>
                     ";
            } else {
                // line 134
                echo "                     <div id=\"u\">
                    <button name=\"a\"   id=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "u_id", array()), "html", null, true);
                echo "\" onclick=\"check_a()\" class=\"mui-btn mui-btn-warning mui-btn-outlined do-ajax\" type=\"button\" ajax-url=\"\" dialog=\"加关注成功\"><span class=\"ico ico-focus\"></span>加关注</button>
                    </div>
                    ";
            }
            // line 138
            echo "\t\t\t\t</div>

       

\t\t\t\t<img src=\"web/images/file-bg.png\" />



\t\t\t\t<div class=\"file-total\">

\t\t\t\t\t<ul class=\"mui-table-view mui-grid-view boder-none\">

\t\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4\">

\t\t\t\t\t\t\t<a href=\"#\"><b id=\"zhu\">";
            // line 152
            echo twig_escape_filter($this->env, (isset($context["data1"]) ? $context["data1"] : null), "html", null, true);
            echo "</b>关注

\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4\">

\t\t\t\t\t\t\t<a href=\"#\">

\t\t\t\t\t\t\t<b id=\"meili\">

\t\t\t\t\t\t\t\t";
            // line 164
            echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t</b>魅力</a>



\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4\">

\t\t\t\t\t\t\t<a href=\"#\"><b id=\"f\">";
            // line 173
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
            // line 192
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["imgs"]) ? $context["imgs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                // line 193
                echo "                    <li  class=\"mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3\">

                        <img src=\"";
                // line 195
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "path", array()), "html", null, true);
                echo "\">

                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
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
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dubai"]) ? $context["dubai"] : null), "mono", array()), "html", null, true);
            echo "
\t\t\t\t\t</p>


\t\t\t\t\t<h4>基本资料<span class=\"dot dot-orange\"></span></h4>


                    ";
            // line 241
            if ($this->getAttribute($context["vv"], "age", array())) {
                // line 242
                echo "                    <p><font class=\"mui-pull-left\">年龄</font>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "age", array()), "html", null, true);
                echo "</p>
                    ";
            } else {
                // line 244
                echo "                    <p><font class=\"mui-pull-left\">年龄</font>未填写</p>
                    ";
            }
            // line 246
            echo "                    ";
            if ($this->getAttribute($context["vv"], "sex", array())) {
                // line 247
                echo "                    <p><font class=\"mui-pull-left\">性别</font>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "sex", array()), "html", null, true);
                echo "</p>
                    ";
            } else {
                // line 249
                echo "                    <p><font class=\"mui-pull-left\">性别</font>未填写</p>
                    ";
            }
            // line 251
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["vv"], "region", array())) {
                // line 252
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">地区</font>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "region", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t";
            } else {
                // line 254
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">地区</font>未填写</p>
\t\t\t\t\t";
            }
            // line 256
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["vv"], "pay", array())) {
                // line 257
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">月薪</font>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "pay", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t";
            } else {
                // line 259
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">月薪</font>未填写</p>
\t\t\t\t\t";
            }
            // line 261
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["vv"], "constellation", array())) {
                // line 262
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">星座</font>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "constellation", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t";
            } else {
                // line 264
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">星座</font>未填写</p>
\t\t\t\t\t";
            }
            // line 266
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["vv"], "native", array())) {
                // line 267
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">籍贯</font>

\t\t\t\t\t\t";
                // line 269
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "native", array()), "html", null, true);
                echo "

\t\t\t\t\t</p>
\t\t\t\t\t";
            } else {
                // line 273
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">籍贯</font>

\t\t\t\t\t\t未填写</p>
\t\t\t\t\t";
            }
            // line 277
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["vv"], "record", array())) {
                // line 278
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">学历</font>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "record", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t";
            } else {
                // line 280
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">学历</font>未填写</p>
\t\t\t\t\t";
            }
            // line 282
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["vv"], "marital", array())) {
                // line 283
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">婚姻状况</font>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["vv"], "marital", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t";
            } else {
                // line 285
                echo "\t\t\t\t\t<p><font class=\"mui-pull-left\">婚姻状况</font>未填写</p>

\t\t\t\t\t";
            }
            // line 288
            echo "                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "



\t\t\t\t\t";
        // line 293
        if ((isset($context["re"]) ? $context["re"] : null)) {
            // line 294
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["re"]) ? $context["re"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 295
                echo "\t\t\t\t\t<h4>详细资料<span class=\"dot dot-light-purple\"></span></h4>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">生肖</font>";
                // line 299
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "nature", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">血型</font>";
                // line 304
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "bloodtype", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">民族</font>";
                // line 309
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "nation", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">有无子女</font>";
                // line 314
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "children", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">购车情况</font>";
                // line 319
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "vehicle", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">住房情况</font>";
                // line 324
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "house", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            echo "\t\t\t\t\t";
        } else {
            // line 328
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
        // line 362
        echo "


                    ";
        // line 365
        if ((isset($context["sheng"]) ? $context["sheng"] : null)) {
            // line 366
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sheng"]) ? $context["sheng"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 367
                echo "                      <h4>生活描述<span class=\"dot dot-light-purple\"></span></h4>





\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否吸烟</font>";
                // line 375
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "smoke", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否喝酒</font>";
                // line 380
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "drink", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">是否锻炼</font>";
                // line 385
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "fitness", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">作息习惯</font>";
                // line 390
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "rest", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">喜欢制造浪漫</font>";
                // line 395
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "askchild", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>

\t\t\t\t\t\t<font class=\"mui-pull-left\">生活技能</font>";
                // line 400
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "lifeskill", array()), "html", null, true);
                echo "
\t\t\t\t\t</p>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            echo "\t\t\t\t\t";
        } else {
            // line 405
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
        // line 445
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

\t

\t\t\t\t\$('.layer-close').click(function() {

\t\t\t\t\t\t\$('.layer').fadeOut(300);

\t\t\t\t\t});

\t\t\t\t});

\t\t\t</script>

           <script>

                  function check_a(){

                           var u_id=\$('button').attr('id');
                           \$.ajax({
\t\t\t\t\t\t\t   type: \"POST\",
\t\t\t\t\t\t\t   url: \"?r=home/guan\",
\t\t\t\t\t\t\t   data: {'u_id':u_id},
\t\t\t\t\t\t\t   success: function(msg){

\t\t\t\t\t\t\t\t   json = eval( \"(\" + msg + \")\" );
//\t\t\t\t\t\t\t\t   alert(msg)
\t\t\t\t\t\t\t      if(json.a==1){
\t\t\t\t\t\t\t\t\t  var html='<button name=\"a\" id=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vv"]) ? $context["vv"] : null), "u_id", array()), "html", null, true);
        echo "\"  onclick=\"check_a()\" class=\"mui-btn mui-btn-warning mui-btn-outlined do-ajax\" type=\"button\" ajax-url=\"\" dialog=\"加关注成功\"><span class=\"ico ico-focus\"></span>加关注</button>';
\t\t\t\t\t\t\t\t\t  \$('#u').html(html);
\t\t\t\t\t\t\t\t\t  \$('#f').html(json.f);
\t\t\t\t\t\t\t\t\t  \$('#zhu').html(json.f);

\t\t\t\t\t\t\t\t   }else if(json.a==2){

\t\t\t\t\t\t\t\t\t   var html = '<button name=\"b\" id=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vv"]) ? $context["vv"] : null), "u_id", array()), "html", null, true);
        echo "\" onclick=\"check_a()\" class=\"mui-btn mui-btn-warning mui-btn-outlined do-ajax\" type=\"button\" ajax-url=\"?r=home/qu\" dialog=\"加关注成功\"><span class=\"ico ico-focus-on\"></span>已关注</button>';

\t\t\t\t\t\t\t\t\t  \$('#u').html(html);
\t\t\t\t\t\t\t\t\t  \$('#f').html(json.f);
\t\t\t\t\t\t\t\t\t  \$('#zhu').html(json.f);

\t\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t      
\t\t\t\t\t\t\t   }
\t\t\t\t\t\t\t});
                   };
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
        return array (  787 => 574,  777 => 567,  653 => 445,  611 => 405,  608 => 404,  598 => 400,  590 => 395,  582 => 390,  574 => 385,  566 => 380,  558 => 375,  548 => 367,  543 => 366,  541 => 365,  536 => 362,  500 => 328,  497 => 327,  488 => 324,  480 => 319,  472 => 314,  464 => 309,  456 => 304,  448 => 299,  442 => 295,  437 => 294,  435 => 293,  429 => 289,  423 => 288,  418 => 285,  412 => 283,  409 => 282,  405 => 280,  399 => 278,  396 => 277,  390 => 273,  383 => 269,  379 => 267,  376 => 266,  372 => 264,  366 => 262,  363 => 261,  359 => 259,  353 => 257,  350 => 256,  346 => 254,  340 => 252,  337 => 251,  333 => 249,  327 => 247,  324 => 246,  320 => 244,  314 => 242,  312 => 241,  302 => 234,  265 => 199,  255 => 195,  251 => 193,  247 => 192,  225 => 173,  213 => 164,  198 => 152,  182 => 138,  176 => 135,  173 => 134,  167 => 131,  164 => 130,  162 => 129,  154 => 126,  135 => 110,  122 => 99,  118 => 98,  19 => 1,);
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
\t\t\t\t\t<div id=\"u\">
                           <button id=\"{{vv.u_id}}\" onclick=\"check_a()\"  name=\"a\"   class=\"mui-btn mui-btn-warning mui-btn-outlined do-ajax\" type=\"button\" ajax-url=\"\" dialog=\"加关注成功\"><span class=\"ico ico-focus-on\" ></span>已关注</button>
\t\t\t\t\t</div>
                     {% else %}
                     <div id=\"u\">
                    <button name=\"a\"   id=\"{{vv.u_id}}\" onclick=\"check_a()\" class=\"mui-btn mui-btn-warning mui-btn-outlined do-ajax\" type=\"button\" ajax-url=\"\" dialog=\"加关注成功\"><span class=\"ico ico-focus\"></span>加关注</button>
                    </div>
                    {% endif %}
\t\t\t\t</div>

       

\t\t\t\t<img src=\"web/images/file-bg.png\" />



\t\t\t\t<div class=\"file-total\">

\t\t\t\t\t<ul class=\"mui-table-view mui-grid-view boder-none\">

\t\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4\">

\t\t\t\t\t\t\t<a href=\"#\"><b id=\"zhu\">{{data1}}</b>关注

\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4\">

\t\t\t\t\t\t\t<a href=\"#\">

\t\t\t\t\t\t\t<b id=\"meili\">

\t\t\t\t\t\t\t\t{{m}}
\t\t\t\t\t\t\t</b>魅力</a>



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

\t

\t\t\t\t\$('.layer-close').click(function() {

\t\t\t\t\t\t\$('.layer').fadeOut(300);

\t\t\t\t\t});

\t\t\t\t});

\t\t\t</script>

           <script>

                  function check_a(){

                           var u_id=\$('button').attr('id');
                           \$.ajax({
\t\t\t\t\t\t\t   type: \"POST\",
\t\t\t\t\t\t\t   url: \"?r=home/guan\",
\t\t\t\t\t\t\t   data: {'u_id':u_id},
\t\t\t\t\t\t\t   success: function(msg){

\t\t\t\t\t\t\t\t   json = eval( \"(\" + msg + \")\" );
//\t\t\t\t\t\t\t\t   alert(msg)
\t\t\t\t\t\t\t      if(json.a==1){
\t\t\t\t\t\t\t\t\t  var html='<button name=\"a\" id=\"{{vv.u_id}}\"  onclick=\"check_a()\" class=\"mui-btn mui-btn-warning mui-btn-outlined do-ajax\" type=\"button\" ajax-url=\"\" dialog=\"加关注成功\"><span class=\"ico ico-focus\"></span>加关注</button>';
\t\t\t\t\t\t\t\t\t  \$('#u').html(html);
\t\t\t\t\t\t\t\t\t  \$('#f').html(json.f);
\t\t\t\t\t\t\t\t\t  \$('#zhu').html(json.f);

\t\t\t\t\t\t\t\t   }else if(json.a==2){

\t\t\t\t\t\t\t\t\t   var html = '<button name=\"b\" id=\"{{vv.u_id}}\" onclick=\"check_a()\" class=\"mui-btn mui-btn-warning mui-btn-outlined do-ajax\" type=\"button\" ajax-url=\"?r=home/qu\" dialog=\"加关注成功\"><span class=\"ico ico-focus-on\"></span>已关注</button>';

\t\t\t\t\t\t\t\t\t  \$('#u').html(html);
\t\t\t\t\t\t\t\t\t  \$('#f').html(json.f);
\t\t\t\t\t\t\t\t\t  \$('#zhu').html(json.f);

\t\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t      
\t\t\t\t\t\t\t   }
\t\t\t\t\t\t\t});
                   };
           </script>

\t\t\t<script src=\"web/js/mui.zoom.js\"></script>

\t\t\t<script src=\"web/js/previewimage.js\"></script>

\t\t</div>

\t






</html>";
    }
}
