<?php 
namespace sof;
class http{

    private $http;

    public function __construct($config){
        //$this->config = $config;
        $this->http = new \Swoole\http\server($config['http']['ipaddr'], $config['http']['port']);
        $this->http->on('start', [$this, 'onStart']);
        $this->http->set($config['http']['set']);
        $this->http->on('WorkerStart', [$this, 'onWorkerStart']);
        $this->http->on('request', [$this, 'onRequest']);
        //$this->http->on('task', [$this, 'onTask']);
        //$this->http->on('finish', [$this, 'onFinish']);
    }

    public function start(){
        $this->http->start();
    }

    public function onStart($server){
         echo "server is start.........";
    }

    public function onWorkerStart($server, $woker_id){
        new \sof\register();
    }

    public function onRequest($request, $response){
               if($request->server['path_info'] == '/favicon.ico'){
                   return ;
               }

               $pathinfo = $request->server['path_info'];
               echo $pathinfo;
               new \sof\route($pathinfo);
               $response->end('hello swoole');
    }


}




?>