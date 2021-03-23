<?php
    namespace app;
    use PDO;
    class Database{
        public \PDO $pdo;
        public function __construct()
        {
            $this->pdo=new PDO('mysql:host=localhost;port=3306;dbname=ecommere','root','');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);   
        }
        public function getProducts($search = '')
        {
            if($search)
            {
                $statement=$this->pdo->prepare('SELECT * FROM PRODUCTS WHERE PRODUCTNAME LIKE :PRODUCTNAME');
                $statement->bindValue(':PRODUCTNAME',$search);
            }else{
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