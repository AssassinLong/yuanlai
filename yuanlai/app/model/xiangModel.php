<?php
namespace app\model;
use core\lib\model;

class xiangModel extends model
{
	  public $table="detailsdata";
    
	  public function xiang($id)
	  {
	  	 $re = $this->select($this->table,'*', [
                 "u_id" => $id
            ]);
	  	 //dump($re);die;
            return $re;
	  }
      public function xiang_select($id)
      {
          
            $re = $this->select($this->table,'*', [
                 "u_id" => $id,  
               ]);
            return $re;
      }
      public function xiang_add($data,$id)
      {
          
            $arr = $this->insert($this->table,[
                 "u_id" => $id,
                 "nature" => $data['nature'],
                 "bloodtype" => $data['bloodtype'],
                 "nation" => $data['nation'],
                 "children" => $data['children'],
                 "vehicle" => $data['vehicle'],
                 "house" => $data['house'], 
               ]);
            return $arr;
      }
      public function xiang_update($data)
      {
          
            $arr = $this->update($this->table,[
                 "nature" => $data['nature'],
                 "bloodtype" => $data['bloodtype'],
                 "nation" => $data['nation'],
                 "children" => $data['children'],
                 "vehicle" => $data['vehicle'],
                 "house" => $data['house'], 
               ]);
            return $arr;
      }
}
?>

