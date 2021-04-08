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
        public function getproductbyTypeId($id)
        {
            $statement=$this->pdo->prepare('SELECT a.ProductId,a.ProductName,a.CateId,a.CreateDate,a.ProductPrice,a.ProductImage,a.Description,a.Discount,a.ProductImage2 FROM products a , categories b WHERE a.CateId=b.CateId AND b.TypeId = :TypeId ORDER BY a.CreateDate DESC LIMIT 20');
            $statement->bindValue(':TypeId',$id);
            $statement->execute();
            $product = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $product;
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
         
        public function getType()
        {
            $statement=$this->pdo->prepare('SELECT * FROM TYPE');
            $statement->execute();
            $types = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $types;
        }
        public function getTopNewProducts()
        {
            $statement=$this->pdo->prepare('SELECT DISTINCT * FROM PRODUCTS ORDER BY CREATEDATE LIMIT 4');
            $statement->execute();
            $productstopnew = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $productstopnew;
        }
        public function insertOrder()
        {
            
        }
    }
?>