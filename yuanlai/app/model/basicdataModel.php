<?php
namespace app\model;
use core\lib\model;

class basicdataModel extends model
{
    public $table="basicdata";

    public function user_phone($data)
    {
        // $model=new model();
        // $ret = $this->select($this->table,'*');
        // return $ret;

        $arr = $this->select($this->table,'*', [
            "id" => $data['id'],
        ]);
        //dump($arr);die
        return $arr;
    }
    public function userOne1($data)
    {
        $arr = $this->select($this->table,'*', [
            "u_id" => $data['u_id'],
        ]);
        return $arr;
    }

    public function setOne($id,$data){
        $ret=$this->update($this->table,[
            "region"=>$data['region']
        ],array(
            'id'=>$id
        ));
        return $ret;
    }
    public function setOne1($id,$data){
        $ret=$this->update($this->table,[
            "pay"=>$data['pay']
        ],array(
            'id'=>$id
        ));
//        echo $ret;die;
        return $ret;
    }
    public function setTwo($id,$data){
        $ret=$this->update($this->table,[
            "constellation"=>$data['constellation']
        ],array(
            'id'=>$id
        ));
//        echo $ret;die;
        return $ret;
    }
    public function setThree($id,$data){
        $ret=$this->update($this->table,[
            "native"=>$data['native']
        ],array(
            'id'=>$id
        ));
//        echo $ret;die;
        return $ret;
    }
    public function setFour($id,$data){
        $ret=$this->update($this->table,[
            "record"=>$data['record']
        ],array(
            'id'=>$id
        ));
//        echo $ret;die;
        return $ret;
    }
    public function setfix($id,$data){
        $ret=$this->update($this->table,[
            "marital"=>$data['marital']
        ],array(
            'id'=>$id
        ));
//        echo $ret;die;
        return $ret;
    }

}
?>
