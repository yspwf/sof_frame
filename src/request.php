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
        $urlarr = explode('/', $url);
        array_shift($urlarr);
        $params = array_slice($urlarr, 3);
        return $this->context($params);
    }

    public function getController(){
        $url = $this->request->server['path_info'];
        if($url == '/favicon.ico'){
            return false;
        }
        $urlarr = explode('/',$url);
        array_shift($urlarr);
        return empty($urlarr[0]) ? ['home','index','index'] : array_slice($urlarr, 0, 3);
    }


    public function context($params){
        $keys = [];
        array_walk($params, function($value, $key) use(&$keys){
                if($key%2==0){
                    $keys[] = $value;
                }
        });
        $values = [];
        array_walk($params, function($value, $key) use(&$values){
                if($key%2!=0){
                    $values[] = htmlspecialchars($value);
                }
        });
        return array_combine($keys, $values);
    }

}

?>