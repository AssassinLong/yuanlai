<?php

/* renwu.html */
class __TwigTemplate_5ed4ae6e784cb40fbbf8c52eacb0f7ceb5ad794f8b99a7513513c1eabd2817d7 extends Twig_Template
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
<!doctype html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <!-- 优先调用ie,谷歌内核 -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no\">
    <!-- ios页面标题 -->
    <meta name=\"apple-mobile-web-app-title\" content=\"每日签到\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
    <!-- 防止手机号码,email格式被点击 -->
    <meta name=\"format-detection\" content=\"telphone=no, email=no\" />
    <!-- 360浏览器调用webkit模式 -->
    <meta name=\"renderer\" content=\"webkit\">
    <!-- JQ调用-->
    <script src=\"web/js/jquery.min.js\"></script>
    <!-- mui框架调用 -->
    <script src=\"web/js/mui.min.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"web/css/mui.min.css\" />
    <link rel=\"stylesheet\" href=\"web/css/mui.picker.css\" />
    <script src=\"web/js/mui.picker.js\"></script>
    <!-- 阿里自适应框架调用 -->
    <!-- <script src=\"http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js\"></script> -->
    <!-- 自定义css调用 -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"web/css/core.css\" />
    <title>每日签到</title>
    <script>
    \$(window).ready(function() {
        (function(\$) {
            \$('body').on('tap', '.link', function(event) {
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
</head>

<body>
    <!-- 导航栏开始 -->
    <header class=\"mui-bar mui-bar-nav\">
        <a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
        <h1 class=\"mui-title\">每日签到</h1>
    </header>
    <!-- 导航栏结束 -->
    <div class=\"mui-content\">
        <!-- 个人签到信息开始 -->
        <div class=\"sign-area\">
            <img src=\"http://img.7799520.com/img/bg1.png\" />
            <div class=\"sign-area-s1\">
                <p>今日魅力值增加</p>
                <p class=\"sign-area-s1-p2\"><span id=\"sign-area-s1-p2-total\">";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "m_num", array()), "html", null, true);
        echo "</span><span id=\"sign-area-s1-p2-change\"></span></p>
                <p>当前魅力值 : <span class=\"todaypoint\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "usercp", array()), "html", null, true);
        echo "</span></p>
            </div>
           
        </div>
        <!-- 个人签到信息结束 -->
        <!-- 图文列表开始 -->
        <h3 class=\"sign-h3\">新用户任务中心</h3>
        <ul class=\"mui-table-view sign-list\">
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr"]) ? $context["arr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 87
            echo "           
            <li class=\"mui-table-view-cell mui-media\">
                <a href=\"javascript:;\" tag=\"finishMobileRz\">
                    <img class=\"mui-media-object mui-pull-left\" src=\"http://img.7799520.com/img/06.png\">
                    <div class=\"sign-media-middle\">
                        绑定手机号码
                        <p class=\"mui-ellipsis\">奖励：魅力值100点</p>
                    </div>
                    <div class=\"sign-media-right\">
                        <p class=\"missiontype\" id=\"getMobileRz\" tp=\"running\" pts=\"100\"><span>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "s_static", array()), "html", null, true);
            echo "</span> / <span>1</span></p>
                        ";
            // line 97
            if (($this->getAttribute($context["v"], "s_static", array()) != 1)) {
                // line 98
                echo "                        <img src=\"http://img.7799520.com/img/mrqd-area-btn2.png\" />
                        ";
            } else {
                // line 100
                echo "                        <img src=\"http://img.7799520.com/img/mrqd-area-btn3.png\" />
                        ";
            }
            // line 102
            echo "                    </div>
                </a>
            </li>
            <li class=\"mui-table-view-cell mui-media\">
                <a href=\"javascript:;\" tag=\"finishAvatar\">
                    <img class=\"mui-media-object mui-pull-left\" src=\"http://img.7799520.com/img/07.png\">
                    <div class=\"sign-media-middle\">
                        上传头像
                        <p class=\"mui-ellipsis\">奖励：魅力值50点</p>
                    </div>
                    <div class=\"sign-media-right\">
                        <p class=\"missiontype\" id=\"getAvatar\" tp=\"running\" pts=\"50\"><span>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "t_static", array()), "html", null, true);
            echo "</span> / <span>1</span></p>

                       ";
            // line 115
            if (($this->getAttribute($context["v"], "t_static", array()) != 1)) {
                // line 116
                echo "                        <img src=\"http://img.7799520.com/img/mrqd-area-btn2.png\" />
                        ";
            } else {
                // line 118
                echo "                        <img src=\"http://img.7799520.com/img/mrqd-area-btn3.png\" />
                        ";
            }
            // line 120
            echo "                    </div>
                </a>
            </li>
            <li class=\"mui-table-view-cell mui-media\">
                <a href=\"javascript:;\" tag=\"finishMonolog\">
                    <img class=\"mui-media-object mui-pull-left\" src=\"http://img.7799520.com/img/08.png\">
                    <div class=\"sign-media-middle\">
                        发表内心独白
                        <p class=\"mui-ellipsis\">奖励：魅力值50点</p>
                    </div>
                    <div class=\"sign-media-right\">
                        <p class=\"missiontype\" id=\"getMonolog\" tp=\"running\" pts=\"50\"><span>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "f_static", array()), "html", null, true);
            echo "</span> / <span>1</span></p>

                        ";
            // line 133
            if (($this->getAttribute($context["v"], "f_static", array()) != 1)) {
                // line 134
                echo "                        <img src=\"http://img.7799520.com/img/mrqd-area-btn2.png\" />
                        ";
            } else {
                // line 136
                echo "                        <img src=\"http://img.7799520.com/img/mrqd-area-btn3.png\" />
                        ";
            }
            // line 138
            echo "                    </div>
                </a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "        </ul>
        <!-- 图文列表结束 -->
    </div>
    <div class=\"sign-jpbox\" style=\"display: none;opacity: 0\"></div>
</body>
<!--引用自定义脚本-->
<script src=\"web/js/core.js\"></script>
<script src=\"/js/sign/index.js\"></script>
</html>
";
    }

    public function getTemplateName()
    {
        return "renwu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 142,  197 => 138,  193 => 136,  189 => 134,  187 => 133,  182 => 131,  169 => 120,  165 => 118,  161 => 116,  159 => 115,  154 => 113,  141 => 102,  137 => 100,  133 => 98,  131 => 97,  127 => 96,  116 => 87,  112 => 86,  101 => 78,  97 => 77,  19 => 1,);
    }

    public function getSource()
    {
        return "
<!doctype html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <!-- 优先调用ie,谷歌内核 -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no\">
    <!-- ios页面标题 -->
    <meta name=\"apple-mobile-web-app-title\" content=\"每日签到\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
    <!-- 防止手机号码,email格式被点击 -->
    <meta name=\"format-detection\" content=\"telphone=no, email=no\" />
    <!-- 360浏览器调用webkit模式 -->
    <meta name=\"renderer\" content=\"webkit\">
    <!-- JQ调用-->
    <script src=\"web/js/jquery.min.js\"></script>
    <!-- mui框架调用 -->
    <script src=\"web/js/mui.min.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"web/css/mui.min.css\" />
    <link rel=\"stylesheet\" href=\"web/css/mui.picker.css\" />
    <script src=\"web/js/mui.picker.js\"></script>
    <!-- 阿里自适应框架调用 -->
    <!-- <script src=\"http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js\"></script> -->
    <!-- 自定义css调用 -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"web/css/core.css\" />
    <title>每日签到</title>
    <script>
    \$(window).ready(function() {
        (function(\$) {
            \$('body').on('tap', '.link', function(event) {
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
</head>

<body>
    <!-- 导航栏开始 -->
    <header class=\"mui-bar mui-bar-nav\">
        <a class=\"mui-action-back mui-icon mui-icon-left-nav mui-pull-left\"></a>
        <h1 class=\"mui-title\">每日签到</h1>
    </header>
    <!-- 导航栏结束 -->
    <div class=\"mui-content\">
        <!-- 个人签到信息开始 -->
        <div class=\"sign-area\">
            <img src=\"http://img.7799520.com/img/bg1.png\" />
            <div class=\"sign-area-s1\">
                <p>今日魅力值增加</p>
                <p class=\"sign-area-s1-p2\"><span id=\"sign-area-s1-p2-total\">{{ data.m_num }}</span><span id=\"sign-area-s1-p2-change\"></span></p>
                <p>当前魅力值 : <span class=\"todaypoint\">{{ data[0].usercp }}</span></p>
            </div>
           
        </div>
        <!-- 个人签到信息结束 -->
        <!-- 图文列表开始 -->
        <h3 class=\"sign-h3\">新用户任务中心</h3>
        <ul class=\"mui-table-view sign-list\">
        {% for v in arr %}
           
            <li class=\"mui-table-view-cell mui-media\">
                <a href=\"javascript:;\" tag=\"finishMobileRz\">
                    <img class=\"mui-media-object mui-pull-left\" src=\"http://img.7799520.com/img/06.png\">
                    <div class=\"sign-media-middle\">
                        绑定手机号码
                        <p class=\"mui-ellipsis\">奖励：魅力值100点</p>
                    </div>
                    <div class=\"sign-media-right\">
                        <p class=\"missiontype\" id=\"getMobileRz\" tp=\"running\" pts=\"100\"><span>{{v.s_static}}</span> / <span>1</span></p>
                        {% if v.s_static !=1 %}
                        <img src=\"http://img.7799520.com/img/mrqd-area-btn2.png\" />
                        {% else %}
                        <img src=\"http://img.7799520.com/img/mrqd-area-btn3.png\" />
                        {%endif%}
                    </div>
                </a>
            </li>
            <li class=\"mui-table-view-cell mui-media\">
                <a href=\"javascript:;\" tag=\"finishAvatar\">
                    <img class=\"mui-media-object mui-pull-left\" src=\"http://img.7799520.com/img/07.png\">
                    <div class=\"sign-media-middle\">
                        上传头像
                        <p class=\"mui-ellipsis\">奖励：魅力值50点</p>
                    </div>
                    <div class=\"sign-media-right\">
                        <p class=\"missiontype\" id=\"getAvatar\" tp=\"running\" pts=\"50\"><span>{{v.t_static}}</span> / <span>1</span></p>

                       {% if v.t_static !=1 %}
                        <img src=\"http://img.7799520.com/img/mrqd-area-btn2.png\" />
                        {% else %}
                        <img src=\"http://img.7799520.com/img/mrqd-area-btn3.png\" />
                        {%endif%}
                    </div>
                </a>
            </li>
            <li class=\"mui-table-view-cell mui-media\">
                <a href=\"javascript:;\" tag=\"finishMonolog\">
                    <img class=\"mui-media-object mui-pull-left\" src=\"http://img.7799520.com/img/08.png\">
                    <div class=\"sign-media-middle\">
                        发表内心独白
                        <p class=\"mui-ellipsis\">奖励：魅力值50点</p>
                    </div>
                    <div class=\"sign-media-right\">
                        <p class=\"missiontype\" id=\"getMonolog\" tp=\"running\" pts=\"50\"><span>{{v.f_static}}</span> / <span>1</span></p>

                        {% if v.f_static !=1 %}
                        <img src=\"http://img.7799520.com/img/mrqd-area-btn2.png\" />
                        {% else %}
                        <img src=\"http://img.7799520.com/img/mrqd-area-btn3.png\" />
                        {%endif%}
                    </div>
                </a>
            </li>
            {% endfor %}
        </ul>
        <!-- 图文列表结束 -->
    </div>
    <div class=\"sign-jpbox\" style=\"display: none;opacity: 0\"></div>
</body>
<!--引用自定义脚本-->
<script src=\"web/js/core.js\"></script>
<script src=\"/js/sign/index.js\"></script>
</html>
";
    }
}
