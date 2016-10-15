<?php
namespace app\model;
use core\lib\model;

class pictureModel extends model
{
    public $table="picture";
    public function all()
    {
    }
    public function addOne($data)
    {
        return $this->insert($this->table,$data);
    }
    public function delOne()
    {
    }

}
?>

