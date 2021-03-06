<?php

/* register.html */
class __TwigTemplate_b24f907d502bc11e422ddc81c95c370e96393ef2d355ded01a9d53bda058046c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "register.html", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<body>

<div class=\"header\">

 <a href=\"?r=home/index\" class=\"home\">

            <span class=\"header-icon header-icon-home\"></span>

            <span class=\"header-name\">主页</span>

</a>

<div class=\"title\" id=\"titleString\">免费注册</div>

<a href=\"javascript:history.go(-1);\" class=\"back\">

            <span class=\"header-icon header-icon-return\"></span>

            <span class=\"header-name\">返回</span>

  </a>

 </div>





     <div class=\"container width80 pt20\">

 <form name=\"myform\" method=\"post\" action=\"?r=index/register\" id=\"myform\" class=\"form-horizontal\" data-validate=\"parsley\">

  <div class=\"control-group\">

      <input required=\"required\" name=\"data[phone]\" type=\"text\" id=\"mobile\"  class=\"width100 input parsley-validated parsley-error\" style=\"background:#F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入您的手机号码作为登陆名\" />

  </div>   

  <div class=\"control-group\">

      <input required=\"required\" name=\"data[name]\" type=\"text\" id=\"name\" class=\"input width100 \" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入您的用户名\" />

  </div>

  <div class=\"control-group\">

      <input required=\"required\" name=\"data[password]\" type=\"password\" id=\"password\" class=\"width100 input\" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入您的密码\" />

  </div>

   <div class=\"control-group\">

      <input required=\"required\" name=\"data[password2]\" type=\"password\" id=\"password2\" class=\"width100 input\" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请重复输入您的密码\" />

  </div>
     <div class=\"control-group\">
         <input  type=\"text\" id=\"yz\" class=\"width100 input\" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px;width:150px;height:20px;\" placeholder=\"请输入验证码\" /><input type=\"button\" id=\"btnSendCode\" style=\"width:130px;height:35PX;\" value=\"获取验证码\" onclick=\"sendMessage()\" />
     </div>
   <div class=\"control-group\">

       <span class=\"red\" id=\"tip\"></span>

   </div>
     <div class=\"control-group\"> </div>
  <div class=\"control-group\">

      <button id=\"ctl00_ContentPlaceHolder1_btnOK\" class=\"btn-large purple button width100\" type=\"submit\">立即注册</button>

  </div>

    <div class=\"control-group\">

         已在官网注册/激活的会员，请<a href=\"?r=index/login\">立即登陆</a>

  </div>

</form>

</div>





