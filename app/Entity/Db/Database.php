<?php

namespace App\Db;

use \PDO;

class Database{
    const HOST = 'localhost';

    const NAME = 'nortesol';

    const USER = 'root';

    const PASS = 'admin';

    /**
     * nome da tabela a ser manipulada
     * @var string
     */
    private $table;

    /**
     * instância de conexão com o banco de dados
     * @var PDO
     */
    private $connection;

    /**
     * define a tabela e instancia a conexão
     * @param string $table
     */
    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection(); 
    }

    /**
     * método responsável por criar uma conexão com o banco de dados
     */
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='. self::HOST. ';dbname='.self::NAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }
}