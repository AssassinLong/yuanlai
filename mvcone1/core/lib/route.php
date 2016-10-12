<?php
namespace core\lib;
use app\models\user;
use core\lib\conf;
//路由类
class  route
{
    public function __construct()
    {
        //p('route ok');
        //xxx.com/index.php/index/index
        /*
         *1.隐藏index.php
         *2.获取到URL参数部分
         *3.返回对应的控制器和方法
         */
    //p($_SERVER['REQUEST_URI']);exit;
        $path=$_SERVER['REQUEST_URI'];
        //echo strpos($path,'?');die;
        if(preg_match('/(\?)/',$path)){
            //echo $path;die;
            $path=stristr($path,'?');
            //echo $path;die;
            $patharr=explode('/',trim($path,'?'));//分割
            //p($patharr);exit;
            //$this->inlet=$patharr[0];
           // $patharr=explode('?',trim($patharr[1],'/'));
            //$patharr=explode('/',trim($patharr[0],'/'));
            //p($patharr);exit;
            if(isset($patharr[0])){
                $this->ctrl=$patharr[0];
            }
            //p($patharr);exit;
            unset($patharr[0]);
            if(isset($patharr[1])){
                $this->action=$patharr[1];
                unset($patharr[1]);
            }else{
                $this->action = conf::get('ACTION','route');
            }

            //url多余部分转换为GET;
            //p($patharr);
            //unset($_GET);
            //$_GET=
            //p($_GET);exit;
            $count=count($patharr)+2;
            $i=2;
            while($i<$count){
                if(isset($patharr[$i+1])) {
                    $_GET[$patharr[$i]] = $patharr[$i + 1];
                }
                $i = $i + 2;
            }
            //p($_GET);exit;
        }else{
            $this->ctrl= conf::get('CTRL','route');;
            $this->action= conf::get('ACTION','route');;
        }
    /*if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'.conf::get('MVC','route').'/'){
        //index/index
        //p('2');die;
        $path=$_SERVER['REQUEST_URI'];
        //p($path).'<br>';die;
            $patharr=explode('/?',trim($path,'/'));//分割
            //p($patharr);exit;
            //$this->inlet=$patharr[0];
            $patharr=explode('?',trim($patharr[1],'/'));
            $patharr=explode('/',trim($patharr[0],'/'));
            //p($patharr);exit;
            if(isset($patharr[0])){
                $this->ctrl=$patharr[0];
            }
            //p($patharr);exit;
            unset($patharr[0]);
            if(isset($patharr[1])){
                $this->action=$patharr[1];
                unset($patharr[1]);
            }else{
                $this->action = conf::get('ACTION','route');
            }

            //url多余部分转换为GET;
            //p($patharr);
            //unset($_GET);
            //$_GET=
            //p($_GET);exit;
            $count=count($patharr)+2;
            $i=2;
            while($i<$count){
                if(isset($patharr[$i+1])) {
                    $_GET[$patharr[$i]] = $patharr[$i + 1];
                }
                $i = $i + 2;
            }
            //p($_GET);exit;
    }else{
        //p('1');die;
        //$this->inlet=conf::get('INLET','route');
        $this->ctrl= conf::get('CTRL','route');;
        $this->action= conf::get('ACTION','route');;
        //p($this->action);die;
    };*/
  }
}


?>
