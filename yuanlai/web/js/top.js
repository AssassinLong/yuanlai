$(document).ready(function() {
    init()
    var url = 'http://www.lixiansen.site/yuanlai/yuanlai/?r=home/aa';
    mui.ajax(url, {
        dataType: 'json',
        async: false,
        type: 'post',
        success: function(data) {
            if (data.status == 1) {
                var html = '<ul>';
                var datas = data.result;
                for (var i = 0; i < datas.length; i++) {
                    html += '<li><p class="mlph-tb-icon">' + (i + 1) + '</p><a href="/user/' + datas[i].userid + '.html" class="link" ' +
                        'style="background:URL(' + datas[i].avatar + ') center no-repeat;-webkit-Background-size:100%,100%;"></a><p class="mlph-tb-p1">' +
                        datas[i].username + '</p>' + '<p class="mlph-tb-p2">' + datas[i].allcharm + '</p></li>';
                }
                html += '</ul>';
                $('.mlph-tbbg').html(html);
                init();
            }
        }
    });
    function init() {
        var cheight = window.screen.availHeight; //取屏幕高度
        var cwidth = window.screen.availWidth; //取屏幕宽度
        //bg图750*2080,bg2 710*1270 fontpg 673*374
        var bgheight = cwidth / 750 * 2100;
        var bg2width = cwidth / 750 * 710;
        var bg2height = bg2width / 710 * 1270;
        var bg2top = bgheight / 2100 * 370;
        var bg3width = cwidth / 750 * 673;
        var bg3height = bg3width / 673 * 374;
        var bg3top = bgheight / 2100 * 1670;
        $('.mlph-wrap').css('height', bgheight);
        $('.mlph-tbbg').css({
            height: bg2height,
            width: bg2width,
            top: bg2top,
            left: (cwidth - bg2width) / 2
        });
        $('.mlph-fontbg').css({
            height: bg3height,
            width: bg3width,
            top: bg3top,
            left: (cwidth - bg3width) / 2
        });
        //调整位置
        var lis = $('.mlph-tbbg').find('li');
        lis.eq(1).css({
            position: 'absolute',
            left: 0,
            width: '33%',
            top: '4.5%',
            height: '21%',
            float: 'left',
        }).find('a').css({
            width: 60,
            height: 60,
            top: '33%',
            left: '50%',
            webkitTransform: 'translate(-50%,-50%)'
        });
        lis.eq(1).find('.mlph-tb-p2').css({
            float: 'none',
            top: '70%',
            left: '50%',
            width: '100%',
            webkitTransform: 'translate(-50%,-50%)',
            textAlign: 'center',
        });
        lis.eq(1).find('.mlph-tb-p1').css({
            width: '100%',
            float: 'none',
            top: '75%',
            left: '50%',
            webkitTransform: 'translate(-50%,0)',
            textAlign: 'center',
        });
        lis.eq(1).find('.mlph-tb-icon').text('').css({
            float: 'none',
            width: '16%',
            height: '20%',
            left: '48%',
            top: '52%',
            'background': 'url(/img/mlph-ico2.png) no-repeat',
            zIndex: 3,
            'webkitBackground-size': "100%,auto"
        });

        lis.eq(0).css({
            position: 'absolute',
            left: '33.33%',
            width: '33%',
            top: 0,
            height: '21%',
            float: 'left'
        }).find('a').css({
            width: 70,
            height: 70,
            top: '50%',
            left: '50%',
            webkitTransform: 'translate(-50%,-50%)'
        })
        lis.eq(0).find('.mlph-tb-p2').css({
            float: 'none',
            top: '90%',
            left: '50%',
            width: '100%',
            webkitTransform: 'translate(-50%,-50%)',
            textAlign: 'center',
        });
        lis.eq(0).find('.mlph-tb-p1').css({
            width: '100%',
            float: 'none',
            top: '95%',
            left: '50%',
            webkitTransform: 'translate(-50%,0)',
            textAlign: 'center',
        });
        lis.eq(2).css({
            position: 'absolute',
            left: '66.66%',
            width: '33%',
            top: '4.5%',
            height: '21%',
            float: 'left'
        }).find('a').css({
            width: 60,
            height: 60,
            top: '33%',
            left: '50%',
            webkitTransform: 'translate(-50%,-50%)'
        });
        lis.eq(0).find('.mlph-tb-icon').text('').css({
            float: 'none',
            width: '20%',
            height: '25%',
            top: '70%',
            left: '50%',
            'background': 'url(/img/mlph-ico1.png) no-repeat',
            zIndex: 3,
            'webkitBackground-size': "100%,auto"
        });


        lis.eq(2).find('.mlph-tb-p2').css({
            float: 'none',
            top: '70%',
            left: '50%',
            width: '100%',
            webkitTransform: 'translate(-50%,-50%)',
            textAlign: 'center',
        });
        lis.eq(2).find('.mlph-tb-p1').css({
            width: '100%',
            float: 'none',
            top: '75%',
            left: '50%',
            webkitTransform: 'translate(-50%,0)',
            textAlign: 'center',
        });
        lis.eq(2).find('.mlph-tb-icon').text('').css({
            float: 'none',
            width: '16%',
            height: '20%',
            left: '48%',
            top: '52%',
            'background': 'url(/img/mlph-ico3.png)  no-repeat',
            zIndex: 3,
            'webkitBackground-size': "100%,auto"
        });
        lis.eq(3).css({
            marginTop: '46%'
        });
    }

})