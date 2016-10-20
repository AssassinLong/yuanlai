<?php

/* systems.html */
class __TwigTemplate_1b37a9c08c1895a466a8048bf4f8d1679337d0d394013edea92c139d1100e936 extends Twig_Template
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

    <title>系统消息</title>
</head>
<body class=\"backgroud-white\">
<!-- 导航栏开始 -->
<header class=\"mui-bar mui-bar-nav\">
    <a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
    <h1 class=\"mui-title\">系统消息</h1>
</header>
<!-- 导航栏结束 -->

<div class=\"mui-content\"  pull-obj=\"mui-table-view\">
    <!-- 系统消息开始 -->
    <div class=\"message-list\">
        <ul class=\"mui-table-view\"></ul>
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
                                'newsid': elem.getAttribute('objid')
                            },
                            dataType: 'json',
                            async: false,
                            type: 'post',
                            success: function(data) {
                                //数据状态判断
                                if (data.status) {
                                    if (data.status == 0) {
                                        //失败
                                        alert(data.message);
                                        return false;
                                    } else if (data.status == 2) {
                                        //未登录
                                        window.location.href = '';
                                        return false;
                                    } else {
                                        li.parentNode.removeChild(li);
                                    }
                                } else {
                                    alert('Data Error');
                                    return false;
                                }
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
    <!-- 系统消息结束 -->
    <div class=\"empty\">
        <span></span>
        &#26242;&#26080;&#35760;&#24405;
    </div>
</div>
<!-- CNZZ代码 -->
<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=http%3A%2F%2Fm.7799520.com%2Fself%2Fnews&rnd=146478015\" width=\"0\" height=\"0\"/>\t</body>
<!--引用自定义脚本-->
<script src=\"./web/js/core.js\"></script>
<!--引用自定义脚本-->



</html>";
    }

    public function getTemplateName()
    {
        return "systems.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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

    <title>系统消息</title>
</head>
<body class=\"backgroud-white\">
<!-- 导航栏开始 -->
<header class=\"mui-bar mui-bar-nav\">
    <a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
    <h1 class=\"mui-title\">系统消息</h1>
</header>
<!-- 导航栏结束 -->

<div class=\"mui-content\"  pull-obj=\"mui-table-view\">
    <!-- 系统消息开始 -->
    <div class=\"message-list\">
        <ul class=\"mui-table-view\"></ul>
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
                                'newsid': elem.getAttribute('objid')
                            },
                            dataType: 'json',
                            async: false,
                            type: 'post',
                            success: function(data) {
                                //数据状态判断
                                if (data.status) {
                                    if (data.status == 0) {
                                        //失败
                                        alert(data.message);
                                        return false;
                                    } else if (data.status == 2) {
                                        //未登录
                                        window.location.href = '';
                                        return false;
                                    } else {
                                        li.parentNode.removeChild(li);
                                    }
                                } else {
                                    alert('Data Error');
                                    return false;
                                }
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
    <!-- 系统消息结束 -->
    <div class=\"empty\">
        <span></span>
        &#26242;&#26080;&#35760;&#24405;
    </div>
</div>
<!-- CNZZ代码 -->
<img src=\"http://c.cnzz.com/wapstat.php?siteid=1258721820&r=http%3A%2F%2Fm.7799520.com%2Fself%2Fnews&rnd=146478015\" width=\"0\" height=\"0\"/>\t</body>
<!--引用自定义脚本-->
<script src=\"./web/js/core.js\"></script>
<!--引用自定义脚本-->



</html>";
    }
}