<script type=\"text/javascript\">
//   function shouji(){
//       mobile = \$('#mobile').val();
//       \$.post('?r=index/weiyi', {mobile:mobile },function(msg){
//       if(msg==2){
//        \$(\"#tip\").html('用户已被注册');
//        return false;
//       }else{
//       return true;
//       }
//       });
//
//   }
    /**
     * 手机发送短信并生成验证码发送到手机上
     */
    var InterValObj; //timer变量，控制时间

    var count = 60; //间隔函数，1秒执行

    var curCount;//当前剩余秒数

    var code = \"\"; //验证码

    var codeLength = 6;//验证码长度
    var sum=0;
    function sendMessage() {


        curCount = count;

        var dealType; //验证方式

        mobile = \$('#mobile').val();
        \$.post('?r=index/weiyi', {mobile: mobile}, function (msg) {
            if (msg == 2) {
                alert('手机号已被注册');
                return false;
            } else {
                if (mobile != '') {

                    //验证手机有效性

                    var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\\d{8})\$/;

                    if (!myreg.test(\$('#mobile').val())) {

                        alert('请输入有效的手机号码！');

                        return false;

                    }

                    mobile = \$('#mobile').val();
                    for (var i = 0; i < codeLength; i++) {

                        code += parseInt(Math.random() * 6).toString();

                    }
                    //产生验证码
                    sum++;
                    \$.post('?r=index/show', {mobile: mobile, code: code,sum:sum},function(msg){
//                        alert(msg)
                        if(msg==1){
                        alert('手机号已被注册');
                            die;
                        }else if(msg==2){
                        alert(\"发送失败\");die;
                        }else if(msg==3){
                        alert(\"今日以上限\"); die;
                        }else{
                            //设置button效果，开始计时

                            \$(\"#btnSendCode\").attr(\"disabled\", \"true\");

                            \$(\"#btnSendCode\").val(\"请在\" + curCount + \"秒内输入验证码\");

                            InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
                        }
                    });

                    //alert(code);
                    //向后台发送处理数据
                    //alert(mobile);
                    //alert(code);

                } else {

                    alert('请填写手机号码');

                }
            }

        })
    }
    //timer处理函数

    function SetRemainTime() {

        if (curCount == 0) {

            window.clearInterval(InterValObj);//停止计时器

            \$(\"#btnSendCode\").removeAttr(\"disabled\");//启用按钮

            \$(\"#btnSendCode\").val(\"重新发送验证码\");

            //code = \"\"; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效
        } else {

            curCount--;

            \$(\"#btnSendCode\").val(\"请在\" + curCount + \"秒内输入验证码\");

        }
    }
    \$('#ctl00_ContentPlaceHolder1_btnOK').click(function(){

        //alert(code);
        //return false;
        \$('#tip').html('');

        if(\$('#mobile').val()==''){

            \$('#tip').html('请输入手机号');

            return false;

        }

        if(\$('#name').val()==''){

            \$('#tip').html('请输入用户名');

            return false;

        }

        if(\$('#password').val()==''){

            \$('#tip').html('请输入密码');

            return false;

        }
        if(\$('#password2').val()==''){
            \$('#tip').html('请再次输入密码');

            return false;
        }
        if(\$('#password').val()!=\$('#password2').val()){
            \$('#tip').html('确认密码不一致');
            return false;
        }
        if(\$('#yz').val()==''){

            \$('#tip').html('验证码为空');
            return false;
        }
        if(\$('#yz').val()!=code){
            //alert(code);
            \$('#tip').html('验证码不正确');
            return false;
        }
    });
</script>

<div style=\"display:none;\"><script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cdiv id='cnzz_stat_icon_1000047539'%3E%3C/div%3E%3Cscript src='\" + cnzz_protocol + \"s22.cnzz.com/z_stat.php%3Fid%3D1000047539%26show%3Dpic' type='text/javascript'%3E%3C/script%3E\"));</script></div>

";
    }

    public function getTemplateName()
    {
        return "register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 2,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\"%}{% block content %}<body><div class=\"header\"> <a href=\"?r=home/index\" class=\"home\">            <span class=\"header-icon header-icon-home\"></span>            <span class=\"header-name\">主页</span></a><div class=\"title\" id=\"titleString\">免费注册</div><a href=\"javascript:history.go(-1);\" class=\"back\">            <span class=\"header-icon header-icon-return\"></span>            <span class=\"header-name\">返回</span>  </a> </div>     <div class=\"container width80 pt20\"> <form name=\"myform\" method=\"post\" action=\"?r=index/register\" id=\"myform\" class=\"form-horizontal\" data-validate=\"parsley\">  <div class=\"control-group\">      <input required=\"required\" name=\"data[phone]\" type=\"text\" id=\"mobile\"  class=\"width100 input parsley-validated parsley-error\" style=\"background:#F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入您的手机号码作为登陆名\" />  </div>     <div class=\"control-group\">      <input required=\"required\" name=\"data[name]\" type=\"text\" id=\"name\" class=\"input width100 \" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入您的用户名\" />  </div>  <div class=\"control-group\">      <input required=\"required\" name=\"data[password]\" type=\"password\" id=\"password\" class=\"width100 input\" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请输入您的密码\" />  </div>   <div class=\"control-group\">      <input required=\"required\" name=\"data[password2]\" type=\"password\" id=\"password2\" class=\"width100 input\" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px\" placeholder=\"请重复输入您的密码\" />  </div>     <div class=\"control-group\">         <input  type=\"text\" id=\"yz\" class=\"width100 input\" style=\"background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px;width:150px;height:20px;\" placeholder=\"请输入验证码\" /><input type=\"button\" id=\"btnSendCode\" style=\"width:130px;height:35PX;\" value=\"获取验证码\" onclick=\"sendMessage()\" />     </div>   <div class=\"control-group\">       <span class=\"red\" id=\"tip\"></span>   </div>     <div class=\"control-group\"> </div>  <div class=\"control-group\">      <button id=\"ctl00_ContentPlaceHolder1_btnOK\" class=\"btn-large purple button width100\" type=\"submit\">立即注册</button>  </div>    <div class=\"control-group\">         已在官网注册/激活的会员，请<a href=\"?r=index/login\">立即登陆</a>  </div></form></div><script type=\"text/javascript\">//   function shouji(){//       mobile = \$('#mobile').val();//       \$.post('?r=index/weiyi', {mobile:mobile },function(msg){//       if(msg==2){//        \$(\"#tip\").html('用户已被注册');//        return false;//       }else{//       return true;//       }//       });////   }    /**     * 手机发送短信并生成验证码发送到手机上     */    var InterValObj; //timer变量，控制时间    var count = 60; //间隔函数，1秒执行    var curCount;//当前剩余秒数    var code = \"\"; //验证码    var codeLength = 6;//验证码长度    var sum=0;    function sendMessage() {        curCount = count;        var dealType; //验证方式        mobile = \$('#mobile').val();        \$.post('?r=index/weiyi', {mobile: mobile}, function (msg) {            if (msg == 2) {                alert('手机号已被注册');                return false;            } else {                if (mobile != '') {                    //验证手机有效性                    var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\\d{8})\$/;                    if (!myreg.test(\$('#mobile').val())) {                        alert('请输入有效的手机号码！');                        return false;                    }                    mobile = \$('#mobile').val();                    for (var i = 0; i < codeLength; i++) {                        code += parseInt(Math.random() * 6).toString();                    }                    //产生验证码                    sum++;                    \$.post('?r=index/show', {mobile: mobile, code: code,sum:sum},function(msg){//                        alert(msg)                        if(msg==1){                        alert('手机号已被注册');                            die;                        }else if(msg==2){                        alert(\"发送失败\");die;                        }else if(msg==3){                        alert(\"今日以上限\"); die;                        }else{                            //设置button效果，开始计时                            \$(\"#btnSendCode\").attr(\"disabled\", \"true\");                            \$(\"#btnSendCode\").val(\"请在\" + curCount + \"秒内输入验证码\");                            InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次                        }                    });                    //alert(code);                    //向后台发送处理数据                    //alert(mobile);                    //alert(code);                } else {                    alert('请填写手机号码');                }            }        })    }    //timer处理函数    function SetRemainTime() {        if (curCount == 0) {            window.clearInterval(InterValObj);//停止计时器            \$(\"#btnSendCode\").removeAttr(\"disabled\");//启用按钮            \$(\"#btnSendCode\").val(\"重新发送验证码\");            //code = \"\"; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效        } else {            curCount--;            \$(\"#btnSendCode\").val(\"请在\" + curCount + \"秒内输入验证码\");        }    }    \$('#ctl00_ContentPlaceHolder1_btnOK').click(function(){        //alert(code);        //return false;        \$('#tip').html('');        if(\$('#mobile').val()==''){            \$('#tip').html('请输入手机号');            return false;        }        if(\$('#name').val()==''){            \$('#tip').html('请输入用户名');            return false;        }        if(\$('#password').val()==''){            \$('#tip').html('请输入密码');            return false;        }        if(\$('#password2').val()==''){            \$('#tip').html('请再次输入密码');            return false;        }        if(\$('#password').val()!=\$('#password2').val()){            \$('#tip').html('确认密码不一致');            return false;        }        if(\$('#yz').val()==''){            \$('#tip').html('验证码为空');            return false;        }        if(\$('#yz').val()!=code){            //alert(code);            \$('#tip').html('验证码不正确');            return false;        }    });</script><div style=\"display:none;\"><script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cdiv id='cnzz_stat_icon_1000047539'%3E%3C/div%3E%3Cscript src='\" + cnzz_protocol + \"s22.cnzz.com/z_stat.php%3Fid%3D1000047539%26show%3Dpic' type='text/javascript'%3E%3C/script%3E\"));</script></div>{% endblock %}";
    }
}
