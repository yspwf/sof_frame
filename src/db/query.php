<?php 
namespace sof\db;
class query{

    public $connect;

    public function __construct(){
        $this->connect = connect::getInstance();
    }

    public function test(){
        $res = $this->connect->query('select 1+1 as sum');
        var_dump($res);
        // $query = $this->connect->get();
        // $res = $query->query('select 1+1 as sum');
        // $this->connect->push($query);
        // return $res;
    }

}

?>