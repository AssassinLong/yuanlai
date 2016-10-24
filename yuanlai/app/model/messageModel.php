<?php
namespace app\model;
use core\lib\model;

class messageModel extends model
{
    public $table='message';
    public function addOne($data)
    {
        return $this->insert($this->table,$data);
    }
    //查询所有发件人
    public function addAll($id)
    {
        return $this->query("select u_id,real_name,age,sex,head_img,count(u_id) as num,max(createtime) as maxtime from message INNER JOIN basicdata ON message.us_id=basicdata.u_id where a_id=".$id." and readstatus=0  GROUP BY u_id ORDER BY maxtime DESC")->fetchAll();
    }
    //查询单个发件人所有未读消息
    public function oneAll($uid,$id)
    {
        return $this->query("select * from message INNER JOIN basicdata ON message.us_id=basicdata.u_id where us_id in (".$uid.",".$id.") and a_id in (".$uid.",".$id.") and readstatus=0 ")->fetchAll();
    }
    //查询所有条数
    public function all($table,$where)
    {
        $field='a_id,m_id,addressee.content,sendstatus,recevestatus,readstatus,u_age,u_sex,createtime';
        return $this->query("select ".$field." from ".$table." INNER JOIN message ON ".$table.".a_id=message.id where ".$table.".a_id=".$where['a_id']." and ".$table.".readstatus=".$where['readstatus'])->fetchAll();
    }
    //修改状态值
    public function updata()
    {

    }
}

?>