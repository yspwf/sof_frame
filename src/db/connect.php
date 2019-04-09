<?php 
namespace sof\db;
class connect{

    private static $instance;

    private $channel;

    public static function getInstance(){
        if(!(self::$instance instanceof self)){
            $self = new self();
            $self->connect();
            self::$instance = $self;
        }
        return self::$instance;
    }


    public function connect(){
        $this->channel = new \Swoole\Coroutine\Channel(10);
        for($i=0;$i<10;$i++){
            $mysql = new \Swoole\Coroutine\MySQL();
            $mysql->connect([
                'host'=>'127.0.0.1',
                'port'=>3306,
                'user'=>'root',
                'password'=>'',
                'database'=>'demo'
            ]);
            $this->push($mysql);
        }
    }

    public function push($mysql){
        $this->channel->push($mysql);
    }

    public function length(){
        return $this->channel->length();
    }

    public function get(){
        return $this->channel->pop();
    }

}


?>