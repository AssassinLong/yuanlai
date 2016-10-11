<?php
namespace core\lib\drive\log;
//文件系统
use core\lib\conf;

class file
{
    public $path;#日志存储位置
    public function __construct()
    {
        $this->path = conf::get('OPTION','log');
    }
     public function log($message,$file='log')
    {
        /*
         * 1确定文件存储位置是否存在
         * 新建目录
         * 2写入日志
         */
        //p(is_dir(IMOOC.'/file'));exit;
        $logpath=IMOOC.'\\'.$this->path;
        //p($logpath);exit;
      if(!is_dir($logpath)){
            mkdir($this->path,'0777',true);
        }
        //p($message);exit;
          return file_put_contents($logpath.'\\'.$file.'.php',date('Y-m-d H:i:s').json_encode($message).PHP_EOL,FILE_APPEND);
    }
}


?>