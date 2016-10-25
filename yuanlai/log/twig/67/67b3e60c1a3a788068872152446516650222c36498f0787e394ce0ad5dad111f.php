<?php

/* friend.html */
class __TwigTemplate_a116c67993f10a721fa83fb6beb67f2a58e6e1903f441a908733b9a2c54e7ac0 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Access-Control-Allow-Origin\" content=\"*\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <!--标准mui.css-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"./web/css/a.css?v=102\">
    <!--引用Jquery-->
    <script src=\"./web/js/jquery.min.js\"></script>
    <script src=\"./web/js/mui.min.js\" ></script>
    <script src=\"./web/js/core.js\" ></script>
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

    <title>回消息</title>
</head>


<body class=\"backgroud-white\">
<!-- 导航栏开始 -->
<header class=\"mui-bar mui-bar-nav\">
    <a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
    <h1 class=\"mui-title\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arr"]) ? $context["arr"] : null), 0, array(), "array"), "real_name", array()), "html", null, true);
        echo "</h1>
    <a href=\"?r=home/index\" class=\"mui-bar-nav-home link\"></a>
</header>
<!-- 导航栏结束 -->

<!-- 跟随内容开始 -->
<div class=\"fix\">
    <div class=\"fix-emotion hidden\">
        <div class=\"mui-slider\">
            <div class=\"mui-slider-group\"></div>
        </div>
    </div>

    <!-- 聊天框开始 -->
    <div class=\"fix-message\">
        <p>
            <input name=\"message\" type=\"text\" placeholder=\"请输入您要留言的内容...\">
            <span class=\"ico ico-emotion\"></span>
            <button type=\"button\" userid=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arr"]) ? $context["arr"] : null), 0, array(), "array"), "us_id", array()), "html", null, true);
        echo "\"></button>
        </p>
    </div>
    <!-- 聊天框结束 -->
</div>
<!-- 跟随内容结束 -->

