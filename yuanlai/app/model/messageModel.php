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
}

?>