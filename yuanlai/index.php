<?php
/*
 * 入口文件
 *1.定义常量
 *2.加载函数库
 *3.启动框架
 */
//定义当前框架所在根目录;realpath获取当前位置
define('IMOOC',realpath('./'));
//echo IMOOC;die;
//定义核心文件所处目录
define('CORE',IMOOC.'/core');
//项目文件所处目录
define('APP',IMOOC.'/app');
//规范代码;
define('MODULE','app');
//是否开启调试模式
define('DEBUG',true);
date_default_timezone_set('PRC');
//需要安装composer/下载扩展
//引入文件
include "vendor/autoload.php";

if(DEBUG){
    //使用相应配置
    $whoops = new \Whoops\Run;
    $errorTitle='我的框架出错了';//自定义错误标题
    $option=new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();
    //触发错误就会进入composer界面;
    //display_error错误显示;
    ini_set('display_error','On');
}else{
    ini_set('display_error','Off');
}

//dump($_SERVER);exit;


//加载函数库
include CORE.'/common/function.php';
include CORE.'/imooc.php';

spl_autoload_register('\core\imooc::load');//实例化类不存在则触发此函数;
//启动框架
\core\imooc::run();

//p(IMOOC);
