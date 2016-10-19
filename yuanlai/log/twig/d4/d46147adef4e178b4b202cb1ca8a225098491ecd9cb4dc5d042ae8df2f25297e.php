<?php

/* shaixuan.html */
class __TwigTemplate_23896b9320ce981098abad5438b9d3e17888cae094fe686766e617150ac0c1af extends Twig_Template
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

\t<title>同城交友 找男朋友 找女朋友 离异 我主良缘征婚交友平台</title><meta content=\"同城交友,同城找男朋友\" name=\"keywords\">
</head>
<body class=\"backgroud-white\">
<!-- 导航栏开始 -->
<header class=\"mui-bar mui-bar-nav\">
\t<a class=\"\"></a>
\t<h1 class=\"mui-title\">筛选会员</h1>
\t<a href=\"javascript:void(0);\" id=\"confirm\" class=\"mui-btn mui-btn-blue mui-btn-link mui-btn-nav mui-pull-right\">确定</a>
</header>
<!-- 导航栏结束 -->

<div class=\"mui-content\">
\t<form action=\"?r=fossa/sou\" method=\"post\" id=\"searchForm\">
\t\t<!-- 筛选会员开始 -->
\t\t<div class=\"form-search\">
\t\t\t<div class=\"padding\">
\t\t\t\t<div class=\"\">
\t\t\t\t\t<input type=\"search\" name=\"userName\" class=\"mui-input-clear\" placeholder=\"请输入会员ID或昵称\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<hr />

