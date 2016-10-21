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
    //查询上一次独白
    public function getTwo()
    {
        return $this->query("select * from ".$this->table." ORDER BY  id desc LIMIT 1")->fetchAll();
        //return $this->get($this->table,'*',[ "ORDER" => "mono.id DESC"]);
    }
    public function save($data,$where)
    {
        return $this->update($this->basi,$data,$where);
    }
    public function sel()
    {
        
        return $this->query("select * from user INNER JOIN mono on user.id=mono.u_id")->fetchAll();
         
    }
    public function guan($id,$u_id)
    {
         return $this->insert('guan',[
           
               's_id'=>$id,
               'b_id'=>$u_id
            ]);
    }

    public function guan_sel($u_id)
    {
          return $this->select('guan','*',[

                'b_id'=>$u_id
            ]);
    }
    public function zi_guan($id)
    {

        //echo $id;
        return $this->select('guan','*',[

                's_id'=>$id
            ]);
    }
    public function sta($aa)
    {
          return $this->select('guan','*',[
             'AND'=>$aa
            ]);
    }
}

?>