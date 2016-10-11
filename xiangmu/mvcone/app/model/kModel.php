<?php
namespace app\model;
use core\lib\model;

class kModel extends model
{
    public $table='message';
    //查询所有留言
    public function all()
    {
        $ret=$this->select($this->table,'*',['ORDER'=>['datatime'=>'ASC']]);
        //p($ret);exit;
        return $ret;
    }
    //添加留言
    public function addOne($data)
    {
       /* $data=array(
            'name'=>$name,
            'text'=>$text,
            'datatime'=>$datatime
        );*/
        //p($data);die;
        return $this->insert($this->table,$data);
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