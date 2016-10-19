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

        $this->display('friend.html');
    }
    //添加消息
    public function addmessage()
    {
        $id=post('userid');
        $message=post('message');

        $basic=new basicdataModel();
        $arr=$basic->userOne(['u_id'=> $_SESSION['id']]);
        //p($arr[0]);exit;
        $data['u_id']=$arr[0]['u_id'];
        $data['u_age']=$arr[0]['age'];
        $data['u_sex']=$arr[0]['sex'];
        $data['content']=$message;
        $data['createtime']=date('Y-m-d H:i:s',time());
        $model=new messageModel();
        $str=$model->addOne('message',$data);
        $add['a_id']=$id;
        $add['m_id']=$str;
        $add['content']=$message;
        $add['sendstatus']='0';
        $add['recevestatus']='0';
        $add['readstatus']='1';
        $model->addOne('addressee',$add);
        if($str){
            echo '1';
        }else{
            echo '0';
        }
    }
}


?>