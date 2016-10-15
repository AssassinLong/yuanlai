<?php

/* jibenziliao.html */
class __TwigTemplate_2f244a4806e40e4d2f65436e58d9e436b19c8d51447afd84fcffaa8a1434a9bb extends Twig_Template
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
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no\">
\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
\t<!--标准mui.css-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"web/js/css.css\">
\t<!--引用Jquery-->

\t<link rel=\"stylesheet\" href=\"http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css\">
\t<script src=\"http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js\"></script>
\t<script src=\"http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js\"></script>



\t<script src=\"web/js/jquery.js\"></script>
\t<script src=\"web/js/min.js\" /></script>
\t<script src=\"web/js/core.js\" /></script>
\t<script>
\t\t\$(window).ready(function () {
\t\t\t(function (\$) {
\t\t\t\t\$('body').on('tap', '.link', function (event) {
\t\t\t\t\tvar url = this.getAttribute('href');
\t\t\t\t\tvar blank = this.getAttribute('target');
\t\t\t\t\tif (blank == '_blank') {
\t\t\t\t\t\twindow.open(url);
\t\t\t\t\t} else {
\t\t\t\t\t\twindow.location.href = url;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t})(mui);
\t\t\tvar lab = document.getElementsByClassName('site-nav')[0];
\t\t\tif (lab) {
\t\t\t\tvar nav = getCookie('tab_item');
\t\t\t\tif (nav) {
\t\t\t\t\tvar as = lab.getElementsByTagName('a');
\t\t\t\t\tfor (var i; i < as.length; i++) {
\t\t\t\t\t\tas[i].className = 'link'
\t\t\t\t\t}
\t\t\t\t\tas[nav - 1].className = 'link mui-active'
\t\t\t\t}
\t\t\t}
\t\t\tfunction getCookie(name) {
\t\t\t\tvar arr, reg = new RegExp(\"(^| )\" + name + \"=([^;]*)(;|\$)\");
\t\t\t\tif (arr = document.cookie.match(reg))
\t\t\t\t\treturn unescape(arr[2]);
\t\t\t\telse
\t\t\t\t\treturn null;
\t\t\t}
\t\t})
\t</script>

\t<title>编辑基本资料</title>
</head>

<body class=\"backgroud-white\">
<!-- 导航栏开始 -->
<header class=\"mui-bar mui-bar-nav\">
\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
\t<h1 class=\"mui-title\">基本资料</h1>

</header>
<!-- 导航栏结束 -->

<div class=\"mui-content\">
\t<!-- 基本资料开始 -->



\t<!--<center>-->
\t<!--<label id=\"s1\">身高</label>-->
\t<!--<span id=\"content1\"></span><input type=\"text\" style=\"display:none\" id=\"shengao\">-->
\t<!--<label id=\"s2\">地区</label>-->
\t<!--<span id=\"content2\"></span><input type=\"text\" style=\"display:none\" id=\"diqu\">-->
\t<!--<label id=\"s3\">月薪</label>-->
\t<!--<span id=\"content3\"></span><input type=\"text\" style=\"display:none\" id=\"yuexin\">-->
\t<!--<label id=\"s4\">星座</label>-->
\t<!--<span id=\"content4\"></span><input type=\"text\" style=\"display:none\" id=\"xinzuo\">-->
\t<!--<label id=\"s5\">籍贯</label>-->
\t<!--<span id=\"content5\"></span><input type=\"text\" style=\"display:none\" id=\"jiguan\">-->
\t<!--<label id=\"s6\">学历</label>-->
\t<!--<span id=\"content6\"></span><input type=\"text\" style=\"display:none\" id=\"xueli\">-->
\t<!--<label id=\"s7\">婚姻状况</label>-->
\t<!--<span id=\"content7\"></span><input type=\"text\" style=\"display:none\" id=\"hunyin\">-->
\t<!--</center>-->
\t<form action=\"\" method=\"post\">
\t\t";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr"]) ? $context["arr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 91
            echo "\t\t<div class=\"form form-search\">
\t\t\t<span class=\"input-group-addon\">年龄</span>
\t\t\t";
            // line 93
            if ($this->getAttribute($context["var"], "age", array())) {
                // line 94
                echo "\t\t\t<span id=\"a1\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "age", array()), "html", null, true);
                echo "</span><input type=\"text\" name=\"nature\" onblur=\"check_v()\" id=\"age\" style=\"display:none\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "age", array()), "html", null, true);
                echo "\">
\t\t\t";
            } else {
                // line 96
                echo "\t\t\t<span id=\"a11\">未填写</span><input type=\"text\" name=\"nature\" id=\"age1\" onblur=\"check_v1()\" style=\"display:none\" class=\"form-control\" value=\"\">
\t\t\t";
            }
            // line 98
            echo "\t\t\t\t<span class=\"input-group-addon\">性别</span>
\t\t\t\t";
            // line 99
            if ($this->getAttribute($context["var"], "sex", array())) {
                // line 100
                echo "\t\t\t\t<span id=\"a2\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "sex", array()), "html", null, true);
                echo "</span><input type=\"text\" name=\"nature\" onblur=\"check_g()\" id=\"sex\" style=\"display:none\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "sex", array()), "html", null, true);
                echo "\">
\t\t\t\t";
            } else {
                // line 102
                echo "\t\t\t\t<span id=\"a21\">未填写</span><input type=\"text\" name=\"nature\" id=\"sex1\" onblur=\"check_g1()\" style=\"display:none\" class=\"form-control\" value=\"\">
\t\t\t\t";
            }
            // line 104
            echo "\t\t\t<span class=\"input-group-addon\">地区</span>
\t\t\t";
            // line 105
            if ($this->getAttribute($context["var"], "region", array())) {
                // line 106
                echo "\t\t\t<span id=\"s1\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "region", array()), "html", null, true);
                echo "</span><input type=\"text\" name=\"nature\" onblur=\"check_a()\" id=\"di\" style=\"display:none\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "region", array()), "html", null, true);
                echo "\">
\t\t\t";
            } else {
                // line 108
                echo "\t\t\t<span id=\"s11\">未填写</span><input type=\"text\" name=\"nature\" id=\"di1\" onblur=\"check_a1()\" style=\"display:none\" class=\"form-control\" value=\"\">
\t\t\t";
            }
            // line 110
            echo "\t\t\t<!--<input type=\"text\" name=\"bloodtype\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "bloodtype", array()), "html", null, true);
            echo "\">-->
\t\t\t<span class=\"input-group-addon\">月薪</span>
\t\t\t";
            // line 112
            if ($this->getAttribute($context["var"], "pay", array())) {
                // line 113
                echo "\t\t\t<span id=\"s2\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "pay", array()), "html", null, true);
                echo "</span><input type=\"text\" name=\"nature\" id=\"yue\" onblur=\"check_b()\" style=\"display:none\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "pay", array()), "html", null, true);
                echo "\">
\t\t\t";
            } else {
                // line 115
                echo "\t\t\t<span id=\"s21\">未填写</span><input type=\"text\" name=\"nature\" id=\"yue1\" onblur=\"check_b1()\" style=\"display:none\" class=\"form-control\" value=\"\">
\t\t\t";
            }
            // line 117
            echo "\t\t\t<!--<input type=\"text\" name=\"nation\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nation", array()), "html", null, true);
            echo "\">-->
\t\t\t<span class=\"input-group-addon\">星座</span>
\t\t\t";
            // line 119
            if ($this->getAttribute($context["var"], "constellation", array())) {
                // line 120
                echo "\t\t\t<span id=\"s3\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "constellation", array()), "html", null, true);
                echo "</span><input type=\"text\" id=\"xing\" onblur=\"check_c()\" name=\"nature\" class=\"form-control\" style=\"display:none\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "constellation", array()), "html", null, true);
                echo "\">
\t\t\t";
            } else {
                // line 122
                echo "\t\t\t<span id=\"s31\">未填写</span><input type=\"text\" name=\"nature\" id=\"xing1\" onblur=\"check_c1()\" style=\"display:none\" class=\"form-control\" value=\"\">
\t\t\t";
            }
            // line 124
            echo "\t\t\t<!--<input type=\"text\" name=\"children\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "children", array()), "html", null, true);
            echo "\">-->
\t\t\t<span class=\"input-group-addon\">籍贯</span>
\t\t\t";
            // line 126
            if ($this->getAttribute($context["var"], "native", array())) {
                // line 127
                echo "\t\t\t<span id=\"s4\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "native", array()), "html", null, true);
                echo "</span><input type=\"text\" name=\"nature\" id=\"ji\" onblur=\"check_d()\"  style=\"display:none\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "native", array()), "html", null, true);
                echo "\">
\t\t\t";
            } else {
                // line 129
                echo "\t\t\t<span id=\"s41\">未填写</span><input type=\"text\" name=\"nature\" id=\"ji1\" onblur=\"check_d1()\" style=\"display:none\" class=\"form-control\" value=\"\">
\t\t\t";
            }
            // line 131
            echo "\t\t\t<!--<input type=\"text\" name=\"vehicle\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "vehicle", array()), "html", null, true);
            echo "\">-->
\t\t\t<span class=\"input-group-addon\">学历</span>
\t\t\t";
            // line 133
            if ($this->getAttribute($context["var"], "record", array())) {
                // line 134
                echo "\t\t\t<span id=\"s5\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "record", array()), "html", null, true);
                echo "</span><input type=\"text\" name=\"nature\" id=\"xue\" onblur=\"check_e()\"  style=\"display:none\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "record", array()), "html", null, true);
                echo "\">
\t\t\t";
            } else {
                // line 136
                echo "\t\t\t<span id=\"s51\">未填写</span><input type=\"text\" name=\"nature\" id=\"xue1\" onblur=\"check_e1()\" style=\"display:none\" class=\"form-control\" value=\"\">
\t\t\t";
            }
            // line 138
            echo "\t\t\t<!--<input type=\"text\" name=\"house\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "house", array()), "html", null, true);
            echo "\">-->
\t\t\t<span class=\"input-group-addon\">婚姻状况</span>
\t\t\t";
            // line 140
            if ($this->getAttribute($context["var"], "marital", array())) {
                // line 141
                echo "\t\t\t<span id=\"s6\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "marital", array()), "html", null, true);
                echo "</span><input type=\"text\" name=\"nature\" id=\"hun\"  onblur=\"check_f()\" class=\"form-control\"  style=\"display:none\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "marital", array()), "html", null, true);
                echo "\">
\t\t\t";
            } else {
                // line 143
                echo "\t\t\t<span id=\"s61\">未填写</span><input type=\"text\" name=\"nature\" id=\"hun1\" onblur=\"check_f1()\" style=\"display:none\" class=\"form-control\" value=\"\">
\t\t\t";
            }
            // line 145
            echo "\t\t\t<!--<input type=\"text\" name=\"house\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "house", array()), "html", null, true);
            echo "\">-->
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "\t</form>



\t<!-- 基本资料结束 -->
</div>
<!-- CNZZ代码 -->
<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=http%3A%2F%2Fm.7799520.com%2Fself%2F377537.html&rnd=1671377287\" width=\"0\" height=\"0\"/>\t</body>
<!--引用自定义脚本-->
<script src=\"js/core1.js\"></script>
<!--引用自定义脚本-->
<script>
\t/*性别*/
\t\$(\"#a2\").click(function(){
\t\t\$(\"#a2\").hide();
\t\t\$(\"#sex\").show();
\t\t\$(\"#sex\").focus();
\t})
\tfunction check_g(){
\t\tsex=\$(\"#sex\").val();
\t\tif(sex==''){
\t\t\t\$(\"#a2\").show();
\t\t\t\$(\"#sex\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"sex=\"+sex,
\t\t\t\turl:\"?r=fossa/xiu11\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#a2\").show();
\t\t\t\t\t\t\$(\"#sex\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#a2\").html(e).show();
\t\t\t\t\t\t\$(\"#sex\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t\$(\"#a21\").click(function(){
\t\t\$(\"#a21\").hide();
\t\t\$(\"#sex1\").show();
\t\t\$(\"#sex1\").focus();
\t})
\tfunction check_g1(){
\t\tsex=\$(\"#sex1\").val();
\t\tif(sex==''){
\t\t\t\$(\"#a21\").show();
\t\t\t\$(\"#sex1\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"sex=\"+sex,
\t\t\t\turl:\"?r=fossa/xiu11\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#a21\").show();
\t\t\t\t\t\t\$(\"#sex1\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#a21\").html(e).show();
\t\t\t\t\t\t\$(\"#sex1\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t/*年龄*/
\t\$(\"#a1\").click(function(){
\t\t\$(\"#a1\").hide();
\t\t\$(\"#age\").show();
\t\t\$(\"#age\").focus();
\t})
\tfunction check_v(){
\t\tage=\$(\"#age\").val();
//\t\talert(age)
\t\tif(age==''){
\t\t\t\$(\"#a1\").show();
\t\t\t\$(\"#age\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"age=\"+age,
\t\t\t\turl:\"?r=fossa/xiu12\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#a1\").show();
\t\t\t\t\t\t\$(\"#age\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#a1\").html(e).show();
\t\t\t\t\t\t\$(\"#age\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t\$(\"#a11\").click(function(){
\t\t\$(\"#a11\").hide();
\t\t\$(\"#age1\").show();
\t\t\$(\"#age1\").focus();
\t})
\tfunction check_v1(){
\t\tage=\$(\"#age1\").val();
\t\tif(age==''){
\t\t\t\$(\"#a11\").show();
\t\t\t\$(\"#age1\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"age=\"+age,
\t\t\t\turl:\"?r=fossa/xiu12\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#a11\").show();
\t\t\t\t\t\t\$(\"#age1\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#a11\").html(e).show();
\t\t\t\t\t\t\$(\"#age1\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t/*婚姻状况*/
\t\$(\"#s61\").click(function(){
\t\t\$(\"#s61\").hide();
\t\t\$(\"#hun1\").show();
\t\t\$(\"#hun1\").focus();
\t})
\tfunction check_f1(){
\t\thun=\$(\"#hun1\").val();
\t\tif(hun==''){
\t\t\t\$(\"#s61\").show();
\t\t\t\$(\"#hun1\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"hun=\"+hun,
\t\t\t\turl:\"?r=fossa/xiu1\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s61\").show();
\t\t\t\t\t\t\$(\"#hun1\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s61\").html(e).show();
\t\t\t\t\t\t\$(\"#hun1\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t\$(\"#s6\").click(function(){
\t\t\$(\"#s6\").hide();
\t\t\$(\"#hun\").show();
\t\t\$(\"#hun\").focus();
\t})
\tfunction check_f(){
\t\thun=\$(\"#hun\").val();
\t\tif(hun==''){
\t\t\t\$(\"#s6\").show();
\t\t\t\$(\"#hun\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"hun=\"+hun,
\t\t\t\turl:\"?r=fossa/xiu1\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s6\").show();
\t\t\t\t\t\t\$(\"#hun\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s6\").html(e).show();
\t\t\t\t\t\t\$(\"#hun\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t/*学历*/
\t\$(\"#s51\").click(function(){
\t\t\$(\"#s51\").hide();
\t\t\$(\"#xue1\").show();
\t\t\$(\"#xue1\").focus();
\t})
\tfunction check_e1(){
\t\txue=\$(\"#xue1\").val();
\t\tif(xue==''){
\t\t\t\$(\"#s51\").show();
\t\t\t\$(\"#xue1\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"xue=\"+xue,
\t\t\t\turl:\"?r=fossa/xiu9\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s51\").show();
\t\t\t\t\t\t\$(\"#xue1\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s51\").html(e).show();
\t\t\t\t\t\t\$(\"#xue1\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t\$(\"#s5\").click(function(){
\t\t\$(\"#s5\").hide();
\t\t\$(\"#xue\").show();
\t\t\$(\"#xue\").focus();
\t})
\tfunction check_e(){
\t\txue=\$(\"#xue\").val();
\t\tif(xue==''){
\t\t\t\$(\"#s5\").show();
\t\t\t\$(\"#xue\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"xue=\"+xue,
\t\t\t\turl:\"?r=fossa/xiu9\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s5\").show();
\t\t\t\t\t\t\$(\"#xue\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s5\").html(e).show();
\t\t\t\t\t\t\$(\"#xue\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}


\t/*籍贯*/
\t\$(\"#s41\").click(function(){
\t\t\$(\"#s41\").hide();
\t\t\$(\"#ji1\").show();
\t\t\$(\"#ji1\").focus();
\t})
\tfunction check_d1(){
\t\tji=\$(\"#ji1\").val();
\t\tif(ji==''){
\t\t\t\$(\"#s41\").show();
\t\t\t\$(\"#ji1\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"ji=\"+ji,
\t\t\t\turl:\"?r=fossa/xiu7\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s41\").show();
\t\t\t\t\t\t\$(\"#ji1\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s41\").html(e).show();
\t\t\t\t\t\t\$(\"#ji1\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t\$(\"#s4\").click(function(){
\t\t\$(\"#s4\").hide();
\t\t\$(\"#ji\").show();
\t\t\$(\"#ji\").focus();
\t})
\tfunction check_d(){
\t\tji=\$(\"#ji\").val();
\t\tif(ji==''){
\t\t\t\$(\"#s4\").show();
\t\t\t\$(\"#ji\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"ji=\"+ji,
\t\t\t\turl:\"?r=fossa/xiu7\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s4\").show();
\t\t\t\t\t\t\$(\"#ji\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s4\").html(e).show();
\t\t\t\t\t\t\$(\"#ji\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t/*星座值*/
\t\$(\"#s3\").click(function(){
\t\t\$(\"#s3\").hide();
\t\t\$(\"#xing\").show();
\t\t\$(\"#xing\").focus();
\t})
\tfunction check_c(){
\t\txing=\$(\"#xing\").val();
\t\tif(xing==''){
\t\t\t\$(\"#s3\").show();
\t\t\t\$(\"#xing\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"xing=\"+xing,
\t\t\t\turl:\"?r=fossa/xiu6\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s3\").show();
\t\t\t\t\t\t\$(\"#xing\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s3\").html(e).show();
\t\t\t\t\t\t\$(\"#xing\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t/*星座*/
\t\$(\"#s31\").click(function(){
\t\t\$(\"#s31\").hide();
\t\t\$(\"#xing1\").show();
\t\t\$(\"#xing1\").focus();
\t})
\tfunction check_c1(){
\t\txing=\$(\"#xing1\").val();
\t\tif(xing==''){
\t\t\t\$(\"#s31\").show();
\t\t\t\$(\"#xing1\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"xing=\"+xing,
\t\t\t\turl:\"?r=fossa/xiu6\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s31\").show();
\t\t\t\t\t\t\$(\"#xing1\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s31\").html(e).show();
\t\t\t\t\t\t\$(\"#xing1\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}


\t/*地区有值*/
\t\$(\"#s1\").click(function(){
\t\t\$(\"#s1\").hide();
\t\t\$(\"#di\").show();
\t\t\$(\"#di\").focus();
\t})
\tfunction check_a(){
\t\tdi=\$(\"#di\").val();
\t\tif(di==''){
\t\t\t\$(\"#s1\").show();
\t\t\t\$(\"#di\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"di=\"+di,
\t\t\t\turl:\"?r=fossa/xiu3\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s1\").show();
\t\t\t\t\t\t\$(\"#di\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s1\").html(e).show();
\t\t\t\t\t\t\$(\"#di\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t/*地区为空*/
\t\$(\"#s11\").click(function(){
\t\t\$(\"#s11\").hide();
\t\t\$(\"#di1\").show();
\t\t\$(\"#di1\").focus();
\t})
\tfunction check_a1(){
\t\tdi=\$(\"#di1\").val();
\t\tif(di==''){
\t\t\t\$(\"#s11\").show();
\t\t\t\$(\"#di1\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"di=\"+di,
\t\t\t\turl:\"?r=fossa/xiu3\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s11\").show();
\t\t\t\t\t\t\$(\"#di1\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s11\").html(e).show();
\t\t\t\t\t\t\$(\"#di1\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}

\t/*月薪*/
\t\$(\"#s21\").click(function(){
\t\t\$(\"#s21\").hide();
\t\t\$(\"#yue1\").show();
\t\t\$(\"#yue1\").focus();
\t})
\tfunction check_b1(){
\t\tyue1=\$(\"#yue1\").val();
\t\tif(yue1==''){
\t\t\t\$(\"#s21\").show();
\t\t\t\$(\"#yue1\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"yue1=\"+yue1,
\t\t\t\turl:\"?r=fossa/xiu2\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s21\").show();
\t\t\t\t\t\t\$(\"#yue1\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s21\").html(e).show();
\t\t\t\t\t\t\$(\"#yue1\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t/*月薪有值*/
\t\$(\"#s2\").click(function(){
\t\t\$(\"#s2\").hide();
\t\t\$(\"#yue\").show();
\t\t\$(\"#yue\").focus();
\t})
\tfunction check_b(){
\t\tyue=\$(\"#yue\").val();
\t\tif(yue==''){
\t\t\t\$(\"#s2\").show();
\t\t\t\$(\"#yue\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"yue1=\"+yue,
\t\t\t\turl:\"?r=fossa/xiu2\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s2\").show();
\t\t\t\t\t\t\$(\"#yue\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s2\").html(e).show();
\t\t\t\t\t\t\$(\"#yue\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
</script>


</html>";
    }

    public function getTemplateName()
    {
        return "jibenziliao.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 148,  266 => 145,  262 => 143,  254 => 141,  252 => 140,  246 => 138,  242 => 136,  234 => 134,  232 => 133,  226 => 131,  222 => 129,  214 => 127,  212 => 126,  206 => 124,  202 => 122,  194 => 120,  192 => 119,  186 => 117,  182 => 115,  174 => 113,  172 => 112,  166 => 110,  162 => 108,  154 => 106,  152 => 105,  149 => 104,  145 => 102,  137 => 100,  135 => 99,  132 => 98,  128 => 96,  120 => 94,  118 => 93,  114 => 91,  110 => 90,  19 => 1,);
    }

    public function getSource()
    {
        return "
<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no\">
\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
\t<!--标准mui.css-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"web/js/css.css\">
\t<!--引用Jquery-->

\t<link rel=\"stylesheet\" href=\"http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css\">
\t<script src=\"http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js\"></script>
\t<script src=\"http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js\"></script>



\t<script src=\"web/js/jquery.js\"></script>
\t<script src=\"web/js/min.js\" /></script>
\t<script src=\"web/js/core.js\" /></script>
\t<script>
\t\t\$(window).ready(function () {
\t\t\t(function (\$) {
\t\t\t\t\$('body').on('tap', '.link', function (event) {
\t\t\t\t\tvar url = this.getAttribute('href');
\t\t\t\t\tvar blank = this.getAttribute('target');
\t\t\t\t\tif (blank == '_blank') {
\t\t\t\t\t\twindow.open(url);
\t\t\t\t\t} else {
\t\t\t\t\t\twindow.location.href = url;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t})(mui);
\t\t\tvar lab = document.getElementsByClassName('site-nav')[0];
\t\t\tif (lab) {
\t\t\t\tvar nav = getCookie('tab_item');
\t\t\t\tif (nav) {
\t\t\t\t\tvar as = lab.getElementsByTagName('a');
\t\t\t\t\tfor (var i; i < as.length; i++) {
\t\t\t\t\t\tas[i].className = 'link'
\t\t\t\t\t}
\t\t\t\t\tas[nav - 1].className = 'link mui-active'
\t\t\t\t}
\t\t\t}
\t\t\tfunction getCookie(name) {
\t\t\t\tvar arr, reg = new RegExp(\"(^| )\" + name + \"=([^;]*)(;|\$)\");
\t\t\t\tif (arr = document.cookie.match(reg))
\t\t\t\t\treturn unescape(arr[2]);
\t\t\t\telse
\t\t\t\t\treturn null;
\t\t\t}
\t\t})
\t</script>

\t<title>编辑基本资料</title>
</head>

<body class=\"backgroud-white\">
<!-- 导航栏开始 -->
<header class=\"mui-bar mui-bar-nav\">
\t<a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
\t<h1 class=\"mui-title\">基本资料</h1>

</header>
<!-- 导航栏结束 -->

<div class=\"mui-content\">
\t<!-- 基本资料开始 -->



\t<!--<center>-->
\t<!--<label id=\"s1\">身高</label>-->
\t<!--<span id=\"content1\"></span><input type=\"text\" style=\"display:none\" id=\"shengao\">-->
\t<!--<label id=\"s2\">地区</label>-->
\t<!--<span id=\"content2\"></span><input type=\"text\" style=\"display:none\" id=\"diqu\">-->
\t<!--<label id=\"s3\">月薪</label>-->
\t<!--<span id=\"content3\"></span><input type=\"text\" style=\"display:none\" id=\"yuexin\">-->
\t<!--<label id=\"s4\">星座</label>-->
\t<!--<span id=\"content4\"></span><input type=\"text\" style=\"display:none\" id=\"xinzuo\">-->
\t<!--<label id=\"s5\">籍贯</label>-->
\t<!--<span id=\"content5\"></span><input type=\"text\" style=\"display:none\" id=\"jiguan\">-->
\t<!--<label id=\"s6\">学历</label>-->
\t<!--<span id=\"content6\"></span><input type=\"text\" style=\"display:none\" id=\"xueli\">-->
\t<!--<label id=\"s7\">婚姻状况</label>-->
\t<!--<span id=\"content7\"></span><input type=\"text\" style=\"display:none\" id=\"hunyin\">-->
\t<!--</center>-->
\t<form action=\"\" method=\"post\">
\t\t{% for var in arr%}
\t\t<div class=\"form form-search\">
\t\t\t<span class=\"input-group-addon\">年龄</span>
\t\t\t{% if var.age %}
\t\t\t<span id=\"a1\">{{ var.age }}</span><input type=\"text\" name=\"nature\" onblur=\"check_v()\" id=\"age\" style=\"display:none\" class=\"form-control\" value=\"{{ var.age }}\">
\t\t\t{% else %}
\t\t\t<span id=\"a11\">未填写</span><input type=\"text\" name=\"nature\" id=\"age1\" onblur=\"check_v1()\" style=\"display:none\" class=\"form-control\" value=\"\">
\t\t\t{% endif %}
\t\t\t\t<span class=\"input-group-addon\">性别</span>
\t\t\t\t{% if var.sex %}
\t\t\t\t<span id=\"a2\">{{ var.sex }}</span><input type=\"text\" name=\"nature\" onblur=\"check_g()\" id=\"sex\" style=\"display:none\" class=\"form-control\" value=\"{{ var.sex }}\">
\t\t\t\t{% else %}
\t\t\t\t<span id=\"a21\">未填写</span><input type=\"text\" name=\"nature\" id=\"sex1\" onblur=\"check_g1()\" style=\"display:none\" class=\"form-control\" value=\"\">
\t\t\t\t{% endif %}
\t\t\t<span class=\"input-group-addon\">地区</span>
\t\t\t{% if var.region %}
\t\t\t<span id=\"s1\">{{ var.region }}</span><input type=\"text\" name=\"nature\" onblur=\"check_a()\" id=\"di\" style=\"display:none\" class=\"form-control\" value=\"{{ var.region }}\">
\t\t\t{% else %}
\t\t\t<span id=\"s11\">未填写</span><input type=\"text\" name=\"nature\" id=\"di1\" onblur=\"check_a1()\" style=\"display:none\" class=\"form-control\" value=\"\">
\t\t\t{% endif %}
\t\t\t<!--<input type=\"text\" name=\"bloodtype\" class=\"form-control\" value=\"{{ v.bloodtype }}\">-->
\t\t\t<span class=\"input-group-addon\">月薪</span>
\t\t\t{% if var.pay %}
\t\t\t<span id=\"s2\">{{ var.pay }}</span><input type=\"text\" name=\"nature\" id=\"yue\" onblur=\"check_b()\" style=\"display:none\" class=\"form-control\" value=\"{{ var.pay }}\">
\t\t\t{% else %}
\t\t\t<span id=\"s21\">未填写</span><input type=\"text\" name=\"nature\" id=\"yue1\" onblur=\"check_b1()\" style=\"display:none\" class=\"form-control\" value=\"\">
\t\t\t{% endif %}
\t\t\t<!--<input type=\"text\" name=\"nation\" class=\"form-control\" value=\"{{ v.nation }}\">-->
\t\t\t<span class=\"input-group-addon\">星座</span>
\t\t\t{% if var.constellation %}
\t\t\t<span id=\"s3\">{{ var.constellation }}</span><input type=\"text\" id=\"xing\" onblur=\"check_c()\" name=\"nature\" class=\"form-control\" style=\"display:none\" value=\"{{ var.constellation }}\">
\t\t\t{% else %}
\t\t\t<span id=\"s31\">未填写</span><input type=\"text\" name=\"nature\" id=\"xing1\" onblur=\"check_c1()\" style=\"display:none\" class=\"form-control\" value=\"\">
\t\t\t{% endif %}
\t\t\t<!--<input type=\"text\" name=\"children\" class=\"form-control\" value=\"{{ v.children }}\">-->
\t\t\t<span class=\"input-group-addon\">籍贯</span>
\t\t\t{% if var.native %}
\t\t\t<span id=\"s4\">{{ var.native }}</span><input type=\"text\" name=\"nature\" id=\"ji\" onblur=\"check_d()\"  style=\"display:none\" class=\"form-control\" value=\"{{ var.native }}\">
\t\t\t{% else %}
\t\t\t<span id=\"s41\">未填写</span><input type=\"text\" name=\"nature\" id=\"ji1\" onblur=\"check_d1()\" style=\"display:none\" class=\"form-control\" value=\"\">
\t\t\t{% endif %}
\t\t\t<!--<input type=\"text\" name=\"vehicle\" class=\"form-control\" value=\"{{ v.vehicle }}\">-->
\t\t\t<span class=\"input-group-addon\">学历</span>
\t\t\t{% if var.record %}
\t\t\t<span id=\"s5\">{{ var.record }}</span><input type=\"text\" name=\"nature\" id=\"xue\" onblur=\"check_e()\"  style=\"display:none\" class=\"form-control\" value=\"{{ var.record }}\">
\t\t\t{% else %}
\t\t\t<span id=\"s51\">未填写</span><input type=\"text\" name=\"nature\" id=\"xue1\" onblur=\"check_e1()\" style=\"display:none\" class=\"form-control\" value=\"\">
\t\t\t{% endif %}
\t\t\t<!--<input type=\"text\" name=\"house\" class=\"form-control\" value=\"{{ v.house }}\">-->
\t\t\t<span class=\"input-group-addon\">婚姻状况</span>
\t\t\t{% if var.marital %}
\t\t\t<span id=\"s6\">{{ var.marital }}</span><input type=\"text\" name=\"nature\" id=\"hun\"  onblur=\"check_f()\" class=\"form-control\"  style=\"display:none\" value=\"{{ var.marital }}\">
\t\t\t{% else %}
\t\t\t<span id=\"s61\">未填写</span><input type=\"text\" name=\"nature\" id=\"hun1\" onblur=\"check_f1()\" style=\"display:none\" class=\"form-control\" value=\"\">
\t\t\t{% endif %}
\t\t\t<!--<input type=\"text\" name=\"house\" class=\"form-control\" value=\"{{ v.house }}\">-->
\t\t</div>
\t\t{% endfor %}
\t</form>



\t<!-- 基本资料结束 -->
</div>
<!-- CNZZ代码 -->
<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=http%3A%2F%2Fm.7799520.com%2Fself%2F377537.html&rnd=1671377287\" width=\"0\" height=\"0\"/>\t</body>
<!--引用自定义脚本-->
<script src=\"js/core1.js\"></script>
<!--引用自定义脚本-->
<script>
\t/*性别*/
\t\$(\"#a2\").click(function(){
\t\t\$(\"#a2\").hide();
\t\t\$(\"#sex\").show();
\t\t\$(\"#sex\").focus();
\t})
\tfunction check_g(){
\t\tsex=\$(\"#sex\").val();
\t\tif(sex==''){
\t\t\t\$(\"#a2\").show();
\t\t\t\$(\"#sex\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"sex=\"+sex,
\t\t\t\turl:\"?r=fossa/xiu11\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#a2\").show();
\t\t\t\t\t\t\$(\"#sex\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#a2\").html(e).show();
\t\t\t\t\t\t\$(\"#sex\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t\$(\"#a21\").click(function(){
\t\t\$(\"#a21\").hide();
\t\t\$(\"#sex1\").show();
\t\t\$(\"#sex1\").focus();
\t})
\tfunction check_g1(){
\t\tsex=\$(\"#sex1\").val();
\t\tif(sex==''){
\t\t\t\$(\"#a21\").show();
\t\t\t\$(\"#sex1\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"sex=\"+sex,
\t\t\t\turl:\"?r=fossa/xiu11\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#a21\").show();
\t\t\t\t\t\t\$(\"#sex1\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#a21\").html(e).show();
\t\t\t\t\t\t\$(\"#sex1\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t/*年龄*/
\t\$(\"#a1\").click(function(){
\t\t\$(\"#a1\").hide();
\t\t\$(\"#age\").show();
\t\t\$(\"#age\").focus();
\t})
\tfunction check_v(){
\t\tage=\$(\"#age\").val();
//\t\talert(age)
\t\tif(age==''){
\t\t\t\$(\"#a1\").show();
\t\t\t\$(\"#age\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"age=\"+age,
\t\t\t\turl:\"?r=fossa/xiu12\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#a1\").show();
\t\t\t\t\t\t\$(\"#age\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#a1\").html(e).show();
\t\t\t\t\t\t\$(\"#age\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t\$(\"#a11\").click(function(){
\t\t\$(\"#a11\").hide();
\t\t\$(\"#age1\").show();
\t\t\$(\"#age1\").focus();
\t})
\tfunction check_v1(){
\t\tage=\$(\"#age1\").val();
\t\tif(age==''){
\t\t\t\$(\"#a11\").show();
\t\t\t\$(\"#age1\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"age=\"+age,
\t\t\t\turl:\"?r=fossa/xiu12\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#a11\").show();
\t\t\t\t\t\t\$(\"#age1\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#a11\").html(e).show();
\t\t\t\t\t\t\$(\"#age1\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t/*婚姻状况*/
\t\$(\"#s61\").click(function(){
\t\t\$(\"#s61\").hide();
\t\t\$(\"#hun1\").show();
\t\t\$(\"#hun1\").focus();
\t})
\tfunction check_f1(){
\t\thun=\$(\"#hun1\").val();
\t\tif(hun==''){
\t\t\t\$(\"#s61\").show();
\t\t\t\$(\"#hun1\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"hun=\"+hun,
\t\t\t\turl:\"?r=fossa/xiu1\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s61\").show();
\t\t\t\t\t\t\$(\"#hun1\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s61\").html(e).show();
\t\t\t\t\t\t\$(\"#hun1\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t\$(\"#s6\").click(function(){
\t\t\$(\"#s6\").hide();
\t\t\$(\"#hun\").show();
\t\t\$(\"#hun\").focus();
\t})
\tfunction check_f(){
\t\thun=\$(\"#hun\").val();
\t\tif(hun==''){
\t\t\t\$(\"#s6\").show();
\t\t\t\$(\"#hun\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"hun=\"+hun,
\t\t\t\turl:\"?r=fossa/xiu1\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s6\").show();
\t\t\t\t\t\t\$(\"#hun\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s6\").html(e).show();
\t\t\t\t\t\t\$(\"#hun\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t/*学历*/
\t\$(\"#s51\").click(function(){
\t\t\$(\"#s51\").hide();
\t\t\$(\"#xue1\").show();
\t\t\$(\"#xue1\").focus();
\t})
\tfunction check_e1(){
\t\txue=\$(\"#xue1\").val();
\t\tif(xue==''){
\t\t\t\$(\"#s51\").show();
\t\t\t\$(\"#xue1\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"xue=\"+xue,
\t\t\t\turl:\"?r=fossa/xiu9\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s51\").show();
\t\t\t\t\t\t\$(\"#xue1\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s51\").html(e).show();
\t\t\t\t\t\t\$(\"#xue1\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t\$(\"#s5\").click(function(){
\t\t\$(\"#s5\").hide();
\t\t\$(\"#xue\").show();
\t\t\$(\"#xue\").focus();
\t})
\tfunction check_e(){
\t\txue=\$(\"#xue\").val();
\t\tif(xue==''){
\t\t\t\$(\"#s5\").show();
\t\t\t\$(\"#xue\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"xue=\"+xue,
\t\t\t\turl:\"?r=fossa/xiu9\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s5\").show();
\t\t\t\t\t\t\$(\"#xue\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s5\").html(e).show();
\t\t\t\t\t\t\$(\"#xue\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}


\t/*籍贯*/
\t\$(\"#s41\").click(function(){
\t\t\$(\"#s41\").hide();
\t\t\$(\"#ji1\").show();
\t\t\$(\"#ji1\").focus();
\t})
\tfunction check_d1(){
\t\tji=\$(\"#ji1\").val();
\t\tif(ji==''){
\t\t\t\$(\"#s41\").show();
\t\t\t\$(\"#ji1\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"ji=\"+ji,
\t\t\t\turl:\"?r=fossa/xiu7\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s41\").show();
\t\t\t\t\t\t\$(\"#ji1\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s41\").html(e).show();
\t\t\t\t\t\t\$(\"#ji1\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t\$(\"#s4\").click(function(){
\t\t\$(\"#s4\").hide();
\t\t\$(\"#ji\").show();
\t\t\$(\"#ji\").focus();
\t})
\tfunction check_d(){
\t\tji=\$(\"#ji\").val();
\t\tif(ji==''){
\t\t\t\$(\"#s4\").show();
\t\t\t\$(\"#ji\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"ji=\"+ji,
\t\t\t\turl:\"?r=fossa/xiu7\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s4\").show();
\t\t\t\t\t\t\$(\"#ji\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s4\").html(e).show();
\t\t\t\t\t\t\$(\"#ji\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t/*星座值*/
\t\$(\"#s3\").click(function(){
\t\t\$(\"#s3\").hide();
\t\t\$(\"#xing\").show();
\t\t\$(\"#xing\").focus();
\t})
\tfunction check_c(){
\t\txing=\$(\"#xing\").val();
\t\tif(xing==''){
\t\t\t\$(\"#s3\").show();
\t\t\t\$(\"#xing\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"xing=\"+xing,
\t\t\t\turl:\"?r=fossa/xiu6\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s3\").show();
\t\t\t\t\t\t\$(\"#xing\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s3\").html(e).show();
\t\t\t\t\t\t\$(\"#xing\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t/*星座*/
\t\$(\"#s31\").click(function(){
\t\t\$(\"#s31\").hide();
\t\t\$(\"#xing1\").show();
\t\t\$(\"#xing1\").focus();
\t})
\tfunction check_c1(){
\t\txing=\$(\"#xing1\").val();
\t\tif(xing==''){
\t\t\t\$(\"#s31\").show();
\t\t\t\$(\"#xing1\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"xing=\"+xing,
\t\t\t\turl:\"?r=fossa/xiu6\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s31\").show();
\t\t\t\t\t\t\$(\"#xing1\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s31\").html(e).show();
\t\t\t\t\t\t\$(\"#xing1\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}


\t/*地区有值*/
\t\$(\"#s1\").click(function(){
\t\t\$(\"#s1\").hide();
\t\t\$(\"#di\").show();
\t\t\$(\"#di\").focus();
\t})
\tfunction check_a(){
\t\tdi=\$(\"#di\").val();
\t\tif(di==''){
\t\t\t\$(\"#s1\").show();
\t\t\t\$(\"#di\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"di=\"+di,
\t\t\t\turl:\"?r=fossa/xiu3\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s1\").show();
\t\t\t\t\t\t\$(\"#di\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s1\").html(e).show();
\t\t\t\t\t\t\$(\"#di\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t/*地区为空*/
\t\$(\"#s11\").click(function(){
\t\t\$(\"#s11\").hide();
\t\t\$(\"#di1\").show();
\t\t\$(\"#di1\").focus();
\t})
\tfunction check_a1(){
\t\tdi=\$(\"#di1\").val();
\t\tif(di==''){
\t\t\t\$(\"#s11\").show();
\t\t\t\$(\"#di1\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"di=\"+di,
\t\t\t\turl:\"?r=fossa/xiu3\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s11\").show();
\t\t\t\t\t\t\$(\"#di1\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s11\").html(e).show();
\t\t\t\t\t\t\$(\"#di1\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}

\t/*月薪*/
\t\$(\"#s21\").click(function(){
\t\t\$(\"#s21\").hide();
\t\t\$(\"#yue1\").show();
\t\t\$(\"#yue1\").focus();
\t})
\tfunction check_b1(){
\t\tyue1=\$(\"#yue1\").val();
\t\tif(yue1==''){
\t\t\t\$(\"#s21\").show();
\t\t\t\$(\"#yue1\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"yue1=\"+yue1,
\t\t\t\turl:\"?r=fossa/xiu2\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s21\").show();
\t\t\t\t\t\t\$(\"#yue1\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s21\").html(e).show();
\t\t\t\t\t\t\$(\"#yue1\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
\t/*月薪有值*/
\t\$(\"#s2\").click(function(){
\t\t\$(\"#s2\").hide();
\t\t\$(\"#yue\").show();
\t\t\$(\"#yue\").focus();
\t})
\tfunction check_b(){
\t\tyue=\$(\"#yue\").val();
\t\tif(yue==''){
\t\t\t\$(\"#s2\").show();
\t\t\t\$(\"#yue\").hide();
\t\t}else{
\t\t\t\$.ajax({
\t\t\t\ttype:\"post\",
\t\t\t\tdata:\"yue1=\"+yue,
\t\t\t\turl:\"?r=fossa/xiu2\",
\t\t\t\tsuccess:function(e){
\t\t\t\t\tif(e==2){
\t\t\t\t\t\t\$(\"#s2\").show();
\t\t\t\t\t\t\$(\"#yue\").hide();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#s2\").html(e).show();
\t\t\t\t\t\t\$(\"#yue\").hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t}
</script>


</html>";
    }
}
