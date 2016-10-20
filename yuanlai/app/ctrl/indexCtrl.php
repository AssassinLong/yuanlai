<?php
namespace app\ctrl;
use app\model\userModel;
use app\model\kModel;
use app\model\basicdataModel   ;
use core\lib\conf;
use core\lib\model;

class indexCtrl extends \core\imooc
{
    //登录页面
    public function login()
    {
            $this->display('login.html');
    }
    //验证登录
    public function login_in()
    {
        session_start();
        $data['username']=post('username');
        $data['password']=post('password');
        //dump($data['username']);die;
        if(preg_match("/^1[34578]{1}\d{9}$/",$data['username'])){

            $model=new userModel();
            $arr=$model->user_phone($data);
            //dump($arr);die;
            if($arr[0]['password']==$data['password']){
                $_SESSION['username']=$arr[0]['name'];
                $_SESSION['id']=$arr[0]['id'];

                jump('?r=home/index');
            }else{

                jump('?r=index/login');
            }


        }elseif(preg_match("/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/",$data['username'])){

            $model=new userModel();
            $arr=$model->user_email($data);
            //dump($arr);die;
            if($arr[0]['password']==$data['password']){
                $_SESSION['username']=$arr[0]['name'];
                $_SESSION['id']=$arr[0]['id'];
                jump('?r=home/index');
            }else{

                jump('?r=index/login');
            }
        }else{

            $model=new userModel();
            $arr=$model->user_name($data);
//            dump($arr);die;
            if($arr[0]['password']==$data['password']){
                $_SESSION['username']=$arr[0]['name'];
                $_SESSION['id']=$arr[0]['id'];
                //dump($data);
                jump('?r=home/index');
            }else{

                jump('?r=index/login');
            }
        }
    }
    //注册
    public function register()
    {
        if(post('data')){
            $data=post('data');
            if($data['password']==$data['password2']){
                unset($data['password2']);
                $data['datetime']=date('Y-m-d H:i:s',time());
                $model=new kModel();
                $str=$model->addOne('user',$data);
//                print_r($str);die;
                if($str>0){
                    $models=new basicdataModel();
                    $s1=$models->adde1($str);
//                    print_r($s1);die;
                    if($s1){
                        jump('?r=index/login');
                    }else{
                        echo '注册失败';die;
                    }

                }else{
                    echo '注册失败';die;
                }
            }
        }else{
            $this->display('register.html');
        }
    }
    //验证码
    public function show()
    {

        $phone=post('mobile');
        // echo $phone;die;
        //$phone="15210014651";
        $sum=post('sum');
        // echo $sum;die;
        // $number=rand(1000,9999);
        //$_SESSION['number']=$sum;
        $url="http://api.k780.com:88/?app=sms.send&tempid=50823&param=".urlencode('code='.$sum.' ')."&phone=".$phone."&appkey=18919&sign=e8339435136d3b3f4893d404763a5568&format=json";
        $file=file_get_contents($url);
        //$arr=json_decode($file,true);
        //var_dump($arr);
    }
}


?>