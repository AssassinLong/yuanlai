<?php
namespace app\ctrl;
use core\lib\conf;
use core\lib\model;
use app\model\userModel;
use app\model\xiangModel;
use app\model\shengModel;
use app\model\basicdataModel;
use app\model\monoModel;
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
        $id=$_SESSION['id'];
        $model=new xiangModel();
        $re=$model->xiang($id);
        if($re){
            $this->assign('re',$re);
        }
        $model=new shengModel();
        $sheng=$model->sheng_select($id);
        if($sheng){

            $this->assign('sheng',$sheng);
        }
        $data=array("u_id"=>$id);
        $model=new basicdataModel();
        $arras=$model->userOne1($data);
        if($arras){
            $this->assign('arras',$arras);
        }
//        print_r($arras);die;
        $mono=new monoModel();
        $dubai=$mono->getOne(['u_id'=>$id]);
        $this->assign('dubai',$dubai);
        $this->display('fossa.html');
    }
    public function shaixuan()
    {
        $this->display('shaixuan.html');
    }
}
     


?>