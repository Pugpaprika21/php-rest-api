<?php

namespace RestApi\DataBase;

use PDO;

class Db
{
    private $localhost = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'db_restapi';
    /**
     * @return object
     */
    public function conn(): object
    {
        $conn = new PDO("mysql:host={$this->localhost}; dbname={$this->dbname}", $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    /**
     * @param string $sql
     * @return array
     */
    public function select(string $sql): array
    {
        $stmt = $this->conn()->prepare($sql);
        $stmt->execute();
        return ($sql) ? $stmt->fetchAll(PDO::FETCH_ASSOC) : [];
    }
}