<div class=\"mui-content backgroud-none\" pull=\"message-detail\" pull-obj=\"mui-table-view\" style=\"padding-bottom: 2em;\">

    <!-- 回信息开始 -->
    <div class=\"message-detail\">
        <ul class=\"mui-table-view\">
            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr"]) ? $context["arr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 88
            echo "            ";
            if (($this->getAttribute($context["val"], "us_id", array()) == $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "uid", array()))) {
                // line 89
                echo "            <li class=\"mui-table-view-cell mui-media\">
                <div class=\"mui-slider-handle\">
                    <p class=\"title\">";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "createtime", array()), "html", null, true);
                echo "</p>
                    <span></span>
                    <div class=\"clip-bg mui-media-object\" style=\"background: url(/img/avata-1.png);\">
                        <a href=\"?r=home/fossa/tid/";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "us_id", array()), "html", null, true);
                echo "\" class=\"link\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "real_name", array()), "html", null, true);
                echo "</a>
                    </div>
                    <div class=\"mui-media-body\">
                        <p>
                            ";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "content", array()), "html", null, true);
                echo "</p>
                    </div>
                </div>
            </li>
            ";
            } else {
                // line 103
                echo "            <li class=\"mui-table-view-cell mui-media active\">
                <div class=\"mui-slider-handle\">
                    <p class=\"title\">";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "createtime", array()), "html", null, true);
                echo "</p>
                    <span></span>
                    <div class=\"clip-bg mui-media-object\" style=\"background: url(.web/img/avata-1.png););\">
                        <a href=\"?r=home/fossa/tid/";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "us_id", array()), "html", null, true);
                echo "\" class=\"link\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "real_name", array()), "html", null, true);
                echo "</a>
                    </div>
                    <div class=\"mui-media-body\">
                        <p>
                            ";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "content", array()), "html", null, true);
                echo "\t\t</p>
                    </div>
                </div>
            </li>
            ";
            }
            // line 117
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
            <!--<li class=\"mui-table-view-cell mui-media active\">
                <div class=\"mui-slider-handle\">
                    <p class=\"title\">10-15 16:05</p>
                    <span></span>
                    <div class=\"clip-bg mui-media-object\" style=\"background: url(.web/img/avata-1.png););\">
                        <a href=\"http://m.7799520.com/user/377537.html\" class=\"link\"></a>
                    </div>
                    <div class=\"mui-media-body\">
                        <p>
                            蛤蛤蛤蛤蛤蛤\t\t</p>
                    </div>
                </div>
            </li>-->

        </ul>
    </div>
    <!-- 回信息结束 -->

    <script language=\"javascript\">
        //生成表情
        var f = '';
        for (var i = 1; i <= 104; i++) {
            if (i == 1) {
                f += '<div class=\"mui-slider-item mui-control-content mui-active\">';
            }
            f += '<span tag=\"{emf_' + i + '}\"><img src=\"./emotion/' + i + '.gif\"></span>';
            if (i % 12 == 0) {
                if (i == 104) {
                    f += '</div>';
                } else {
                    f += '</div><div class=\"mui-slider-item mui-control-content\">';
                }
            }
        }
        \$('.fix-emotion .mui-slider-group').append(f);
        //关注
        \$('.message-detail .do-submit').click(function() {
            var url = \$(this).attr('ajax-url');
            var msg = \$(this).attr('dialog');
            var userid = \$(this).attr('userid');
            mui.ajax(url, {
                data: {
                    'userid':userid
                },
                dataType: 'jsonp',
                type: 'post',
                success: function(data) {
                    if (data.status == 1) {
                        mui.toast(data.msg);
                        \$(\"#focus\").hide();
                    } else if (data.status == 0){
                        mui.toast(data.msg);
                    } else {
                        window.location.href = \"http://m.7799520.com/login\";
                    }
                }
            });
        });
        //表情弹窗
        \$('.fix-message span').click(function() {
            \$('.fix-emotion').removeClass('hidden');
        });
        //发表情
        \$('.fix-emotion span').click(function() {
            var obj = \$('.fix-message input');
            obj.val(obj.val() + \$(this).attr('tag'));
        });
        //收起表情
        \$('body').on('tap', '.mui-scroll-wrapper', function() {
            \$('.fix-emotion').addClass('hidden');
        });
        //发留言
        \$('.fix-message button').click(function() {
            var d = getNowDate();
            var w = \$('.fix-message input');
            //判断是否填写聊天内容
            if (w.val() == '') {
                mui.toast('请输入您要留言的内容');
                w.focus();
                return false;
            }
            //转义还原表情
            var e = emotion_exchange(w.val());
            var t = '<li class=\"mui-table-view-cell mui-media active\"><div class=\"mui-slider-handle\"><p class=\"title\">' + d + '</p><span></span><div class=\"clip-bg mui-media-object\" style=\"background: url(/img/avata-1.png););\"><a href=\"#\" class=\"link\"></a></div><div class=\"mui-media-body\"><p>' + e + '</p></div></div></li>';
            var url = \"?r=advices/addmessage\";
            var userid = \$(this).attr(\"userid\");
            mui.ajax(url, {
                data: {
                    'userid':userid,
                    'message':w.val()
                },
                //dataType: 'json',
                type: 'post',
                success: function(data) {
                    //alert(data);
                    if (data == 1) {
                        \$('.message-detail ul').append(t);
                        \$('.fix-emotion').addClass('hidden');
                        //滚屏
                        \$('body').scrollTop(\$(document).height());
                    } else if (data == 0){
                        mui.toast('发送消息失败,请重试..');
                    } else {
                        window.location.href = \"?r=index/login\";
                    }
                }
            });
        });

        // 生成日期格式
        function getNowDate(){
            var myDate,myDateStr;
            myDate = new Date();
            var MM= myDate.getMonth()+1;//取月份
            var hours = myDate.getHours();
            var minutes = myDate.getMinutes();
            if(MM < 10)
            {
                MM=\"0\"+MM;
            }
            var dd= myDate.getDate();//取日
            if(dd < 10)
            {
                dd=\"0\"+dd;
            }
            if (minutes < 10) {
                minutes = \"0\" + minutes;
            }
            if (hours < 10) {
                hours = \"0\" + hours;
            }
            myDateStr = MM+\"-\"+dd+\" \"+hours+\":\"+minutes;
            return myDateStr;
        }
        //表情转义
        function emotion_exchange(event) {
            //var emotion = ['疑问','色','大哭','发怒','呲牙','白眼','憨笑','晕','折磨','敲打','擦汗','抠鼻','左哼哼','鄙视','害羞','亲亲','可怜','猪头','示爱','强','握手','勾引','拥抱','得意','傲慢','饥饿','困','惊恐','流汗','流泪','大兵','奋斗','咒骂','冷汗','嘘...','发呆','闭嘴','衰','骷髅','睡','再见','撇嘴','尴尬','鼓掌','糗大了','坏笑','微笑','右哼哼','哈欠','调皮','委屈','快哭了','阴险','惊讶','吓','难过','酷','可爱','抓狂','吐','偷笑','咖啡','饭','菜刀','玫瑰','凋谢','吻','爱心','心碎','蛋糕','闪电','炸弹','刀','足球','瓢虫','便便','月亮','太阳','礼物','西瓜','啤酒','弱','篮球','胜利','抱拳','乒乓','拳头','差劲','爱你','NO','OK','爱情','飞吻','跳跳','发抖','怄火','转圈','磕头','回头','跳绳','挥手','激动','街舞','献吻','右太极'];
            var t = event;
            for (var i = 1; i <= 104; i++) {
                var regExp = new RegExp('{emf_' + i + '}', 'gi');
                t = t.replace(regExp, '<img src=\"./emotion/' + i + '.gif\">');
            }
            return t;
        }
    </script>
</div>
<!-- CNZZ代码 -->
<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=&rnd=960100515\" width=\"0\" height=\"0\"/>\t</body>
<!--引用自定义脚本-->
<script src=\"./web/js/core.js\"></script>
<!--引用自定义脚本-->



</html>";
    }

    public function getTemplateName()
    {
        return "friend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 118,  174 => 117,  166 => 112,  157 => 108,  151 => 105,  147 => 103,  139 => 98,  130 => 94,  124 => 91,  120 => 89,  117 => 88,  113 => 87,  98 => 75,  77 => 57,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Access-Control-Allow-Origin\" content=\"*\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <!--标准mui.css-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"./web/css/a.css?v=102\">
    <!--引用Jquery-->
    <script src=\"./web/js/jquery.min.js\"></script>
    <script src=\"./web/js/mui.min.js\" ></script>
    <script src=\"./web/js/core.js\" ></script>
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

    <title>回消息</title>
</head>


<body class=\"backgroud-white\">
<!-- 导航栏开始 -->
<header class=\"mui-bar mui-bar-nav\">
    <a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
    <h1 class=\"mui-title\">{{ arr[0].real_name }}</h1>
    <a href=\"?r=home/index\" class=\"mui-bar-nav-home link\"></a>
</header>
<!-- 导航栏结束 -->

<!-- 跟随内容开始 -->
<div class=\"fix\">
    <div class=\"fix-emotion hidden\">
        <div class=\"mui-slider\">
            <div class=\"mui-slider-group\"></div>
        </div>
    </div>

    <!-- 聊天框开始 -->
    <div class=\"fix-message\">
        <p>
            <input name=\"message\" type=\"text\" placeholder=\"请输入您要留言的内容...\">
            <span class=\"ico ico-emotion\"></span>
            <button type=\"button\" userid=\"{{ arr[0].us_id  }}\"></button>
        </p>
    </div>
    <!-- 聊天框结束 -->
</div>
<!-- 跟随内容结束 -->

<div class=\"mui-content backgroud-none\" pull=\"message-detail\" pull-obj=\"mui-table-view\" style=\"padding-bottom: 2em;\">

    <!-- 回信息开始 -->
    <div class=\"message-detail\">
        <ul class=\"mui-table-view\">
            {% for val in arr %}
            {% if val.us_id == data.uid  %}
            <li class=\"mui-table-view-cell mui-media\">
                <div class=\"mui-slider-handle\">
                    <p class=\"title\">{{ val.createtime }}</p>
                    <span></span>
                    <div class=\"clip-bg mui-media-object\" style=\"background: url(/img/avata-1.png);\">
                        <a href=\"?r=home/fossa/tid/{{ val.us_id }}\" class=\"link\">{{ val.real_name }}</a>
                    </div>
                    <div class=\"mui-media-body\">
                        <p>
                            {{ val.content }}</p>
                    </div>
                </div>
            </li>
            {% else %}
            <li class=\"mui-table-view-cell mui-media active\">
                <div class=\"mui-slider-handle\">
                    <p class=\"title\">{{ val.createtime }}</p>
                    <span></span>
                    <div class=\"clip-bg mui-media-object\" style=\"background: url(.web/img/avata-1.png););\">
                        <a href=\"?r=home/fossa/tid/{{ val.us_id }}\" class=\"link\">{{ val.real_name }}</a>
                    </div>
                    <div class=\"mui-media-body\">
                        <p>
                            {{ val.content }}\t\t</p>
                    </div>
                </div>
            </li>
            {% endif %}
            {% endfor %}

            <!--<li class=\"mui-table-view-cell mui-media active\">
                <div class=\"mui-slider-handle\">
                    <p class=\"title\">10-15 16:05</p>
                    <span></span>
                    <div class=\"clip-bg mui-media-object\" style=\"background: url(.web/img/avata-1.png););\">
                        <a href=\"http://m.7799520.com/user/377537.html\" class=\"link\"></a>
                    </div>
                    <div class=\"mui-media-body\">
                        <p>
                            蛤蛤蛤蛤蛤蛤\t\t</p>
                    </div>
                </div>
            </li>-->

        </ul>
    </div>
    <!-- 回信息结束 -->

    <script language=\"javascript\">
        //生成表情
        var f = '';
        for (var i = 1; i <= 104; i++) {
            if (i == 1) {
                f += '<div class=\"mui-slider-item mui-control-content mui-active\">';
            }
            f += '<span tag=\"{emf_' + i + '}\"><img src=\"./emotion/' + i + '.gif\"></span>';
            if (i % 12 == 0) {
                if (i == 104) {
                    f += '</div>';
                } else {
                    f += '</div><div class=\"mui-slider-item mui-control-content\">';
                }
            }
        }
        \$('.fix-emotion .mui-slider-group').append(f);
        //关注
        \$('.message-detail .do-submit').click(function() {
            var url = \$(this).attr('ajax-url');
            var msg = \$(this).attr('dialog');
            var userid = \$(this).attr('userid');
            mui.ajax(url, {
                data: {
                    'userid':userid
                },
                dataType: 'jsonp',
                type: 'post',
                success: function(data) {
                    if (data.status == 1) {
                        mui.toast(data.msg);
                        \$(\"#focus\").hide();
                    } else if (data.status == 0){
                        mui.toast(data.msg);
                    } else {
                        window.location.href = \"http://m.7799520.com/login\";
                    }
                }
            });
        });
        //表情弹窗
        \$('.fix-message span').click(function() {
            \$('.fix-emotion').removeClass('hidden');
        });
        //发表情
        \$('.fix-emotion span').click(function() {
            var obj = \$('.fix-message input');
            obj.val(obj.val() + \$(this).attr('tag'));
        });
        //收起表情
        \$('body').on('tap', '.mui-scroll-wrapper', function() {
            \$('.fix-emotion').addClass('hidden');
        });
        //发留言
        \$('.fix-message button').click(function() {
            var d = getNowDate();
            var w = \$('.fix-message input');
            //判断是否填写聊天内容
            if (w.val() == '') {
                mui.toast('请输入您要留言的内容');
                w.focus();
                return false;
            }
            //转义还原表情
            var e = emotion_exchange(w.val());
            var t = '<li class=\"mui-table-view-cell mui-media active\"><div class=\"mui-slider-handle\"><p class=\"title\">' + d + '</p><span></span><div class=\"clip-bg mui-media-object\" style=\"background: url(/img/avata-1.png););\"><a href=\"#\" class=\"link\"></a></div><div class=\"mui-media-body\"><p>' + e + '</p></div></div></li>';
            var url = \"?r=advices/addmessage\";
            var userid = \$(this).attr(\"userid\");
            mui.ajax(url, {
                data: {
                    'userid':userid,
                    'message':w.val()
                },
                //dataType: 'json',
                type: 'post',
                success: function(data) {
                    //alert(data);
                    if (data == 1) {
                        \$('.message-detail ul').append(t);
                        \$('.fix-emotion').addClass('hidden');
                        //滚屏
                        \$('body').scrollTop(\$(document).height());
                    } else if (data == 0){
                        mui.toast('发送消息失败,请重试..');
                    } else {
                        window.location.href = \"?r=index/login\";
                    }
                }
            });
        });

        // 生成日期格式
        function getNowDate(){
            var myDate,myDateStr;
            myDate = new Date();
            var MM= myDate.getMonth()+1;//取月份
            var hours = myDate.getHours();
            var minutes = myDate.getMinutes();
            if(MM < 10)
            {
                MM=\"0\"+MM;
            }
            var dd= myDate.getDate();//取日
            if(dd < 10)
            {
                dd=\"0\"+dd;
            }
            if (minutes < 10) {
                minutes = \"0\" + minutes;
            }
            if (hours < 10) {
                hours = \"0\" + hours;
            }
            myDateStr = MM+\"-\"+dd+\" \"+hours+\":\"+minutes;
            return myDateStr;
        }
        //表情转义
        function emotion_exchange(event) {
            //var emotion = ['疑问','色','大哭','发怒','呲牙','白眼','憨笑','晕','折磨','敲打','擦汗','抠鼻','左哼哼','鄙视','害羞','亲亲','可怜','猪头','示爱','强','握手','勾引','拥抱','得意','傲慢','饥饿','困','惊恐','流汗','流泪','大兵','奋斗','咒骂','冷汗','嘘...','发呆','闭嘴','衰','骷髅','睡','再见','撇嘴','尴尬','鼓掌','糗大了','坏笑','微笑','右哼哼','哈欠','调皮','委屈','快哭了','阴险','惊讶','吓','难过','酷','可爱','抓狂','吐','偷笑','咖啡','饭','菜刀','玫瑰','凋谢','吻','爱心','心碎','蛋糕','闪电','炸弹','刀','足球','瓢虫','便便','月亮','太阳','礼物','西瓜','啤酒','弱','篮球','胜利','抱拳','乒乓','拳头','差劲','爱你','NO','OK','爱情','飞吻','跳跳','发抖','怄火','转圈','磕头','回头','跳绳','挥手','激动','街舞','献吻','右太极'];
            var t = event;
            for (var i = 1; i <= 104; i++) {
                var regExp = new RegExp('{emf_' + i + '}', 'gi');
                t = t.replace(regExp, '<img src=\"./emotion/' + i + '.gif\">');
            }
            return t;
        }
    </script>
</div>
<!-- CNZZ代码 -->
<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=&rnd=960100515\" width=\"0\" height=\"0\"/>\t</body>
<!--引用自定义脚本-->
<script src=\"./web/js/core.js\"></script>
<!--引用自定义脚本-->



</html>";
    }
}
