<?php 
namespace sof;
class register{

    // public function __construct(){
    //     spl_autoload_register([$this, 'autoload']);
    // }

    // public static function autoload($classname){
    //     echo "23423424234";
    //     echo $classname;
    //    // $classname = str_replace('\\','/', $classname);
    //     $basePath = str_replace('\\', DIRECTORY_SEPARATOR, ROOT.DIRECTORY_SEPARATOR.$classname);
    //     $file = $basePath.".php";
    //     echo $file;
    //     if(file_exists($file)){
    //         require_once $file;
    //     }
    // }

 

        /**
         * 自动加载
         */
        public static function autoload($class){
            echo "234234234234234234234";
            $basePath = str_replace('\\', DIRECTORY_SEPARATOR, ROOT.DIRECTORY_SEPARATOR.$class);
            $file = $basePath.'.php';
            echo $file;
            if(file_exists($file)){
                require_once $file;
            }else{
                throw new \Exception('No file find for this path!');
            }
        }
    
    

}





?>