\t\t\t<div class=\"padding form-list\">
\t\t\t\t<div id=\"GenderPicker\" class=\"mui-input-row\">
\t\t\t\t\t<input type=\"hidden\" name=\"gender\" id=\"gender\" value=\"\">
\t\t\t\t\t<label>性别</label>
\t\t\t\t\t<font>不限</font>
\t\t\t\t</div>
\t\t\t\t<div id=\"AgePicker\" class=\"mui-input-row\">
\t\t\t\t\t<input type=\"hidden\" name=\"ageValue\" id=\"startAge\" value=\"\">
\t\t\t\t\t<label>年龄范围</label>
\t\t\t\t\t<font>不限</font>
\t\t\t\t</div>
\t\t\t\t<div id=\"HeightPicker\" class=\"mui-input-row\">
\t\t\t\t\t<input type=\"hidden\" name=\"heightValue\" id=\"startHeight\" value=\"\">
\t\t\t\t\t<label>身高范围</label>
\t\t\t\t\t<font class=\"mui-pull-right\">不限</font>
\t\t\t\t</div>
\t\t\t\t<div id=\"EduPicker\" class=\"mui-input-row\">
\t\t\t\t\t<input type=\"hidden\" name=\"education\" id=\"education\" value=\"\">
\t\t\t\t\t<label>最低学历</label>
\t\t\t\t\t<font class=\"mui-pull-right\">不限</font>
\t\t\t\t</div>
\t\t\t\t<div id=\"EarnPicker\" class=\"mui-input-row\">
\t\t\t\t\t<input type=\"hidden\" id=\"salary\" name=\"salary\" value=\"\">
\t\t\t\t\t<label>收入范围</label>
\t\t\t\t\t<font class=\"mui-pull-right\">不限</font>
\t\t\t\t</div>
\t\t\t\t<div id=\"CityPicker\" class=\"mui-input-row\">
\t\t\t\t\t<input type=\"hidden\" id=\"provinceid\" name=\"provinceid\" value=\"\">
\t\t\t\t\t<label>居住地</label>
\t\t\t\t\t<font class=\"mui-pull-right\">不限</font>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>
\t<link href=\"web/css/mui.picker.css\" rel=\"stylesheet\" />
\t<link href=\"web/css/mui.poppicker.css\" rel=\"stylesheet\" />
\t<script src=\"web/js/mui.picker.js\"></script>
\t<script src=\"web/js/mui.poppicker.js\"></script>
\t<script src=\"web/js/city.data.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
\t<script>
\t\t(function(\$, doc) {
\t\t\t\$.init();
\t\t\t\$.ready(function() {
\t\t\t\t//性别
\t\t\t\tvar GenderPicker = new \$.PopPicker();
\t\t\t\tGenderPicker.setData([{
\t\t\t\t\tvalue: '0',
\t\t\t\t\ttext: '不限'
\t\t\t\t}, {
\t\t\t\t\tvalue: '男',
\t\t\t\t\ttext: '男'
\t\t\t\t}, {
\t\t\t\t\tvalue: '女',
\t\t\t\t\ttext: '女'
\t\t\t\t}]);
\t\t\t\tvar GenderPickerButton = doc.getElementById('GenderPicker');
\t\t\t\tGenderPickerButton.addEventListener('tap', function(event) {
\t\t\t\t\tGenderPicker.show(function(items) {
\t\t\t\t\t\tGenderPickerButton.getElementsByTagName('font')[0].innerText = items[0].text;
\t\t\t\t\t\tvar gender = items[0].value;
\t\t\t\t\t\tdocument.getElementById('gender').value = gender;
\t\t\t\t\t});
\t\t\t\t}, false);

\t\t\t\t//年龄范围
\t\t\t\tvar AgePicker = new \$.PopPicker();
\t\t\t\tAgePicker.setData([{
\t\t\t\t\tvalue: '0',
\t\t\t\t\ttext: '不限'
\t\t\t\t}, {
\t\t\t\t\tvalue: '20-30',
\t\t\t\t\ttext: '20 - 30岁'
\t\t\t\t}, {
\t\t\t\t\tvalue: '31-40',
\t\t\t\t\ttext: '31 - 40岁'
\t\t\t\t}, {
\t\t\t\t\tvalue: '41-50',
\t\t\t\t\ttext: '41 - 50岁'
\t\t\t\t}, {
\t\t\t\t\tvalue: '51-60',
\t\t\t\t\ttext: '51 - 60岁'
\t\t\t\t}, {
\t\t\t\t\tvalue: '61-70',
\t\t\t\t\ttext: '61 - 70岁'
\t\t\t\t}]);
\t\t\t\tvar AgePickerButton = doc.getElementById('AgePicker');
\t\t\t\tAgePickerButton.addEventListener('tap', function(event) {
\t\t\t\t\tAgePicker.show(function(items) {
\t\t\t\t\t\tAgePickerButton.getElementsByTagName('font')[0].innerText = items[0].text;
\t\t\t\t\t\tvar ageVlue = items[0].value;
\t\t\t\t\t\tdocument.getElementById('startAge').value = ageVlue;
\t\t\t\t\t});
\t\t\t\t}, false);

\t\t\t\t//身高范围
\t\t\t\tvar HeightPicker = new \$.PopPicker();
\t\t\t\tHeightPicker.setData([{
\t\t\t\t\tvalue: '0',
\t\t\t\t\ttext: '不限'
\t\t\t\t}, {
\t\t\t\t\tvalue: '140-150',
\t\t\t\t\ttext: '140CM - 150CM'
\t\t\t\t}, {
\t\t\t\t\tvalue: '151-160',
\t\t\t\t\ttext: '151CM - 160CM'
\t\t\t\t}, {
\t\t\t\t\tvalue: '161-170',
\t\t\t\t\ttext: '161CM - 170CM'
\t\t\t\t}, {
\t\t\t\t\tvalue: '171-180',
\t\t\t\t\ttext: '171CM - 180CM'
\t\t\t\t}, {
\t\t\t\t\tvalue: '181-190',
\t\t\t\t\ttext: '181CM - 190CM'
\t\t\t\t}]);
\t\t\t\tvar HeightPickerButton = doc.getElementById('HeightPicker');
\t\t\t\tHeightPickerButton.addEventListener('tap', function(event) {
\t\t\t\t\tHeightPicker.show(function(items) {
\t\t\t\t\t\tHeightPickerButton.getElementsByTagName('font')[0].innerText = items[0].text;
\t\t\t\t\t\tvar heightValue = items[0].value;
\t\t\t\t\t\tdocument.getElementById('startHeight').value = heightValue;
\t\t\t\t\t});
\t\t\t\t}, false);

\t\t\t\t//学历范围
\t\t\t\tvar EduPicker = new \$.PopPicker();
\t\t\t\tEduPicker.setData([{
\t\t\t\t\tvalue: '0',
\t\t\t\t\ttext: '不限'
\t\t\t\t}, {
\t\t\t\t\tvalue: '初中',
\t\t\t\t\ttext: '初中'
\t\t\t\t}, {
\t\t\t\t\tvalue: '高中',
\t\t\t\t\ttext: '高中'
\t\t\t\t}, {
\t\t\t\t\tvalue: '中专',
\t\t\t\t\ttext: '中专'
\t\t\t\t}, {
\t\t\t\t\tvalue: '大专',
\t\t\t\t\ttext: '大专'
\t\t\t\t}, {
\t\t\t\t\tvalue: '本科',
\t\t\t\t\ttext: '本科'
\t\t\t\t}, {
\t\t\t\t\tvalue: '硕士',
\t\t\t\t\ttext: '硕士'
\t\t\t\t}, {
\t\t\t\t\tvalue: '博士',
\t\t\t\t\ttext: '博士'
\t\t\t\t}, {
\t\t\t\t\tvalue: '院士',
\t\t\t\t\ttext: '院士'
\t\t\t\t}]);
\t\t\t\tvar EduPickerButton = doc.getElementById('EduPicker');
\t\t\t\tEduPickerButton.addEventListener('tap', function(event) {
\t\t\t\t\tEduPicker.show(function(items) {
\t\t\t\t\t\tEduPickerButton.getElementsByTagName('font')[0].innerText = items[0].text;
\t\t\t\t\t\tdocument.getElementById('education').value = items[0].value;
\t\t\t\t\t});
\t\t\t\t}, false);

\t\t\t\t//收入范围
\t\t\t\tvar EarnPicker = new \$.PopPicker();
\t\t\t\tEarnPicker.setData([{
\t\t\t\t\tvalue: '0',
\t\t\t\t\ttext: '不限'
\t\t\t\t}, {
\t\t\t\t\tvalue: '0-2000',
\t\t\t\t\ttext: '2000元以下'
\t\t\t\t}, {
\t\t\t\t\tvalue: '2000-5000',
\t\t\t\t\ttext: '2000 - 5000元'
\t\t\t\t}, {
\t\t\t\t\tvalue: '5000-10000',
\t\t\t\t\ttext: '5000 - 10000元'
\t\t\t\t}, {
\t\t\t\t\tvalue: '10000-20000',
\t\t\t\t\ttext: '10000 - 20000元'
\t\t\t\t}, {
\t\t\t\t\tvalue: '20000-9999999',
\t\t\t\t\ttext: '20000元以上'
\t\t\t\t}]);
\t\t\t\tvar EarnPickerButton = doc.getElementById('EarnPicker');
\t\t\t\tEarnPickerButton.addEventListener('tap', function(event) {
\t\t\t\t\tEarnPicker.show(function(items) {
\t\t\t\t\t\tEarnPickerButton.getElementsByTagName('font')[0].innerText = items[0].text;
\t\t\t\t\t\tdocument.getElementById('salary').value = items[0].value;
\t\t\t\t\t});
\t\t\t\t}, false);

\t\t\t\t//居住地
\t\t\t\tvar CityPicker = new \$.PopPicker();
\t\t\t\tCityPicker.setData([{
\t\t\t\t\tvalue: '0',
\t\t\t\t\ttext: '不限'
\t\t\t\t}, {
\t\t\t\t\tvalue: '北京',
\t\t\t\t\ttext: '北京'
\t\t\t\t}, {
\t\t\t\t\tvalue: '上海',
\t\t\t\t\ttext: '上海'
\t\t\t\t}, {
\t\t\t\t\tvalue: '安徽',
\t\t\t\t\ttext: '安徽'
\t\t\t\t}, {
\t\t\t\t\tvalue: '福建',
\t\t\t\t\ttext: '福建'
\t\t\t\t}, {
\t\t\t\t\tvalue: '甘肃',
\t\t\t\t\ttext: '甘肃'
\t\t\t\t}]);
\t\t\t\tvar CityPickerButton = doc.getElementById('CityPicker');
\t\t\t\tCityPickerButton.addEventListener('tap', function(event) {
\t\t\t\t\tCityPicker.show(function(items) {
\t\t\t\t\t\tCityPickerButton.getElementsByTagName('font')[0].innerText = items[0].text;
\t\t\t\t\t\tdocument.getElementById('provinceid').value = items[0].value;
\t\t\t\t\t});
\t\t\t\t}, false);
//\t\t\t\t\t\tvar CityPicker = new \$.PopPicker({
//\t\t\t\t\t\t\tlayer: 2
//\t\t\t\t\t\t});
//\t\t\t\t\t\tCityPicker.setData(cityData);
//\t\t\t\t\t\tvar CityPickerButton = doc.getElementById('CityPicker');
//\t\t\t\t\t\tCityPickerButton.addEventListener('tap', function(event) {
//\t\t\t\t\t\t\tCityPicker.show(function(items) {
//\t\t\t\t\t\t\t\tCityPickerButton.getElementsByTagName('font')[0].innerText = items[0].text + \" - \" + items[1].text;
//\t\t\t\t\t\t\t\tdocument.getElementById('provinceid').value = items[0].value;
//\t\t\t\t\t\t\t\tdocument.getElementById('cityid').value = items[1].value;
//\t\t\t\t\t\t\t});
//\t\t\t\t\t\t}, false);
\t\t\t});
\t\t})(mui, document);
\t</script>
\t<script type=\"text/javascript\">
\t\t\$(function(){
\t\t\t\$(\"#confirm\").click(function(){
\t\t\t\t\$(\"#searchForm\").submit();
\t\t\t})
\t\t})
\t</script>
\t<!-- 筛选会员结束 -->
</div>
<!-- CNZZ代码 -->
<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=http%3A%2F%2Fm.7799520.com%2Frecommend&rnd=597939736\" width=\"0\" height=\"0\"/>\t</body>
<!--引用自定义脚本-->
<script src=\"web/js/core1.js\"></script>

