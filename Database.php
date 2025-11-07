<?php

$config = require('config.php');
$db = new Database($config['database']);

class Database {
    public $dbConnection;
    public function __construct($config, $username = 'root', $password = 'root'){
        
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->dbConnection = new PDO($dsn, $username, $password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($sqlQuery, $params = []){
        // var_dump($sqlQuery);
        $statement = $this->dbConnection->prepare($sqlQuery);
        // var_dump($statement);
        $statement->execute($params);
        // var_dump($sqlQuery);
        return $statement;
    }
}

