<?php
    namespace app\Controllers;

use app\Router;

class ProductController{
        public function index(Router $router)
        {
            $SearchbyCategory = $_GET['ByCategory'] ?? ''; //lấy ra giá trị search theo Category nếu user không search theo loại cho  = ''
            $SearchbyName = $_GET['ByName'] ?? '';//lấy ra giá trị search theo Name nếu user không search theo tên cho  = ''
            $products = $router->db->getProducts($SearchbyName,$SearchbyCategory);//lấy tất cả sản phẩm theo giá trị search
            $categories = $router->db->getCategories();
            echo $router->RenderView('products/index',[  //cho Router biết là view nào sẽ được render rồi truyền tham số cần vào
                'products' => $products,
                'categories' => $categories,
                'bycategory'=>$SearchbyCategory,
                'byname' => $SearchbyName
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
        public function product_detail(Router $router)
        {
            $ProductId=$_GET['ProductId'] ?? '';
            $product = $router->db->getProductById($ProductId);
            $categories = $router->db->getCategories();
            echo $router->RenderView('products/product_detail',[
                'productid'=>$ProductId,
                'product' => $product,
                'categories' => $categories,
                ]);
        }
        // public function delete(Router $router)
        // {
        //     echo $router->RenderView('products/update');
        // } 
    }
?>
