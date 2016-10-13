<?php

/* dubai.html */
class __TwigTemplate_49a72fae05eb3566c426644d9e9632a0c46c3f6a85ae8b01f61b346c1e45a2e2 extends Twig_Template
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
        <script src=\"web/js/mui.js\" ></script>
\t    <script src=\"web/js/core.js\" ></script>


<title>编辑内心独白</title>
</head>

\t<body class=\"backgroud-white\">
\t\t<!-- 导航栏开始 -->
\t\t<header class=\"mui-bar mui-bar-nav\">
\t\t\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\" onclick=\"javascript:history.back(-1);\"></a>
\t\t\t<h1 class=\"mui-title\">内心独白</h1>
\t\t</header>
\t\t<!-- 导航栏结束 -->

\t\t<div class=\"mui-content\">
\t\t\t<!-- 内心独白开始 -->
\t\t\t<div class=\"form form-list\">
\t\t\t\t<form action=\"?r=fossa/dubai\" method=\"post\">
\t\t\t\t\t<div class=\"mui-input-row boder-none\">
\t\t\t\t\t\t<textarea name=\"content\" value=\"\" rows=\"3\" about=\"\" required=\"required\" placeholder=\"我的内心独白\"></textarea>
\t\t\t\t\t\t<span class=\"mui-text-right mui-block\"><span id=\"total\">0</span>/<span id=\"limit\"></span></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mui-button-row\">
\t\t\t\t\t\t<button class=\"mui-btn mui-btn-warning mui-btn-block do-submit\" type=\"button\" ajax-url=\"?r=fossa/dubai\" href-url=\"?r=home/fossa\" dialog=\"保存成功\">保存</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>

