<?php
namespace app\model;
use core\lib\model;

class shengModel extends model
{
	  public $table="exist";
    
	  public function sheng_select($id)
	  {
	  	 $re = $this->select($this->table,'*', [
                 "u_id" => $id
            ]);
	  	 //dump($re);die;
            return $re;
	  }
	  public function sheng_add($data,$id)
	  {
	  	  $arr = $this->insert($this->table,[
                 "u_id" => $id,
                 "smoke" => $data['smoke'],
                 "drink" => $data['drink'],
                 "fitness" => $data['fitness'],
                 "rest" => $data['rest'],
                 "askchild" => $data['askchild'],
                 "lifeskill" => $data['lifeskill'], 
               ]);
            return $arr;
	  }
	  public function sheng_update($data,$id)
	  {
               $arr = $this->update($this->table,[
                 "u_id" => $id,
                 "smoke" => $data['smoke'],
                 "drink" => $data['drink'],
                 "fitness" => $data['fitness'],
                 "rest" => $data['rest'],
                 "askchild" => $data['askchild'],
                 "lifeskill" => $data['lifeskill'], 
               ],[

                  "u_id"=>$id
               ]);
            return $arr;
	  }
    
}
?>

