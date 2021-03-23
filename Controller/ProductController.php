<?php
    namespace app\Controllers;

use app\Router;

class ProductController{
        public function index(Router $router)
        {
            $products = $router->db->getProducts();
            echo $router->RenderView('products/index',[
                'products' => $products
            ]);
        }
        public function create()
        {
            echo "Đây là trang Create";
        }

        public function update()
        {
            echo "Đây là trang Update";
        }
        
        public function delete()
        {
            echo "Đây là trang Delete";
        } 
    }
?>
