<?php 
namespace sof;
class response{

    private $response;

    public function __construct($response){
        $this->response = $response;
    }


    public function write($data){
        $this->response->header('Content-Type','text/html;charset=utf-8');
        $this->response->write(json_encode($data));
    }

}

?>