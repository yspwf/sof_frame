<?php 
namespace home;
use \sof\controller;
class index extends controller{

    public function index(){
       // echo "welcome swoole http server".PHP_EOL;
       //$this->write(['hh'=>'哈哈哈哈','gg'=>'坎坎坷坷扩']);
       return ['name'=>'ysp','sex'=>'男'];
    }

}

?>