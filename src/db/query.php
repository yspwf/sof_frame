<?php 
namespace sof\db;
class query{

    public $connect;

    public function __construct(){
        $this->connect = connect::getInstance();
    }

    public function test(){
        $query = $this->connect->get();
        $res = $query->query('select 1+1 as sum');
        $this->connect->push($query);
        return $res;
    }

}

?>