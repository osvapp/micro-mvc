<?php
namespace App;
use \PDO;

class Database {

    private $name;

    private $user;

    private $password;

    private $host;

    private $pdo;


    public function __construct($name, $user = 'root', $password = 'root', $host = 'localhost') {
        $this->name     = $name;
        $this->user     = $user;
        $this->password = $password;
        $this->host     = $host;
        $this->name     = $name;
    }

    private function getPDO() {
        if($this->pdo === null) {
            $pdo = new PDO('mysql:dbname=blog;host=localhost', 'root', 'root');
            $pdo->setAttibute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }

        return $this->$pdo;
    }

    public function query($stmnt) {
        $req  = $this->getPDO()->query($stmnt);
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
}
