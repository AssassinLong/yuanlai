<?php
namespace app\ctrl;
use app\model\userModel;
use core\lib\conf;
use core\lib\model;

class homeCtrl extends \core\imooc
{
    //主页
    public function index()
    {
      
      $this->display('index.html');
    }

}
     


?>