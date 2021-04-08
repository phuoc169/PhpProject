<?php
    namespace app;
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
            if($view=="products/index"){
                include_once __DIR__."/Views/products/ProductByCategories.php";//lấy ra partials view ProductByCategories
                $productbyCategory=ob_get_clean(); //lấy ra buffer hiện tại và xóa buffer hiện tại đi
                ob_start();// tương tự trên
                include_once __DIR__."/Views/$view.php";//lấy ra view hiện tại 
                $content = ob_get_clean();// tương tự trên
                
            }else {
                include_once __DIR__."/Views/$view.php";
                $content = ob_get_clean(); 
            }
            ob_start();
            include_once __DIR__."/Views/PartialsView/GetCategories.php";
            $getcategories=ob_get_clean();
            include_once __DIR__."/Views/_layout.php";
        }
    }
?>