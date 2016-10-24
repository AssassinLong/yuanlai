<?php
namespace app\ctrl;
use core\lib\conf;
use core\lib\model;
use app\model\userModel;
use app\model\xiangModel;
use app\model\shengModel;
use app\model\basicdataModel;
use app\model\monoModel;
use app\model\pictureModel;
use app\model\messageModel;

session_start();
class homeCtrl extends \core\imooc
{
    //主页
    public function index()
    {
        //var_dump($_SESSION);
        if(isset($_SESSION['username'])){
        $url=array(
            'fossa'   => '?r=home/fossa',
            'advices' => '?r=home/advices',
            'xinqing' => '?r=home/xinqing',
            'suggest' => '?r=home/suggest',
            'renwu'   => '?r=home/renwu',
            'paihangbang' => '?r=home/paihangbang',
        );}else{
        $url=array(
            'fossa'   => '?r=index/login',
            'advices' => '?r=index/login',
            'xinqing' => '?r=index/login',
            'suggest' => '?r=index/login',
            'renwu'   =>'?r=index/login',
            'paihangbang' => '?r=index/login',
        );
        }
      $this->assign('url',$url);
      $this->display('index.html');
    }
    //
    public function datum()
    {
            $this->display('datum.html');
    }
    //内部搜索
    public function seek()
    {//echo '1';
            $this->display('seek.html');
    }
    //消息展示
    public function advices()
    {
        $id=$_SESSION['id'];
        $mess=new messageModel();
        $arr=$mess->addAll($id);
        //$mess->updata('');
        //p($arr);
        $this->assign('arr',$arr);
        $this->display('advices.html');
    }
    //礼物(暂定)
    public function gift()
    {
        $this->display('gift.html');
    }
    //论坛
    public function forum()
    {
        $this->display('forum.html');
    }
    //个人中心
    public function fossa()
    {
        if(isset($_SESSION['username'])) {
            
            if(get('tid')){
                $u_id=$_SESSION['id'];
                $id=get('tid');
                $model = new xiangModel();
            $re = $model->xiang($id);
            if ($re) {
                $this->assign('re', $re);
            }
            $model = new shengModel();
            $sheng = $model->sheng_select($id);
            if ($sheng) {

                $this->assign('sheng', $sheng);
            }
            
            $model = new basicdataModel();
            $arras = $model->userOne1($id);
            
            if ($arras) {
                $this->assign('arras', $arras);
            }
//            print_r($arras);die;
            $mono = new monoModel();
            $dubai = $mono->getOne(['u_id' => $id]);
            $this->assign('dubai', $dubai);

            $picture=new pictureModel();
            $imgs=$picture->all($id);
           
            $this->assign('imgs',$imgs);
            $ar=$mono->guan_sel($id);
            $ar1=count($ar);
            $meili = $mono->meili($id);
            $m=$meili[0]['usercp'];
            $this->assign('m',$m);
            $this->assign('ar1',$ar1);
            $data=$mono->zi_guan($id);
            $data1=count($data);
            $this->assign('data1',$data1);
            $aa=array('s_id'=>$u_id,'b_id'=>$id);
            $aaa=$mono->sta($aa);
            $this->assign('aaa',$aaa);
            $this->display('fossa_ta.html');
            }  else{

                 $id=$_SESSION['id'];
                $model = new xiangModel();
                $re = $model->xiang($id);
                if ($re) {
                    $this->assign('re', $re);
                }
                $model = new shengModel();
                $sheng = $model->sheng_select($id);
                if ($sheng) {

                    $this->assign('sheng', $sheng);
                }
               
                $model = new basicdataModel();
                $arras = $model->userOne1($id);
                if ($arras) {
                    $this->assign('arras', $arras);
                }
//                print_r($arras);die;
                $mono = new monoModel();
                $dubai = $mono->getOne(['u_id' => $id]);
                $this->assign('dubai', $dubai);

                $picture=new pictureModel();
                $imgs=$picture->all($id);
                $this->assign('imgs',$imgs);
                //p($imgs);

                $ar=$mono->zi_guan($id);
                $ar1=count($ar);
                $data=$mono->guan_sel($id);
                $data1=count($data);
                $this->assign('ar1',$ar1);
                $this->display('fossa.html');
            }
            
            
        }else{
            jump('?index/login');
        }
    }
    //上传相册
    public function upload()
    {
        //unset($_SESSION['imgfile']);
       /* if(isset($_SESSION['imgfile'])){
            var_dump($_SESSION['imgfile']);
        }elseif(isset($_FILES['imgfile'])){
            $_SESSION['imgfile']=$_FILES['imgfile'];
        }else{
            echo '未上传文件';
        }*/

        if(isset($_FILES['imgfile'])){

             //$_FILES['imgfile'];
            $filepath='./web/upimg/';
            if(!file_exists($filepath)){
                mkdir($filepath);;
            }
            $imgpaths=$filepath.time().$_FILES['imgfile']['name'];
            move_uploaded_file($_FILES['imgfile']['tmp_name'],$imgpaths);
            $data['u_id']=$_SESSION['id'];
            $data['u_name']=$_SESSION['username'];
            $data['path']=$imgpaths;
            $data['date']=date('Y-m-d H:i:s',time());
            $data['show']='1';
            $id=$_SESSION['id'];
            $model=new pictureModel();
              $model->addOne($data);
            $basi=new basicdataModel();
            $basi->setimg($id,$imgpaths);
            $arr=$model->all($id);
            $arr1=count($arr);
            //dump($arr1);die;
            if($arr1==1){
                // echo 1;die;
                $aaa=$model->up($id);
                $aaa1=$model->ad($id);

                $aaa2=$model->sta($id);

            }else{
               // echo 2;die;
                $aaa=$model->up1($id);
                $aaa1=$model->ad1($id);
            }
        }else{
             echo '文件未上传';
         }
    }
    public function shaixuan()
    {


        $this->display('shaixuan.html');
    }
    public function suggest()
    {
        $u_id=$_SESSION['id'];
        $base=new basicdataModel();
        $arr=$base->user_phone($u_id);
        //dump($arr);die;
        $this->assign('ars',$arr);
        //var_dump($arr);die;
        $this->display('suggest.html');
    }

