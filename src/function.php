<?php 

function hh($data){
    if(!array_key_exists($res, $data)){
            throw new \Exception('param is error ..........');
    }
    return $data[$res];
}



?>