<?php

/* suggest.html */
class __TwigTemplate_cd34925285efe292ae4b80a0f30371c66b665b13a29027ef59470ac7c8cbadc2 extends Twig_Template
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
            <span class=\"mui-icon mui-icon-checkmarkempty mui-poppicker-btn-ok mui-pull-right do-message-send\"></span>
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
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ars"]) ? $context["ars"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["vs"]) {
            // line 97
            echo "            <li class=\"mui-table-view-cell mui-media\">
                <div class=\"mui-pull-left mui-media-object clip-bg\" style=\"background: url(http://www.7799520.com/jiaoyou/data/attachment/avatar/201512/14/231449/avatar_big.jpg.thumb.jpg);\">
                    <a href=\"\" class=\"link\"></a>
                </div><div class=\"mui-media-body\">
                <a href=\"?r=home/fossa/tid/";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["vs"], "id", array()), "html", null, true);
            echo "\" class=\"link\">
                    <b>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["vs"], "name", array()), "html", null, true);
            echo "</b><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vs"], "age", array()), "html", null, true);
            echo "岁，";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vs"], "region", array()), "html", null, true);
            echo "，152cm</span>
                    <p class=\"mui-ellipsis\">内心独白：";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["vs"], "mono", array()), "html", null, true);
            echo "</p></a></div><div>
                <a href=\"javascript:;\" class=\"do-message-hi\" objid=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["vs"], "u_id", array()), "html", null, true);
            echo "\"><span class=\"ico ico-msg-hi\"></span>打招呼</a>
                <a href=\"javascript:;\" objid=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["vs"], "u_id", array()), "html", null, true);
            echo "\" class=\"do-message-add\"><span class=\"ico ico-msg-call\"></span>发信息</a>
            </div>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "        </ul>
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
        \$('.recommend-list').on('tap', '.do-message-hi', function(event) {
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
        });
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
            \$('.layer-close').click();
            var url = 'http://m.7799520.com/send/addMessage';
            alert(userid)
//            \$.ajax({
//                url: url,
//                type: 'post',
//                dataType: 'json',
//                data: {
//                    'userid': userid,
//                    'message': ct.val()
//                },
//                success: function(data) {
//                    if (data.status == 1) {
//                        mui.toast('消息已发出');
//                    } else if (data.status == 0) {
//                        mui.toast('发送信息,请重试..');
//                    } else {
//                        window.location.href = \"http://m.7799520.com/login\";
//                    }
//                }
//            });
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
        return array (  156 => 109,  146 => 105,  142 => 104,  138 => 103,  130 => 102,  126 => 101,  120 => 97,  116 => 96,  19 => 1,);
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
            <span class=\"mui-icon mui-icon-checkmarkempty mui-poppicker-btn-ok mui-pull-right do-message-send\"></span>
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
                <div class=\"mui-pull-left mui-media-object clip-bg\" style=\"background: url(http://www.7799520.com/jiaoyou/data/attachment/avatar/201512/14/231449/avatar_big.jpg.thumb.jpg);\">
                    <a href=\"\" class=\"link\"></a>
                </div><div class=\"mui-media-body\">
                <a href=\"?r=home/fossa/tid/{{vs.id}}\" class=\"link\">
                    <b>{{ vs.name }}</b><span>{{ vs.age }}岁，{{ vs.region }}，152cm</span>
                    <p class=\"mui-ellipsis\">内心独白：{{ vs.mono }}</p></a></div><div>
                <a href=\"javascript:;\" class=\"do-message-hi\" objid=\"{{ vs.u_id }}\"><span class=\"ico ico-msg-hi\"></span>打招呼</a>
                <a href=\"javascript:;\" objid=\"{{ vs.u_id }}\" class=\"do-message-add\"><span class=\"ico ico-msg-call\"></span>发信息</a>
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
        \$('.recommend-list').on('tap', '.do-message-hi', function(event) {
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
        });
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
            \$('.layer-close').click();
            var url = 'http://m.7799520.com/send/addMessage';
            alert(userid)
//            \$.ajax({
//                url: url,
//                type: 'post',
//                dataType: 'json',
//                data: {
//                    'userid': userid,
//                    'message': ct.val()
//                },
//                success: function(data) {
//                    if (data.status == 1) {
//                        mui.toast('消息已发出');
//                    } else if (data.status == 0) {
//                        mui.toast('发送信息,请重试..');
//                    } else {
//                        window.location.href = \"http://m.7799520.com/login\";
//                    }
//                }
//            });
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
