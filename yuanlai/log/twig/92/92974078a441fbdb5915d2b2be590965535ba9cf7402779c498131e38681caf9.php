<?php

/* suggest.html */
class __TwigTemplate_0dd1612dd1b5299baf50c853d015f91db2cb7add796a48541af95e0ffbf02aaf extends Twig_Template
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
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <!--标准mui.css-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"web/js/css.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"web/css/lv.css\">
    <!--引用Jquery-->
    <script src=\"web/js/jquery.js\"></script>
    <script src=\"web/js/min.js\" ></script>
    <script src=\"web/js/core.js\" ></script>
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

    <title>推荐会员-我主良缘：中国高端婚恋直营连锁创导者</title>
</head>
<body>
<!-- 导航栏开始 -->
<header class=\"mui-bar mui-bar-nav\">
    <a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
    <h1 class=\"mui-title\">推荐会员</h1>
    <a href=\"?r=home/shaixuan\" class=\"mui-btn-link mui-btn-nav mui-pull-right link\">筛选</a>
</header>
<!-- 导航栏结束 -->







<!-- 发信息开始 -->
<div class=\"layer\">
    <div class=\"layer-message-add\">
        <div class=\"title\">
            <span class=\"mui-icon mui-icon-closeempty mui-poppicker-btn-cancel mui-pull-left layer-close\"></span>
            <p class=\"mui-ellipsis\">与<label id=\"\"></label>对话</p>
            <span class=\"mui-icon mui-icon-checkmarkempty mui-poppicker-btn-ok mui-pull-right do-message-send\">发送</span>
        </div>
        <div class=\"upload\"></div>
        <input name=\"send_id\" type=\"hidden\" value=\"\" />
        <textarea name=\"content\" placeholder=\"请输入您想对TA说的话…\"></textarea>
    </div>
</div>
<!-- 发信息结束 -->






