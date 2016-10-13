<?php
namespace app\model;
use core\lib\model;

class monoModel extends model
{
    public $table="mono";
    public $basi="basicdata";
    public function addOne($data)
    {
        return $this->insert($this->table,$data);
    }
    public function getOne($where)
    {
     return $this->get($this->basi,'*',$where);
    }
    public function save($data,$where)
    {
        return $this->update($this->basi,$data,$where);
    }
}

?>