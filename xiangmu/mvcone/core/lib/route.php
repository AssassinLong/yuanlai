<?php
namespace core\lib;
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
    //p($_SERVER);
    if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'){
        //index/index
        $path=$_SERVER['REQUEST_URI'];
        //p($path).'<br>';
        $patharr=explode('/',trim($path,'/'));//分割
        //p($patharr);
        if(isset($patharr[0])){
            $this->ctrl=$patharr[0];

        }
        unset($patharr[0]);
        if(isset($patharr[1])){
            $this->action=$patharr[1];
            unset($patharr[1]);
        }else{
            $this->action = conf::get('ACTION','route');
        }
        //url多余部分转换为GET;
        //p($patharr);
        //p($_GET);
        $count=count($patharr)+2;
        $i=2;
        while($i<$count){
            if(isset($patharr[$i+1])) {
                $_GET[$patharr[$i]] = $patharr[$i + 1];
            }
            $i = $i + 2;
        }
        //p($_GET);
    }else{
        $this->ctrl= conf::get('CTRL','route');;
        $this->action= conf::get('ACTION','route');;
    };
    }
}


?>
