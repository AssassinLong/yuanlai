var upload_url = 'http://www.lixiansen.site/yuanlai/yuanlai/?r=home/upload';
var process = '';
$(function() {
	//生成上传对象
	$('body').append('<iframe name="upload" style="display:none"></iframe>');
	$('.make-upload').each(function() {
		$(this).append('<form id="' + $(this).attr('object') + '" action="' + upload_url + '" target="upload" method="post" enctype="multipart/form-data"><input name="imgfile" type="file" accept="image/*" /><input name="imgType" type="hidden" value="' + $(this).attr('object') + '"></form>');
	});

	//执行上传
	$('.make-upload input').change(function() {
		//文件上传判断
		var chk = checkImgType(this);
		alert(chk);
		if (!chk) {
			return false;
		}
		$(this).parent().submit();
		process = $(this).parents('.make-upload').attr('param');

		mui.toast('图片上传中…');

		//查看自己资料页专用
		if (process == 'album') {
			$('.layer').fadeOut();
		}

	});

	
});


//图片上传验证
function checkImgType(obj) {
	if (obj.value == "") {
		alert("请上传图片");
		return false;
	} else {
		if (!/\.(gif|jpg|jpeg|png|GIF|JPG|PNG)$/.test(obj.value)) {
			alert("图片类型必须是.gif,jpeg,jpg,png中的一种");
			obj.value = "";
			return false;
		} else {
			//以下无效
			//var img = new Image();
			//img.src = obj.value;
			//while (true) {
			//	if (img.fileSize > 0) {
			//		if (img.fileSize > 0.1 * 1024) {
			//			alert("图片不大于10M。");
			//			return false;
			//		}
			//		break;
			//	}
			//}
		}
	}
	return true;
}
