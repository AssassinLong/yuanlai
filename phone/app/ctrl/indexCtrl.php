<?php
namespace app\ctrl;
use app\model\cModel;
use app\model\kModel;
use core\lib\conf;
use core\lib\model;

class indexCtrl extends \core\imooc
{
    //登录
    public function login()
    {
        $data['name']=post('name');
        $pwd=post('pwd');
        $model=new kModel();
        $str=$model->getOne('user',$data);
        if($str['pwd']==$pwd){
            session_start();
            $_SESSION['name']=$str['name'];
            $_SESSION['id']=$str['id'];
            jump('?index/personal');
        }else{
            echo '用户名或密码错误';
        }
    }
    //所有留言
    public function index()
    {
        //echo "<script language=JavaScript> location.replace(location.href);</script>";
        session_start();
        if(isset($_SESSION['name'])){
            $name['name']= $_SESSION['name'];
            $this->assign('name',$name);
        }else{

        }
        $this->display('index.html');
    }
    //详情页
    public function details()
    {
        $id=get('id');
        $model=new kModel();
        $onedata=$model->getOne('article',$id);
        //var_dump($onedata);exit;
        $this->assign('oned',$onedata);
        $this->display('details.html');
    }
    public function layout()
    {
        session_start();
        if(isset($_SESSION['name'])){
            $name['name']= $_SESSION['name'];
            $this->assign('name',$name);
        }else{

        }
        $this->display('layout.html');
    }
    //个人中心
    public function personal()
    {

        session_start();
        $id['id']=$_SESSION['id'];
        $model=new kModel();
        $onedata=$model->getOne('user',$id);
        //var_dump($onedata);exit;
        $this->assign('onep',$onedata);
        $this->display('personal.html');
    }
    //列表
    public function lists()
    {
        $model=new kModel();
        $data=$model->all('article');
        //var_dump($data);exit;
        $this->assign('data',$data);
        $this->display('lists.html');
    }
    //即点即改
    public function save()
    {
        $model=new kModel();
        $id=post('id');
        $name=post('name');
        $phones=post('phones');
        $site=post('site');
        if($name!=''){
            $str=$model->updateOne(['name'=>$name],$id);
            echo '1';
        }else if($phones!=''){
            $str=$model->updateOne(['phones'=>$phones],$id);
            echo '1';
        }else if($site!=''){
            $str=$model->updateOne(['site'=>$site],$id);
            echo '1';
    }
        //echo $name;
    }
    //添加
    public function add()
    {
        if(post('name')=='0'){
            jump('?index/lists');
        }else{
            $data['name']=post('name');
            $data['text']=post('text');
            $data['datetime']=date('Y-m-d H:i:s',time());
            $data['u_id']=2;
            $model=new kModel();
            $str=$model->addOne($data);
            if($str){
                jump('?index/lists');
            }else{
                jump('?index/index');
            }
        }
    }
    //删除
    public function del()
    {
        $id=get('id',0,'int');
        if($id){
            //echo $id;exit;
            $model=new kModel();
            $ret = $model->delOne($id);
            if($ret){
                jump('?index/lists');
            }else{
                exit('删除失败');
            }
        }else{
            exit('参数错误');
        }
        //p($id);
    }
   /* //保存留言
    public function save()
    {
        //p($text);
        //echo $_POST['text'];
        session_start();
        $_SESSION['name']='XXX';

       //$text=$_POST['text'];
        $data['name']=$_SESSION['name'];
        $data['text'] = post('text');
        $data['datatime']=date('Y-m-d H:i:s');
        $model=new kModel();
        $str=$model->addOne($data);
        //p($str);die;
        if($str!='0'){
            jump('?index/index');
        }else{
            echo '添加失败';
        }
    }*/
}


?>