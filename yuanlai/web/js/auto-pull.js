//兼容UC浏览器
(function($) {
    //链接点击跳转（需要跳转的a标签附加link的class）
    $('body').on('tap', '.link', function(event) {
        var url = this.getAttribute('href');
        var blank = this.getAttribute('target');

        if (blank == '_blank') {
            window.open(url);
        } else {
            window.location.href = url;
        }
    });
})(mui);

var base_url = 'http://m.7799520.com/';
var load = 0;
var page = 0; //默认页
var url = ''; //默认Ajax地址
var ajax_data = {}; //默认Ajax传递数据
ajax_data['page'] = page;
var obj = $('.mui-content').attr('pull');
var default_obj = $('.mui-content').attr('pull-obj');
var arr = new Array();
arr['apply'] = new Array();
arr['apply']['url'] = base_url + 'self/getMorePartyInfo';
arr['apply']['tag'] = obj;
arr['focus'] = new Array();
arr['focus']['url'] = base_url + 'self/getMoreInfoByTag';
arr['focus']['tag'] = obj;
arr['view'] = new Array();
arr['view']['url'] = base_url + 'self/getMoreInfoByTag';
arr['view']['tag'] = 'saw';
arr['fans'] = new Array();
arr['fans']['url'] = base_url + 'self/getMoreInfoByTag';
arr['fans']['tag'] = obj;
arr['look'] = new Array();
arr['look']['url'] = base_url + 'self/getMoreInfoByTag';
arr['look']['tag'] = obj;
arr['msg'] = new Array();
arr['msg']['url'] = base_url + 'self/news';
arr['msg']['tag'] = obj;
arr['sys-msg'] = new Array();
arr['sys-msg']['url'] = base_url + 'self/system';
arr['sys-msg']['tag'] = obj;
arr['article'] = new Array();
arr['article']['url'] = base_url + 'news/getMoreNewsInfo';
arr['article']['tag'] = obj;
arr['active'] = new Array();
arr['active']['url'] = base_url + 'party/getMorePartyInfo';
arr['active']['tag'] = obj;
arr['weibo-list'] = new Array();
arr['weibo-list']['url'] = base_url + 'weibo/getMoreWeiboInfo';
arr['weibo-list']['tag'] = obj;
arr['my-weibo'] = new Array();
arr['my-weibo']['url'] = base_url + 'self/getMoreWeiboInfo';
arr['my-weibo']['tag'] = obj;
arr['recommend'] = new Array();
arr['recommend']['url'] = base_url + 'recommend/flushRecommend';
arr['recommend']['tag'] = obj;
arr['team'] = new Array();
arr['team']['url'] = base_url + 'team/getHongniangInfo';
arr['team']['tag'] = obj;


$(function() {
    //输出样式
    $('.mui-content').append('<div class="auto-pull"><span class="mui-spinner"></span>\u6b63\u5728\u52aa\u529b\u52a0\u8f7d\u4e2d\u2026</div>');

    //判断对象
    url = arr[obj]['url'];
    ajax_data['tag'] = arr[obj]['tag'];

    //多个条件判断
    if (obj == 'active') {
        ajax_data['tag_id'] = $('.article-nav .active').attr('tag');
    } else if (obj == 'recommend') {
        ajax_data['condition'] = condition;
    } else if (obj == 'weibo-list') {
        ajax_data['userid'] = $('#userid').attr('userid');
    }

    //读取内容
    AjaxLoad(obj);

    //滚动监听
    $(window).bind('scroll', function() {
        //提前一屏触发更新
        var bot = $(window).height();
        if ((bot + $(window).scrollTop()) >= ($(document).height() - $(window).height())) {
            AjaxLoad(obj);
        }
    });
});

/**
 * Ajax加载
 */
