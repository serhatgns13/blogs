<?php

namespace App\Admin\Controller;

use App\Admin\Model\kategoriModel;
use System\Engine\Controller;

class KategoriController extends Controller
{

    public function index(): void
    {
        $this->data["title"] = 'Kategori Sayfası...';

        $app = new KategoriModel;
        $this->data["categoryvariable"] = $app->category(); // çoklu veri çekme
        //  $this->data["ByIdCategories"] = $app->ByIdCategories(); // tekli veri çekme 

        $this->view("admin/kategori", $this->data);
    }

    public function createKategori(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $categoryName = $_POST['name'] ?? '';
            $categorySlug = $_POST['slug'] ?? '';
            $categoryStatus = $_POST['category_status'] ?? '';

            if (empty($categoryName) || empty($categorySlug) || empty($categoryStatus)) {
                $_SESSION['warning_message'] = 'Lütfen tüm alanları doldurunuz';
                $this->view('/admin/kategori', $this->data);
                return;
            }

            $kategoriModel = new KategoriModel();

            if ($kategoriModel->creat($categoryName, $categorySlug, $categoryStatus)) {
                // kayıt başarılı ise sayfaya yönlendir
                $_SESSION['success_message'] = 'Kategori Başarılı Bir Şekilde Eklendi';
                $this->view('/admin/kategori', $this->data);
            } else {
                // kayıt başarısız oldugunda burası calışcak
                $_SESSION['error_message'] = 'kayıt Başarısız';
            }
        }

        $this->view('/admin/kategori', $this->data);
    }

    public function updateKategori(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id=$_POST['id'] ?? '';
            $categoryName = $_POST['name'] ?? '';
            $categorySlug = $_POST['slug'] ?? '';
            $categoryStatus = $_POST['categoryStatus'] ?? '';
        }
        $kategoriModel = new KategoriModel();
        if ($kategoriModel->update($id, $categoryName, $categorySlug, $categoryStatus)) {
            header('Location : /admin/kategori');
            exit;
        } else {
            // Güncelleme başarısız oldugunda burası calışcak
            $this->data['error'] = 'kategori Güncelleme Başarısı';
        }
        $this->view('admin/kategori', $this->data);
    }

    // Kategori Silme İşlemleri
    public function deleteKategori($id): void
    {
        $kategoriModel = new  KategoriModel();
        if ($kategoriModel->deleteCategory($id)) {
            // silme İşlemi Başarılı ise sayfaya yönlendir
            $_SESSION['success_message'] = 'Kategori Silme İşlemi Başarılı';
        } else {
            // silme İşlemi Başarısız ise sayfaya yönlendir
            $_SESSION['error_message'] = 'Kategori Silme İşlemi Başarısız';
        }
        header('Location: /admin/kategori');
        exit;
    }
}
