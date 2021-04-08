<?php
    namespace app\Controllers;

use app\Models\Order;
use app\Models\OrderDetail;
use app\Router;

require __DIR__ . '/../vendor/autoload.php';
// Creating an environment

session_start();
function randomString($n)
        {
          $character='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
          $str ='';
          for($i=0;$i<$n;$i++)
          {
            $index=rand(0,strlen($character)-1);
            $str.=  $character[$index];
          }
          return $str;
        }
class ProductController{
    public function paypal(Router $router)
    {
        $OrderData =[
            'OrderId'=>'',
            'ordermessage'=>'',
            'orderdatetime'=>'',
            'orderstatus'=>'',
            'UserId'=>'',
            'ShippingAddress'=>''
        ];
        $OrderDetailData =[
            'OrderId'=>'',
            'ProductId'=>'',
            'OrderQuantity'=>'',
            'OrderThanhtien'=>'',
        ];
        $oderid=randomString(10);
        $OrderData['OrderId']=$oderid;
        $OrderData['ordermessage']=$_POST['ordermessage'];
        $OrderData['orderdatetime']=date('Y-m-d H:i:s');
        $OrderData['orderstatus']="complete";
        $OrderData['UserId']=$_COOKIE['UserId'];
        $OrderData['ShippingAddress']=$_POST['ShippingAddress'];
        $order= new Order();
        $order->load($OrderData);
        $order->CreateOrder();
        foreach($_SESSION['shoppingcart'] as $CartItem)
        {
            $OderInfo = new OrderDetail();
            $product = $router->db->getProductById($CartItem['prod_id']);
            $OrderDetailData['OrderId']=$oderid;
            $OrderDetailData['ProductId']=$CartItem['prod_id'];
            $OrderDetailData['OrderQuantity']=$CartItem['quantity'];
            $OrderDetailData['OrderThanhtien']=$CartItem['quantity']*$product[0]['ProductPrice'];
            $OderInfo->load($OrderDetailData);
            $OderInfo->CreateOrder();
        }
        unset($_SESSION['shoppingcart']);
        echo $router->RenderView('paypal/payment_status');
    }
        public function index(Router $router)
        {
            $types=$router->db->getType();
            $productstopnew=$router->db->getTopNewProducts();
            $SearchbyCategory = $_GET['ByCategory'] ?? ''; //lấy ra giá trị search theo Category nếu user không search theo loại cho  = ''
            $SearchbyName = $_GET['ByName'] ?? '';//lấy ra giá trị search theo Name nếu user không search theo tên cho  = ''
            $products = $router->db->getProducts($SearchbyName,$SearchbyCategory);//lấy tất cả sản phẩm theo giá trị search
            $categories = $router->db->getCategories();
            $productbyTypes=array();
            foreach($types as $type){
                $producttype=$router->db->getproductbyTypeId($type['TypeId']);
                $productbyTypes=array_merge($productbyTypes,array($type['TypeName']=>$producttype));  
            }
            if(isset($_GET['ProdId']))
            {

                $id=$_GET['ProdId'];
                $productQuantity=$_GET['ProdQuantity'];
                $was_found=false;
                $i=0;
                if(!isset($_SESSION['shoppingcart'])||count($_SESSION['shoppingcart'])<0)
                {
                    $_SESSION["shoppingcart"] = array(0=>array("prod_id"=>$id,"quantity"=>$productQuantity));
                }
                else{
                    foreach($_SESSION["shoppingcart"] as $item)
                    {
                        $i++;
                        if($item["prod_id"]==$id)
                        {
                            array_splice($_SESSION["shoppingcart"],$i-1,1,array(array("prod_id"=>$id,"quantity"=>$item["quantity"]+$productQuantity)));
                            $was_found=true;
                        }
                    }
                    if($was_found==false)
                    {
                        array_push($_SESSION["shoppingcart"],array("prod_id"=>$id,"quantity"=>$productQuantity));
                    }
                }
            }
            echo $router->RenderView('products/index',[  //cho Router biết là view nào sẽ được render rồi truyền tham số cần vào
                'products' => $products,
                'categories' => $categories,
                'productstopnew'=>$productstopnew,
                'types'=>$types,
                'ProductByTypes'=>$productbyTypes
            ]);
        }


