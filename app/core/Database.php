<?php

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;
    private $db_port = DB_PORT;

    private $db_handle;
    private $stmt_handle;

    public function __construct(){
        //data source name
        // $dsn = 'mysql:host='. $this->host .';dbname='. $this->db_name ;
        $dsn = 'mysql:host='. $this->host .';port='. $this->db_port .';dbname='. $this->db_name ;

        $option =[
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->db_handle = new PDO($dsn, $this->user, $this->pass, $option);//(username, password)
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function query($query){
        $this->stmt_handle = $this->db_handle->prepare($query);
    }

    public function bind($param, $value, $type=null) {
        if(is_null($type)){
            switch(true){
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;  
            }
        }
        $this->stmt_handle->bindValue($param, $value, $type);
    }

    public function execute(){
        $this->stmt_handle->execute();
    }

    public function getAll(){
        $this->execute();
        return $this->stmt_handle->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSingle(){
        $this->execute();
        return $this->stmt_handle->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount () {
        return $this->stmt_handle->rowCount();
    }



}

?>