</html>";
    }

    public function getTemplateName()
    {
        return "shaixuan.html";
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
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no\">
\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
\t<!--标准mui.css-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"web/js/css.css\">
\t<!--引用Jquery-->
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

\t<title>同城交友 找男朋友 找女朋友 离异 我主良缘征婚交友平台</title><meta content=\"同城交友,同城找男朋友\" name=\"keywords\">
</head>
<body class=\"backgroud-white\">
<!-- 导航栏开始 -->
<header class=\"mui-bar mui-bar-nav\">
\t<a class=\"\"></a>
\t<h1 class=\"mui-title\">筛选会员</h1>
\t<a href=\"javascript:void(0);\" id=\"confirm\" class=\"mui-btn mui-btn-blue mui-btn-link mui-btn-nav mui-pull-right\">确定</a>
</header>
<!-- 导航栏结束 -->

<div class=\"mui-content\">
\t<form action=\"?r=fossa/sou\" method=\"post\" id=\"searchForm\">
\t\t<!-- 筛选会员开始 -->
\t\t<div class=\"form-search\">
\t\t\t<div class=\"padding\">
\t\t\t\t<div class=\"\">
\t\t\t\t\t<input type=\"search\" name=\"userName\" class=\"mui-input-clear\" placeholder=\"请输入会员ID或昵称\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<hr />

\t\t\t<div class=\"padding form-list\">
\t\t\t\t<div id=\"GenderPicker\" class=\"mui-input-row\">
\t\t\t\t\t<input type=\"hidden\" name=\"gender\" id=\"gender\" value=\"\">
\t\t\t\t\t<label>性别</label>
\t\t\t\t\t<font>不限</font>
\t\t\t\t</div>
\t\t\t\t<div id=\"AgePicker\" class=\"mui-input-row\">
\t\t\t\t\t<input type=\"hidden\" name=\"ageValue\" id=\"startAge\" value=\"\">
\t\t\t\t\t<label>年龄范围</label>
\t\t\t\t\t<font>不限</font>
\t\t\t\t</div>
\t\t\t\t<div id=\"HeightPicker\" class=\"mui-input-row\">
\t\t\t\t\t<input type=\"hidden\" name=\"heightValue\" id=\"startHeight\" value=\"\">
\t\t\t\t\t<label>身高范围</label>
\t\t\t\t\t<font class=\"mui-pull-right\">不限</font>
\t\t\t\t</div>
\t\t\t\t<div id=\"EduPicker\" class=\"mui-input-row\">
\t\t\t\t\t<input type=\"hidden\" name=\"education\" id=\"education\" value=\"\">
\t\t\t\t\t<label>最低学历</label>
\t\t\t\t\t<font class=\"mui-pull-right\">不限</font>
\t\t\t\t</div>
\t\t\t\t<div id=\"EarnPicker\" class=\"mui-input-row\">
\t\t\t\t\t<input type=\"hidden\" id=\"salary\" name=\"salary\" value=\"\">
\t\t\t\t\t<label>收入范围</label>
\t\t\t\t\t<font class=\"mui-pull-right\">不限</font>
\t\t\t\t</div>
\t\t\t\t<div id=\"CityPicker\" class=\"mui-input-row\">
\t\t\t\t\t<input type=\"hidden\" id=\"provinceid\" name=\"provinceid\" value=\"\">
\t\t\t\t\t<label>居住地</label>
\t\t\t\t\t<font class=\"mui-pull-right\">不限</font>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>
\t<link href=\"web/css/mui.picker.css\" rel=\"stylesheet\" />
\t<link href=\"web/css/mui.poppicker.css\" rel=\"stylesheet\" />
\t<script src=\"web/js/mui.picker.js\"></script>
\t<script src=\"web/js/mui.poppicker.js\"></script>
\t<script src=\"web/js/city.data.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
\t<script>
\t\t(function(\$, doc) {
\t\t\t\$.init();
\t\t\t\$.ready(function() {
\t\t\t\t//性别
\t\t\t\tvar GenderPicker = new \$.PopPicker();
\t\t\t\tGenderPicker.setData([{
\t\t\t\t\tvalue: '0',
\t\t\t\t\ttext: '不限'
\t\t\t\t}, {
\t\t\t\t\tvalue: '男',
\t\t\t\t\ttext: '男'
\t\t\t\t}, {
\t\t\t\t\tvalue: '女',
\t\t\t\t\ttext: '女'
\t\t\t\t}]);
\t\t\t\tvar GenderPickerButton = doc.getElementById('GenderPicker');
\t\t\t\tGenderPickerButton.addEventListener('tap', function(event) {
\t\t\t\t\tGenderPicker.show(function(items) {
\t\t\t\t\t\tGenderPickerButton.getElementsByTagName('font')[0].innerText = items[0].text;
\t\t\t\t\t\tvar gender = items[0].value;
\t\t\t\t\t\tdocument.getElementById('gender').value = gender;
\t\t\t\t\t});
\t\t\t\t}, false);

\t\t\t\t//年龄范围
\t\t\t\tvar AgePicker = new \$.PopPicker();
\t\t\t\tAgePicker.setData([{
\t\t\t\t\tvalue: '0',
\t\t\t\t\ttext: '不限'
\t\t\t\t}, {
\t\t\t\t\tvalue: '20-30',
\t\t\t\t\ttext: '20 - 30岁'
\t\t\t\t}, {
\t\t\t\t\tvalue: '31-40',
\t\t\t\t\ttext: '31 - 40岁'
\t\t\t\t}, {
\t\t\t\t\tvalue: '41-50',
\t\t\t\t\ttext: '41 - 50岁'
\t\t\t\t}, {
\t\t\t\t\tvalue: '51-60',
\t\t\t\t\ttext: '51 - 60岁'
\t\t\t\t}, {
\t\t\t\t\tvalue: '61-70',
\t\t\t\t\ttext: '61 - 70岁'
\t\t\t\t}]);
\t\t\t\tvar AgePickerButton = doc.getElementById('AgePicker');
\t\t\t\tAgePickerButton.addEventListener('tap', function(event) {
\t\t\t\t\tAgePicker.show(function(items) {
\t\t\t\t\t\tAgePickerButton.getElementsByTagName('font')[0].innerText = items[0].text;
\t\t\t\t\t\tvar ageVlue = items[0].value;
\t\t\t\t\t\tdocument.getElementById('startAge').value = ageVlue;
\t\t\t\t\t});
\t\t\t\t}, false);

\t\t\t\t//身高范围
\t\t\t\tvar HeightPicker = new \$.PopPicker();
\t\t\t\tHeightPicker.setData([{
\t\t\t\t\tvalue: '0',
\t\t\t\t\ttext: '不限'
\t\t\t\t}, {
\t\t\t\t\tvalue: '140-150',
\t\t\t\t\ttext: '140CM - 150CM'
\t\t\t\t}, {
\t\t\t\t\tvalue: '151-160',
\t\t\t\t\ttext: '151CM - 160CM'
\t\t\t\t}, {
\t\t\t\t\tvalue: '161-170',
\t\t\t\t\ttext: '161CM - 170CM'
\t\t\t\t}, {
\t\t\t\t\tvalue: '171-180',
\t\t\t\t\ttext: '171CM - 180CM'
\t\t\t\t}, {
\t\t\t\t\tvalue: '181-190',
\t\t\t\t\ttext: '181CM - 190CM'
\t\t\t\t}]);
\t\t\t\tvar HeightPickerButton = doc.getElementById('HeightPicker');
\t\t\t\tHeightPickerButton.addEventListener('tap', function(event) {
\t\t\t\t\tHeightPicker.show(function(items) {
\t\t\t\t\t\tHeightPickerButton.getElementsByTagName('font')[0].innerText = items[0].text;
\t\t\t\t\t\tvar heightValue = items[0].value;
\t\t\t\t\t\tdocument.getElementById('startHeight').value = heightValue;
\t\t\t\t\t});
\t\t\t\t}, false);

\t\t\t\t//学历范围
\t\t\t\tvar EduPicker = new \$.PopPicker();
\t\t\t\tEduPicker.setData([{
\t\t\t\t\tvalue: '0',
\t\t\t\t\ttext: '不限'
\t\t\t\t}, {
\t\t\t\t\tvalue: '初中',
\t\t\t\t\ttext: '初中'
\t\t\t\t}, {
\t\t\t\t\tvalue: '高中',
\t\t\t\t\ttext: '高中'
\t\t\t\t}, {
\t\t\t\t\tvalue: '中专',
\t\t\t\t\ttext: '中专'
\t\t\t\t}, {
\t\t\t\t\tvalue: '大专',
\t\t\t\t\ttext: '大专'
\t\t\t\t}, {
\t\t\t\t\tvalue: '本科',
\t\t\t\t\ttext: '本科'
\t\t\t\t}, {
\t\t\t\t\tvalue: '硕士',
\t\t\t\t\ttext: '硕士'
\t\t\t\t}, {
\t\t\t\t\tvalue: '博士',
\t\t\t\t\ttext: '博士'
\t\t\t\t}, {
\t\t\t\t\tvalue: '院士',
\t\t\t\t\ttext: '院士'
\t\t\t\t}]);
\t\t\t\tvar EduPickerButton = doc.getElementById('EduPicker');
\t\t\t\tEduPickerButton.addEventListener('tap', function(event) {
\t\t\t\t\tEduPicker.show(function(items) {
\t\t\t\t\t\tEduPickerButton.getElementsByTagName('font')[0].innerText = items[0].text;
\t\t\t\t\t\tdocument.getElementById('education').value = items[0].value;
\t\t\t\t\t});
\t\t\t\t}, false);

\t\t\t\t//收入范围
\t\t\t\tvar EarnPicker = new \$.PopPicker();
\t\t\t\tEarnPicker.setData([{
\t\t\t\t\tvalue: '0',
\t\t\t\t\ttext: '不限'
\t\t\t\t}, {
\t\t\t\t\tvalue: '0-2000',
\t\t\t\t\ttext: '2000元以下'
\t\t\t\t}, {
\t\t\t\t\tvalue: '2000-5000',
\t\t\t\t\ttext: '2000 - 5000元'
\t\t\t\t}, {
\t\t\t\t\tvalue: '5000-10000',
\t\t\t\t\ttext: '5000 - 10000元'
\t\t\t\t}, {
\t\t\t\t\tvalue: '10000-20000',
\t\t\t\t\ttext: '10000 - 20000元'
\t\t\t\t}, {
\t\t\t\t\tvalue: '20000-9999999',
\t\t\t\t\ttext: '20000元以上'
\t\t\t\t}]);
\t\t\t\tvar EarnPickerButton = doc.getElementById('EarnPicker');
\t\t\t\tEarnPickerButton.addEventListener('tap', function(event) {
\t\t\t\t\tEarnPicker.show(function(items) {
\t\t\t\t\t\tEarnPickerButton.getElementsByTagName('font')[0].innerText = items[0].text;
\t\t\t\t\t\tdocument.getElementById('salary').value = items[0].value;
\t\t\t\t\t});
\t\t\t\t}, false);

\t\t\t\t//居住地
\t\t\t\tvar CityPicker = new \$.PopPicker();
\t\t\t\tCityPicker.setData([{
\t\t\t\t\tvalue: '0',
\t\t\t\t\ttext: '不限'
\t\t\t\t}, {
\t\t\t\t\tvalue: '北京',
\t\t\t\t\ttext: '北京'
\t\t\t\t}, {
\t\t\t\t\tvalue: '上海',
\t\t\t\t\ttext: '上海'
\t\t\t\t}, {
\t\t\t\t\tvalue: '安徽',
\t\t\t\t\ttext: '安徽'
\t\t\t\t}, {
\t\t\t\t\tvalue: '福建',
\t\t\t\t\ttext: '福建'
\t\t\t\t}, {
\t\t\t\t\tvalue: '甘肃',
\t\t\t\t\ttext: '甘肃'
\t\t\t\t}]);
\t\t\t\tvar CityPickerButton = doc.getElementById('CityPicker');
\t\t\t\tCityPickerButton.addEventListener('tap', function(event) {
\t\t\t\t\tCityPicker.show(function(items) {
\t\t\t\t\t\tCityPickerButton.getElementsByTagName('font')[0].innerText = items[0].text;
\t\t\t\t\t\tdocument.getElementById('provinceid').value = items[0].value;
\t\t\t\t\t});
\t\t\t\t}, false);
//\t\t\t\t\t\tvar CityPicker = new \$.PopPicker({
//\t\t\t\t\t\t\tlayer: 2
//\t\t\t\t\t\t});
//\t\t\t\t\t\tCityPicker.setData(cityData);
//\t\t\t\t\t\tvar CityPickerButton = doc.getElementById('CityPicker');
//\t\t\t\t\t\tCityPickerButton.addEventListener('tap', function(event) {
//\t\t\t\t\t\t\tCityPicker.show(function(items) {
//\t\t\t\t\t\t\t\tCityPickerButton.getElementsByTagName('font')[0].innerText = items[0].text + \" - \" + items[1].text;
//\t\t\t\t\t\t\t\tdocument.getElementById('provinceid').value = items[0].value;
//\t\t\t\t\t\t\t\tdocument.getElementById('cityid').value = items[1].value;
//\t\t\t\t\t\t\t});
//\t\t\t\t\t\t}, false);
\t\t\t});
\t\t})(mui, document);
\t</script>
\t<script type=\"text/javascript\">
\t\t\$(function(){
\t\t\t\$(\"#confirm\").click(function(){
\t\t\t\t\$(\"#searchForm\").submit();
\t\t\t})
\t\t})
\t</script>
\t<!-- 筛选会员结束 -->
</div>
<!-- CNZZ代码 -->
<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=http%3A%2F%2Fm.7799520.com%2Frecommend&rnd=597939736\" width=\"0\" height=\"0\"/>\t</body>
<!--引用自定义脚本-->
<script src=\"web/js/core1.js\"></script>

</html>";
    }
}
