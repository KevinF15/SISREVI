<?php
    class Database {
        private $ip = "localhost";
        private $name = "refrirepuestosguaros";
        private $user = "root";
        private $pass = "";
        private $pdo;

        public function __construct() {
            $this->pdo = new PDO("mysql:host=".$this->ip.";dbname=".$this->name."",$this->user,$this->pass);
            $this->pdo->exec("set names utf8");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        public function sqlQuery($query) {
            return $this->pdo->query($query); // Try?
        }

        public function connectBD() {
            $pdo = new PDO("mysql:host=".$this->ip.";dbname=".$this->name."",$this->user,$this->pass);
            $pdo->exec("set names utf8");
            return $pdo;
        }
    }
?>