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
        public function getProducts()
        {
            $statement=$this->pdo->prepare('SELECT * FROM PRODUCTS');
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
        public function getProductbyId($id)
        {
            $statement=$this->pdo->prepare('SELECT * FROM PRODUCTS WHERE ProductId = :id');
            $statement->bindValue(':id',$id);
            $statement->execute();
            $product=$statement->fetchAll(PDO::FETCH_ASSOC);
            return $product;
        }
        public function deleteproduct($id)
        {
            $statement=$this->pdo->prepare('DELETE FROM PRODUCTS WHERE ProductId = :id');
            $statement->bindValue(':id',$id);
            $statement->execute();
        }


        //Type
        public function getAllTypes()
        {
            $statement=$this->pdo->prepare('SELECT * FROM TYPE');
            $statement->execute();
            $types = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $types;
        }
        public function getTypebyId($id)
        {
            $statement=$this->pdo->prepare('SELECT * FROM TYPE WHERE TypeId = :id');
            $statement->bindValue(':id',$id);
            $statement->execute();
            $type=$statement->fetchAll(PDO::FETCH_ASSOC);
            return $type;
        }
        public function deletetype($id)
        {
            $statement=$this->pdo->prepare('DELETE FROM TYPE WHERE TypeId = :id');
            $statement->bindValue(':id',$id);
            $statement->execute();
        }



        //Category
        public function getAllCategories()
        {
            $statement=$this->pdo->prepare('SELECT * FROM CATEGORIES');
            $statement->execute();
            $types = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $types;
        }
        public function getCategorybyId($id)
        {
            $statement=$this->pdo->prepare('SELECT * FROM CATEGORIES WHERE CateId = :id');
            $statement->bindValue(':id',$id);
            $statement->execute();
            $type=$statement->fetchAll(PDO::FETCH_ASSOC);
            return $type;
        }
        public function deletecategory($id)
        {
            $statement=$this->pdo->prepare('DELETE FROM CATEGORIES WHERE CateId = :id');
            $statement->bindValue(':id',$id);
            $statement->execute();
        }



        //Order
        public function getAllOrder()
        {
            $statement=$this->pdo->prepare('SELECT * FROM ORDERPRODUCT');
            $statement->execute();
            $types = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $types;
        }
        public function getOrderbyId($id)
        {
            $statement=$this->pdo->prepare('SELECT * FROM ORDERPRODUCT WHERE OrderId = :id');
            $statement->bindValue(':id',$id);
            $statement->execute();
            $type=$statement->fetchAll(PDO::FETCH_ASSOC);
            return $type;
        }
        public function deleteOrder($id)
        {
            $statement=$this->pdo->prepare('DELETE FROM ORDERPRODUCT WHERE OrderId = :id');
            $statement->bindValue(':id',$id);
            $statement->execute();
        }
        public function getOrderDetail($id)
        {
            $statement=$this->pdo->prepare('SELECT * FROM ORDERDETAIL WHERE OrderId = :id');
            $statement->bindValue(':id',$id);
            $statement->execute();
            $orderdetail=$statement->fetchAll(PDO::FETCH_ASSOC);
            return $orderdetail;
        }
    }
class Router{
        public array $getRoutes=[];
        public array $postRoutes=[];
        public Database $db;
        public function __construct()
        {
            $this->db = new Database();
        }
        public function get($url,$fn)
        {
            $this->getRoutes[$url]=$fn;
        }
        public function post($url,$fn)
        {
            $this->postRoutes[$url]=$fn;
        }
        public function resolve()
        {   
            $currentUrl=$_SERVER['PATH_INFO'] ?? '/';
            $method = $_SERVER['REQUEST_METHOD'];
            if($method === 'GET')
            {
                $fn=$this->getRoutes[$currentUrl] ?? null;
            }else{
                $fn=$this->postRoutes[$currentUrl] ?? null;
            }
            if($fn)
            {
               call_user_func($fn,$this);
            }
            else{
                echo '<pre>';
                echo var_dump($_SERVER['PATH_INFO']);
                echo '</pre>';
                echo "Page not found"; 
            }
        }
        public function RenderView($view,$params=[])
        {
            foreach($params as $key => $value)
            {
                $$key = $value;  //tạo 1 array variable để lưu giá trị của param
            }
            ob_start();//lưu view vào buffer
            include_once __DIR__."/Views/$view.php";
            $content = ob_get_clean(); 
            ob_start();
            include_once __DIR__."/Views/layout.php";
        }
    }
?>