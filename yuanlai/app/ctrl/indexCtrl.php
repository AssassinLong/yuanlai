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
            //print_r($str);die;
                $real_name=$data['name'];
                if($str>0){
                    $models=new basicdataModel();
                    $s1=$models->adde1($str,$real_name);
                    $s2=$models->adde2($str);
                    $s3=$models->adde3($str);
//                    print_r($s1);die;
                    //echo $s1;
                    if($s1){
                        $phone=$data['phone'];
                        $aa=$models->deles($phone);
                        if($aa){
                            jump('?r=index/login');
                        }else{
                            echo '注册失败';die;
                        }

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
        $sum=post('sum');
        $code=post('code');
        $models=new basicdataModel();
        $s1=$models->useres($phone);
        if($s1){
        echo 1;
        }else{
        $cha=$models->seld($phone);
//        print_r($cha);die;
       if($cha){
           $sa=$cha[0]['sum'];
           $aas=$models->uploe($sa,$phone);
           if($aas){
               $as=$models->seld($phone);
//               print_r($as);die;
//               $counts=count($as);
               if($as[0]['sum']>6){
                   echo 3;
               }else{

                   $url="http://api.k780.com:88/?app=sms.send&tempid=50823&param=".urlencode('code='.$code.' ')."&phone=".$phone."&appkey=18919&sign=e8339435136d3b3f4893d404763a5568&format=json";
                   $file=file_get_contents($url);

               }
           }else{
               $s1=$models->aders($phone,$sum);
//            print_r($s1);die;
               if($s1){
                   $as=$models->seld($phone);
//                   print_r($as);die;
//                   $counts=count($as);

                   if($as[0]['sum']>6){
                       echo 3;
                   }else{


                       $url="http://api.k780.com:88/?app=sms.send&tempid=50823&param=".urlencode('code='.$code.' ')."&phone=".$phone."&appkey=18919&sign=e8339435136d3b3f4893d404763a5568&format=json";
                       $file=file_get_contents($url);

                   }

               }else{
                   echo 2;
               }
           }
       }else{
        $s1=$models->aders($phone,$sum);
//            print_r($s1);die;
        if($s1){
          $as=$models->seld($phone);
//            print_r($as);die;
            if($as[0]['sum']>6){
             echo 3;
            }else{

                $url="http://api.k780.com:88/?app=sms.send&tempid=50823&param=".urlencode('code='.$code.' ')."&phone=".$phone."&appkey=18919&sign=e8339435136d3b3f4893d404763a5568&format=json";
                $file=file_get_contents($url);

            }

        }else{
         echo 2;
        }
       }
        }
    }
    public function weiyi()
    {
        $mobile=post('mobile');
        $models=new basicdataModel();
        $s1=$models->useres($mobile);
//        print_r($s1);die;
        if(empty($s1)){
        echo 1;
        }else{
        echo 2;
        }
    }
}


?>