        public function shop(Router $router)
        {
            $types=$router->db->getType();
            $productstopnew=$router->db->getTopNewProducts();
            $SearchbyCategory = $_GET['ByCategory'] ?? ''; //lấy ra giá trị search theo Category nếu user không search theo loại cho  = ''
            $SearchbyName = $_GET['ByName'] ?? '';//lấy ra giá trị search theo Name nếu user không search theo tên cho  = ''
            $products = $router->db->getProducts($SearchbyName,$SearchbyCategory);//lấy tất cả sản phẩm theo giá trị search
            $categories = $router->db->getCategories();
            echo $router->RenderView('products/shop',[  //cho Router biết là view nào sẽ được render rồi truyền tham số cần vào
                'products' => $products,
                'categories' => $categories,
                'types'=>$types,
                'productstopnew'=>$productstopnew
            ]);
        }


        public function create(Router $router)
        {
            echo $router->RenderView('products/create');
        }


        
        public function checkout(Router $router)
        {
            if(!isset($_COOKIE['Email']))
            {
                echo '<script>alert("Vui lòng đăng nhập trước khi thanh toán")</script>';
                header('Location: /users/login');
                exit;
            }
            else if(!isset($_SESSION['shoppingcart'])){
                echo '<script>alert("Bạn không có gì để thanh toán vui lòng thêm vào giỏ trước khi thanh toán")</script>';
                header('Location: /products');
                exit;
            }else{
                $OrderData =[
                    'OrderId'=>'',
                    'ordermessage'=>'',
                    'orderdatetime'=>'',
                    'orderstatus'=>'',
                    'UserId'=>'',
                    'ShippingAddress'=>''
                ];
                $OrderDetailData =[
                    'OrderId'=>'',
                    'ProductId'=>'',
                    'OrderQuantity'=>'',
                    'OrderThanhtien'=>'',
                ];
                $oderid=randomString(10);
                if(isset($_POST['checkoutbtn']))
                {
                   
                    $OrderData['OrderId']=$oderid;
                    $OrderData['ordermessage']=$_POST['ordermessage'];
                    $OrderData['orderdatetime']=date('Y-m-d H:i:s');
                    $OrderData['orderstatus']="pending";
                    $OrderData['UserId']=$_COOKIE['UserId'];
                    $OrderData['ShippingAddress']=$_POST['ShippingAddress'];
                    $order= new Order();
                    $order->load($OrderData);
                    $order->CreateOrder();
                    foreach($_SESSION['shoppingcart'] as $CartItem)
                    {
                        $OderInfo = new OrderDetail();
                        $product = $router->db->getProductById($CartItem['prod_id']);
                        $OrderDetailData['OrderId']=$oderid;
                        $OrderDetailData['ProductId']=$CartItem['prod_id'];
                        $OrderDetailData['OrderQuantity']=$CartItem['quantity'];
                        $OrderDetailData['OrderThanhtien']=$CartItem['quantity']*$product[0]['ProductPrice'];
                        $OderInfo->load($OrderDetailData);
                        $OderInfo->CreateOrder();
                    }
                    unset($_SESSION['shoppingcart']);
                    header('location: /products');
                }
            }
            echo $router->RenderView('products/checkout');
        }



        public function shoppingcart(Router $router)
        {
            $categories = $router->db->getCategories();
            if(isset($_POST['ProdId']))
            {
                $id=$_POST['ProdId'];
                $i=0;
                foreach($_SESSION["shoppingcart"] as $item)
                {
                    $i++;
                    if($item["prod_id"]==$id)
                    {
                        array_splice($_SESSION["shoppingcart"],$i-1,1);
                    }
                }
                }
                echo $router->RenderView('products/shoppingcart',[
                    'categories'=>$categories
                ]);
            }




            public function removecartindex(Router $router)
            {
                $types=$router->db->getType();
                $productstopnew=$router->db->getTopNewProducts();
                $products = $router->db->getProducts();
                $categories = $router->db->getCategories();
                $productbyTypes=array();
                foreach($types as $type){
                    $producttype=$router->db->getproductbyTypeId($type['TypeId']);
                    $productbyTypes=array_merge($productbyTypes,array($type['TypeName']=>$producttype));  
                }
                $product = $router->db->getProductById($_POST['ProdId']);
                echo '<pre>';
                echo var_dump($_SERVER['PATH_INFO']);
                echo '</pre>';
                    if(isset($_POST['ProdId']))
                    {
                        $id=$_POST['ProdId'];
                        $i=0;
                        foreach($_SESSION["shoppingcart"] as $item)
                        {
                            $i++;
                            if($item["prod_id"]==$id)
                            {
                                array_splice($_SESSION["shoppingcart"],$i-1,1);
                            }
                        }
                        }
                        switch($_SERVER['PATH_INFO'])
                        {
                            case '/product/index':
                                echo $router->RenderView('products/index',[  //cho Router biết là view nào sẽ được render rồi truyền tham số cần vào
                                    'products' => $products,
                                    'categories' => $categories,
                                    'productstopnew'=>$productstopnew,
                                    'types'=>$types,
                                    'ProductByTypes'=>$productbyTypes
                                ]);
                                break;
                            case '/products/shop':
                                echo $router->RenderView('products/shop',[  //cho Router biết là view nào sẽ được render rồi truyền tham số cần vào
                                    'products' => $products,
                                    'categories' => $categories,
                                    'types'=>$types,
                                    'productstopnew'=>$productstopnew
                                ]);
                                break;
                                case '/products/checkout':
                                    echo $router->RenderView('products/checkout');
                                    break;
                                case 'products/shoppingcart':
                                    echo $router->RenderView('products/shoppingcart',[
                                        'categories'=>$categories
                                    ]);
                            case '/products/product_detail':
                                echo $router->RenderView('products/product_detail',[  //cho Router biết là view nào sẽ được render rồi truyền tham số cần vào
                                    'categories' => $categories,
                                    'productid'=>$id,
                                    'types'=>$types,
                                    'product' => $product,
                                ]);
                        }
                        
            }





