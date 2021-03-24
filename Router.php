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
                echo "Page not found"; 
            }
        }
        public function RenderView($view,$params=[])
        {
            foreach($params as $key => $value)
            {
                $$key = $value;
            }
            ob_start();
            if($view=="products/index"){
                include_once __DIR__."/Views/products/ProductByCategories.php";
                $productbyCategory=ob_get_clean();
                ob_start();
                include_once __DIR__."/Views/$view.php";
                $content = ob_get_clean();
                
            }else{
                include_once __DIR__."/Views/$view.php";
                $content = ob_get_clean();
            }
            include_once __DIR__."/Views/_layout.php";
        }
    }
?>