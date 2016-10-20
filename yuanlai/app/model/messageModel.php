<?php
namespace app\model;
use core\lib\model;

class messageModel extends model
{
    public $table='message';
    public function addOne($table,$data)
    {
        return $this->insert($table,$data);
    }
    public function all($table,$where)
    {
        return $this->query("select * from ".$table." INNER JOIN message ON ".$table.".a_id=message.id where ".$table.".a_id=".$where['a_id']." and ".$table.".readstatus=".$where['readstatus'])->fetchAll();
    }
}

?>