<?php
    namespace admin\Controllers;

use admin\Models\Order;
use admin\Models\OrderDetail;
use admin\Models\Type;
use admin\Router;

include_once(__DIR__.'/../Models/Type.php');
class TypeController{
        public function index(Router $router)
        {
            $types = $router->db->getallTypes();
            echo $router->RenderView('type/index',[
                'types'=>$types
            ]);
        }
        public function create(Router $router)
        {
            $TypeData=[
                'TypeName'=>'',
            ];
            if(isset($_POST['btncreatetype']))
            {
                $TypeData['TypeName']=$_POST['TypeName'];
                $type=new Type();
                $type->load($TypeData);
                $type->CreateType();
                header("location:/type");
                exit;
            }
            echo $router->RenderView('type/create');
        }
        public function update(Router $router)
        {
            $type = $router->db->getTypebyId($_GET['id']);
            $type=reset($type);
            $TypeData=[
                'TypeId'=>'',
                'TypeName'=>'',
            ];
            if(isset($_POST['btnupdatetype']))
            {
                $TypeData['TypeName']=$_POST['TypeName'];
                $TypeData['TypeId']=$_GET['id'];
                $type=new Type();
                $type->load($TypeData);
                $type->update();
                header("location:/type");
                exit;
            }
            echo $router->RenderView('type/update',[
                'type'=>$type
            ]);
        }
        public function delete(Router $router)
        {
            $types = $router->db->getallTypes();
            if(isset($_GET['id']))
            {
                $router->db->deletetype($_GET['id']);
            }
            echo $router->RenderView('type/index',[
                'types'=>$types,
            ]);
        } 
    }
?>
