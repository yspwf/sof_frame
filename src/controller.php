<?php 
namespace sof;
use \sof\db\connect;
class controller{
   
    private $response;

    public function test($data){
        $query = new connect();
        $query->query();
        //return $data;
    }

    // private $response;
    // private $data;

    // public function __construct($response){
    //     $this->response = $response;
    // }


    // public function write($data){
    //     $this->response->header('Content-Type','text/html;charset=utf-8');
    //     $this->response->write(json_encode($data));
    // }


    // public function render($data=[]){
    //     if(is_array($data)){
    //         $this->response->header('Content-Type','text/html;charset=utf-8');
    //         $this->response->write(json_encode($data));
    //         return ;
    //     }
    //     throw new \Exception('data type is error........');
    // }
}



?>