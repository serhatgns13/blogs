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
$router->name('catalog.blog')->get('/blog/{slug}', [App\Catalog\Controller\BlogController::class, 'blog']);
$router->name('catalog.blogs')->get('/blogs/{slug}', [App\Catalog\Controller\BlogController::class, 'blogs']);
$router->name('catalog.detail')->get('/detail/{slug}', [App\Catalog\Controller\BlogController::class, 'detail']);

// Admin Routes
$router->name('admin.index')->get('/admin', [App\Admin\Controller\BaseController::class, 'index']);
$router->name('admin.blogs')->get('/admin/blogs', [App\Admin\Controller\BlogController::class, 'index']);
$router->name('admin.loginForm')->get('/admin/login', [App\Admin\Controller\LoginController::class, 'index']);
$router->name('admin.kullanici')->get('/admin/kullanici', [App\Admin\Controller\KullaniciController::class, 'index']);
$router->name('admin.kategori')->get('/admin/kategori', [App\Admin\Controller\KategoriController::class, 'index']);
$router->name('admin.yorumlar')->get('/admin/yorumlar', [App\Admin\Controller\CommentsController::class, 'index']);
$router->name('admin.tags')->get('/admin/tags', [App\Admin\Controller\TagsController::class, 'index']);
$router->name('admin.profil')->get('/admin/profil', [App\Admin\Controller\ProfilController::class, 'index']);
$router->name('admin.logout')->get('/admin/logout', [App\Admin\Controller\LoginController::class, 'logout']);
$router->name('admin.privacy')->get('/admin/privacy', [App\Admin\Controller\PrivacyController::class, 'index']);

$router->name('admin.settings')->get('/admin/settings', [App\Admin\Controller\SettingsController::class, 'index']);

// Admin Post Routes
$router->name('admin.register')->post('/admin/register', [App\Admin\Controller\KullaniciController::class, 'register']);
$router->name('admin.update')->post('/admin/update/{id}', [App\Admin\Controller\KullaniciController::class, 'update']);
$router->name('admin.delete')->get('/admin/kullanici/delete/{id}', [App\Admin\Controller\KullaniciController::class, 'delete']);
$router->name('admin.loginSubmit')->post('/admin/login', [App\Admin\Controller\LoginController::class, 'login']);
$router->name('admin.profilUpdate')->post('/admin/profilUpdate/{id}', [App\Admin\Controller\ProfilController::class, 'profilUpdate']);

// Blog Routes
$router->name('admin.create')->post('/admin/create', [App\Admin\Controller\BlogController::class, 'create']);
$router->name('admin.updateblog')->post('/admin/updateblog/{id}', [App\Admin\Controller\BlogController::class, 'updateblog']);
$router->name('admin.deleteBlog')->get('/admin/blogs/deleteBlog/{id}', [App\Admin\Controller\BlogController::class, 'deleteBlog']);

// Kategori Routes
$router->name('admin.createKategori')->post('/admin/createKategori', [App\Admin\Controller\KategoriController::class, 'createKategori']);
$router->name('admin.updateKategori')->post('/admin/updateKategori/{id}', [App\Admin\Controller\KategoriController::class, 'updateKategori']);
$router->name('admin.deleteKategori')->get('/admin/kategori/deleteKategori/{id}', [App\Admin\Controller\KategoriController::class, 'deleteKategori']);

// Tags Routes
$router->name('admin.createTags')->post('/admin/createTags', [App\Admin\Controller\TagsController::class, 'createTags']);
$router->name('admin.updateTags')->post('/admin/updateTags/{id}', [App\Admin\Controller\TagsController::class, 'updateTags']);
$router->name('admin.deleteTags')->get('/admin/kategori/deleteTags/{id}', [App\Admin\Controller\TagsController::class, 'deleteTags']);

// Privacy Routes
$router->name('admin.createPrivacy')->post('/admin/createPrivacy', [App\Admin\Controller\PrivacyController::class, 'createPrivacy']);
$router->name('admin.updatePrivacy')->post('/admin/updatePrivacy/{id}', [App\Admin\Controller\PrivacyController::class, 'updatePrivacy']);
$router->name('admin.deletePrivacy')->get('/admin/deletePrivacy/{id}', [App\Admin\Controller\PrivacyController::class, 'deletePrivacy']);

// Settings Routes
$router->name('admin.updateSettings')->post('/admin/updateSettings/{id}', [App\Admin\Controller\SettingsController::class, 'updateSettings']);

$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

