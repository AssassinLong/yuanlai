<?php
namespace app\ctrl;
use app\model\userModel;
use core\lib\model;

class indexCtrl extends \core\imooc
{
   
    public function login()
    {
            $this->display('login.html');
    }
}


?>