<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/system/engine/Autoloader.php';
require_once __DIR__ . '/system/routing/Router.php';


use System\Engine\Autoloader;
use System\Routing\Router;

$autoloader = new Autoloader();
$router = new Router();

// site anasayfası
$router->name('catalog.index')->get('/', [App\Catalog\Controller\BaseController::class, 'index']);
$router->name('catalog.blogs')->get('/blogs', [App\Catalog\Controller\BlogController::class, 'index']);

// admin anasayfası
$router->name('admin.index')->get('/admin', [App\Admin\Controller\BaseController::class, 'index']);
$router->name('admin.blogs')->get('/admin/blogs', [App\Admin\Controller\BlogController::class, 'index']);
$router->name('admin.login')->get('/admin/login', [App\Admin\Controller\LoginController::class, 'index']);

// post get ekleme 
$router->name('admin.post')->post('/admin', [App\Admin\Controller\LoginController::class, 'userAdd']);


$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

