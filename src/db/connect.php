<?php 
namespace sof\db;
class connect{

    private static $instance;

    private $channel;

    private $mysql;

    public static function getInstance(){
        if(!(self::$instance instanceof self)){
            $self = new self();
            //$self->connect();
            self::$instance = $self;
        }
        return self::$instance;
    }


    public function __construct(){
        // $this->mysql = new \Swoole\Coroutine\MySQL();
        // $status = $this->mysql->connect([
        //             'host'=>'127.0.0.1',
        //             'port'=>3306,
        //             'user'=>'root',
        //             'password'=>'',
        //             'database'=>'demo']
        //         );
        // if(!$status){
        //     throw new \Exception('mysql connect is fail ..........');
        // }
        try{
            $this->mysql = new \PDO("mysql:host=127.0.0.1;dbname=demo", "root", "");
        }catch(\PDOException $e){
            die ("Error!: " . $e->getMessage() . "<br/>");
        }
        

    }

    public function query($sql){
        $sql="select 1+1 as sum";  
        $sqldata = $this->mysql->query($sql); 
        $result = $sqldata->fetch();
        var_dump($result);
        // $res = $this->mysql->query($sql);
        // $this->mysql->close();
        // return $res;
    }


    // public function connect(){
    //     $this->channel = new \Swoole\Coroutine\Channel(200);
    //     for($i=0;$i<200;$i++){
    //         $mysql = new \Swoole\Coroutine\MySQL();
    //         $status = $mysql->connect([
    //             'host'=>'127.0.0.1',
    //             'port'=>3306,
    //             'user'=>'root',
    //             'password'=>'',
    //             'database'=>'demo'
    //         ]);
    //         var_dump($status);
    //         // if(!$status){
    //         //     throw new \Exception('mysql connect is fail ..........');
    //         // }
    //         $this->push($mysql);
    //     }
    // }

    // public function push($mysql){
    //     $this->channel->push($mysql);
    // }

    // public function length(){
    //     return $this->channel->length();
    // }

    // public function get(){
    //     $result = $this->channel->pop();
    //     if($result == false){
    //         throw new \Exception('get db source fail ........');
    //     }
    //     return $result;
    // }

}


?>