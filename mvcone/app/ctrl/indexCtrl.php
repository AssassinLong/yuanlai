<?php
namespace app\ctrl;
use app\model\cModel;
use app\model\kModel;
use core\lib\conf;
use core\lib\model;

class indexCtrl extends \core\imooc
{
    //所有留言
    public function index()
    {
        $model=new kModel();
        $data=$model->all();
        //var_dump($data);exit;
        $this->assign('data',$data);
        $this->display('index.html');
    }
    //添加留言
    public function add()
    {
        $data='添加留言';
        //var_dump($data);
        $this->display('add.html');
    }
    //保存留言
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
    }
    //删除留言
    public function del()
    {
        $id=get('id',0,'int');
        if($id){
            $model=new kModel();
            $ret = $model->delOne($id);
            if($ret){
                jump('/');
            }else{
                exit('删除失败');
            }
        }else{
            exit('参数错误');
        }
        //p($id);
    }
    /*public function index()
    {
        /*$data='Hello World';
        $this->assign('data',$data);
        $this->display('index.html');*/
        //$model= new \app\model\cModel();
        //$data=$model->lists();
        //$data=$model->getOne('23');
       /* $data=array(
            "titles"=>"蛤蛤",
            "datatime"=>"09-3,12-15",
            "phpone"=>"15232537715",
        );*/
        //$ret=$model->delOne('22');
        //dump($ret);
        //$model = new model();
        //dump($model);
        //$data=$model->select('newss','*');
       /* $data=array(
            "name"=>"人类",
            "pwd"=>"MD5",
            "eml"=>"13012151643@163.com",
            "phone"=>"15232537715",
        );
        $model->insert('users',$data);

        dump($data);*/
        /*$temp= \core\lib\conf::get('CTRL','route');
        //$temp= \core\lib\conf::get('ACTION','route');
        //$temp= \core\lib\conf::all('database');
        print_r($temp);
        p('it is index');
        $model=new \core\lib\model();
        $sql="select * from lists";
        $ret=$model->query($sql);
        $data=$ret->fetchAll();
        //$data='你好,人类';
        $title='视图文件';
        //p($data);
        $this->assign('title',$title);
        $this->assign('data',$data);
        $this->display('index.html');
    }*/
    /*public function test()
    {
        $data = 'test';
        $this->assign('data',$data);
        $this->display('test.html');
    }*/
}


?>