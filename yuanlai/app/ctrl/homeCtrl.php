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
            'fossa' => '?r=home/fossa',
            'advices' => '?r=home/advices',
            'xinqing' => '?r=home/xinqing',
            'suggest' => '?r=home/suggest',
        );}else{
        $url=array(
            'fossa' => '?r=index/login',
            'advices' => '?r=index/login',
            'xinqing' => '?r=index/login',
            'suggest' => '?r=index/login',
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
            $id=get('tid');
            if($id){
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
            $this->display('fossa.html');
            }else{
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
                //var_dump($imgs);
                $this->assign('imgs',$imgs);
                  

                $this->display('fossa.html');
            }
            
            
        }else{
            jump('?index/login');
        }
    }
    //上传相册
    public function upload()
    {
        /*//unset($_SESSION['imgfile']);
        if(isset($_SESSION['imgfile'])){
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
           $model=new pictureModel();
           $model->addOne($data);
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
        //var_dump($arr);
        $this->display('suggest.html');
    }

    public function xinqing()
    {

    	 $this->display('xinqing.html');
    }
}
     


?>