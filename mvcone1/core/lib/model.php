<?php
namespace core\lib;
//use \core\lib\model;
use core\lib\conf;
class model extends \medoo
{
    public function __construct()
    {
        /*//连接数据库
        $dsn='mysql:host=127.0.0.1;dbname=jiance';
        $username='root';
        $passwd='root';
        $database=conf::all('database');
        try{
            parent::__construct($database['DSN'], $database['USERNAME'], $database['PASSWD']);
        } catch(\PDOException $e){
            p($e->getMessage());
        }*/
        $option = conf::all('database');
        parent::__construct($option);
    }
}

?>