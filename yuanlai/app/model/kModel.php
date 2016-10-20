<?php
namespace app\model;
use core\lib\model;

class kModel extends model
{
    public $table='message';
    //查询所有留言
    public function all()
    {
        $ret=$this->select($this->table,'*',['ORDER'=>['datatime'=>'DESC']]);
        //p($ret);exit;
        return $ret;
    }
    //添加留言
    public function addOne($table,$data)
    {

        return $this->insert($table,$data);
    }
    public function addOne2($table,$data)
    {

        $id=$this->last_insert_id($table,$data);
        return $id;
//        print_r($id);die;
    }

    //删除留言
    public function delOne($id)
    {
        $ret = $this->delete($this->table,array(
            'id'=>$id
        ));
        if($ret !== false){
            return true;
        }else{
            return false;
        }
    }

}
?>