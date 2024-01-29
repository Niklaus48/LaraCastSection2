<?php

class DataBase
{
    public $connection;
    public $statement;
    public function __construct($config,$user = 'root',$password = '')
    {

        $dsn = 'mysql:'.http_build_query($config,'',';');

        $this->connection = new PDO($dsn,$user,$password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query,$param = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($param);

        return $this;
    }

    public function Get()
    {
        return $this->statement->fetchall(PDO::FETCH_ASSOC);
    }

    public function find()
    {
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }

    public function findOrFail()
    {
        $resault = $this->find();

        if(!$resault){
            abord();
        }

        return $resault;
    }
}