<div class=\"mui-content backgroud-none\" pull=\"recommend\" pull-obj=\"mui-table-view\">
    <!-- banner开始 -->
    <a href=\"?r=home/fossa\" class=\"link\">
        <div class=\"banner margin-none\">
            <img src=\"http://m.7799520.com/img/tips.png\">
        </div>
    </a>
    <!-- banner结束 -->

    <div class=\"recommend-list\">
        <ul class=\"mui-table-view\">
            ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ars"]) ? $context["ars"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["vs"]) {
            // line 98
            echo "          
            <li class=\"mui-table-view-cell mui-media\">
                <div class=\"mui-pull-left mui-media-object clip-bg\" style=\"background: url(";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["vs"], "head_img", array()), "html", null, true);
            echo ");\">                   
                    <a href=\"\" class=\"link\"></a>
                </div><a href=\"?r=home/fossa/tid/";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["vs"], "u_id", array()), "html", null, true);
            echo "\" class=\"link\">

                    <b>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["vs"], "name", array()), "html", null, true);
            echo "</b><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vs"], "age", array()), "html", null, true);
            echo "岁<br/>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vs"], "region", array()), "html", null, true);
            echo "</span>

                    <p class=\"mui-ellipsis\">内心独白：";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["vs"], "mono", array()), "html", null, true);
            echo "</p></a>
                ";
            // line 107
            if (($this->getAttribute($context["vs"], "usercp", array()) < 200)) {
                // line 108
                echo "                <div class=\"userlike_badge badge_lv2_1\"><div class=\"userlike_member_title\" id=\"liked_member_title\">默默无闻</div><div class=\"userlike_member_lv\">1</div>
                ";
            } elseif ((($this->getAttribute(            // line 109
$context["vs"], "usercp", array()) > 200) && ($this->getAttribute($context["vs"], "usercp", array()) < 500))) {
                // line 110
                echo "                <div class=\"userlike_badge badge_lv2_1\"><div class=\"userlike_member_title\" id=\"liked_member_title\">亲和友善</div><div class=\"userlike_member_lv\">2</div>
                ";
            } elseif ((($this->getAttribute(            // line 111
$context["vs"], "usercp", array()) > 500) && ($this->getAttribute($context["vs"], "usercp", array()) < 800))) {
                // line 112
                echo "                <div class=\"userlike_badge badge_lv2_1\"><div class=\"userlike_member_title\" id=\"liked_member_title\">热情好客</div><div class=\"userlike_member_lv\">3</div>
          
                ";
            } elseif ((($this->getAttribute(            // line 114
$context["vs"], "usercp", array()) > 800) && ($this->getAttribute($context["vs"], "usercp", array()) < 1100))) {
                // line 115
                echo "                <div class=\"userlike_badge badge_lv3\"><div class=\"userlike_member_title\" id=\"liked_member_title\">花香满屋</div><div class=\"userlike_member_lv\">4</div>
                ";
            } elseif ((($this->getAttribute(            // line 116
$context["vs"], "usercp", array()) > 1100) && ($this->getAttribute($context["vs"], "usercp", array()) < 1400))) {
                // line 117
                echo "                <div class=\"userlike_badge badge_lv3\"><div class=\"userlike_member_title\" id=\"liked_member_title\">魅力四射</div><div class=\"userlike_member_lv\">5</div>
                ";
            } elseif ((($this->getAttribute(            // line 118
$context["vs"], "usercp", array()) > 1400) && ($this->getAttribute($context["vs"], "usercp", array()) < 1700))) {
                // line 119
                echo "                <div class=\"userlike_badge badge_lv3\"><div class=\"userlike_member_title\" id=\"liked_member_title\">众星捧月</div><div class=\"userlike_member_lv\">6</div>
                ";
            } elseif (($this->getAttribute(            // line 120
$context["vs"], "usercp", array()) > 1700)) {
                // line 121
                echo "                <div class=\"userlike_badge badge_lv4\"><div class=\"userlike_member_title\" id=\"liked_member_title\">万人迷</div><div class=\"userlike_member_lv\">7</div>
                ";
            }
            // line 123
            echo "                <div class=\"mui-media-body\">

                </div><div>
                
                    <p class=\"mui-ellipsis\">内心独白：";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["vs"], "mono", array()), "html", null, true);
            echo "</p></a></div><div>
                <a href=\"?r=home/advices\" objid=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["vs"], "u_id", array()), "html", null, true);
            echo "\" class=\"do-message-add\"><span class=\"ico ico-msg-call\"></span>发信息</a>
               
            </div>
                
                </li>
                 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "
        </ul>
    </div>

 
    <!-- 会员推荐开始 -->
    <div class=\"recommend-list\">
        <ul class=\"mui-table-view\"></ul>
    </div>

    <script src=\"/js/auto-pull.js\"></script>
    <script type=\"text/javascript\">
        //        var condition = '{\"ageyear\":[\"gt\",0],\"height\":[\"gt\",0],\"salary\":[\"gt\",0],\"education\":[\"gt\",0],\"gender\":[\"eq\",2],\"avatar\":[\"neq\",\"\"],\"avatarflag\":\"1\"}';
        //
        //        //打招呼
      /*  \$('.recommend-list').on('tap', '.do-message-hi', function(event) {
            //判断是否在线
            if (\$(this).hasClass('active')) {
                mui.toast('您已经对TA打过招呼');
            } else {
                var url = \"?r=fossa/zhaohu\";
                var obj = \$(this);
                var id = obj.attr('objid');
//                alert(id)
                \$.ajax({
                    url: url,
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'userid': id
                    },
                    success: function(data) {
                        alert(data.status)
//                        if (data.status == 1) {
//                            obj.html('<span class=\"ico ico-msg-hi\"></span>已打招呼');
//                            obj.addClass('active');
//                            mui.toast('您对TA打了个招呼');
//                        } else if (data.status == 0) {
//                            mui.toast('打招呼失败,请重试..');
//                        } else {
//                            window.location.href = \"http://nbwqh.site/yuanlai/yuanlai/\";
//                        }
                    }
                });
            }
        });*/
        //发信息弹窗
        \$('.recommend-list').on('tap', '.do-message-add', function(event) {
            // 定义全局的userid
            userid = \$(this).attr('objid');
            \$('.layer').fadeIn();
            \$('.layer-message-add input').val('');
            //获取对话用户名
            \$('.layer-message-add label').text(\$(this).parents('li').find('.mui-media-body b').text());
            //获取用户ID
            \$('.layer-message-add input').val(\$(this).parents('li').find('.mui-media-body b').attr('id'));
            //文字域计算高度
            var h = \$('.layer-message-add').height() - \$('.layer-message-add .title').height();
            \$('.layer-message-add textarea').height(h * 0.8).val('');
        });
        //发消息
        \$('.layer').on('tap', '.do-message-send', function(event) {
            var id = \$('.layer-message-add input');
            var ct = \$('.layer-message-add textarea');
            //判断是否有发送对象
            if (userid == '') {
                mui.toast('无法获取对象');
                ct.focus();
                return false;
            }
            //判断是否填写信息内容
            if (ct.val() == '') {
                mui.toast('请输入您想对TA说的话');
                ct.focus();
                return false;
            }
            //删除
            //\$('.layer-close').click();
            var url = '?r=advices/addmessage';
            //alert(userid);
            //alert(ct.val());
            \$.ajax({
                url: url,
                type: 'post',
                //dataType: 'json',
                data: {
                    'userid': userid,
                    'message': ct.val()
                },
                success: function(data) {
                    //alert(data);
                    if (data== 1) {
                        \$('.layer-file-tips').animate({
                            top: '-100%'
                        }, 300);
                        \$('.layer').fadeOut(300);
                        mui.toast('消息已发出');
                    } else if (data == 0) {
                        mui.toast('发送信息失败,请重试..');
                    }
                }
            });
        });
        //关闭弹窗
        \$('.layer-close').click(function() {
            \$('.layer-file-tips').animate({
                top: '-100%'
            }, 300);
            \$('.layer').fadeOut(300);
        });
    </script>
    <!-- 会员推荐结束 -->
