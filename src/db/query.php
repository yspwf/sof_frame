<?php 
namespace sof\db;
class query{

    public $connect;

    public function __construct(){
        $this->connect = connect::getInstance();
    }

    public function test(){
        $res = $this->query('select 1+1 as sum');
        return $res;
    }

}

?>