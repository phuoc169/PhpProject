<?php



require_once __DIR__.'/../vendor/autoload.php';
include_once(__DIR__.'/../Controller/ProductController.php');
use app\Controllers\ProductController;
use app\Router;
$ProdController=new ProductController();
$router = new Router();
$router->get('/', [$ProdController, 'index']);
$router->get('/products', [$ProdController, 'index']);
$router->get('/products/create', [$ProdController, 'create']);
$router->post('/products/create', [$ProdController, 'create']);
$router->get('/products/update', [$ProdController, 'update']);
$router->post('/products/update', [$ProdController, 'update']);
$router->get('/products/delete', [$ProdController, 'delete']);
$router->post('/products/delete', [$ProdController, 'delete']);
$router->resolve();
?>