\t\t\t<script language=\"javascript\">
\t\t\t\t\$(function() {
\t\t\t\t\tvar limit = 99; //总字数
\t\t\t\t\tvar total = 0; //当前输入数
\t\t\t\t\t\$('#limit').text(limit);
\t\t\t\t\t//计算字数
\t\t\t\t\tif (\$('form textarea').val()) {
\t\t\t\t\t\t\$('#total').text(\$('form textarea').val().length);
\t\t\t\t\t}
\t\t\t\t\t\$('form textarea').on('keyup', function() {
\t\t\t\t\t\ttotal = \$(this).val().length;
\t\t\t\t\t\tif (total > limit) {
\t\t\t\t\t\t\t\$(this).val(\$(this).val().substring(0, limit));
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#total').text(total);
\t\t\t\t\t});
\t\t\t\t\t//提交表单
\t\t\t\t\t\$('form .do-submit').click(function() {
\t\t\t\t\t\tvar ct = \$('form textarea[name=\"content\"]');
\t\t\t\t\t\t//判断内容是否填写
\t\t\t\t\t\tif (ct.val() == '') {
\t\t\t\t\t\t\talert('请填写内心独白');
\t\t\t\t\t\t\tct.focus();
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t\tvar url = \$(this).attr('ajax-url');
\t\t\t\t\t\tvar msg = \$(this).attr('dialog');
\t\t\t\t\t\tvar link = \$(this).attr('href-url');
                        //alert(url);
                        \$.ajax(url, {
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t'monolog': ct.val()
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t//dataType: 'json',
\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\tsuccess: function(data) {
                                //alert(data);
\t\t\t\t\t\t\t\tif (data == 1) {
\t\t\t\t\t\t\t\t\talert(msg);
\t\t\t\t\t\t\t\t\tsetTimeout(\"window.location.href='\" + link + \"';\", 1000);
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\talert('编辑内心独白失败');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, type, errorThrown) {
\t\t\t\t\t\t\t\tconsole.log(type);
\t\t\t\t\t\t\t\talert(type);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t</script>
\t\t\t<!-- 内心独白结束 -->
\t\t</div>
\t\t<!-- CNZZ代码 -->
\t<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=&rnd=117366239\" width=\"0\" height=\"0\"/>\t</body>
\t<!--引用自定义脚本-->
\t<script src=\"css/core1.js\"></script> 
\t<!--引用自定义脚本-->
\t


</html>";
    }

    public function getTemplateName()
    {
        return "dubai.html";
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
        <script src=\"web/js/mui.js\" ></script>
\t    <script src=\"web/js/core.js\" ></script>


<title>编辑内心独白</title>
</head>

\t<body class=\"backgroud-white\">
\t\t<!-- 导航栏开始 -->
\t\t<header class=\"mui-bar mui-bar-nav\">
\t\t\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\" onclick=\"javascript:history.back(-1);\"></a>
\t\t\t<h1 class=\"mui-title\">内心独白</h1>
\t\t</header>
\t\t<!-- 导航栏结束 -->

\t\t<div class=\"mui-content\">
\t\t\t<!-- 内心独白开始 -->
\t\t\t<div class=\"form form-list\">
\t\t\t\t<form action=\"?r=fossa/dubai\" method=\"post\">
\t\t\t\t\t<div class=\"mui-input-row boder-none\">
\t\t\t\t\t\t<textarea name=\"content\" value=\"\" rows=\"3\" about=\"\" required=\"required\" placeholder=\"我的内心独白\"></textarea>
\t\t\t\t\t\t<span class=\"mui-text-right mui-block\"><span id=\"total\">0</span>/<span id=\"limit\"></span></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mui-button-row\">
\t\t\t\t\t\t<button class=\"mui-btn mui-btn-warning mui-btn-block do-submit\" type=\"button\" ajax-url=\"?r=fossa/dubai\" href-url=\"?r=home/fossa\" dialog=\"保存成功\">保存</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>

\t\t\t<script language=\"javascript\">
\t\t\t\t\$(function() {
\t\t\t\t\tvar limit = 99; //总字数
\t\t\t\t\tvar total = 0; //当前输入数
\t\t\t\t\t\$('#limit').text(limit);
\t\t\t\t\t//计算字数
\t\t\t\t\tif (\$('form textarea').val()) {
\t\t\t\t\t\t\$('#total').text(\$('form textarea').val().length);
\t\t\t\t\t}
\t\t\t\t\t\$('form textarea').on('keyup', function() {
\t\t\t\t\t\ttotal = \$(this).val().length;
\t\t\t\t\t\tif (total > limit) {
\t\t\t\t\t\t\t\$(this).val(\$(this).val().substring(0, limit));
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#total').text(total);
\t\t\t\t\t});
\t\t\t\t\t//提交表单
\t\t\t\t\t\$('form .do-submit').click(function() {
\t\t\t\t\t\tvar ct = \$('form textarea[name=\"content\"]');
\t\t\t\t\t\t//判断内容是否填写
\t\t\t\t\t\tif (ct.val() == '') {
\t\t\t\t\t\t\talert('请填写内心独白');
\t\t\t\t\t\t\tct.focus();
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t\tvar url = \$(this).attr('ajax-url');
\t\t\t\t\t\tvar msg = \$(this).attr('dialog');
\t\t\t\t\t\tvar link = \$(this).attr('href-url');
                        //alert(url);
                        \$.ajax(url, {
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t'monolog': ct.val()
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t//dataType: 'json',
\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\tsuccess: function(data) {
                                //alert(data);
\t\t\t\t\t\t\t\tif (data == 1) {
\t\t\t\t\t\t\t\t\talert(msg);
\t\t\t\t\t\t\t\t\tsetTimeout(\"window.location.href='\" + link + \"';\", 1000);
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\talert('编辑内心独白失败');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, type, errorThrown) {
\t\t\t\t\t\t\t\tconsole.log(type);
\t\t\t\t\t\t\t\talert(type);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t</script>
\t\t\t<!-- 内心独白结束 -->
\t\t</div>
\t\t<!-- CNZZ代码 -->
\t<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=&rnd=117366239\" width=\"0\" height=\"0\"/>\t</body>
\t<!--引用自定义脚本-->
\t<script src=\"css/core1.js\"></script> 
\t<!--引用自定义脚本-->
\t


</html>";
    }
}
