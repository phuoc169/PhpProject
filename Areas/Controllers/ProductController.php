<?php
    namespace admin\Controllers;

use admin\Models\Product;
use admin\Router;
use Exception;

include_once(__DIR__.'/../Models/Product.php');
class ProductController{
        public function index(Router $router)
        {
            $categories=$router->db->getCategories();
            $products=$router->db->getProducts();
            echo $router->RenderView('products/index',[
                'products'=>$products,
                'categories'=>$categories
            ]);
        }
        public function create(Router $router)
        {
            $categories=$router->db->getCategories();
            $ProductData=[
                'ProductName'=>'',
                'CateId'=>'',
                'CreateDate'=>'',
                'ProductPrice'=>'',
                'ProductImage'=>'',
                'Description'=>'',
                'Discount'=>'',
                'ProductImage2'=>''
            ];
            if(isset($_POST['btncreateproduct']))
            { 
                $file_temp=$_FILES['ProductImage']['tmp_name'];
                $user_file=$_FILES['ProductImage']['name'];
                $file_temp2=$_FILES['ProductImage2']['tmp_name'];
                $user_file2=$_FILES['ProductImage2']['name'];
                $timestamp=date("Y").date("m").date("d").date("h").date("i").date("s");
                $filepath="images/".$timestamp.$user_file;
                $filepathclient="C:/xampp/htdocs/DoanPHP/Public/images/".$timestamp.$user_file;
                $filepath2="images/".$timestamp."secondary".$user_file2;
                $filepathclient2="C:/xampp/htdocs/DoanPHP/Public/images/".$timestamp."secondary".$user_file2;
                if(move_uploaded_file($file_temp,$filepath)==false)
                {
                    
                    return false;
                }
                if(!copy($filepath, $filepathclient))
                {
                    throw new Exception('Could not move 2nd file');
                }
                if(move_uploaded_file($file_temp2,$filepath2)==false)
                {
                    
                    return false;
                }
                if(!copy($filepath2, $filepathclient2))
                {
                    throw new Exception('Could not move 2nd file');
                }
                $ProductData['Discount']=$_POST['Discount'];
                $ProductData['ProductImage2']=$filepath2;
                $ProductData['ProductName']=$_POST['ProductName'];
                $ProductData['CateId']=$_POST['Category'];
                $ProductData['CreateDate']=date('Y-m-d H:i:s');
                $ProductData['ProductPrice']=$_POST['ProductPrice'];
                $ProductData['ProductImage']=$filepath;
                $ProductData['Description']=$_POST['Description'];
                $product=new Product();
                $product->load($ProductData);
                $product->save();
                header("location:/products");
                exit;
            }
            echo $router->RenderView('products/create',[
                'categories'=> $categories
            ]);
        }
        public function update(Router $router)
        {
            $categories=$router->db->getCategories();
            $product = $router->db->getProductbyId($_GET['id']);
            $product=reset($product);
            $ProductData=[
                'ProductId'=>'',
                'ProductName'=>'',
                'CateId'=>'',
                'CreateDate'=>'',
                'ProductPrice'=>'',
                'ProductImage'=>'',
                'Description'=>'',
                'Discount'=>'',
                'ProductImage2'=>''
            ];
            if(isset($_POST['btnupdateproduct']))
            {
                $file_temp=$_FILES['ProductImage']['tmp_name'];
                $user_file=$_FILES['ProductImage']['name'];
                $file_temp2=$_FILES['ProductImage2']['tmp_name'];
                $user_file2=$_FILES['ProductImage2']['name'];
                $timestamp=date("Y").date("m").date("d").date("h").date("i").date("s");
                $filepath="images/".$timestamp.$user_file;
                $filepathclient="C:/xampp/htdocs/DoanPHP/Public/images/".$timestamp.$user_file;
                $filepath2="images/"."secondary".$timestamp.$user_file2;
                $filepathclient2="C:/xampp/htdocs/DoanPHP/Public/images/"."secondary".$timestamp.$user_file2;
                if(move_uploaded_file($file_temp,$filepath)==false)
                {
                    
                    return false;
                }
                if(!copy($filepath, $filepathclient))
                {
                    throw new Exception('Could not move 2nd file');
                }
                if(move_uploaded_file($file_temp2,$filepath2)==false)
                {
                    
                    return false;
                }
                if(!copy($filepath2, $filepathclient2))
                {
                    throw new Exception('Could not move 2nd file');
                }
                $ProductData['ProductId'] = $product['ProductId'];
                $ProductData['Discount']=$_POST['Discount'];
                $ProductData['ProductImage2']=$filepath2;
                $ProductData['ProductName']=$_POST['ProductName'];
                $ProductData['CateId']=$_POST['Category'];
                $ProductData['CreateDate']=date('Y-m-d H:i:s');
                $ProductData['ProductPrice']=$_POST['ProductPrice'];
                $ProductData['ProductImage']=$filepath;
                $ProductData['Description']=$_POST['Description'];
                $product=new Product();
                $product->load($ProductData);
                $product->update();
                header("location:/products");
                exit;
            }
            echo $router->RenderView('products/update',[
                'categories'=>$categories,
                'product'=>$product
            ]);
        }
        public function delete(Router $router)
        {
            $categories=$router->db->getCategories();
            $products=$router->db->getProducts();
            if(isset($_GET['id']))
            {
                $router->db->deleteproduct($_GET['id']);
            }
            echo $router->RenderView('products/index',[
                'products'=>$products,
                'categories'=>$categories
            ]);
        } 
    }
?>
