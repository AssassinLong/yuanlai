<?php
   namespace app\ctrl;
   use core\lib\model;
   use app\model\xiangModel;
   use app\model\shengModel;
   use app\model\basicdataModel;
   use app\model\monoModel;
   session_start();
   class fossaCtrl extends \core\imooc
   {

       public function dubai()
       {
           if(post('monolog')){
               $data['text']=post('monolog');
               $data['datatime']=date('Y-m-d H:i:s',time());
               $data['u_id']=$_SESSION['id'];
               //var_dump($data);
               $model=new monoModel();
               $str=$model->addOne($data);
               //var_dump($str);
               if($str>0){
                   $model->save(['mono'=>$data['text']],['u_id'=>$data['u_id']]);
                   echo '1';
               }else{
                   echo '0';
               }
           }else{

               $this->display('dubai.html');
           }
       }
       public function jibenjieshao()
       {
           $id=$_SESSION['id'];
//           echo $id;die;
           $data=array('u_id'=>$id);
           $model=new basicdataModel();
           $arr=$model->userOne1($data);
           $this->assign('arr',$arr);
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

                $arr=$model->xiang_update($data,$id);
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

           if($_SESSION['username']){
                $model=new shengModel();
                $id=$_SESSION['id'];
                $re=$model->sheng_select($id);
                //dump($re);die;
                if($re){
                    $this->assign('re',$re);
                    $this->display('shenghuomiaoshu.html');
                }else{
                    $this->display('shenghuomiaoshu.html');
                }


           }else{

               jump('?r=index/login');
           }

       }
       public function sheng_add()
       {
            $id=$_SESSION['id'];
            $model=new shengModel();
            $data['smoke']=post('smoke');
            $data['drink']=post('drink');
            $data['fitness']=post('fitness');
            $data['rest']=post('rest');
            $data['askchild']=post('askchild');
            $data['lifeskill']=post('lifeskill');
            $re=$model->sheng_select($id);
            //dump($re);die;
            if($re){

                $arr=$model->sheng_update($data,$id);
                if($arr){
                     jump('?r=home/fossa');
                } else{
                     jump('?r=fossa/shenghuomiaoshu');
                }
            }else{

                $arr=$model->sheng_add($data,$id);
                if($arr){

                       jump('?r=home/fossa');
                }else{

                       jump('?r=fossa/shenghuomiaoshu');
                }
            }
       }
       /*地区有值*/
       public function xiu3()
       {
           $id=$_SESSION['id'];
           $di=post('di');
           $data=array("region"=>$di);
           $model=new basicdataModel();
           $arr=$model->setOne($id,$data);
           if($arr){
               echo $di;
           }else{
               echo 2;
           }
       }
       /*月薪*/
       public function xiu2()
       {
           $id=$_SESSION['id'];
           $yue1=post('yue1');
//           echo $yue1;die;
           $data=array("pay"=>$yue1);
           $model=new basicdataModel();
           $arr=$model->setOne1($id,$data);
           if($arr){
               echo $yue1;
           }else{
               echo 2;
           }
       }


       public function xiu6()
       {
           $id=$_SESSION['id'];
           $xing=post('xing');
           $data=array("constellation"=>$xing);
           $model=new basicdataModel();
           $arr=$model->setTwo($id,$data);
           if($arr){
               echo $xing;
           }else{
               echo 2;
           }
       }
       /*籍贯*/
       public function xiu7()
       {
           $id=$_SESSION['id'];
           $ji=post('ji');
           $data=array("native"=>$ji);
           $model=new basicdataModel();
           $arr=$model->setThree($id,$data);
           if($arr){
               echo $ji;
           }else{
               echo 2;
           }
       }
       /*学历*/
       public function xiu9()
       {
           $id=$_SESSION['id'];
           $xue=post('xue');
           $data=array("record"=>$xue);
           $model=new basicdataModel();
           $arr=$model->setFour($id,$data);
           if($arr){
               echo $xue;
           }else{
               echo 2;
           }
       }
       /**/
       public function xiu11()
       {
           $id=$_SESSION['id'];
           $sex=post('sex');
           $data=array("sex"=>$sex);
           $model=new basicdataModel();
           $arr=$model->setxiu($id,$data);
           if($arr){
               echo $sex;
           }else{
               echo 2;
           }
       }
       /**/
       public function xiu12()
       {
           $id=$_SESSION['id'];
           $age=post('age');
           $data=array("age"=>$age);
           $model=new basicdataModel();
           $arr=$model->setxiu1($id,$data);
           if($arr){
               echo $age;
           }else{
               echo 2;
           }
       }
       /*婚姻状况*/
       public function xiu1()
       {
           $id=$_SESSION['id'];
           $hun=post('hun');
           $data=array("marital"=>$hun);
           $model=new basicdataModel();
           $arr=$model->setfix($id,$data);
           if($arr){
               echo $hun;
           }else{
               echo 2;
           }

       }
       /*筛选*/
       public function sou()
       {
           $id=$_SESSION['id'];
//         $gender=isset(post('gender'))?post('gender'):'0';
           $data=array();
           $ageValue= post('ageValue');
           empty($ageValue)?:$data['age']=$ageValue;
           $salary=post('salary');
           empty($salary)?:$data['pay']=$salary;

           $gender=post('gender');
           empty($gender)?:$data['sex']=$gender;
           $education=post('education');
           empty($education)?:$data['record']=$education;
           $provinceid=post('provinceid');
           empty($provinceid)?:$data['region']=$provinceid;
           empty($id)?:$data['u_id[!]']=$id;
//           print_r($data);die;
           if(empty($data['age']))
           {
               if(empty($data['pay']))
               {

                   $model=new basicdataModel();
                   $arr=$model->selAll($data);
//                   print_r(1);die;
               }else
               {
                   $pay = explode('-', $data['pay']);
                   unset($data['pay']);

                   $data['pay[>]']=$pay[0];
                   $data['pay[<]']=$pay[1];
//                   $data["pay[<>]"]=$pay[0].",".$pay[1];
//                   print_r($data);die;
                   $model = new basicdataModel();
                   $arr = $model->selAll($data);
//                   print_r(2);die;
//                   $this->assign('ars',$arr);
//                   $this->display('suggest.html');
               }
           }else
           {
               if(empty($data['pay']))
               {
                   $age = explode('-', $data['age']);
                   unset($data['age']);
                   $data['age[>]']=$age[0];
                   $data['age[<]']=$age[1];
                   $model=new basicdataModel();
                   $arr=$model->selAll($data);
//                   print_r($arr);die;
               }else
               {
//                   unset($data['pay']);
                   $pay = explode('-', $data['pay']);
                   $age = explode('-', $data['age']);
                   unset($data['pay']);
                   unset($data['age']);
                   $data['age[>]']=$age[0];
                   $data['age[<]']=$age[1];
                   $data['pay[>]']=$pay[0];
                   $data['pay[<]']=$pay[1];
//                   $data["pay[<>]"]=$pay[0].",".$pay[1];
//                   print_r($data);die;
                   $model = new basicdataModel();
                   $arr = $model->selAll($data);


               }
           }
//           print_r($arr);die;
           $this->assign('ars',$arr);
           $this->display('suggest.html');
//           $model=new basicdataModel();
//           $arr=$model->selAll($data);
//           $this->assign('ars',$arr);
//        print_r($dubai);die;
//           $this->display('suggest.html');
//           print_r($arr);

       }


   }

?>