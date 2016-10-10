<?php
namespace app\ctrl;
use app\model\cModel;
use app\model\kModel;
use core\lib\conf;
use core\lib\model;
session_start();
class indexCtrl extends \core\imooc
{
    public function index()
    {

        $this->display('index.html');
    }
    public function login()
    {
        if(post('username')){
            echo post('username');
        }else{
            $this->display('login.html');
        }
    }
    public function register()
    {
        if(post('data')){
            $data=post('data');
            if($data['password']==$data['password2']){
                unset($data['password2']);
                $data['datetime']=date('Y-m-d H:i:s',time());
                $model=new kModel();
                $str=$model->addOne('user',$data);
                if($str>0){
                    jump('?index/login');
                }
            }
        }else{
            $this->display('register.html');
        }
    }
}


?>