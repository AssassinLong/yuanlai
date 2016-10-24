<?php
namespace app\model;
use core\lib\model;

class monoModel extends model
{
    public $table = "mono";
    public $basi = "basicdata";

    public function addOne($data)
    {
        return $this->insert($this->table, $data);
    }

    public function getOne($where)
    {
        return $this->get($this->basi, '*', $where);
    }

    //查询上一次独白
    public function getTwo()
    {
        return $this->query("select * from " . $this->table . " ORDER BY  id desc LIMIT 1")->fetchAll();
        //return $this->get($this->table,'*',[ "ORDER" => "mono.id DESC"]);
    }

    public function save($data, $where)
    {
        return $this->update($this->basi, $data, $where);
    }

    public function sel()
    {
        return $this->query("select * from user INNER JOIN mono on user.id=mono.u_id ORDER BY mono.datatime DESC ")->fetchAll();
    }

    public function guan($id, $u_id)
    {
        return $this->insert('guan', [

            's_id' => $id,
            'b_id' => $u_id
        ]);
    }
   /*查询粉丝*/
    public function guan_sel($u_id)
    {
        return $this->select('guan', '*', [

            'b_id' => $u_id
        ]);
    }

    /*魅力值*/
    public function meili($u_id){
        return $this->select('user','*',[

            'id'=>$u_id
        ]);
    }
    public function zi_guan($id)
    {

        //echo $id;

      return  $this->select('guan','*',[

                'b_id'=>$id
            ]);

    }

    public function sta($aa)
    {
        return $this->select('guan', '*', [
            'AND' => $aa
        ]);
    }

    public function renwu($id)
    {
        return $this->select('renwu', '*', [

            'u_id' => $id
        ]);
    }

    public function se($id)
    {
        return $this->select('mono', '*', [

            'u_id' => $id
        ]);
    }

    public function jia($id)
    {
        $data = date('Y-m-d');
        return $this->insert('meiri', [
            'u_id' => $id,
            'date' => $data,
            'm_num' => 50,
            'm_name' => '第一次发表独白'
        ]);
    }

    public function jia1($id)
    {
        return $this->update('user', [
            'usercp[+]' => '50'
        ], [

            'id' => $id
        ]);
    }

    public function jia2($id)
    {

        return $this->update('renwu', [
            'f_static' => 1
        ], [

            'u_id' => $id
        ]);
    }

    public function ss($id)
    {
        return $this->query("select datatime from mono  WHERE  u_id=$id order by (id) desc limit 1")->fetchAll();
    }

    public function acc($id)
    {
        return $this->update('user', [

            'usercp[+]' => 10
        ], [

            'id' => $id
        ]);
    }

    public function acc1($id)
    {
        $data = date('Y-m-d');
        return $this->insert('meiri', [
            'u_id' => $id,
            'date' => $data,
            'm_num' => 10,
            'm_name' => '每日日志'
        ]);
    }


    public function day($id, $time)
    {
        return $this->query("select u_id,sum(m_num) as m_num from meiri WHERE u_id=$id and date='$time'")->fetchAll();
        //return $this->select('meiri','*',['AND'=>$data]);
    }
}
?>