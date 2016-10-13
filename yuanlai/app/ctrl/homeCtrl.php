<?php
namespace app\ctrl;
use app\model\userModel;
use app\model\xiangModel;
use core\lib\conf;
use core\lib\model;
session_start();
class homeCtrl extends \core\imooc
{
    //主页
    public function index()
    {
        if(isset($_SESSION['username'])){
        $url=array(
            'fossa' => '?r=home/fossa'
        );}else{
            $url=array(
                'fossa' => '?r=index/login'
            );
        }
      $this->assign('url',$url);
      $this->display('index.html');
    }
    //
    public function datum()
    {
        if(isset($_SESSION['username'])){
            $this->display('datum.html');
        }else{
            $this->display('login.html');
        }
    }
    //内部搜索
    public function seek()
    {//echo '1';
        if(isset($_SESSION['username'])){
            $this->display('seek.html');
        }else{
            $this->display('login.html');
        }
    }
    //消息
    public function advices()
    {
        if(isset($_SESSION['username'])){
            $this->display('advices.html');
        }else{
            $this->display('login.html');
        }
    }
    //礼物(暂定)
    public function gift()
    {
        $this->display('gift.html');
    }
    //论坛
    public function forum()
    {
        $this->display('forum.html');
    }
    //个人中心
    public function fossa()
    {   
        $model=new xiangModel();
        $id=$_SESSION['id'];
        $re=$model->xiang($id); 
        if($re){
            $this->assign('re',$re);
            $this->display('fossa.html');
        }else{
            $this->display('fossa.html');
        }
    }
    public function shaixuan()
    {
        $this->display('shaixuan.html');
    }
}
     


?>