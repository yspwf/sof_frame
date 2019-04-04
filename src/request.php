<?php 
namespace sof;
class request{

    private $request;

    public function __construct($request){
        $this->request = $request;
    }
    
    public function getParams(){
        $url = $this->request->server['path_info'];
        if($url == '/favicon.ico'){
            return false;
        }
        
        return $this->context($url);
    }


    public function context(){
        $keys = [];
        array_walk($query, function($value, $key) use(&$keys){
                if($key%2==0){
                    $keys[] = $value;
                }
        });
        $values = [];
        array_walk($query, function($value, $key) use(&$values){
                if($key%2!=0){
                    $values[] = htmlspecialchars($value);
                }
        });
        return array_combine($keys, $values);
    }

}

?>