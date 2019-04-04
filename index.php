<?php 
 const ROOT = __DIR__;
 require_once 'vendor/autoload.php';

 $config = require_once ROOT.'/config.php';

 use sof\http;
 $http = new http($config);
 $http->start();

 

// //require_once ROOT.'/src/function.php';

// // use sof\route;
// // $obj = new route('/home/user/getInof/name/df/id/34');
// // $obj->Context();

//  //require_once 'vendor/autoload.php';
// use sof\route;

//  use sof\register;
//  new register();

// //  spl_autoload_register('\sof\register::autoload');

// // use home\user;
// // $user = new user();
// // $res = $user->test();
// // var_dump($res);
//   $obj = new route('/');
//   $obj->Context();





?>