<?php 
namespace sof;
class route{

    public $url;
    public $params = [];

    public function __construct($url){
        $this->url = $url;
    }

    public function Context(){

        $urlarr = explode('/', $this->url);
        array_shift($urlarr);
        list($module, $controller, $action) = empty($urlarr[0]) ? ['home','index','index'] : array_slice($urlarr, 0, 3);
        //echo $module."-----".$controller."--------".$action;
        $params = !empty(array_slice($urlarr, 3)) ? $this->queryContext(array_slice($urlarr, 3)) : array_slice($urlarr, 3);
        $class = "\\{$module}\\{$controller}";
        $object = new $class();
        if(!is_callable([$object, $action])){
            throw new \Exception('action is not exist....');
        }
        //var_dump($params);
        //call_user_func('hh', $params);
        call_user_func_array([$object, $action],[$params]);
        // var_dump($params);
        // var_dump($res);
        // if(!array_key_exists($res, $params)){
        //     throw new \Exception('param is error ..........');
        // }
        // echo $params[$res];
    }

  

    public function queryContext($query){
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