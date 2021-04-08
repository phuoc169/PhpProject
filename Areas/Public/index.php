<?php

use admin\Controllers\CategoryController;
use admin\Controllers\OrderController;
use admin\Controllers\ProductController;
use admin\Controllers\TypeController;
use admin\Router;

require_once __DIR__.'/../vendor/autoload.php';
include_once(__DIR__.'/../Controllers/ProductController.php');
include_once(__DIR__.'/../Controllers/CategoryController.php');
include_once(__DIR__.'/../Controllers/OrderController.php');
include_once(__DIR__.'/../Controllers/TypeController.php');
include_once(__DIR__.'/../Router.php');
$ProdController=new ProductController();
$CategoryController = new CategoryController();
$OrderController = new OrderController();
$TypeController = new TypeController();
$router = new Router();
$router->get('/', [$ProdController, 'index']);
$router->get('/products', [$ProdController, 'index']);
$router->get('/products/create',[$ProdController,'create']);
$router->post('/products/create',[$ProdController,'create']);
$router->get('/products/update',[$ProdController,'update']);
$router->post('/products/update',[$ProdController,'update']);
$router->get('/products/delete',[$ProdController,'delete']);
$router->post('/products/delete',[$ProdController,'delete']);


$router->get('/category', [$CategoryController, 'index']);
$router->get('/category/create',[$CategoryController,'create']);
$router->post('/category/create',[$CategoryController,'create']);
$router->get('/category/update',[$CategoryController,'update']);
$router->post('/category/update',[$CategoryController,'update']);
$router->get('/category/delete',[$CategoryController,'delete']);
$router->post('/category/delete',[$CategoryController,'delete']);


$router->get('/order', [$OrderController, 'index']);
$router->get('/order/create',[$OrderController,'create']);
$router->post('/order/create',[$OrderController,'create']);
$router->get('/order/update',[$OrderController,'update']);
$router->post('/order/update',[$OrderController,'update']);
$router->get('/order/delete',[$OrderController,'delete']);
$router->post('/order/delete',[$OrderController,'delete']);


$router->get('/type', [$TypeController, 'index']);
$router->get('/type/create',[$TypeController,'create']);
$router->post('/type/create',[$TypeController,'create']);
$router->get('/type/update',[$TypeController,'update']);
$router->post('/type/update',[$TypeController,'update']);
$router->get('/type/delete',[$TypeController,'delete']);
$router->post('/type/delete',[$TypeController,'delete']);

$router->resolve();
?>