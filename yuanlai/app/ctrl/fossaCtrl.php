<?php 
   namespace app\ctrl;
   use core\lib\model;
   class fossaCtrl extends \core\imooc
   {

       public function dubai()
       {
           $this->display('dubai.html');
       }
       public function jibenjieshao()
       {
           $this->display('jibenziliao.html');
       }
       public function xiangxijieshao()
       {
           $this->display('xiangxiziliao.html');
       }
       public function shenghuomiaoshu()
       {
           $this->display('shenghuomiaoshu.html');
       }
   }

?>