</div>
<!-- CNZZ代码 -->
<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=http%3A%2F%2Fm.7799520.com%2F&rnd=378533154\" width=\"0\" height=\"0\"/>\t</body>
<!--引用自定义脚本-->
<script src=\"/js/core.js\"></script>
<!--引用自定义脚本-->



</html>";
    }

    public function getTemplateName()
    {
        return "suggest.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 135,  195 => 128,  191 => 127,  185 => 123,  181 => 121,  179 => 120,  176 => 119,  174 => 118,  171 => 117,  169 => 116,  166 => 115,  164 => 114,  160 => 112,  158 => 111,  155 => 110,  153 => 109,  150 => 108,  148 => 107,  144 => 106,  135 => 104,  130 => 102,  125 => 100,  121 => 98,  117 => 97,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <!--标准mui.css-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"web/js/css.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"web/css/lv.css\">
    <!--引用Jquery-->
    <script src=\"web/js/jquery.js\"></script>
    <script src=\"web/js/min.js\" ></script>
    <script src=\"web/js/core.js\" ></script>
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

    <title>推荐会员-我主良缘：中国高端婚恋直营连锁创导者</title>
</head>
<body>
<!-- 导航栏开始 -->
<header class=\"mui-bar mui-bar-nav\">
    <a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
    <h1 class=\"mui-title\">推荐会员</h1>
    <a href=\"?r=home/shaixuan\" class=\"mui-btn-link mui-btn-nav mui-pull-right link\">筛选</a>
</header>
<!-- 导航栏结束 -->







<!-- 发信息开始 -->
<div class=\"layer\">
    <div class=\"layer-message-add\">
        <div class=\"title\">
            <span class=\"mui-icon mui-icon-closeempty mui-poppicker-btn-cancel mui-pull-left layer-close\"></span>
            <p class=\"mui-ellipsis\">与<label id=\"\"></label>对话</p>
            <span class=\"mui-icon mui-icon-checkmarkempty mui-poppicker-btn-ok mui-pull-right do-message-send\">发送</span>
        </div>
        <div class=\"upload\"></div>
        <input name=\"send_id\" type=\"hidden\" value=\"\" />
        <textarea name=\"content\" placeholder=\"请输入您想对TA说的话…\"></textarea>
    </div>
</div>
<!-- 发信息结束 -->






<div class=\"mui-content backgroud-none\" pull=\"recommend\" pull-obj=\"mui-table-view\">
    <!-- banner开始 -->
    <a href=\"?r=home/fossa\" class=\"link\">
        <div class=\"banner margin-none\">
            <img src=\"http://m.7799520.com/img/tips.png\">
        </div>
    </a>
    <!-- banner结束 -->

    <div class=\"recommend-list\">
        <ul class=\"mui-table-view\">
            {% for vs in ars %}
          
            <li class=\"mui-table-view-cell mui-media\">
                <div class=\"mui-pull-left mui-media-object clip-bg\" style=\"background: url({{ vs.head_img }});\">                   
                    <a href=\"\" class=\"link\"></a>
                </div><a href=\"?r=home/fossa/tid/{{vs.u_id}}\" class=\"link\">

                    <b>{{ vs.name }}</b><span>{{ vs.age }}岁<br/>{{ vs.region }}</span>

                    <p class=\"mui-ellipsis\">内心独白：{{ vs.mono }}</p></a>
                {% if vs.usercp < 200 %}
                <div class=\"userlike_badge badge_lv2_1\"><div class=\"userlike_member_title\" id=\"liked_member_title\">默默无闻</div><div class=\"userlike_member_lv\">1</div>
                {% elseif vs.usercp > 200 and vs.usercp < 500 %}
                <div class=\"userlike_badge badge_lv2_1\"><div class=\"userlike_member_title\" id=\"liked_member_title\">亲和友善</div><div class=\"userlike_member_lv\">2</div>
                {% elseif vs.usercp > 500 and vs.usercp < 800 %}
                <div class=\"userlike_badge badge_lv2_1\"><div class=\"userlike_member_title\" id=\"liked_member_title\">热情好客</div><div class=\"userlike_member_lv\">3</div>
          
                {% elseif vs.usercp > 800 and vs.usercp < 1100 %}
                <div class=\"userlike_badge badge_lv3\"><div class=\"userlike_member_title\" id=\"liked_member_title\">花香满屋</div><div class=\"userlike_member_lv\">4</div>
                {% elseif vs.usercp > 1100 and vs.usercp < 1400 %}
                <div class=\"userlike_badge badge_lv3\"><div class=\"userlike_member_title\" id=\"liked_member_title\">魅力四射</div><div class=\"userlike_member_lv\">5</div>
                {% elseif vs.usercp > 1400 and vs.usercp < 1700 %}
                <div class=\"userlike_badge badge_lv3\"><div class=\"userlike_member_title\" id=\"liked_member_title\">众星捧月</div><div class=\"userlike_member_lv\">6</div>
                {% elseif vs.usercp > 1700 %}
                <div class=\"userlike_badge badge_lv4\"><div class=\"userlike_member_title\" id=\"liked_member_title\">万人迷</div><div class=\"userlike_member_lv\">7</div>
                {% endif %}
                <div class=\"mui-media-body\">

                </div><div>
                
                    <p class=\"mui-ellipsis\">内心独白：{{ vs.mono }}</p></a></div><div>
                <a href=\"?r=home/advices\" objid=\"{{ vs.u_id }}\" class=\"do-message-add\"><span class=\"ico ico-msg-call\"></span>发信息</a>
               
            </div>
                
                </li>
                 
                {% endfor %}

        </ul>
    </div>

 
    <!-- 会员推荐开始 -->
    <div class=\"recommend-list\">
        <ul class=\"mui-table-view\"></ul>
    </div>

    <script src=\"/js/auto-pull.js\"></script>
    <script type=\"text/javascript\">
        //        var condition = '{\"ageyear\":[\"gt\",0],\"height\":[\"gt\",0],\"salary\":[\"gt\",0],\"education\":[\"gt\",0],\"gender\":[\"eq\",2],\"avatar\":[\"neq\",\"\"],\"avatarflag\":\"1\"}';
        //
        //        //打招呼
      /*  \$('.recommend-list').on('tap', '.do-message-hi', function(event) {
            //判断是否在线
            if (\$(this).hasClass('active')) {
                mui.toast('您已经对TA打过招呼');
            } else {
                var url = \"?r=fossa/zhaohu\";
                var obj = \$(this);
                var id = obj.attr('objid');
//                alert(id)
                \$.ajax({
                    url: url,
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'userid': id
                    },
                    success: function(data) {
                        alert(data.status)
//                        if (data.status == 1) {
//                            obj.html('<span class=\"ico ico-msg-hi\"></span>已打招呼');
//                            obj.addClass('active');
//                            mui.toast('您对TA打了个招呼');
//                        } else if (data.status == 0) {
//                            mui.toast('打招呼失败,请重试..');
//                        } else {
//                            window.location.href = \"http://nbwqh.site/yuanlai/yuanlai/\";
//                        }
                    }
                });
            }
        });*/
        //发信息弹窗
        \$('.recommend-list').on('tap', '.do-message-add', function(event) {
            // 定义全局的userid
            userid = \$(this).attr('objid');
            \$('.layer').fadeIn();
            \$('.layer-message-add input').val('');
            //获取对话用户名
            \$('.layer-message-add label').text(\$(this).parents('li').find('.mui-media-body b').text());
            //获取用户ID
            \$('.layer-message-add input').val(\$(this).parents('li').find('.mui-media-body b').attr('id'));
            //文字域计算高度
            var h = \$('.layer-message-add').height() - \$('.layer-message-add .title').height();
            \$('.layer-message-add textarea').height(h * 0.8).val('');
        });
        //发消息
        \$('.layer').on('tap', '.do-message-send', function(event) {
            var id = \$('.layer-message-add input');
            var ct = \$('.layer-message-add textarea');
            //判断是否有发送对象
            if (userid == '') {
                mui.toast('无法获取对象');
                ct.focus();
                return false;
            }
            //判断是否填写信息内容
            if (ct.val() == '') {
                mui.toast('请输入您想对TA说的话');
                ct.focus();
                return false;
            }
            //删除
            //\$('.layer-close').click();
            var url = '?r=advices/addmessage';
            //alert(userid);
            //alert(ct.val());
            \$.ajax({
                url: url,
                type: 'post',
                //dataType: 'json',
                data: {
                    'userid': userid,
                    'message': ct.val()
                },
                success: function(data) {
                    //alert(data);
                    if (data== 1) {
                        \$('.layer-file-tips').animate({
                            top: '-100%'
                        }, 300);
                        \$('.layer').fadeOut(300);
                        mui.toast('消息已发出');
                    } else if (data == 0) {
                        mui.toast('发送信息失败,请重试..');
                    }
                }
            });
        });
        //关闭弹窗
        \$('.layer-close').click(function() {
            \$('.layer-file-tips').animate({
                top: '-100%'
            }, 300);
            \$('.layer').fadeOut(300);
        });
    </script>
    <!-- 会员推荐结束 -->
</div>
<!-- CNZZ代码 -->
<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=http%3A%2F%2Fm.7799520.com%2F&rnd=378533154\" width=\"0\" height=\"0\"/>\t</body>
<!--引用自定义脚本-->
<script src=\"/js/core.js\"></script>
<!--引用自定义脚本-->



</html>";
    }
}
