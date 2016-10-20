<?php

/* advices.html */
class __TwigTemplate_69360cce3c232a3ef9c6ac45c197e869e1ee00a124e42e2175ab940fb5039ece extends Twig_Template
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"./web/css/a.css?v=102\">
    <!--引用Jquery-->
    <script src=\"./web/js/jquery.min.js\"></script>
    <script src=\"./web/js/mui.min.js\"></script>
    <script src=\"./web/js/core.js\"></script>
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

    <title>消息列表</title>
</head>

<body class=\"backgroud-white\">
<!-- 导航栏开始 -->
<header class=\"mui-bar mui-bar-nav\">
    <a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
    <h1 class=\"mui-title\">消息列表</h1>
        <a href=\"?r=home/index\" class=\"mui-bar-nav-home link\"></a>
</header>
<!-- 导航栏结束 -->

<div class=\"mui-content\"  pull-obj=\"mui-table-view\">
    <!-- 消息列表开始 -->
    <div class=\"message-list\">
        <ul class=\"mui-table-view\"></ul>
    </div>

    <div class=\"message-list\">
        <ul class=\"mui-table-view\">
            <li class=\"mui-table-view-cell mui-media\">
                <div class=\"mui-slider-handle\">
                    <a href=\"?r=advices/systems\" class=\"link\">
                        <div class=\"clip-bg mui-pull-left mui-media-object system\"></div>
                        <div class=\"mui-media-body\">
                        <p class=\"title\"><b>系统消息</b></p>
                            <p class=\"mui-ellipsis\">暂未有系统消息</p>
                            <label></label>
                        </div>
                    </a>
                </div>
            </li>
            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr"]) ? $context["arr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 81
            echo "            <li class=\"mui-table-view-cell mui-media\"><div class=\"mui-slider-handle\">
                <a href=\"?r=advices/friend/id/";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "u_id", array()), "html", null, true);
            echo "\" class=\"link\">
                    <div class=\"clip-bg mui-pull-left mui-media-object\" style=\"background: url(/img/avata-1.png);\"></div>
                    <div class=\"mui-media-body\"><p class=\"title\"><b>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "real_name", array()), "html", null, true);
            echo "</b><em class=\"active\">
                        <span class=\"ico ico-male\"></span>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "age", array()), "html", null, true);
            echo "</em></p><p class=\"mui-ellipsis\">发来";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "num", array()), "html", null, true);
            echo "条聊天信息</p>
                        <label>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "createtime", array()), "html", null, true);
            echo "</label>
                    </div>
                </a>
            </div></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "        </ul>
    </div>

    <script src=\"./web/js/auto-pull.js\"></script>

    <script type=\"text/javascript\">
        mui.init();
        (function(\$) {
            var btnArray = ['确认', '取消'];
            \$('.message-list ul').on('tap', '.mui-btn', function(event) {
                var elem = this;
                var li = elem.parentNode.parentNode;
                mui.confirm('您要删除此信息吗？', '', btnArray, function(e) {
                    if (e.index == 0) {
                        var url = 'http://m.7799520.com/self/delNewsByUserid';
                        mui.ajax(url, {
                            data: {
                                'newsid': elem.getAttribute('objid'),
                            },
                            dataType: 'json',
                            async: false,
                            type: 'post',
                            success: function(data) {
                                //移除信息
                                li.parentNode.removeChild(li);
                            },
                            error: function(xhr, type, errorThrown) {
                                console.log(type);
                                alert(type);
                            }
                        });
                    }
                });
            });
        })(mui);
    </script>
    <!-- 消息列表结束 -->

</div>
<!-- CNZZ代码 -->
<!--引用自定义脚本-->
<script src=\"./web/js/core.js\"></script>
<!--引用自定义脚本-->";
    }

    public function getTemplateName()
    {
        return "advices.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 91,  122 => 86,  116 => 85,  112 => 84,  107 => 82,  104 => 81,  100 => 80,  19 => 1,);
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"./web/css/a.css?v=102\">
    <!--引用Jquery-->
    <script src=\"./web/js/jquery.min.js\"></script>
    <script src=\"./web/js/mui.min.js\"></script>
    <script src=\"./web/js/core.js\"></script>
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

    <title>消息列表</title>
</head>

<body class=\"backgroud-white\">
<!-- 导航栏开始 -->
<header class=\"mui-bar mui-bar-nav\">
    <a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
    <h1 class=\"mui-title\">消息列表</h1>
        <a href=\"?r=home/index\" class=\"mui-bar-nav-home link\"></a>
</header>
<!-- 导航栏结束 -->

<div class=\"mui-content\"  pull-obj=\"mui-table-view\">
    <!-- 消息列表开始 -->
    <div class=\"message-list\">
        <ul class=\"mui-table-view\"></ul>
    </div>

    <div class=\"message-list\">
        <ul class=\"mui-table-view\">
            <li class=\"mui-table-view-cell mui-media\">
                <div class=\"mui-slider-handle\">
                    <a href=\"?r=advices/systems\" class=\"link\">
                        <div class=\"clip-bg mui-pull-left mui-media-object system\"></div>
                        <div class=\"mui-media-body\">
                        <p class=\"title\"><b>系统消息</b></p>
                            <p class=\"mui-ellipsis\">暂未有系统消息</p>
                            <label></label>
                        </div>
                    </a>
                </div>
            </li>
            {% for val in arr %}
            <li class=\"mui-table-view-cell mui-media\"><div class=\"mui-slider-handle\">
                <a href=\"?r=advices/friend/id/{{ val.u_id }}\" class=\"link\">
                    <div class=\"clip-bg mui-pull-left mui-media-object\" style=\"background: url(/img/avata-1.png);\"></div>
                    <div class=\"mui-media-body\"><p class=\"title\"><b>{{ val.real_name }}</b><em class=\"active\">
                        <span class=\"ico ico-male\"></span>{{ val.age }}</em></p><p class=\"mui-ellipsis\">发来{{ val.num }}条聊天信息</p>
                        <label>{{ val.createtime }}</label>
                    </div>
                </a>
            </div></li>
            {% endfor %}
        </ul>
    </div>

    <script src=\"./web/js/auto-pull.js\"></script>

    <script type=\"text/javascript\">
        mui.init();
        (function(\$) {
            var btnArray = ['确认', '取消'];
            \$('.message-list ul').on('tap', '.mui-btn', function(event) {
                var elem = this;
                var li = elem.parentNode.parentNode;
                mui.confirm('您要删除此信息吗？', '', btnArray, function(e) {
                    if (e.index == 0) {
                        var url = 'http://m.7799520.com/self/delNewsByUserid';
                        mui.ajax(url, {
                            data: {
                                'newsid': elem.getAttribute('objid'),
                            },
                            dataType: 'json',
                            async: false,
                            type: 'post',
                            success: function(data) {
                                //移除信息
                                li.parentNode.removeChild(li);
                            },
                            error: function(xhr, type, errorThrown) {
                                console.log(type);
                                alert(type);
                            }
                        });
                    }
                });
            });
        })(mui);
    </script>
    <!-- 消息列表结束 -->

</div>
<!-- CNZZ代码 -->
<!--引用自定义脚本-->
<script src=\"./web/js/core.js\"></script>
<!--引用自定义脚本-->";
    }
}
