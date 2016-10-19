<?php
namespace app\model;
use core\lib\model;

class basicdataModel extends model
{
    public $table="basicdata";

    public function user_phone($id)
    {
        // $model=new model();
        // $ret = $this->select($this->table,'*');
        // return $ret;

        $arr = $this->select($this->table,'*',['u_id[!]' => $id]
        );
//        dump($arr);die;
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
        $arr = $this->select($this->table,'*', [
            "AND" =>$data
        ]);
//        var_dump($this->error());die;
//        print_R($arr);die;
        return $arr;
    }



}
?>

