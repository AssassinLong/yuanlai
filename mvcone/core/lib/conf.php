<?php
namespace   core\lib;

class conf
{
    static public $conf=array();
    //static public $cona=array();
    static public function get($name,$file)
    {
        /*
         * 1,判断配置文件是否存在
         * 2判断配置是否存在
         * 3缓存配置
         */
        //p(self::$conf[$file]);
        if(isset(self::$conf[$file])){
            //p(self::$conf[$file]);exit;
            return self::$conf[$file][$name];
        }else{
            //p(1);
            $path = IMOOC.'/core/config/'.$file.'.php';
            //p($file);exit();
            if(is_file($path)){
                $conf=include $path;
                //p($file);p($name);p($conf[$name]);exit();
                if(isset($conf[$name])){
                    self::$conf[$file]=$conf;
                    //p(self::$conf);exit;
                    return $conf[$name];
                }else{
                    throw new \Exception('没有这个配置项'.$name);
                }
            }else{
                throw new \Exception('找不到配置文件'.$file);
            }
        }
    }
    static public function all($file)
    {
        /*
         * 1,判断配置文件是否存在
         * 2判断配置是否存在
         * 3缓存配置
         */
        if(isset(self::$conf[$file])){
            return self::$conf[$file];
        }else{
            //p(1);
            $path = IMOOC.'/core/config/'.$file.'.php';
            //p($path);exit();
            if(is_file($path)){
                $conf=include $path;
                //p($conf);exit();
                if(isset($conf)){
                    self::$conf[$file]=$conf;
                    return $conf;
                }
            }else{
                throw new \Exception('找不到配置文件'.$file);
            }
        }
    }
}

?>
