<?php 
   namespace app\ctrl;
   use core\lib\model;
   use app\model\xiangModel;
   session_start();
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
            if($_SESSION['username']){
                $model=new xiangModel();
                $id=$_SESSION['id'];
                $re=$model->xiang($id);
                //dump($re);die;
                if($re){
                    $this->assign('re',$re);
                    $this->display('xiangxiziliao.html');
                }else{
                    $this->display('xiangxiziliao.html');
                }
                

           }else{

               jump('?r=index/login');
           }
           
       }

       public function xiang_add()
       {
            $id=$_SESSION['id'];
            $data['nature']=post('nature');
            $data['bloodtype']=post('bloodtype');
            $data['nation']=post('nation');
            $data['children']=post('children');
            $data['vehicle']=post('vehicle');
            $data['house']=post('house');
            $model=new xiangModel();
            $re=$model->xiang_select($id);
            //dump($re);die;
            if($re){
                
                $arr=$model->xiang_update($data);
                if($arr){
                     jump('?r=home/fossa');
                } else{
                     jump('?r=fossa/xiangxijieshao');
                }
            }else{

                 $arr=$model->xiang_add($data,$id);
                if($arr){
                      
                       jump('?r=home/fossa');
                }else{

                       jump('?r=fossa/xiangxijieshao');
                }
            }

            
       }

       public function shenghuomiaoshu()
       {
           $this->display('shenghuomiaoshu.html');
       }
   }

?>