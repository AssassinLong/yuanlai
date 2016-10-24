<?php
namespace app\model;
use core\lib\model;

class pictureModel extends model
{
    public $table="picture";
    public function all($id)
    {
        return $this->select($this->table,'*',[
              'u_id'=>$id,
            'ORDER'=>["picture.id"=>"DESC"],
            'LIMIT'=>4,
        ]);
    }
    public function allAlbum($id)
    {
        return $this->select($this->table,'*',['u_id'=>$id,'ORDER'=>["picture.id"=>"DESC"],]);
    }
    public function addOne($data)
    {
        return $this->insert($this->table,$data);
    }
    public function delOne()
    {
    }

    public function up($id)
    {
         return $this->update('user',[
                'usercp[+]'=>'50'
            ],[

                'id'=>$id
            ]);
    }
    public function up1($id)
    {
         return $this->update('user',[
                'usercp[+]'=>'10'
            ],[

                'id'=>$id
            ]);
    }
    public function ad($id)
    {
         $data=date('Y-m-d');
         return $this->insert('meiri',[
                'u_id'=>$id,
                'date'=>$data,
                'm_num'=>50,
                'm_name'=>'第一次头像上传'
            ]);
    }
    public function ad1($id)
    {
         $data=date('Y-m-d');
         return $this->insert('meiri',[
                'u_id'=>$id,
                'date'=>$data,
                'm_num'=>10,
                'm_name'=>'相册图片上传'
            ]);
    }
    public function sta($id)
    {
        return $this->query("update renwu set t_static=1 where u_id=$id")->fetchAll();
    }
}
?>

