<?php
namespace core;
//基础类
header('content-type:text/html;charset=utf-8');
class imooc
{
    public static $classMap=array();
    public $assign;
    static public function run()
    {
        \core\lib\log::init();
       //\core\lib\log::log('9527');
        //p('ok');
        $route=new \core\lib\route();
        //p($route);exit;
        $ctrlClass=$route->ctrl;
        $action=$route->action;
        $action=explode('&',$action);
        $ctrlfile=APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        //p($ctrlfile);exit;
        $ctrlClass='\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
       //p($ctrlfile);exit();
        if(is_file($ctrlfile)){
            include $ctrlfile;;
            $ctrl=new $ctrlClass;
            //p($ctrl);
            //echo $action[0];exit;
            $ctrl->$action[0]();
        }else{
            throw new \Exception('找不到控制器'.$ctrlClass);
        }
    }
    //自动加载类库
    static public function load($class)
    {
        //自动加载类库
        //new \core\route();//引入类
        //$class = '\core\route';//如果没有引入此类则触发函数
        //IMOOC.'/core/route.php';//需要转换为此种类型
        //p($class);
        //p(IMOOC.$class.'.php');
        if(isset($classMap[$class])){
            return true;
        }else{
            $calss=str_replace('\\','/',$class);
            $file=IMOOC.'/'.$calss.'.php';
            if(is_file($file)){
                include $file;
                self::$classMap[$class]=$class;
            }else{
                return false;
            }
        }
    }
    public function assign($name,$value)
    {
        $this->assign[$name]=$value;
    }
    public function display($name)
    {
        $file=APP.'/views/'.$name;
        //p($file);exit;
        if(is_file($file)){
            //p($name);exit;
            //p($this->assign);exit();
            //extract($this->assign);
            //include $file;
            \Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem(APP.'/views');
            $twig = new \Twig_Environment($loader, array(
                'cache' => IMOOC.'/log/twig',
                'debug'=> DEBUG
            ));//缓存目录写到自己的目录
            $template = $twig->loadTemplate($name);
            $template->display($this->assign?$this->assign:array());
        }else{
            p('失败');exit;
        };
    }
}

?>
