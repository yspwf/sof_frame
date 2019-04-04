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
        echo $url;
        return $this->context($url);
    }


    public function context($url){
        $keys = [];
        array_walk($url, function($value, $key) use(&$keys){
                if($key%2==0){
                    $keys[] = $value;
                }
        });
        $values = [];
        array_walk($url, function($value, $key) use(&$values){
                if($key%2!=0){
                    $values[] = htmlspecialchars($value);
                }
        });
        return array_combine($keys, $values);
    }

}

?>