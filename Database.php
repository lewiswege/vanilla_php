<?php

class Database {

    public $connection;
    public $statement;

    public function __construct($config, $username='lewis', $password='wenshenx')
    {

        $dsn = "mysql:" . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params); // calling php method to execute.

        return $this;
    }

    public function fetch()
    {
        return $this->statement->fetch();
    }
}