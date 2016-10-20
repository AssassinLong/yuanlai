<?php
namespace app\ctrl;
use core\lib\model;
use app\model\messageModel;
use app\model\basicdataModel;
session_start();
class advicesCtrl extends \core\imooc
{

    //系统消息
    public function systems()
    {
        $this->display('systems.html');
    }
    //好友消息
    public function friend()
    {
        $id=$_SESSION['id'];
        $uid=get('id');
        $mess=new messageModel();
        $arr=$mess->oneAll($uid,$id);
        //p($arr);
        $data=array(
            'id'=>$id,
            'uid'=>$uid,
        );
        //p($data);
        $this->assign('arr',$arr);
        $this->assign('data',$data);
        $this->display('friend.html');
    }
    //添加消息
    public function addmessage()
    {
        $id=post('userid');
        $message=post('message');
        //echo $_SESSION['id'];
          $basic=new basicdataModel();
          $arr=$basic->userOne1($_SESSION['id']);
         $model=new messageModel();
         $add['a_id']=$id;
         $add['us_id']=$arr[0]['u_id'];
         $add['content']=$message;
         $add['createtime']=date('Y-m-d H:i:s',time());
         $add['sendstatus']='0';
         $add['recevestatus']='0';
         $add['readstatus']='0';
         $str=$model->addOne($add);
         if($str){
             echo '1';
         }else{
             echo '0';
         }
    }
}


?>