function AjaxLoad() {
    if (load == 0) {
        load = 1;
        $('.auto-pull').show();

        setTimeout(function() {
            mui.ajax(url, {
                data: ajax_data,
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
                        }
                    } else {
                        alert('Data Error');
                        return false;
                    }

                    //数据判断
                    if (data.result) {
                        //加载页面
                        $('.' + default_obj).append(JsonHtml(obj, data.result));
                        page++;
                        ajax_data['page'] = page;
                    } else {
                        //没有数据
                        if (page == 0) {
                            //没有内容
                            $('.mui-content').append('<div class="empty"><span></span>\u6682\u65e0\u8bb0\u5f55</div>');
                            $(window).unbind('scroll');
                        } else {
                            //加载结束
                            $('.auto-pull').text('\u6ca1\u6709\u66f4\u591a\u5185\u5bb9\u4e86\u2026').show();
                            $(window).unbind('scroll');
                        }
                    }
                    $('.auto-pull').hide();
                    load = 0;
                },
                error: function(xhr, type, errorThrown) {
                    console.log(type);
                    alert(type);
                    $('.auto-pull').hide();
                    load = 0;
                }
            });
        }, 0);
    }
}

/**
 * Json处理
 */
function JsonHtml(obj, data) {
    var HTML = '';
    switch (obj) {
        case "team":
            for (var i = 0; i < data.length; i++) {
                var obj = data[i];
                HTML += '<li class="mui-table-view-cell mui-media"><a href="http://m.7799520.com/team/'+obj["hongniangid"]+'.html" class="mui-navigate-right link"><div class="mui-pull-left mui-media-object clip-bg" style="background: url('+obj['uploadfiles']+');"></div><div class="mui-media-body">'+obj["name"]+'<span>'+obj['workage']+'年经验</span><label>'+obj['successnum']+'对成功案例</label><p class="mui-ellipsis">擅长：'+obj['domain']+'</p></div><button type="button" class="active"><span class="ico ico-heart"></span>求撮合</button></a></li>';
            };
            break;
        case "team-detail":
            HTML = '<li class="mui-table-view-cell mui-media"><div class="mui-slider-handle"><div class="clip-bg mui-pull-left mui-media-object" style="background: url(tmp/member-face.png);"><a href="个人资料.html" class="link"></a></div><div class="mui-media-body"><p class="title"><a href="个人资料.html" class="link"><b>卡布奇诺</b></a><span>05-20 23:46</span></p><p>我昨天和老公聊了一夜，我已经决定辞掉工作 区找他，两个人在一起比什么都重要吗？</p><p class="reply"><b>许老师：</b>是的，不过两人在一起也会遇到很多问 题，你要用我之前教你的方法处理矛盾和问题</p></div></div></li>';
            break;
        case "store":
            HTML = '<li class="mui-table-view-cell mui-media"><a href="门店详情.html" class="link"><div class="mui-pull-left mui-media-object clip-bg" style="background: url(tmp/store1.png);"></div><div class="mui-media-body"><b>福州门店</b><span>客户专线：0591-87871520</span><p class="mui-ellipsis">门店地址：东街43号新都会财经广场13层/层 （福州一中对面）</p></div></a></li>';
            break;
        case "article":
            for (var i = 0; i < data.length; i++) {
                var obj = data[i];
                HTML += '<li class="mui-table-view-cell mui-media"><a href="http://m.7799520.com/news/' + obj.id + '.html" class="link"><img class="mui-media-object mui-pull-left" src="' + obj.title_img_url + '"><div class="mui-media-body"><p class="mui-ellipsis">' + obj.title + '</p><label>' + obj.created_time + '</label><label class="view"><span class="mui-icon mui-icon-search"></span>' + obj.click_numbers + '</label></div></a></li>';
            }
            break;
        case "active-detail":
            HTML = '<li class="mui-table-view-cell mui-media"><div class="mui-slider-handle"><div class="clip-bg mui-pull-left mui-media-object" style="background: url(tmp/member-face1.png);"><a href="个人资料.html" class="link"></a></div><div class="mui-media-body"><p class="title"><a href="个人资料.html" class="link"><b>阳光夏天</b></a><span>05-20 18:00</span></p><p>很好很好  支持！</p></div></div></li>';
            break;
        case "look":
            var y = new Date();
            for (var i = 0; i < data.length; i++) {
                var obj = data[i];
                HTML += '<li class="mui-table-view-cell mui-media"><div class="mui-slider-handle"><a href="http://m.7799520.com/user/' + obj.viewuserid + '.html" class="link"><div class="clip-bg mui-pull-left mui-media-object" style="background: url(' + obj.info.avatar + ');"></div><div class="mui-media-body"><p class="title"><b>' + obj.info.username + '</b><span>' + (y.getFullYear() - obj.info.ageyear) + '岁 . ' + obj.info.provinceid + ' ' + obj.info.cityid + ' . ' + obj.info.height + 'CM</span></p><p class="mui-ellipsis">' + obj.info.monolog + '</p><label>' + obj.viewtime + '</label></div></a></div></li>';
            }
            break;
        case "fans":
            var y = new Date();
            for (var i = 0; i < data.length; i++) {
                var obj = data[i];
                HTML += '<li class="mui-table-view-cell mui-media"><div class="mui-slider-handle"><a href="http://m.7799520.com/user/' + obj.userid + '.html" class="link"><div class="clip-bg mui-pull-left mui-media-object" style="background: url(' + obj.info.avatar + ');"></div><div class="mui-media-body"><p class="title"><b>' + obj.info.username + '</b><span>' + (y.getFullYear() - obj.info.ageyear) + '岁 . ' + obj.info.provinceid + ' ' + obj.info.cityid + ' . ' + obj.info.height + 'CM</span></p><p class="mui-ellipsis">' + obj.info.monolog + '</p><label>' + obj.timeline + '</label></div></a></div></li>';
            }
            break;
        case "view":
            var y = new Date();
            for (var i = 0; i < data.length; i++) {
                var obj = data[i];
                HTML += '<li class="mui-table-view-cell mui-media" objid="' + obj.homeuserid + '"><div class="mui-slider-right mui-disabled"><a class="mui-btn mui-btn-red">删除记录</a></div><div class="mui-slider-handle"><a href="http://m.7799520.com/user/' + obj.homeuserid + '.html" class="link"><div class="clip-bg mui-pull-left mui-media-object" style="background: url(' + obj.info.avatar + ');"></div><div class="mui-media-body"><p class="title"><b>' + obj.info.username + '</b><span>' + (y.getFullYear() - obj.info.ageyear) + '岁 . ' + obj.info.provinceid + ' ' + obj.info.cityid + ' . ' + obj.info.height + 'CM</span></p><p class="mui-ellipsis">' + obj.info.monolog + '</p><label>' + obj.viewtime + '</label></div></a></div></li>';
            }
            break;
        case "focus":
            var y = new Date();
            for (var i = 0; i < data.length; i++) {
                var obj = data[i];
                HTML += '<li class="mui-table-view-cell mui-media" objid="' + obj.fuserid + '"><div class="mui-slider-right mui-disabled"><a class="mui-btn mui-btn-red">取消关注</a></div><div class="mui-slider-handle"><a href="http://m.7799520.com/user/' + obj.fuserid + '.html" class="link"><div class="clip-bg mui-pull-left mui-media-object" style="background: url(' + obj.info.avatar + ');"></div><div class="mui-media-body"><p class="title"><b>' + obj.info.username + '</b><span>' + (y.getFullYear() - obj.info.ageyear) + '岁 . ' + obj.info.provinceid + ' ' + obj.info.cityid + ' . ' + obj.info.height + 'CM</span></p><p class="mui-ellipsis"></p></div></a></div></li>';
            }
            break;
        case "active":
            for (var i = 0; i < data.length; i++) {
                var obj = data[i];
                HTML += '<li class="mui-table-view-cell"><a href="http://m.7799520.com/party/' + obj.id + '.html" class="link"><img src="' + obj.title_img_url + '"><div><b class="mui-ellipsis">' + obj.title + '</b><p class="mui-ellipsis">' + obj.description + '</p><button class="mui-btn mui-btn-warning" type="button">免费报名</button></div><p class="time"><span class="ico ico-call mui-pull-left"></span>' + obj.begin_time + '<label class="mui-pull-right">已有' + obj.set_nums + '人报名   </label></p></a></li>';
            }
            break;
        case "recommend":
            var y = new Date();
            for (var i = 0; i < data.length; i++) {
                var obj = data[i];
                HTML += '<li class="mui-table-view-cell mui-media"><div class="mui-pull-left mui-media-object clip-bg" style="background: url(' + obj["avatar"] + ');"><a href="http://m.7799520.com/user/' + obj["userid"] + '.html" class="link"></a></div><div class="mui-media-body"><a href="http://m.7799520.com/user/' + obj["userid"] + '.html" class="link"><b>' + obj["username"] + '</b><span>' + (y.getFullYear() - obj["ageyear"]) + '岁，' + obj["provinceid"] + '，' + obj["height"] + 'cm</span><p class="mui-ellipsis">内心独白：' + obj["monolog"] + '</p></a></div><div><a href="javascript:;" class="do-message-hi" objid="' + obj["userid"] + '"><span class="ico ico-msg-hi"></span>打招呼</a><a href="javascript:;" objid="' + obj["userid"] + '" class="do-message-add"><span class="ico ico-msg-call"></span>发信息</a></div></li>';
            }
            break;
        case "diary-detail":
            HTML = '<li class="mui-table-view-cell mui-media"><div class="mui-slider-handle"><div class="clip-bg mui-pull-left mui-media-object" style="background: url(tmp/member-face1.png);"><a href="个人资料.html" class="link"></a></div><div class="mui-media-body"><p class="title"><a href="个人资料.html" class="link"><b>阳光夏天</b></a><span>05-20 18:00</span></p><p>很好很好  支持！</p></div></div></li>';
            break;
        case "weibo-list":
            for (var i = 0; i < data.length; i++) {
                var obj = data[i];
                HTML += '<li class="mui-table-view-cell mui-media"><div class="mui-pull-left mui-media-object clip-bg" style="background: url(' + obj["avatar"] + ');"><a href="http://m.7799520.com/user/' + obj["userid"] + '.html" class="link"></a></div><div class="mui-media-body"><a href="http://m.7799520.com/user/' + obj["userid"] + '.html" class="link"><b><font>' + obj["username"] + '</font><span class="mui-pull-right">' + obj["formatTime"] + '</span></b><span>' + obj["firsttime"] + ' . ' + obj["provinceid"] + ' ' + obj["cityid"] + '</span></a></div><div><a href="http://m.7799520.com/weibo/' + obj["wbid"] + '.html" class="link"><p>' + obj["content"] + '</p></a></div>';

                if (obj["isimg"]) {
                    HTML += '<a href="http://m.7799520.com/weibo/' + obj["wbid"] + '.html" class="link"><ul class="mui-table-view mui-grid-view">';
                    for (var j = 0; j < obj["isimg"].length; j++) {
                        HTML += '<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4"><div class="clip-bg" style="background: url(' + obj["isimg"][j]['path'] + ');"></div><p></p></li>';
                    }
                    HTML += '</ul></a>';
                }

                HTML += '<div><a href="javascript:;" class="do-collect';

                if (obj["selfDing"]) {
                    HTML += ' active';
                }

                HTML += '" objid="' + obj["wbid"] + '"><span class="ico ico-msg-heart"></span><label>' + obj["isding"] + '</label></a><a href="javascript:;" class="do-message-add" objid="' + obj["userid"] + '"><span class="ico ico-msg-call"></span>发信息</a></div></li>';
            }
            break;
        case "diary-list":
            HTML = '<li class="mui-table-view-cell mui-media"><div class="mui-pull-left mui-media-object clip-bg" style="background: url(tmp/member-face1.png);"><a href="个人资料.html" class="link"></a></div><div class="mui-media-body"><a href="个人资料.html" class="link"><b id=""><font>骑着乌龟看海</font><span class="mui-pull-right">55741人浏览</span></b><span>05-01 . 广东 广州</span></a></div><div><a href="日记详情.html" class="link"><p class="title"><span class="ico ico-edit"></span>大家好，我是潘盼盼</p><p>五月了。 好好工作，积极锻炼，姻缘事不要抱过多期望， 但也不要象祥林嫂似地抱怨看脸社会、女人价值由年龄 来确定等，虽然很多确实是事实。</p></a></div><div><a href="#" class="do-collect"><span class="ico ico-msg-heart"></span><label>567</label></a><a href="#" class="do-message-add"><span class="ico ico-msg-call"></span>发信息</a></div></li>';
            break;
        case "my-weibo":
            for (var i = 0; i < data.length; i++) {
                var obj = data[i];
                HTML += '<li class="mui-table-view-cell mui-media"><div class="mui-pull-left mui-media-object clip-bg" style="background: url(' + obj["avatar"] + ');"><a href="http://m.7799520.com/user/' + obj["userid"] + '.html" class="link"></a></div><div class="mui-media-body"><a href="http://m.7799520.com/user/' + obj["userid"] + '.html" class="link"><b>' + obj["username"] + '<span class="mui-pull-right">' + obj["readcount"] + '人浏览</span></b><span>' + obj["addtime"] + ' . ' + obj["provinceid"] + ' ' + obj["cityid"] + '</span></a></div><div><a href="http://m.7799520.com/weibo/' + obj["wbid"] + '.html" class="link"><p>' + obj["content"] + '</p></a></div>';

                if (obj["isimg"]) {
                    HTML += '<a href="http://m.7799520.com/weibo/' + obj["wbid"] + '.html" class="link"><ul class="mui-table-view mui-grid-view">';
                    for (var j = 0; j < obj["isimg"].length; j++) {
                        HTML += '<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4"><div class="clip-bg" style="background: url(' + obj["isimg"][j]['path'] + ');"></div><p></p></li>';
                    }
                    HTML += '</ul></a>';
                }

                HTML += '<div><a href="javascript:;" class="do-collect';

                if (obj["selfDing"]) {
                    HTML += ' active';
                }

                HTML += '" objid="' + obj["wbid"] + '"><span class="ico ico-msg-heart"></span><label>' + obj["isding"] + '</label></a><a href="javascript:;" class="do-del" objid="' + obj["wbid"] + '"><span class="ico ico-msg-recycle"></span>删除</a></div></li>';
            }
            break;
        case "my-diary":
            HTML = '<li class="mui-table-view-cell mui-media"><div class="mui-pull-left mui-media-object clip-bg" style="background: url(tmp/member-face1.png);"><a href="个人资料.html" class="link"></a></div><div class="mui-media-body"><a href="个人资料.html" class="link"><b>骑着乌龟看海<span class="mui-pull-right">55741人浏览</span></b><span>05-01 . 广东 广州</span></a></div><div><a href="日记详情.html" class="link"><p class="title"><span class="ico ico-edit"></span>大家好，我是潘盼盼</p><p>五月了。 好好工作，积极锻炼，姻缘事不要抱过多期望， 但也不要象祥林嫂似地抱怨看脸社会、女人价值由年龄 来确定等，虽然很多确实是事实。</p></a></div><div><a href="#"><span class="ico ico-msg-heart"></span><label>567</label></a><a href="#" class="do-del"><span class="ico ico-msg-recycle"></span>删除</a></div></li>';
            break;
        case "score":
            HTML = '<li class="mui-table-view-cell mui-media"><div class="mui-media-body"><b>每日签到奖励</b>2016-06-02 17:45:38</div><button class="mui-btn">+100<span class="ico ico-uc-pig"></span></button></li>';
            break;
        case "message":
            HTML = '<li class="mui-table-view-cell mui-media"><div class="mui-slider-right mui-disabled"><a class="mui-btn mui-btn-red">删除</a></div><div class="mui-slider-handle"><a href="回信息.html" class="link"><div class="clip-bg mui-pull-left mui-media-object" style="background: url(tmp/member-face3.png);"></div><div class="mui-media-body"><p class="title"><b>Boomdaisy</b></p><p class="mui-ellipsis">关注了你</p><label>05-20 11:22</label></div></a></div></li>';
            break;
        case "message-detail":
            HTML = '<li class="mui-table-view-cell mui-media"><div class="mui-slider-handle"><p class="title">05-16 23:32</p><span></span><div class="clip-bg mui-media-object" style="background: url(tmp/member-face.png);"><a href="个人资料.html" class="link"></a></div><div class="mui-media-body"><p>从不相信世纪，更不相信网络，我 只相信身在杭州的你，有缘即见</p></div></div></li>';
            break;
        case "msg":
            var y = new Date();
            if (page == 0) {
                if (data["systemCount"] == null ) {
                    data['systemCount'] = 0;
                    HTML += '<li class="mui-table-view-cell mui-media"><div class="mui-slider-handle"><a href="http://m.7799520.com/self/system" class="link"><div class="clip-bg mui-pull-left mui-media-object system"></div><div class="mui-media-body"><p class="title"><b>系统消息</b></p><p class="mui-ellipsis">' + data["systemNews"] + '</p><label></label></div></a></div></li>';
                } else {
                    HTML += '<li class="mui-table-view-cell mui-media"><div class="mui-slider-handle"><a href="http://m.7799520.com/self/system" class="link"><div class="clip-bg mui-pull-left mui-media-object system"></div><div class="mui-media-body"><font>' + data["systemCount"] + '</font><p class="title"><b>系统消息</b></p><p class="mui-ellipsis">您有' + data["systemCount"] + '条未读信息</p><label></label></div></a></div></li>';
                }
            }
            for (var i = 0; i < data.list.length; i++) {
                var obj = data.list[i];
                HTML += '<li class="mui-table-view-cell mui-media"><div class="mui-slider-handle"><a href="http://m.7799520.com/self/reply/' + obj["fromuserid"]["userid"] + '.html" class="link"><div class="clip-bg mui-pull-left mui-media-object" style="background: url(' + obj["fromuserid"]["avatar"] + ');"></div><div class="mui-media-body">';

                if (obj["count"] > 0) {
                    HTML += '<font>' + obj["count"] + '</font>';
                }

                HTML += '<p class="title"><b>' + obj["fromuserid"]["username"] + '</b>';
                //HTML += '<li class="mui-table-view-cell mui-media"><div class="mui-slider-right mui-disabled"><a class="mui-btn mui-btn-red" objid="' + obj["newsid"] + '">删除</a></div><div class="mui-slider-handle"><a href="http://m.7799520.com/self/reply/' + obj["senduserid"]["userid"] + '.html" class="link"><div class="clip-bg mui-pull-left mui-media-object" style="background: url(' + obj["senduserid"]["avatar"] + ');"></div><div class="mui-media-body"><p class="title"><b>' + obj["senduserid"]["username"] + '</b>';
                if (obj["fromuserid"]["gender"] == 1) {
                    HTML += '<em class="active"><span class="ico ico-male">';
                } else {
                    HTML += '<em><span class="ico ico-female">';
                }
                HTML += '</span>' + (y.getFullYear() - obj["ageyear"]) + '</em></p><p class="mui-ellipsis">' + obj["newstype"] + '</p><label>' + obj["sendtime"] + '</label></div></a></div></li>';
            }
            break;
        case "sys-msg":
            for (var i = 0; i < data.length; i++) {
                var obj = data[i];
                HTML += '<li class="mui-table-view-cell mui-media"><div class="mui-slider-right mui-disabled"><a class="mui-btn mui-btn-red" objid="' + obj["newsid"] + '">删除</a></div><div class="mui-slider-handle"><a href="http://m.7799520.com/self/reply/' + obj["senduserid"]["userid"] + '.html" class="link"><div class="clip-bg mui-pull-left mui-media-object" style="background: url(' + obj["senduserid"]["avatar"] + ');"></div><div class="mui-media-body"><p class="title"><b>' + obj["senduserid"]["username"] + '</b>';
                if (obj["senduserid"]["gender"] == 1) {
                    HTML += '<em class="active"><span class="ico ico-male">';
                } else {
                    HTML += '<em><span class="ico ico-female">';
                }
                HTML += '</span></em></p><p class="mui-ellipsis">' + obj["newstype"] + '</p><label>' + obj["addtime"] + '</label></div></a></div></li>';
            }
            break;
        case "apply":
            for (var i = 0; i < data.length; i++) {
                var obj = data[i];
                HTML += '<li class="mui-table-view-cell mui-media"><div class="mui-slider-handle"><div class="clip-bg mui-pull-right mui-media-object"><a href="http://m.7799520.com/party/' + obj["activities_id"] + '.html" class="link">申请成功&gt;</a></div><a href="http://m.7799520.com/party/' + obj["activities_id"] + '.html" class="link"><div class="mui-media-body"><p class="title mui-ellipsis">' + obj["title"] + '</p><p>' + obj["created_time"] + '</p></div></a></div></li>';
            }
            break;
        default:
            break;
    }

    return HTML;
}