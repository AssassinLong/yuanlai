<?php
//var_dump($_GET);
//isset($_GET['user'])?$_COOKIE['name']:setcookie('name',$_GET['user']);
header('content-type:text/html;charset=utf-8');

session_start();
if(isset($_GET['user'])){
    $_SESSION['user']=$_GET['user'];
}
var_dump($_SESSION);
//@setcookie('name',$_GET['user']);
//echo $_COOKIE['name'];
//array(
//    'user'=>$_GET['user']
//)
?>