    public function xinqing()
    {

         $base=new monoModel();
         $arr=$base->sel();
         //p($arr);die;
         $this->assign('arr',$arr);

    	 $this->display('xinqing.html');
    }

    public function guan()
    {
         $id=$_SESSION['id'];
         $u_id=post('u_id');
         $base=new monoModel();
        $arrs=array('s_id'=>$id,'b_id'=>$u_id);
        $arr=$base->quxiao($arrs);
//        print_r($arr);die;
        if($arr){
         $arr=$base->delall($arrs);
            $ar=$base->guan_sel($u_id);
            $ar1=count($ar);

            if($arr){

                $array=array('a'=>1,'f'=>$ar1);
                $json=json_encode($array);
                echo $json;
            }else{
                echo 0;
            }
        }else{
        $arr=$base->guan($id,$u_id);
            $ar=$base->guan_sel($u_id);
            $ar1=count($ar);

            if($arr){
                $array=array('a'=>2,'f'=>$ar1);
                $json=json_encode($array);
                echo $json;
            }else{
                echo 0;
            }
        }


    }


    public function renwu()
    {
        $time=date('Y-m-d',time());
        //echo $time;die;
    	$id=$_SESSION['id'];
        $user=new userModel();
        $data=$user->getOne($id);
    	$base=new monoModel();
    	$arr=$base->renwu($id);
        $meiri=$base->day($id,$time);
        if($meiri[0]['u_id']!=0){
            $data['m_num']=$meiri[0]['m_num'];
        }else{
            $data['m_num']='0';
        }
    	//dump($meiri);die;
        //p($arr);
    	$this->assign('data',$data);
        $this->assign('arr',$arr);
        $this->display('renwu.html');
    }

    public function paihangbang()
    {
        $model=new basicdataModel();

        $arr=$model->sel();
        $s=$arr[0];
        $s1=$arr[1];
        $s2=$arr[2];
        $this->assign('s',$s);
        $this->assign('s1',$s1);
        $this->assign('s2',$s2);
        $s3=$arr[3];
        $usercp=$s3['usercp'];
        $aa=$model->sells($usercp);
        //p($aa);
        $this->assign('aa',$aa);
        $this->display('paihangbang.html');
    }
    public function aa(){
        $this->display('a.html');
    }



}
     

  
?>