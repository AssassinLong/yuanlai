<?php
namespace app\model;
use core\lib\model;

class basicdataModel extends model
{
    public $table="basicdata";


    public function user_phone($u_id)
    {
        // $model=new model();
        // $ret = $this->select($this->table,'*');
        // return $ret;
        $arr = $this->query("select * from user INNER JOIN basicdata ON user.id=basicdata.u_id where user.id!=$u_id")->fetchAll();
        //dump($arr);die;
        return $arr;
    }

    public function userOne1($id)
    {
        $arr = $this->query("select * from user INNER JOIN basicdata ON user.id=basicdata.u_id where user.id=$id")->fetchAll();
        return $arr;
    }

    public function setOne($id,$data){
        $ret=$this->update($this->table,[
            "region"=>$data['region']
        ],array(
            'u_id'=>$id
        ));
        return $ret;
    }
    public function setOne1($id,$data){
        $ret=$this->update($this->table,[
            "pay"=>$data['pay']
        ],array(
            'u_id'=>$id
        ));
//        echo $ret;die;
        return $ret;
    }
    public function setTwo($id,$data){
        $ret=$this->update($this->table,[
            "constellation"=>$data['constellation']
        ],array(
            'u_id'=>$id
        ));
//        echo $ret;die;
        return $ret;
    }
    public function setThree($id,$data){
        $ret=$this->update($this->table,[
            "native"=>$data['native']
        ],array(
            'u_id'=>$id
        ));
//        echo $ret;die;
        return $ret;
    }
    public function setFour($id,$data){
        $ret=$this->update($this->table,[
            "record"=>$data['record']
        ],array(
            'u_id'=>$id
        ));
//        echo $ret;die;
        return $ret;
    }
    public function setfix($id,$data){
        $ret=$this->update($this->table,[
            "marital"=>$data['marital']
        ],array(
            'u_id'=>$id
        ));
//        echo $ret;die;
        return $ret;
    }
    public function setxiu($id,$data){
        $ret=$this->update($this->table,[
            "sex"=>$data['sex']
        ],array(
            'u_id'=>$id
        ));
//        echo $ret;die;
        return $ret;
    }
    public function setxiu1($id,$data){
        $ret=$this->update($this->table,[
            "age"=>$data['age']
        ],array(
            'u_id'=>$id
        ));
//        echo $ret;die;
        return $ret;
    }
    public function selAll($data)
    {
//        print_R($data);die;
        $arr = $this->select($this->table,["[>]user" => ["u_id" => "id"]],'*', [
            "AND" =>$data
        ]);
//        var_dump($this->error());die;
//        print_R($arr);die;
        return $arr;
    }
    public function adde1($str,$real_name)
    {
        return $this->insert($this->table,[
            "u_id"=>$str,
            "real_name"=>$real_name,
        ]);
    }
    public function sel(){
         $arr = $this->query("select * from user INNER JOIN basicdata ON user.id=basicdata.u_id  order by user.usercp desc limit 4")->fetchAll();
         return $arr;
    }
    public function sells($usercp){

        $arr = $this->query("select * from user INNER JOIN basicdata ON user.id=basicdata.u_id where user.usercp<= ".$usercp."  order by user.usercp desc limit 7")->fetchAll();
//       print_r($usercp);die;
        return $arr;
    }

    public function adde2($str)
    {
          $data=date('Y-m-d');
          return $this->insert('renwu',[
               'u_id'=>$str,
               's_static'=>1,
                'r_data'=>$data
            ]);
    }
    public function adde3($str)
    {
          $data=date('Y-m-d');
          return $this->insert('meiri',[
               'u_id'=>$str,
               'm_name'=>'手机号注册魅力增加100',
               'm_num'=>100,
               'date'=>$data
            ]);
    }
}
?>

