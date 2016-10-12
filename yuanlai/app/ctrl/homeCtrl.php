<?php
namespace app\ctrl;
use app\model\userModel;
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
            'fossa' => '?r=index/fossa'
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
        $this->display('datum.html');
    }
    //内部搜索
    public function seek()
    {//echo '1';
        $this->display('seek.html');
    }
    //消息
    public function advices()
    {
        $this->display('advices.html');
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
        $this->display('fossa.html');
    }
    public function shaixuan()
    {
        $this->display('shaixuan.html');
    }
}
     


?>