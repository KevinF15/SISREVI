<?php
    class Database {
        private $ip = "localhost";
        private $name = "refrirepuestosguaros";
        private $user = "root";
        private $pass = "";

        public function connectBD() {
            $pdo = new PDO("mysql:host=".$this->ip.";dbname=".$this->name."",$this->user,$this->pass);
            $pdo->exec("set names utf8");
            return $pdo;
        }
    }
?>