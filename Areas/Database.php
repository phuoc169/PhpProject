<?php
    namespace admin;
    use PDO;
    class Database{
        public \PDO $pdo;
        public static Database $db;
        public function __construct()
        {
            $this->pdo=new PDO('mysql:host=localhost;port=3306;dbname=phpdoanshop','root','');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            self::$db=$this;   
        }
    }
?>