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
        public function create(Router $router)
        {
            echo $router->RenderView('products/create');
        }

        public function update(Router $router)
        {
            echo $router->RenderView('products/update');
        }
        
        // public function delete(Router $router)
        // {
        //     echo $router->RenderView('products/update');
        // } 
    }
?>
