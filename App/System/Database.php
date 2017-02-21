<?php
namespace App\System;
use \PDO;

class Database {

    private $db_name;
    private $db_user;
    private $db_password;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user, $db_password, $db_host) {
        $this->db_name     = $db_name;
        $this->db_user     = $db_user;
        $this->db_password = $db_password;
        $this->db_host     = $db_host;
        $this->db_name     = $db_name;
    }

    private function getPDO() {
        if($this->pdo === null) {
            $this->pdo = new PDO("mysql:dbname={$this->db_name};host={$this->db_host}", $this->db_user, $this->db_password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }

        return $this->pdo;
    }

    public function query($stmnt) {
        $req  = $this->getPDO()->query($stmnt);
        $data = $req->fetchAll();
        return $data;
    }

    public function prepare($stmnt, $args, $one = false) {
        $req = $this->getPDO()->prepare($stmnt);
        $req->execute($args);

        if($one) {
            $data = $req->fetch();
        }

        else {
            $data = $req->fetchAll();
        }

        return $data;
    }
}
