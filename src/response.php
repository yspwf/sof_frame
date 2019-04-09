<?php 
namespace sof;
class response{

    private static $instance;
    private $response;

    public function __construct($response){
        $this->response = $response;
    }

    // public static function getInstance($response=''){
    //     if(!(self::$instance instanceof self)){
    //         self::$instance = new self($response);
    //     }
    //     return self::$instance;
    // }


    public function write($data){
        $this->response->header('Content-Type','text/html;charset=utf-8');
        $this->response->write(json_encode($data));
    }

}

?>