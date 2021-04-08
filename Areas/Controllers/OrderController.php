<?php
    namespace admin\Controllers;

use admin\Models\Order;
use admin\Models\OrderDetail;
use admin\Router;

class OrderController{
        public function index(Router $router)
        {
            $orders=$router->db->getallOrder();
            echo $router->RenderView('order/index',[
                'orders'=>$orders
            ]);
        }
        public function create(Router $router)
        {
            echo $router->RenderView('order/create');
        }
        public function update(Router $router)
        {
            $orderdetail = $router->db->getOrderDetail($_GET['id']);
            echo $router->RenderView('order/update',[
                'orderdetail'=>$orderdetail
            ]);
        }
        public function delete(Router $router)
        {
            echo $router->RenderView('order/delete');
        } 
    }
?>
