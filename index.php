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
$router->name('catalog.detayBlog')->get('/detay', [App\Catalog\Controller\BlogController::class, 'index']);

// admin anasayfası
$router->name('admin.index')->get('/admin', [App\Admin\Controller\BaseController::class, 'index']);
$router->name('admin.blogs')->get('/admin/blogs', [App\Admin\Controller\BlogController::class, 'index']);
$router->name('admin.login')->get('/admin/login', [App\Admin\Controller\LoginController::class, 'index']);
$router->name('admin.kullanici')->get('/admin/kullanici', [App\Admin\Controller\KullaniciController::class, 'index']);
$router->name('admin.kategori')->get('/admin/kategori', [App\Admin\Controller\KategoriController::class, 'index']);
$router->name('admin.yorumlar')->get('/admin/yorumlar', [App\Admin\Controller\CommentsController::class, 'index']);
$router->name('admin.tags')->get('/admin/tags', [App\Admin\Controller\TagsController::class, 'index']);
$router->name('admin.profil')->get('/admin/profil', [App\Admin\Controller\ProfilController::class, 'index']);
$router->name('admin.logout')->get('/admin/logout', [App\Admin\Controller\LoginController::class, 'logout']);
$router->name('admin.settings')->get('/admin/settings', [App\Admin\Controller\SettingsController::class, 'index']);
// post get ekleme 
// Kullanıcı Sayfası İşlemleri
$router->name('admin.register')->post('/admin/register', [App\Admin\Controller\KullaniciController::class, 'register']);
$router->name('admin.update')->post('/admin/update/{id}', [App\Admin\Controller\KullaniciController::class, 'update']);
$router->name('admin.delete')->get('/admin/kullanici/delete/{id}', [App\Admin\Controller\KullaniciController::class, 'delete']);
$router->name('admin.login')->post('/admin/login', [App\Admin\Controller\LoginController::class, 'login']);
// Profil Sayfası İşlemleri
$router->name('admin.profilUpdate')->post('/admin/profilUpdate/{id}', [App\Admin\Controller\ProfilController::class, 'profilUpdate']);

//Blog Sayfası
$router->name('admin.create')->post('/admin/create', [App\Admin\Controller\BlogController::class, 'create']);
$router->name('admin.updateblog')->post('/admin/updateblog/{id}', [App\Admin\Controller\BlogController::class, 'updateblog']);
$router->name('admin.deleteBlog')->get('/admin/blogs/deleteBlog/{id}', [App\Admin\Controller\BlogController::class, 'deleteBlog']);
//kategori sayfası işlemleri
$router->name(name: 'admin.createKategori')->post('/admin/createKategori', [App\Admin\Controller\KategoriController::class, 'createKategori']);
$router->name('admin.updateKategori')->post('/admin/updateKategori/{id}', [App\Admin\Controller\KategoriController::class, 'updateKategori']);
$router->name('admin.deleteKategori')->get('/admin/kategori/deleteKategori/{id}', [App\Admin\Controller\KategoriController::class, 'deleteKategori']);

// tags 
$router->name(name: 'admin.creatTags')->post('/admin/creatTags', [App\Admin\Controller\TagsController::class, 'creatTags']);
$router->name('admin.updateTags')->post('/admin/updateTags/{id}', [App\Admin\Controller\TagsController::class, 'updateTags']);
$router->name('admin.deleteTags')->get('/admin/kategori/deleteTags/{id}', [App\Admin\Controller\TagsController::class, 'deleteTags']);

//Settings
$router->name('admin.Updatesettings')->post('/admin/Updatesettings/{id}', [App\Admin\Controller\SettingsController::class, 'Updatesettings']);



$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

