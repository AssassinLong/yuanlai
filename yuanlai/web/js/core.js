// $(function() {
// 	//导航选中判断
// 	var nav = getCookie('tab_item');
// 	if (nav) {
// 		$('.site-nav a').removeClass('mui-active').eq(nav - 1).addClass('mui-active');
// 	}
// });

//Ajax提交数据
function AjaxSubmit(url, msg, href, data) {
    mui.ajax(url, {
        data: {
            data
        },
        dataType: 'json',
        type: 'get',
        success: function(data) {
            if (msg) {
                mui.toast(msg);
            }

            if (link) {
                setTimeout("window.location.href='" + href + "';", 1000);
            }
        },
        error: function(xhr, type, errorThrown) {
            console.log(type);
            alert(type);
        }
    });
}