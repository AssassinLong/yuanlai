<?php
//定义方法
function p($var)
{
    if(is_bool($var)) {
        var_dump($var);
    }else if(is_null($var)) {
        var_dump($var);
    }else{
        echo "<pre style='position: relative;z-index: 1000;padding: 10px;border-radius: 5px;background:#F5F5F5;border: 1px solid  #aaa;font-size: 14px;line-height: 18px;opacity: 0.9;'>".print_r($var,true)."</pre>";
    }
}
/*
 * 1:$name 对应值
 * 2:$default 默认值
 * 3:$fitt 过滤方法 'int'
 */
function post($name,$default=false,$fitt=false)
{
    if(isset($_POST[$name])){
        if($fitt){
            switch($fitt){
                case 'int':
                    if(is_numeric($_POST[$name])){//检测变量是否是数字
                        return $_POST[$name];
                    }else{
                        return $default;
                    }
                break;
                default: ;
            }
        }else{
            return $_POST[$name];
        }
    }else{
        return $default;
    }
}
/*
 * 1:$name 对应值
 * 2:$default 默认值
 * 3:$fitt 过滤方法 'int'
 */
function get($name,$default=false,$fitt=false)
{
    if(isset($_GET[$name])){
        if($fitt){
            switch($fitt){
                case 'int':
                    if(is_numeric($_GET[$name])){//检测变量是否是数字
                        return $_GET[$name];
                    }else{
                        return $default;
                    }
                    break;
                default: ;
            }
        }else{
            return $_GET[$name];
        }
    }else{
        return $default;
    }
}
//跳转页面
function jump($url)
{
    header('location:'.$url);
    exit();
}



?>