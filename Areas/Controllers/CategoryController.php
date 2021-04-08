<?php
    namespace admin\Controllers;

use admin\Models\Category;
use admin\Router;
include_once(__DIR__.'/../Models/Category.php');
class CategoryController{
        public function index(Router $router)
        {
            $categories = $router->db->getCategories();
            $types = $router->db->getAllTypes();
            echo $router->RenderView('category/index',[
                'categories'=>$categories,
                'types'=>$types
            ]);
        }
        public function create(Router $router)
        {
            $types = $router->db->getAllTypes();
            $CategoryData=[
                'CategoryName'=>'',
                'TypeId'
            ];
            if(isset($_POST['btncreatecategory']))
            {
                $CategoryData['CategoryName']=$_POST['CategoryName'];
                $CategoryData['TypeId']=$_POST['TypeId'];
                $category=new Category();
                $category->load($CategoryData);
                $category->CreateCategory();
                header("location:/category");
                exit;
            }
            echo $router->RenderView('category/create',[
                'types'=>$types
            ]);
        }
        public function update(Router $router)
        {
            $category = $router->db->getCategorybyId($_GET['id']);
            $category=reset($category);
            $types = $router->db->getAllTypes();
            $CategoryData=[
                'CateId'=>'',
                'TypeId'=>'',
                'CategoryName'=>'',
            ];
            if(isset($_POST['btnupdatecategory']))
            {
                $CategoryData['CateId']=$_GET['id'];
                $CategoryData['CategoryName']=$_POST['CategoryName'];
                $CategoryData['TypeId']=$_POST['TypeId'];
                $category=new Category();
                $category->load($CategoryData);
                $category->update();
                header("location:/category");
                exit;
            }
            echo $router->RenderView('category/update',[
                'category'=>$category,
                'types'=>$types
            ]);
        }
        public function delete(Router $router)
        {
            $categories=$router->db->getCategories();
            $types=$router->db->getAllTypes();
            if(isset($_GET['id']))
            {
                $router->db->deletecategory($_GET['id']);
            }
            echo $router->RenderView('category/index',[
                'categories'=>$categories,
                'types'=>$types
            ]);
        } 
    }
?>