            public function addtocart(Router $router)
            {
                
                $products = $router->db->getProducts();//lấy tất cả sản phẩm theo giá trị search
                $categories = $router->db->getCategories();
                $types=$router->db->getType();
                $productstopnew=$router->db->getTopNewProducts();
                $productbyTypes=array();
                foreach($types as $type){
                    $producttype=$router->db->getproductbyTypeId($type['TypeId']);
                    $productbyTypes=array_merge($productbyTypes,array($type['TypeName']=>$producttype));  
                }
                $product = $router->db->getProductById($_GET['ProdId']);
                if(isset($_GET['ProdId']))
                {
                    $id=$_GET['ProdId'];
                    $productQuantity=$_GET['ProdQuantity'];
                    $was_found=false;
                    $i=0;
                    if(!isset($_SESSION['shoppingcart'])||count($_SESSION['shoppingcart'])<0)
                    {
                        $_SESSION["shoppingcart"] = array(0=>array("prod_id"=>$id,"quantity"=>$productQuantity));
                    }
                    else{
                        foreach($_SESSION["shoppingcart"] as $item)
                        {
                            $i++;
                            if($item["prod_id"]==$id)
                            {
                                array_splice($_SESSION["shoppingcart"],$i-1,1,array(array("prod_id"=>$id,"quantity"=>$item["quantity"]+$productQuantity)));
                                $was_found=true;
                            }
                        }
                        if($was_found==false)
                        {
                            array_push($_SESSION["shoppingcart"],array("prod_id"=>$id,"quantity"=>$productQuantity));
                        }
                    }
                }
                switch($_GET['CurPath'])
                {
                    case 0:
                        echo $router->RenderView('products/index',[  //cho Router biết là view nào sẽ được render rồi truyền tham số cần vào
                            'products' => $products,
                            'categories' => $categories,
                            'types'=>$types
                        ]);
                        break;
                    case 1:
                        echo $router->RenderView('products/shop',[  //cho Router biết là view nào sẽ được render rồi truyền tham số cần vào
                            'products' => $products,
                            'categories' => $categories,
                            'types'=>$types,
                            'productstopnew'=>$productstopnew
                        ]);
                        break;
                    case 2:
                        echo $router->RenderView('products/product_detail',[  //cho Router biết là view nào sẽ được render rồi truyền tham số cần vào
                            'categories' => $categories,
                            'productid'=>$id,
                            'types'=>$types,
                            'product' => $product,
                        ]);
                }
                
                // if($_GET['CurPath']==0)
                // {
                //     echo $router->RenderView('products/index',[  //cho Router biết là view nào sẽ được render rồi truyền tham số cần vào
                //         'products' => $products,
                //         'categories' => $categories,
                //         'types'=>$types
                //     ]);
                // }else{
                //     echo $router->RenderView('products/shop',[  //cho Router biết là view nào sẽ được render rồi truyền tham số cần vào
                //         'products' => $products,
                //         'categories' => $categories,
                //         'types'=>$types,
                //         'productstopnew'=>$productstopnew
                //     ]);
                // }
               
            }




            public function inscreasequantity(Router $router)
            {
                if(isset($_POST['ProdId']))
                {
                $id=$_POST['ProdId'];
                $newQuantity=$_POST['ProductQuantity'];
                $i=0;
                foreach($_SESSION["shoppingcart"] as $item)
                {
                    $i++;
                    if($item["prod_id"]==$id)
                    {
                        array_splice($_SESSION["shoppingcart"],$i-1,1,array(array("prod_id"=>$id,"quantity"=>$newQuantity)));
                    }
                }
                }
                echo $router->RenderView('products/shoppingcart');
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
