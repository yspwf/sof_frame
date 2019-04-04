<?php 
namespace sof;
class register{

    // public function __construct(){
    //     spl_autoload_register([$this, 'autoload']);
    // }

    public static function autoload($classname){
        echo "23423424234";
        echo $classname;
       // $classname = str_replace('\\','/', $classname);
        $basePath = str_replace('\\', DIRECTORY_SEPARATOR, ROOT.DIRECTORY_SEPARATOR.$classname);
        $file = $basePath.".php";
        echo $file;
        if(file_exists($file)){
            require_once $file;
        }
    }

}





?>