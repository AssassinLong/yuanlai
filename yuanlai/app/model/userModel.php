<?php
namespace app\model;
use core\lib\model;

class userModel extends model
{
     public $table="user";

        public function getOne($id)
        {
         return $this->select($this->table,'*',['id' => $id ]);
        }
        public function user_phone($data)
        {
            // $model=new model();
            // $ret = $this->select($this->table,'*');
            // return $ret;
               
               $arr = $this->select($this->table,'*', [
                 "phone" => $data['username'],  
               ]);
               //dump($arr);die
               return $arr;
        }
        public function user_email($data)
        {
            // $model=new model();
            // $ret = $this->select($this->table,'*');
            // return $ret;
               
               $arr = $this->select($this->table,'*', [
                 "eml" => $data['username'],  
               ]);
               //dump($arr);die
               return $arr;
        }
        public function user_name($data)
        {
            // $model=new model();
            // $ret = $this->select($this->table,'*');
            // return $ret;
               
               $arr = $this->select($this->table,'*', [
                 "name" => $data['username'],  
               ]);
               //dump($arr);die
               return $arr;
        }
    //修改魅力值
    public function save_dubai($update,$where)
    {
        return $this->update($this->table,$update,$where);
    }
        
}
?>

