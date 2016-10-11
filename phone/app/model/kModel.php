<?php
namespace app\model;
use core\lib\model;

class kModel extends model
{
    public $article='article';
    public $user='user';
    //查询数据
    public function all($name)
    {
        $ret=$this->select($this->article,'*',['ORDER'=>['id'=>'ASC']]);
        //p($ret);exit;
        return $ret;
    }
    //查询个人信息
    public function getOne($name,$where)
    {
        $ret=$this->get($name,'*',$where);
        //p($ret);exit;
        return $ret;
    }
    public function updateOne($data,$where)
    {
        $ret=$this->update($this->user,$data,['id'=>$where]);
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
        return $this->insert($this->article,$data);
    }
    //删除留言
    public function delOne($id)
    {
        $ret = $this->delete($this->article,array(
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