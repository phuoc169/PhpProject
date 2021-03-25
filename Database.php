<?php
    namespace app;
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
        public function getProductById($id)
        {
            $statement=$this->pdo->prepare('SELECT * FROM PRODUCTS WHERE PRODUCTID = :PRODUCTID');
            $statement->bindValue(':PRODUCTID',$id);
            $statement->execute();
            $product = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $product;
        }
        public function getProducts($searchbyName = '',$searchbyCategory= '')
        {
           
            if($searchbyName && !$searchbyCategory)
            {
                $statement=$this->pdo->prepare('SELECT * FROM PRODUCTS WHERE PRODUCTNAME LIKE :PRODUCTNAME');
                $statement->bindValue(':PRODUCTNAME',"%$searchbyName%");
            }else if($searchbyCategory && !$searchbyName){
                $statement=$this->pdo->prepare('SELECT * FROM PRODUCTS WHERE CateId = :CateId');
                $statement->bindValue(':CateId',$searchbyCategory);
            }else if($searchbyCategory && $searchbyName){
                $statement=$this->pdo->prepare('SELECT * FROM PRODUCTS WHERE CateId = :CateId AND PRODUCTNAME LIKE :PRODUCTNAME');
                $statement->bindValue(':CateId',$searchbyCategory);
                $statement->bindValue(':PRODUCTNAME',"%$searchbyName%");
            }elseif(!$searchbyName && !$searchbyCategory)
            {
                $statement=$this->pdo->prepare('SELECT * FROM PRODUCTS');
            }
            $statement->execute();
            $products=$statement->fetchAll(PDO::FETCH_ASSOC);
            return $products;
        }
        public function getCategories()
        {
            $statement=$this->pdo->prepare('SELECT * FROM CATEGORIES');
            $statement->execute();
            $categories = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $categories;
        }
    }
?>