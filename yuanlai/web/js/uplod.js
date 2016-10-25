var upload_url = '?r=home/upload';
var process = '';
$(function() {
    //生成上传对象
    $('body').append('<iframe name="upload" style="display:none"></iframe>');
    $('.make-upload').each(function() {
        //alert ('跳转成功');
        $(this).append('<form id="' + $(this).attr('object') + '" action="' + upload_url + '" target="upload" method="post" enctype="multipart/form-data"><input name="imgfile" type="file" accept="image/*" height="800" width="600" ><input name="imgType" type="hidden" value="' + $(this).attr('object') + '"></form>');
    });
    //执行上传
    $('.make-upload input').change(function() {
        //文件上传判断
        var chk = checkImgType(this);
        if (!chk) {
            return false;
        }

            if($(this).parents('form').submit()){
                if(process = $(this).parents('.make-upload').attr('param')){
                    mui.toast('图片上传中…跳转');
                    setTimeout("window.location.href='?r=home/fossa'", 1000);
                }
            }




    /*if(mui.toast('图片上传中…')){
        location.reload('http://www.liujinlong.site/yuanlai/?r=home/fossa');
    }*/

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
        if (!/\.(gif|jpeg|jpg|png|GIF|JPG|PNG)$/.test(obj.value)) {
            alert("图片类型必须是.gif,jpeg,jpg,png中的一种");
            obj.value = "";
            return false;
        } else {
            //alert(obj.width(width));
           /* img = new Image();
            img.src =obj.value;
           *//* img.onload = function ()
            {

                document.write(img.width);
            }*//*

            alert('width:'+img.width+',height'+img.height);
            return false;*/
            /*if(obj.files[0].width != 800){
                alert(obj.files[0].width);
                return false;
            }*/
            /*if(obj.files[0].size >= 10000){
                alert("图片大于1M可能无法上传");
                return true;
            }*/
            /*var img = new Image();
            img.src = obj.value;
            while ('') {
            	if (img.fileSize > 0) {
            		if (img.fileSize > 0.1 * 1024) {
            			alert("图片不大于200K。");
            			return false;
            		}
            		break;
            	}
            }*/
        }
    }
    return true;
}